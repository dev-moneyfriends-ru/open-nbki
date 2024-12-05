<?php

namespace mfteam\nbch\components\creditHistory;


use mfteam\nbch\components\NbchClient;
use mfteam\nbch\Env;
use mfteam\nbch\models\Requestor;
use mfteam\nbch\models\RequestorReq;
use yii\base\InvalidConfigException;
use yii\helpers\VarDumper;
use yii\httpclient\Client;
use yii\httpclient\Exception;
use yii\httpclient\Response;

/**
 * Запрос кредитной истории
 */
class NbchRequest extends \yii\httpclient\Request
{
    public const VERSION = '17';
    /**
     * @var Requestor
     */
    private $requestor;
    
    /**
     * @return void
     * @throws InvalidConfigException
     * @throws \yii\di\NotInstantiableException
     */
    public function init()
    {
        parent::init();
        
        $module = Env::ensure()->module;
        
        $client = new NbchClient();
        $client->baseUrl = $module->creditHistory->apiUrl;
        $this->client = $client;
        
        $this->requestor = new RequestorReq([
            'memberCode' => $module->memberCode,
            'userID' => $module->creditHistory->userName,
            'password' => $module->creditHistory->password,
        ]);
        if (!$this->requestor->validate()) {
            \Yii::error($this->requestor->errors);
            throw new InvalidConfigException(VarDumper::dumpAsString($this->requestor->errors));
        }
        
        $this->setFormat(Client::FORMAT_XML);
    }
    
    /**
     * @return array|mixed
     */
    public function getData()
    {
        $data = parent::getData();
        if(empty($data['RequestorReq'])){
            $data['RequestorReq'] = $this->requestor->attributes;
        }
        return [
            'prequest' => ['req' => $data],
        ];
    }
    
    /**
     * @return Response
     * @throws Exception
     */
    public function send()
    {
        $this->prepare();
        
        $response = new Response();
        $response->setFormat(NbchClient::FORMAT_XML);
        $response->client = $this->client;
        $env = Env::ensure();
        
        if ($env->module->creditHistory->test) {
            $response->setContent(file_get_contents('testData.xml'));
        }
        $content = str_replace('<version>', '<version mappedFormat="6">', $this->getContent());
        $esignClient = $env->module->esignClient;
        $esignClient->setSrcContent($content);
        
        if ($esignClient->nbchUnzip()) {
            $xmlResult = base64_decode($esignClient->getResponseResult());
            $response->setContent($xmlResult);
            return $response;
        }
        
        throw new \yii\base\Exception('Send request error');
    }
 
}

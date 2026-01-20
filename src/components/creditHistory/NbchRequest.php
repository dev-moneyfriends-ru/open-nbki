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
            $response->setContent('<?xml version="1.0" encoding="windows-1251"?>
<product>
   <prequest>
      <req>
         <InquiryReq>
            <ConsentReq>
               <consentDate>2016-01-01</consentDate>
               <consentPurpose>10</consentPurpose>
               <reportUser>Публичное акционерное общество Банк «Надежный»</reportUser>
               <liability>1</liability>
               <consentPeriod>1</consentPeriod>
               <reportUserRegNum>1234567890123</reportUserRegNum>
               <reportUserTaxID>1234567890</reportUserTaxID>
               <consentHash>hash</consentHash>
               <RegnumReq>
                  <taxpayerCode>1</taxpayerCode>
                  <taxpayerNum>1234567890</taxpayerNum>
                  <regNumCode>1</regNumCode>
                  <regNum>1234567890123</regNum>
               </RegnumReq>
               <BusinessReq>
                  <businessName>Акционерное общество «Ромашка»</businessName>
                  <OKSM>643</OKSM>
               </BusinessReq>
               <AddressReq>
                  <houseNumber>12</houseNumber>
                  <street>Ленина</street>
                  <FIAS>c05db455-8e4b-4ece-a9e8-186f48eedf7d</FIAS>
                  <OKATO>01000000000</OKATO>
                  <OKSM>643</OKSM>
               </AddressReq>
            </ConsentReq>
            <inqPurpose>10</inqPurpose>
            <inqAmount>10000,00</inqAmount>
            <currencyCode>RUB</currencyCode>
         </InquiryReq>
         <BusinessReq>
            <businessName>Акционерное общество «Ромашка»</businessName>
            <OKSM>643</OKSM>
         </BusinessReq>
         <RequestorReq>
            <MemberCode>TEST_MEMBER_CODE</MemberCode>
            <UserID>TEST_USER_ID</UserID>
            <Password>TEST_PASSWORD</Password>
         </RequestorReq>
         <RefReq>
            <product>BHIP</product>
         </RefReq>
         <RegnumReq>
            <taxpayerCode>1</taxpayerCode>
            <taxpayerNum>1234567890</taxpayerNum>
            <regNumCode>1</regNumCode>
            <regNum>1234567890123</regNum>
         </RegnumReq>
         <IOType>B2B</IOType>
         <OutputFormat>XML</OutputFormat>
         <lang>ru</lang>
         <version>20</version>
         <allAddressBlocks>3</allAddressBlocks>
      </req>
   </prequest>
</product>
');
        }
        $content = str_replace('<version>', '<version mappedFormat="6">', $this->getContent());
        $esignClient = $env->module->esignClient;
        $esignClient->setSrcContent($content);
        if ($env->module->creditHistory->test) {
            $response->setContent(file_get_contents(__DIR__ . '/test2.xml'));
            return $response;
        }
        if ($esignClient->nbchUnzip()) {
            $xmlResult = base64_decode($esignClient->getResponseResult());
            $response->setContent($xmlResult);
            return $response;
        }
        
        throw new \yii\base\Exception('Send request error');
    }
 
}

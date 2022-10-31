<?php

namespace mfteam\nbch\components\tutdf\template;

use Exception;
use mfteam\nbch\components\tutdf\template\segments\ADSegment;
use mfteam\nbch\components\tutdf\template\segments\BGSegment;
use mfteam\nbch\components\tutdf\template\segments\BUSegment;
use mfteam\nbch\components\tutdf\template\segments\CLSegment;
use mfteam\nbch\components\tutdf\template\segments\GRSegment;
use mfteam\nbch\components\tutdf\template\segments\INNSegment;
use mfteam\nbch\components\tutdf\template\segments\NASegment;
use mfteam\nbch\components\tutdf\template\segments\OGRNSegment;
use mfteam\nbch\components\tutdf\template\segments\PASegment;
use mfteam\nbch\components\tutdf\template\segments\PassportIDSegment;
use mfteam\nbch\components\tutdf\template\segments\PNSegment;
use mfteam\nbch\components\tutdf\template\segments\SNILSSegment;
use mfteam\nbch\components\tutdf\template\segments\TRLRSegment;
use mfteam\nbch\components\tutdf\template\segments\TRSegment;
use mfteam\nbch\components\tutdf\template\segments\TUTDFSegment;
use mfteam\nbch\Env;
use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\models\NbchOfferInterface;
use mfteam\nbch\models\NbchSubjectInterface;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use Yii;
use yii\base\InvalidConfigException;
use yii\web\NotFoundHttpException;

/**
 * Шаблон файла отчета
 *
 * @property-read \mfteam\nbch\models\tutdf\NbchTutdfRequest $request
 * @property-read array $bGSegments
 * @property-read array $legalTokens
 * @property-read mixed $aDSegments
 * @property-read array $cLSegments
 * @property-read array $gRSegments
 * @property-read \mfteam\nbch\components\tutdf\template\segments\TRSegment $tRSegment
 * @property-write string $version
 * @property-read array $iDSegments
 * @property-read string $templatePath
 * @property-read array $iPTokens
 * @property-read array $personTokens
 * @property-read array $pNSegments
 * @property-read array $tokenList
 * @property-read string $baseName
 * @property-read string $fileContent
 * @deprecated
 */
class TutdfTemplate extends BaseRequestTemplate
{
    /**
     * Версия формата файла
     */
    public const TUTDF_FORMAT_VERSION = '8.0r';
    
    /**
     * Дата опубликования версии
     */
    public const TUTDF_FORMAT_DATE = '20210419';
    
    /**
     * Версия файла шаблона
     * @var string
     */
    protected $_version = '800';
    
    /**
     * @var NbchTutdfRequest
     */
    protected $_request;

    
    /**
     * @param NbchTutdfRequest $request
     * @param $config
     */
    public function __construct(NbchTutdfRequest $request, NbchSubjectInterface $subject, NbchOfferInterface $offer, $config = [])
    {
        $this->_request = $request;
        parent::__construct($subject, $offer, $config);
    }
    
    /**
     * @return string
     */
    public function getTemplatePath(): string
    {
        $template = $this->subject->getSubjectType() . '_v' . $this->_version;
        return '@vendor/mf-team/yii2-mf-nbch/src/components/tutdf/template/views/' . $template;
    }
    
    /**
     * @return array
     * @throws InvalidConfigException
     * @throws NotFoundHttpException
     */
    public function getTokenList(): array
    {
        return [
            'tutdfSegment' => new TUTDFSegment($this),
            'idSegments' => $this->getIDSegments(),
            'naSegment' => new NASegment($this),
            'buSegment' => new BUSegment($this),
            'trSegment' => $this->getTRSegment(),
            'adSegments' => $this->getADSegments(),
            'pnSegments' => $this->getPNSegments(),
            'paSegments' => $this->getPASegments(),
            'clSegments' => $this->getCLSegments(),
            'bgSegments' => $this->getBGSegments(),
            'grSegments' => $this->getGRSegments(),
            'trlrSegment' => new TRLRSegment($this),
        ];
    }
    
    /**
     * Сегменты ИП
     * @return array
     * @throws InvalidConfigException
     * @throws NotFoundHttpException
     */
    public function getIPTokens()
    {
        return $this->getPersonTokens();
    }
    
    /**
     * Сегменты ФЛ
     * @return array
     * @throws InvalidConfigException
     * @throws NotFoundHttpException
     */
    public function getPersonTokens()
    {
        return [
            'tutdfSegment' => new TUTDFSegment($this),
            'idSegments' => $this->getIDSegments(),
            'naSegment' => new NASegment($this),
            'adSegments' => $this->getADSegments(),
            'pnSegments' => $this->getPNSegments(),
            'clSegments' => $this->getCLSegments(),
            'bgSegments' => $this->getBGSegments(),
            'grSegments' => $this->getGRSegments(),
            'paSegments' => $this->getPASegments(),
            'trSegment' => $this->getTRSegment(),
            'trlrSegment' => new TRLRSegment($this),
        ];
    }
    
    /**
     * Сегменты ЮР лица
     * @return array
     * @throws InvalidConfigException
     * @throws NotFoundHttpException
     */
    public function getLegalTokens()
    {
        return [
            'tutdfSegment' => new TUTDFSegment($this),
            'idSegments' => $this->getIDSegments(),
            'buSegment' => new BUSegment($this),
            'adSegments' => $this->getADSegments(),
            'pnSegments' => $this->getPNSegments(),
            'clSegments' => $this->getCLSegments(),
            'bgSegments' => $this->getBGSegments(),
            'grSegments' => $this->getGRSegments(),
            'paSegments' => $this->getPASegments(),
            'trSegment' => $this->getTRSegment(),
            'trlrSegment' => new TRLRSegment($this),
        ];
    }
    
    /**
     * @return string
     * @throws InvalidConfigException
     */
    public function getBaseName()
    {
        $module = Env::ensure()->module;
        $name = $module->tutdf->userName;
        $suffix = Yii::$app->formatter->asDatetime(time(), '_yyyyMMdd_HHmmss');
        while ($module->file->fileExist($name.$suffix, NbchTutdfRequest::FILE_TUTDF_TYPE, 'TutdfTemplate', $module->tutdf->userName)){
            sleep(1);
            $suffix = Yii::$app->formatter->asDatetime(time(), '_yyyyMMdd_HHmmss');
        }
        return $name . $suffix;
    }
    
    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->_version = $version;
    }
    
    /**
     * @return NbchTutdfRequest
     */
    public function getRequest(): NbchTutdfRequest
    {
        return $this->_request;
    }
    
    public function getIDSegments(): array
    {
        $method = $this->subject->getSubjectType() . 'IDSegments';
        return $this->$method();
    }
    
    /**
     * ID сегменты ИП
     * @return array
     */
    public function ipIDSegments(): array
    {
        $segments = $this->personIDSegments();
        $segments[] = new OGRNSegment($this, $this->nextSegmentNum($segments));
        return $segments;
    }
    
    /**
     * ID сегменты ФЛ
     * @return array
     */
    public function personIDSegments(): array
    {
        $segments = [
            new PassportIDSegment($this, '01'),
        ];
        if($this->subject->getInn() !== null){
            $segments[] = new INNSegment($this, $this->nextSegmentNum($segments));
        }
        if($this->subject->getSnils() !== null){
            $segments[] = new SNILSSegment($this, $this->nextSegmentNum($segments));
        }
        return $segments;
    }
    
    /**
     * ID сегменты ЮЛ
     * @return array
     */
    public function legalIDSegments(): array
    {
        return [
            new INNSegment($this, '01'),
            new OGRNSegment($this, '02'),
        ];
    }
    
    /**
     * @return mixed
     */
    public function getADSegments()
    {
        return [
            new ADSegment($this, '01', $this->subject->getLegalAddress()),
            new ADSegment($this, '02', $this->subject->getActualAddress()),
        ];
    }
    
    /**
     * @return array
     */
    public function getPNSegments(): array
    {
        $segments = [];
        if ($this->subject->isLegal()) {
            $segments[] = new PNSegment($this, $this->nextSegmentNum($segments), $this->subject->getWorkPhone());
        }
        if (!$this->subject->isLegal() && $this->subject->getWorkPhone() !== null) {
            $segments[] = new PNSegment($this, $this->nextSegmentNum($segments), $this->subject->getWorkPhone());
        }
        $cnt = count($segments);
        foreach ($this->subject->getPhones() as $phone){
            if($cnt > 5){
                break;
            }
            $segments[] = new PNSegment($this, $this->nextSegmentNum($segments), $phone);
            $cnt++;
        }
        return $segments;
    }
    
    /**
     * Содержимое файла отчета
     * @return string
     * @throws Exception
     */
    public function getFileContent(): string
    {
        if($this->_fileContent === null){
            $this->loadFileContent();
        }
        return $this->_fileContent;
    }
    
    /**
     * Загружает содержимое файла отчета
     * @throws \yii\base\Exception
     */
    private function loadFileContent(): void
    {
        if($this->getRequest()->tutdfFile === null){
            $this->_fileContent = '';
            return;
        }
        
        $content = $this->getRequest()->tutdfFile->getContent();
        if($content === false){
            throw new \yii\base\Exception('Невозможно получить содержимое файла');
        }
        $this->_fileContent = mb_convert_encoding($content, 'UTF-8', 'WINDOWS-1251');
    }
    
    /**
     * @return TRSegment
     * @throws InvalidConfigException
     * @throws NotFoundHttpException
     */
    public function getTRSegment(): TRSegment
    {
        return new TRSegment($this);
    }
    
    /**
     * Дополнительные залоги
     * @return array
     */
    public function getCLSegments()
    {
        $models = $this->offer->getCollateralArray();
        if(count($models) < 2){
            return [];
        }
        $segments = [];
        unset($models[0]);
        foreach ($models as $model){
            $segments[] = new CLSegment($this, $this->nextSegmentNum($segments), $model);
        }
        return $segments;
    }
    
    /**
     * Дополнительные банковские гарантии
     * @return array
     */
    public function getBGSegments()
    {
        $models = $this->offer->getBankGuaranteeArray();
        if(count($models) < 2){
            return [];
        }
        $segments = [];
        unset($models[0]);
        foreach ($models as $model){
            $segments[] = new BGSegment($this, $this->nextSegmentNum($segments), $model);
        }
        return $segments;
    }
    
    /**
     * Дополнительные поручительства
     * @return array
     */
    public function getGRSegments()
    {
        $models = $this->offer->getGuarantorArray();
        if(count($models) < 2){
            return [];
        }
        $segments = [];
        unset($models[0]);
        foreach ($models as $model){
            $segments[] = new GRSegment($this, $this->nextSegmentNum($segments), $model);
        }
        return $segments;
    }
    
    /**
     * @param array $segments
     * @return string
     */
    protected function nextSegmentNum(array $segments):string
    {
        $cnt = (count($segments) + 1);
        if($cnt < 10){
            return '0' . (count($segments) + 1);
        }
        return (string) $cnt;
    }
    
    /**
     * @return array
     */
    public function getPASegments()
    {
        $segments = [];
        foreach ($this->offer->getPaymentArray() as $payment){
            $segments[] = new PASegment($this, $this->nextSegmentNum($segments), $payment);
        }
        return $segments;
    }
}
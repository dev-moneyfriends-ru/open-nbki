<?php

namespace mfteam\nbch\models;

use mfteam\nbch\Env;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;

/**
 * Данные для запроса кредитной истории.
 * В каждом объекте заполняются атрибуты указанные в fields().
 * Атрибуты имеющие тип null заполняются в зависимости от типа субъекта кредитной истории (ЮЛ, ФЛ, ИП) или не обязательные.
 */
class PrequestReq extends BaseItem
{
    /**
     * Версия формата ответа
     */
    public const VERSION = 17;
    
    /**
     * @param array $config
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function __construct($config = [])
    {
        $module = Env::ensure()->module;
        $this->requestorReq = new RequestorReq([
            'memberCode' => $module->memberCode,
            'userID' => $module->creditHistory->userName,
            'password' => $module->creditHistory->password,
        ]);
        parent::__construct($config);
    }
    
    /**
     * Данные документа удостоверяющего личность запрашиваемого субъекта.
     * Обязателен для ФЛ,ИП.
     * @var IdReq|null
     */
    public $idReq = null;
    
    /**
     * Данные запроса КИ.
     * Обязателен.
     * @var InquiryReq
     */
    public $inquiryReq;
    
    /**
     * Авторизационные данные пользователя.
     * Заполняется автоматически из настроек.
     * @var RequestorReq
     */
    private $requestorReq;
    
    /**
     * Данные о запрашиваемом субъекте.
     * Обязателен для ФЛ,ИП.
     * @var PersonReq|null
     */
    public $personReq = null;
    
    /**
     * Запрашиваемый тип кредитного отчета
     * Обязателен.
     * @var RefReq
     */
    public $refReq;
    
    /**
     * Регистрационный номер запрашиваемого субъекта.
     * Обязателен.
     * @var RegnumReq
     */
    public $regnumReq;
    
    /**
     * СНИЛС запрашиваемого субъекта.
     * Заполняется при наличии.
     * @var SNILSReq|null
     */
    public $snilsReq = null;
    
    /**
     * Данные о субъекте ЮЛ, предоставившем согласие.
     * Обязателен для ЮЛ.
     * @var BusinessReq|null
     */
    public $businessReq = null;
    
    /**
     * Тип запроса.
     * Всегда = B2B
     * @var string
     */
    private $ioType = 'B2B';
    /**
     * Формат отчета
     * Всегда = XML
     * @var string
     */
    private $outputFormat = 'XML';
    
    /**
     * Язык отчета.
     * ru – русский (по умолчанию)
     * en - английский
     * @var string
     */
    public $lang = 'ru';
    
    /**
     * Максимальное количество записей каждого типа из блока адресов.
     * Целое число. По умолчанию=3, может быть изменено без предупреждения
     * @var int
     */
    public $addrLimit = 3;
    
    /**
     * @return IdReq|null
     */
    public function getIdReq(): ?IdReq
    {
        return $this->idReq;
    }
    
    /**
     * @param IdReq|null $idReq
     */
    public function setIdReq(?IdReq $idReq): void
    {
        $this->idReq = $idReq;
    }
    
    /**
     * @return InquiryReq
     */
    public function getInquiryReq(): InquiryReq
    {
        return $this->inquiryReq;
    }
    
    /**
     * @param InquiryReq $inquiryReq
     */
    public function setInquiryReq(InquiryReq $inquiryReq): void
    {
        $this->inquiryReq = $inquiryReq;
    }
    
    /**
     * @return RequestorReq
     */
    public function getRequestorReq(): RequestorReq
    {
        return $this->requestorReq;
    }
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'IdReq',
            'InquiryReq',
            'PersonReq',
            'RequestorReq',
            'RefReq',
            'RegnumReq',
            'SNILSReq',
            'BusinessReq',
            'IOType',
            'OutputFormat',
            'lang',
            'addrLimit',
            'version',
        ];
    }
    
    /**
     * @return PersonReq|null
     */
    public function getPersonReq(): ?PersonReq
    {
        return $this->personReq??null;
    }
    
    /**
     * @param PersonReq|null $personReq
     */
    public function setPersonReq(?PersonReq $personReq): void
    {
        $this->personReq = $personReq;
    }
    
    /**
     * @return RefReq
     */
    public function getRefReq(): RefReq
    {
        return $this->refReq;
    }
    
    /**
     * @param RefReq $refReq
     */
    public function setRefReq(RefReq $refReq): void
    {
        $this->refReq = $refReq;
    }
    
    /**
     * @return RegnumReq
     */
    public function getRegnumReq(): RegnumReq
    {
        return $this->regnumReq;
    }
    
    /**
     * @param RegnumReq $regnumReq
     */
    public function setRegnumReq(RegnumReq $regnumReq): void
    {
        $this->regnumReq = $regnumReq;
    }
    
    /**
     * @return SNILSReq|null
     */
    public function getSnilsReq(): ?SNILSReq
    {
        return $this->snilsReq??null;
    }
    
    /**
     * @param SNILSReq|null $snilsReq
     */
    public function setSnilsReq(?SNILSReq $snilsReq): void
    {
        $this->snilsReq = $snilsReq;
    }
    
    /**
     * @return string
     */
    public function getIoType(): string
    {
        return $this->ioType;
    }
    
    /**
     * @return string
     */
    public function getVersion(): string
    {
        return self::VERSION;
    }
    
    /**
     * @return string
     */
    public function getOutputFormat(): string
    {
        return $this->outputFormat;
    }
    
    /**
     * @return BusinessReq|null
     */
    public function getBusinessReq(): ?BusinessReq
    {
        return $this->businessReq??null;
    }
    
    /**
     * @param BusinessReq|null $businessReq
     */
    public function setBusinessReq(?BusinessReq $businessReq): void
    {
        $this->businessReq = $businessReq;
    }
}
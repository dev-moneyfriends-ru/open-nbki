<?php

namespace mfteam\nbch\models;

/**
 * Данные о согласии субъекта
 */
class ConsentReq extends Consent
{
    /**
     * Дата выдачи согласия
     * Обязательный, не позднее текущей даты, формат – ГГГГ-ММ-ДД
     * @var string
     */
    public $consentDate = '';
    
    /**
     * Цель выдачи согласия.
     * Заполняется по справочнику 5.3.
     * При наличии нескольких целей перечислите их через запятую.
     * Хотя бы одно из значений должно соответствовать значениям inqPurpose.
     * @var string
     */
    public $consentPurpose = '';
    
    /**
     * Иная цель запроса
     * Обязательно если по показателю «Код цели запроса» в блоке показателей, содержащем настоящий показатель, указано «99»
     * Длина: до 2000 символов.
     * Формат: произвольный текст.
     * Допустимые символы: не ограничиваются.
     * Допустимые значения: не ограничиваются.
     * Правила преобразования: двойные пробелы, знаки препинания, разделители, кавычки заменяются на одинарные символы, начальный и конечный пробелы удаляются
     * @var string|null
     */
    public $otherConsentPurpose = null;
    
    /**
     * Пользователь КИ получивший согласие: полное наименование юридического лица, фамилия, имя, отчество (последнее – при  наличии) индивидуального предпринимателя.
     * Обязательный.
     * @var string
     */
    public $reportUser = '';
    
    /**
     * Ознакомление с ответственностью за совершение административных правонарушений, установленной статьями 5.53 и 14.29 КоАП РФ.
     * 1 – подтверждение ознакомления пользователя КИ с указанной ответственностью.
     * @var int
     */
    public $liability = 1;
    
    /**
     * Дата заключения договора.
     * Дата заключения договора в случае, предусмотренном частью 12 ст.6 218-ФЗ.
     * Обязательный, если consentPeriod=3, формат – ГГГГ-ММ-ДД
     * @var string|null
     */
    public $agreementDate = null;
    
    /**
     * Основание передачи согласия.
     * В случаях, предусмотренных частью 11 ст.6 218-ФЗ:
     * 1 – согласие субъекта КИ передано правопреемнику по заключенному  договору займа (кредита) или иному договору, информация об обязательствах по которым передается в БКИ;
     * 2 – согласие субъекта КИ передано кредитной организации, осуществляющей обслуживание денежных требований по договору займа (кредита), уступленных специализированному
     * финансовому обществу или ипотечному агенту.
     * @var int|null
     */
    public $transferReason = null;
    
    /**
     * Срок действия согласия.
     * 1 – в течение 6 месяцев со дня оформления;
     * 2 – в течение 1 года со дня оформления;
     * 3 – в течение срока действия согласия с субъектом КИ были заключены договор займа (кредита), договор лизинга, договор залога, договор поручительства, выдана независимая гарантия.
     * Обязательный. Запрос будет обработан только в период действия согласия.
     * Если consentPeriod=3, проверка истечения согласия не производится.
     * В соответствии с письмом Банка России № 46-7-1/2644 от 15.12.2022 исчисление периода действия согласия осуществляется следующим образом:
     * - согласие действительно с момента его оформления (т.е. начинает действовать в дату оформления),
     * - последним днем действия согласия является соответствующее число последнего месяца срока (т.е. действует до такого же числа последнего месяца включительно),
     * - если в последнем месяце срока отсутствует соответствующее число, срок признается истекшим в последний день этого месяца.
     * Примеры:
     * 1. Согласие, оформленное 20 января на 6 месяцев, действительно с 20 января по 20 июля включительно.
     * 2. Согласие, оформленное 31 марта на 6 месяцев, действительно до 30 сентября.
     * 3. Согласия, оформленные 28, 29, 30 и 31 августа на 6 месяцев, действительны до 28 февраля не високосного года.
     * @var int
     */
    public $consentPeriod = null;
    
    /**
     * ОГРН (ОГРНИП) пользователя КИ
     * Обязательный
     * @var string
     */
    public $reportUserRegNum = '';
    
    /**
     * ИНН пользователя КИ
     * Обязательный
     * @var string
     */
    public $reportUserTaxID = '';
    
    /**
     * Хэш-код для согласия субъекта КИ в форме электронного документа, полученный пользователем КИ в результате вычисления хэш-функции,
     * реализованной в соответствии с национальным стандартом РФ ГОСТ Р 34.11-2012 (используется хэш-код длиной 256 бит, который преобразуется в шестнадцатеричную систему счисления).
     * Обязательный, если согласие получено в электронном виде
     * @var string|null
     */
    public $consentHash = null;
    
    /**
     * Данные о субъекте ФЛ|ИП, предоставившем согласие
     * @var PersonReq|null
     */
    public $personReq = null;
    
    /**
     * Данные ДУЛ субъекта ФЛ|ИП, предоставившего согласие
     * @var IdReq|null
     */
    public $idReq = null;
    
    /**
     * ИНН субъекта, предоставившем согласие
     * @var RegnumReq
     */
    public $regnumReq;
    
    /**
     * СНИЛС субъекта ФЛ|ИП, предоставившем согласие
     * @var SNILSReq|null
     */
    public $snilsReq = null;
    
    /**
     * Данные о субъекте ЮЛ, предоставившем согласие
     * @var BusinessReq|null
     */
    public $businessReq = null;
    
    /**
     * Адрес в пределах местонахождения и прочие данные субъекта ЮЛ, предоставившего согласие.
     * @var AddressReq|null
     */
    public $addressReq = null;
    
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
     * @return PersonReq|null
     */
    public function getPersonReq(): ?PersonReq
    {
        return $this->personReq;
    }
    
    /**
     * @param PersonReq|null $personReq
     */
    public function setPersonReq(?PersonReq $personReq): void
    {
        $this->personReq = $personReq;
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
        return $this->snilsReq;
    }
    
    /**
     * @param SNILSReq|null $snilsReq
     */
    public function setSnilsReq(?SNILSReq $snilsReq): void
    {
        $this->snilsReq = $snilsReq;
    }
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'consentDate',
            'consentPurpose',
            'otherConsentPurpose',
            'reportUser',
            'liability',
            'agreementDate',
            'transferReason',
            'consentPeriod',
            'reportUserRegNum',
            'reportUserTaxID',
            'consentHash',
            'PersonReq',
            'IdReq',
            'RegnumReq',
            'SNILSReq',
            'BusinessReq',
            'AddressReq',
        ];
    }
    
    /**
     * @return BusinessReq|null
     */
    public function getBusinessReq(): ?BusinessReq
    {
        return $this->businessReq;
    }
    
    /**
     * @param BusinessReq|null $businessReq
     */
    public function setBusinessReq(?BusinessReq $businessReq): void
    {
        $this->businessReq = $businessReq;
    }
    
    /**
     * @return AddressReq|null
     */
    public function getAddressReq(): ?AddressReq
    {
        return $this->addressReq;
    }
    
    /**
     * @param AddressReq|null $addressReq
     */
    public function setAddressReq(?AddressReq $addressReq): void
    {
        $this->addressReq = $addressReq;
    }
}
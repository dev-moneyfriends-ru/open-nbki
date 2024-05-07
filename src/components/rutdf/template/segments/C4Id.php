<?php

namespace mfteam\nbch\components\rutdf\template\segments;



use mfteam\nbch\models\IdReply;

/**
 * Блок 4. Документ, удостоверяющий личность - C4_ID
 */
class C4Id extends BaseSegment
{
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        $idReply = $this->template->sendData->getIdReply();
        if($idReply === null){
            $this->errors[] = "Отсутствует документ удостоверяющий личность";
        }else{
            if (empty($idReply->oksm)) {
                $this->errors[] = "Отсутствуют Код страны гражданства по ОКСМ";
            }
            if (empty($idReply->seriesNumber)) {
                $this->errors[] = "Отсутствуют Серия документа";
            }
            if (empty($idReply->idNum)) {
                $this->errors[] = "Отсутствуют Номер документа";
            }
            if (empty($idReply->issueDate)) {
                $this->errors[] = "Отсутствуют Дата выдачи документа";
            }
            if (empty($idReply->idType)) {
                $this->errors[] = "Отсутствует Код документа";
            }
            if($idReply->idType === IdReply::PASSPORT_RU_TYPE){
                if (empty($idReply->divCode)) {
                    $this->errors[] = "Отсутствуют Код подразделения";
                }
                if (empty($idReply->issueAuthority) && empty($idReply->divCode)) {
                    $this->errors[] = "Отсутствуют Кем выдан документ";
                }
            }
           
        }
        
        return $this->getIsEmptyErrors();
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C4_ID";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $idReply = $this->template->sendData->getIdReply();
        if($idReply === null){
            throw new \LogicException();
        }
        return [
            $this->getSegmentName(),
            $idReply->oksm,
            $idReply->otherCountry??self::EMPTY_VALUE,
            $idReply->idType,
            $idReply->otherId??self::EMPTY_VALUE,
            $idReply->seriesNumber,
            $idReply->idNum,
            $this->formatDate($idReply->issueDate),
            $idReply->issueAuthority?$this->formatString($idReply->issueAuthority):self::EMPTY_VALUE,
            $idReply->divCode??self::EMPTY_VALUE,
            $this->formatDate($idReply->validTo),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            "Код страны гражданства по ОКСМ" => 'Цифровой код страны согласно Общероссийскому классификатору стран мира (далее – ОКСМ, см. справочник A1). При отсутствии страны в ОКСМ указывается «999». При отсутствии у субъекта гражданства указывается «999».',
            "Наименование иной страны" => 'Заполняется, если по показателю «Код страны по ОКСМ» указано «999». При отсутствии у субъекта гражданства указывается «гражданство отсутствует».',
            "Код документа" => 'Заполняется по справочнику 1.1',
            "Наименование иного документа" => 'Заполняется, если по показателю «Код документа» указано «999».',
            "Серия документа" => '',
            "Номер документа" => '',
            "Дата выдачи документа" => '',
            "Кем выдан документ" => 'Наименование органа, который выдал документ, удостоверяющий личность. Может не заполняться, если заполнен показатель «Код подразделения» в блоке показателей, содержащем этот показатель.',
            "Код подразделения" => 'Заполняется только для паспорта гражданина Российской Федерации.',
            "Дата окончания срока действия документа" => 'Заполняется при наличии такого срока в документе.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 4. Документ, удостоверяющий личность - C4_ID";
    }
}
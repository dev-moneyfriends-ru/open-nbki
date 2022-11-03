<?php

namespace mfteam\nbch\models;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\components\file\NbchFileInterface;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;

interface BaseSendNbchRequestInterface
{
    /**
     * Путь к временной директории
     * @return string
     */
    public function getTmpPath():string;
    
    /**
     * Запакованный файл квитанции
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getNbchConfirmZipP7mFile(): ?NbchFileInterface;
    
    /**
     * Файл с данными
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getFile(): ?NbchFileInterface;
    
    /**
     * Файл с данными подписи
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getSigFile(): ?NbchFileInterface;
    
    /**
     * Архив для отправки
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getZipFile(): ?NbchFileInterface;
    
    /**
     * Файл отказа принятия данных
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getRejectFile(): ?NbchFileInterface;
    
    /**
     * Файл квитанции
     * @return NbchFile|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getTicketFile(): ?NbchFileInterface;
    
    /**
     * @return string
     */
    public function getFileDownloadUrl(): string;
    
    /**
     * @return string
     */
    public function getConfirmZipP7mDownloadUrl(): string;
    
    /**
     * Можно удалить
     * @return bool
     */
    public function canDelete(): bool;
    
    /**
     * Можно отправить в НБКИ
     * @return bool
     */
    public function canSend(): bool;
    
    /**
     * Можно сгенерировать файл
     * @return bool
     */
    public function canCreateFile(): bool;
    
    /**
     * @return string
     */
    public function getEntity():string;
    
    /**
     * @return string
     */
    public function getSigFileType():string;
    
    /**
     * @return string
     */
    public function getFileZipType():string;
    
    /**
     * @return string
     */
    public function getFileRejectType():string;
    
    /**
     * @return string
     */
    public function getFileTicketType():string;
    
    /**
     * @return string
     */
    public function getFileTicketSigType():string;
    
    /**
     * @return void
     */
    public function setStateSigned():void;
    
    /**
     * @return void
     */
    public function setStateExecuteCreateZip():void;
    
    /**
     * @return void
     */
    public function setStateCreatedZip():void;
    
    /**
     * @return void
     */
    public function setStateExecuteSignZip():void;
    
    /**
     * @return void
     */
    public function setStateSignedZip():void;
    
    /**
     * @return void
     */
    public function setStateSending():void;
    
    /**
     * @return void
     */
    public function setStateSent():void;
    
    /**
     * @return void
     */
    public function setStateComplete():void;
    
    /**
     * @return void
     */
    public function setStateNbchError():void;
}
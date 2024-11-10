<?php

namespace mfteam\nbch\components\rutdf;

use mfteam\nbch\components\file\NbchFile;
use mfteam\nbch\components\file\NbchFileInterface;

/**
 * Запрос на передачу данных
 */
interface NbchRutdfRequestInterface
{
    /**
     * Файл отчета RUTDF с данными
     * @return NbchFileInterface|null
     */
    public function getFile(): ?NbchFileInterface;
    
    /**
     * Файл сигнатуры с данными подписи
     * @return NbchFileInterface|null
     */
    public function getSigFile(): ?NbchFileInterface;
    
    /**
     * Архив для отправки
     * @return NbchFileInterface|null
     */
    public function getZipFile(): ?NbchFileInterface;
    
    /**
     * Запакованный файл квитанции
     * @return NbchFileInterface|null
     */
    public function getNbchConfirmZipP7mFile(): ?NbchFileInterface;
    
    /**
     * Файл отказа принятия данных
     * @return NbchFileInterface|null
     */
    public function getRejectFile(): ?NbchFileInterface;
    
    /**
     * Файл квитанции
     * @return NbchFileInterface|null
     */
    public function getTicketFile(): ?NbchFileInterface;
    
    /**
     * Сохраняет RUTDF файл с данными
     * @param NbchFileInterface $file
     * @return bool
     */
    public function saveFile(NbchFileInterface $file): bool;
    
    /**
     * Сохраняет файл содержащий сигнатуру подписи
     * @param NbchFile $file
     * @return bool
     */
    public function saveSigFile(NbchFile $file): bool;
    
    /**
     * Сохраняет шифрованный архив для отправки
     * @param NbchFile $file
     * @return bool
     */
    public function saveZipFile(NbchFile $file): bool;
    
    /**
     * Сохраняет запакованный файл квитанции
     * @param NbchFile $file
     * @return bool
     */
    public function saveConfirmZipP7mFile(NbchFile $file): bool;
    
    /**
     * Сохраняет файл отказа принятия данных
     * @param NbchFile $file
     * @return bool
     */
    public function saveRejectFile(NbchFile $file): bool;
    
    /**
     * Сохраняет файл квитанции
     * @param NbchFile $file
     * @return bool
     */
    public function saveTicketFile(NbchFile $file): bool;
    
    /**
     * Сохранить сообщение об ошибке
     * @param \Throwable $error
     * @return void
     */
    public function setAsError(\Throwable $error): void;
    
    /**
     * Находит и возвращает экземпляр отчета по уникальному исходящему регистрационному номеру документа. Совпадает с именем файла отчета
     * @param $regNum
     * @return NbchRutdfRequestInterface|null
     */
    public static function findByRegNum($regNum): ?NbchRutdfRequestInterface;
    
}

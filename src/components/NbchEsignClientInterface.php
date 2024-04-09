<?php

namespace mfteam\nbch\components;

use yii\base\Exception;

/**
 * Клиент для работы с СЗИ.
 * @property string $srcFile;
 */
interface NbchEsignClientInterface
{
    /**
     * Устанавливаем содержимое файла с которым будет работать СЗИ
     * @param string $content
     * @return $this
     */
    public function setSrcContent(string $content);
    
    /**
     * Отправляет содержимое файла на сервер НБКИ с помощью POST запроса через B2B-интерфейс (API) с использованием 2-сторонней аутентификации.
     * Ответ полученный от сервера НБКИ необходимо проверить путем открепления подписи и содержимое полученного xml файла сохранить в responseResult.
     * @return bool
     * @throws Exception
     */
    public function nbchUnzip();
    
    /**
     * Метод подписывает сертификатом организации содержимое файла
     * и сохраняет содержимое файла sig в responseResult
     * @return bool
     * @throws Exception
     */
    public function signNbchFile(): bool;
    
    /**
     * Метод шифрует содержимое файла сертификатом Оператор НБКИ
     * и сохраняет содержимое файла .enc в responseResult
     * @return bool
     * @throws Exception
     */
    public function signNbchZip(): bool;
    
    /**
     * Возвращает результат работы СЗИ в формате base64
     * @return array|string
     */
    public function getResponseResult();
    
    /**
     * Метод расшифровывает содержимое файла сертификатом Оператор НБКИ
     * и сохраняет содержимое файла в responseResult
     * @return bool
     * @throws Exception
     */
    public function nbchDecryptArchive(): bool;
    
    /**
     * Устанавливаем содержимое файла с которым будет работать СЗИ из пути
     * @param string $filePath
     * @return $this
     */
    public function setSrcContentByPath(string $filePath);
}
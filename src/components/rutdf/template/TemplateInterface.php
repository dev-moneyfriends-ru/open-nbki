<?php

namespace mfteam\nbch\components\rutdf\template;


use mfteam\nbch\components\rutdf\NbchDataInterface;
use mfteam\nbch\components\rutdf\template\segments\BaseSegment;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;

/**
 * Шаблон для генерации данных
 */
interface TemplateInterface
{
    /**
     * @param array $eventIds
     * @param NbchDataInterface $sendData
     */
    public function __construct(array $eventIds, NbchDataInterface $sendData);

    /**
     * @return false|string|null
     */
    public function saveAsTemp();

    /**
     * @param string $path
     * @return bool
     */
    public function saveAs(string $path);

    /**
     * @return void
     */
    public function loadContent();

    /**
     * @return string
     */
    public function getBaseName();

    /**
     * @return string
     */
    public function getFileContent(): string;

    /**
     * @return void
     */
    public function createSegments(): void;

    /**
     * @return NbchRutdfRequest|null
     */
    public function getRequest(): ?NbchRutdfRequest;

    /**
     * @param NbchRutdfRequest|null $request
     */
    public function setRequest(?NbchRutdfRequest $request): void;

    /**
     * @return BaseSegment[]
     */
    public function getSegments();

    /**
     * @return array
     */
    public function getErrors(): array;

    /**
     * @return string
     */
    public function getContent(): string;
}

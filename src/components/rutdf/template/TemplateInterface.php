<?php

namespace mfteam\nbch\components\rutdf\template;


use mfteam\nbch\components\rutdf\template\segments\B23Collateral;
use mfteam\nbch\components\rutdf\template\segments\B24Guarantor;
use mfteam\nbch\components\rutdf\template\segments\BaseSegment;
use mfteam\nbch\components\rutdf\template\segments\C32Collateral;
use mfteam\nbch\components\rutdf\template\segments\C33Guarantor;
use mfteam\nbch\models\BaseItem;
use mfteam\nbch\models\rutdf\NbchDataInterface;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;

/**
 * Шаблон RUTDF
 *
 * @property-read array $tokenList
 * @property-read string $baseName
 * @property-read C33Guarantor[] $c33Guarantor
 * @property-read string $fileContent
 * @property-read C32Collateral[] $c32Collateral
 * @property-read B23Collateral[]|array $b23Collateral
 * @property-read B24Guarantor[] $b24Guarantor
 * @property-read string $templatePath
 */
interface TemplateInterface
{
    /**
     * @param array $eventIds
     * @param NbchDataInterface $sendData
     */
    public function __construct(array $eventIds, NbchDataInterface $sendData, string $gHeaderCode = null);

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
     * Текущий номер строки
     * @return int
     */
    public function getLineNumber(): int;

    /**
     * Следующая строка
     * @return void
     */
    public function nextLine(): void;

    /**
     * @return void
     */
    public function resetLine(): void;

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
     * @param string $block
     * @return BaseSegment[]
     */
    public function createSegment(string $block): array;

    /**
     * @param string $segmentClass
     * @return BaseSegment[]
     */
    public function createSingleSegment(string $segmentClass): array;

    /**
     * @return BaseSegment[]
     */
    public function getSegments();

    /**
     * @return array
     */
    public function getErrors(): array;

    /**
     * @param string $segmentClass
     * @return BaseSegment[]
     */
    public function createMultiSegment(string $segmentClass): array;

    /**
     * @param string $segmentClass
     * @param BaseItem[] $items
     * @param BaseItem|null $default
     * @return array
     */
    public function configureSegments(string $segmentClass, array $items, BaseItem $default = null): array;

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @return string
     */
    public function getOperationaCode(): string;
}

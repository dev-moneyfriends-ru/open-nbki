<?php

namespace mfteam\nbch\components\rutdf\template;

use mfteam\nbch\components\rutdf\template\BaseTemplate;
use mfteam\nbch\models\BaseItem;

/**
 * Шаблон GUTDF
 */
class GutdfTemplate extends BaseTemplate
{
    /**
     * Версия формата файла
     */
    public const FORMAT_VERSION = 'RUTDF6.03';

    /**
     * Связь файла
     */
    public const ENTITY = "GutdfTemplate";

    public const BASE_NAME_FILE_EXTENSION = '.xml';
    /**
     * @inheritDoc
     */
    public function loadContent()
    {
        // TODO: Implement loadContent() method.
    }

    /**
     * @inheritDoc
     */
    public function getLineNumber(): int
    {
        // TODO: Implement getLineNumber() method.
    }

    /**
     * @inheritDoc
     */
    public function nextLine(): void
    {
        // TODO: Implement nextLine() method.
    }

    /**
     * @inheritDoc
     */
    public function resetLine(): void
    {
        // TODO: Implement resetLine() method.
    }

    /**
     * @inheritDoc
     */
    public function createSegments(): void
    {
        // TODO: Implement createSegments() method.
    }

    /**
     * @inheritDoc
     */
    public function createSegment(string $block): array
    {
        // TODO: Implement createSegment() method.
    }

    /**
     * @inheritDoc
     */
    public function createSingleSegment(string $segmentClass): array
    {
        // TODO: Implement createSingleSegment() method.
    }

    /**
     * @inheritDoc
     */
    public function getSegments()
    {
        // TODO: Implement getSegments() method.
    }

    /**
     * @inheritDoc
     */
    public function getErrors(): array
    {
        // TODO: Implement getErrors() method.
    }

    /**
     * @inheritDoc
     */
    public function createMultiSegment(string $segmentClass): array
    {
        // TODO: Implement createMultiSegment() method.
    }

    /**
     * @inheritDoc
     */
    public function configureSegments(string $segmentClass, array $items, BaseItem $default = null): array
    {
        // TODO: Implement configureSegments() method.
    }
}

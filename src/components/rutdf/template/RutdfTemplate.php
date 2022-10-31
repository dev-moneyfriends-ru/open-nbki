<?php

namespace mfteam\nbch\components\rutdf\template;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\Env;
use mfteam\nbch\exceptions\UnknownEventException;
use mfteam\nbch\models\NbchOfferInterface;
use mfteam\nbch\models\NbchSubjectInterface;
use mfteam\nbch\models\rutdf\NbchEvents;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use Yii;
use yii\base\InvalidConfigException;

/**
 * Шаблон RUTDF
 */
class RutdfTemplate extends BaseRequestTemplate
{
    /**
     * Версия формата файла
     */
    public const FORMAT_VERSION = 'RUTDF3.0';
    
    /**
     * Связь файла
     */
    public const ENTITY = "RutdfTemplate";
    
    /**
     * Код события для формирования отчета
     * @var string
     */
    protected $eventId;
    
    public function __construct(string $eventId, NbchSubjectInterface $subject, NbchOfferInterface $offer, $config = [])
    {
        if (empty(NbchEvents::list()[$eventId])) {
            throw new UnknownEventException();
        }
        $this->eventId = $eventId;
        parent::__construct($subject, $offer, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function getTemplatePath(): string
    {
        // TODO: Implement getTemplatePath() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getTokenList(): array
    {
        // TODO: Implement getTokenList() method.
    }
    
    /**
     * @return string
     * @throws InvalidConfigException
     */
    public function getBaseName()
    {
        $module = Env::ensure()->module;
        $name = $module->rutdf->userName;
        $suffix = Yii::$app->formatter->asDatetime(time(), '_yyyyMMdd_HHmmss');
        while (
        $module->file->fileExist(
            $name . $suffix,
            NbchTutdfRequest::FILE_TUTDF_TYPE,
            self::ENTITY,
            $module->rutdf->userName
        )
        ) {
            sleep(1);
            $suffix = Yii::$app->formatter->asDatetime(time(), '_yyyyMMdd_HHmmss');
        }
        return $name . $suffix;
    }
    
    /**
     * @param string $eventId
     * @return RutdfTemplate
     */
    public function setEventId(string $eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }
}
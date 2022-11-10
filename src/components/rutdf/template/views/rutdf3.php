<?php

use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\components\rutdf\template\segments\GroupHeader;
use mfteam\nbch\components\rutdf\template\segments\Header;
use mfteam\nbch\components\rutdf\template\segments\Trailer;
use mfteam\nbch\models\rutdf\NbchEvents;
use yii\base\View;
use yii\helpers\ArrayHelper;

/**
 * @var $isLegal bool
 * @var $eventIds string[]
 * @var $HEADER Header
 * @var $TRAILER Trailer
 * @var $GROUPHEADER GroupHeader
 * @var $segments array
 * @var $this View
 * @var $template RutdfTemplate
 */


?>
<?= $HEADER->render() ?>
<?php
$cnt = 1;
foreach ($eventIds as $eventId) {
    if ($eventId !== NbchEvents::EVENT_2_4) {
        echo $GROUPHEADER->setNumber($cnt)->setEvent($eventId)->render();
        echo $this->render("_mainEvents", ['isLegal' => $isLegal, 'eventId' => $eventId, 'segments' => $segments]);
        $cnt++;
        continue;
    }
    if (count($template->offer->getCollateralArray()) > 0) {
        if ($isLegal) {
            $collateralSegments = ArrayHelper::getValue($segments, "B23_COLLATERAL", []);
        } else {
            $collateralSegments = ArrayHelper::getValue($segments, "C32_COLLATERAL", []);
        }
        
        foreach ($collateralSegments as $collateralSegment) {
            echo $GROUPHEADER->setNumber($cnt)->setEvent($eventId)->render();
            echo $this->render("_collateral", [
                'isLegal' => $isLegal,
                'eventId' => $eventId,
                'segments' => $segments,
                'collateralSegment' => $collateralSegment,
                'template' => $template,
            ]);
            $cnt++;
        }
    }
    if (count($template->offer->getGuarantorArray()) > 0) {
        if ($isLegal) {
            $guarantorSegments = ArrayHelper::getValue($segments, "B24_GUARANTOR", []);
        } else {
            $guarantorSegments = ArrayHelper::getValue($segments, "C33_GUARANTOR", []);
        }
        
        foreach ($guarantorSegments as $guarantorSegment) {
            echo $GROUPHEADER->setNumber($cnt)->setEvent($eventId)->render();
            echo $this->render("_guarantor", [
                'isLegal' => $isLegal,
                'eventId' => $eventId,
                'segments' => $segments,
                'guarantorSegment' => $guarantorSegment,
                'template' => $template,
            ]);
            $cnt++;
        }
    }
}

?>
<?= $TRAILER->setCntGroups($cnt - 1)->render() ?>

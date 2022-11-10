<?php

use mfteam\nbch\components\BaseSegment;
use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\components\rutdf\template\segments\B23Collateral;
use mfteam\nbch\components\rutdf\template\segments\B24Guarantor;
use mfteam\nbch\components\rutdf\template\segments\C32Collateral;
use mfteam\nbch\components\rutdf\template\segments\C33Guarantor;
use mfteam\nbch\models\Guarantor;
use mfteam\nbch\models\rutdf\NbchEvents;
use yii\helpers\ArrayHelper;
use yii\web\View;

/* @var $this View */
/* @var $isLegal bool */
/* @var $eventId string */
/* @var $segments array */
/* @var $collateralSegment BaseSegment */
/* @var $template RutdfTemplate */

if ($isLegal) {
    $tokens = NbchEvents::legalBlockCode();
    $blocks = NbchEvents::legalBlocks()[$eventId];
} else {
    $tokens = NbchEvents::personBlockCode();
    $blocks = NbchEvents::personBlocks()[$eventId];
}
foreach ($blocks as $block) {
    $segmentCode = ArrayHelper::getValue($tokens, $block);
    if ($segmentCode) {
        $segment = ArrayHelper::getValue($segments, $segmentCode);
        
        if ($segmentCode === 'C32_COLLATERAL' || $segmentCode === 'B23_COLLATERAL') {
            echo $collateralSegment->render();
        } elseif ($segmentCode === 'B24_GUARANTOR') {
            echo (new B24Guarantor(new Guarantor(), $template))->render();
        } elseif ($segmentCode === 'C33_GUARANTOR') {
            echo (new C33Guarantor(new Guarantor(), $template))->render();
        } elseif ($segment instanceof BaseSegment) {
            echo $segment->render();
        } elseif (is_array($segment)) {
            foreach ($segment as $item) {
                echo $item->render();
            }
        }
    }
}
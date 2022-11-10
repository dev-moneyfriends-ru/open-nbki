<?php

/* @var $this View */
/* @var $isLegal bool */
/* @var $eventId string */
/* @var $segments array */

use mfteam\nbch\components\BaseSegment;
use mfteam\nbch\models\rutdf\NbchEvents;
use yii\helpers\ArrayHelper;
use yii\web\View;

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
        if ($segment instanceof BaseSegment) {
            echo $segment->render();
        } elseif (is_array($segment)) {
            foreach ($segment as $item) {
                echo $item->render();
            }
        }
    }
}
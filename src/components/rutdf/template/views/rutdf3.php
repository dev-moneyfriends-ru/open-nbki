<?php

use mfteam\nbch\components\rutdf\template\segments\GroupHeader;
use mfteam\nbch\components\rutdf\template\segments\Header;
use mfteam\nbch\components\rutdf\template\segments\Trailer;
use mfteam\nbch\models\rutdf\NbchEvents;
use yii\helpers\ArrayHelper;

/**
 * @var $isLegal bool
 * @var $eventIds string[]
 * @var $HEADER Header
 * @var $TRAILER Trailer
 * @var $GROUPHEADER GroupHeader
 * @var $segments array
 */


?>
<?= $HEADER->render() ?>
<?php
$cnt = 1;
foreach ($eventIds as $eventId) {
    echo $GROUPHEADER->setNumber($cnt)->setEvent($eventId)->render();
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
            if ($segment instanceof \mfteam\nbch\components\BaseSegment) {
                echo $segment->render();
            } elseif (is_array($segment)) {
                foreach ($segment as $item) {
                    echo $item->render();
                }
            }
        }
    }
    $cnt++;
}

?>
<?= $TRAILER->setCntGroups($cnt - 1)->render() ?>

<?php
/** @var TUTDFSegment $tutdfSegment */
/** @var NASegment $naSegment */
/** @var TRSegment $trSegment */
/** @var TRLRSegment $trlrSegment */
/** @var IDSegment[] $idSegments */
/** @var ADSegment[] $adSegments */
/** @var PNSegment[] $pnSegments */

use mfteam\nbch\components\tutdf\template\segments\ADSegment;
use mfteam\nbch\components\tutdf\template\segments\IDSegment;
use mfteam\nbch\components\tutdf\template\segments\NASegment;
use mfteam\nbch\components\tutdf\template\segments\PNSegment;
use mfteam\nbch\components\tutdf\template\segments\TRLRSegment;
use mfteam\nbch\components\tutdf\template\segments\TRSegment;
use mfteam\nbch\components\tutdf\template\segments\TUTDFSegment;

?>
<?=$tutdfSegment->render()?>
<?php
foreach ($idSegments as $segment){
    echo $segment->render();
}
?>
<?=$naSegment->render()?>
<?php
foreach ($adSegments as $segment){
    echo $segment->render();
}
?>
<?php
foreach ($pnSegments as $segment){
    echo $segment->render();
}
?>
<?=$trSegment->render()?>
<?=$trlrSegment->render()?>
<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 20.05.2020
 * Time: 12:30
 */

/** @var TUTDFSegment $tutdfSegment */
/** @var IDSegment[] $idSegments */
/** @var BUSegment $buSegment */
/** @var ADSegment[] $adSegments */
/** @var PNSegment[] $pnSegments */
/** @var TRSegment $trSegment */
/** @var TRLRSegment $trlrSegment */

use mfteam\nbch\components\tutdf\template\segments\ADSegment;
use mfteam\nbch\components\tutdf\template\segments\BUSegment;
use mfteam\nbch\components\tutdf\template\segments\IDSegment;
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
<?=$buSegment->render()?>
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


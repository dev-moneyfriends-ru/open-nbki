<?php

namespace mfteam\nbch\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "nbch_control".
 *
 * @property int $id
 * @property string|null $offerUuid
 * @property int|null $createdAt
 * @property int|null $updatedAt
 * @property int|null $nextSend
 * @property int|null $nextCheck
 * @property int|null $state
 * @property string|null $errorCode
 * @property string|null $message
 * @property-read bool $isSuccess
 * @property-read ActiveQuery $uncheckedRequests
 * @property-read ActiveRecord|null|array|NbchControl $firstUncheckedRequest
 * @property-read bool $isRun
 * @property-read bool $isNew
 * @property-read mixed $stateName
 * @property-read bool $isError
 * @property-read bool $isExecute
 * @deprecated
 */
class NbchControl extends control\NbchControl
{

}

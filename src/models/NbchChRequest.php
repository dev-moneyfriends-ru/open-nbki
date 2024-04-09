<?php

namespace mfteam\nbch\models;

use mfteam\nbch\components\file\NbchFile;

/**
 * This is the model class for table "nbch_request".
 *
 * @property int $id
 * @property int|null $consentId
 * @property int|null $createdAt
 * @property int|null $updatedAt
 * @property int|null $status
 * @property string|null $requestData
 * @property string|null $responseData
 * @property string|null $errorText
 *
 * @property-read null|NbchFile $responsePdf
 * @property-read null|NbchFile $responseXml
 * @property-read mixed $statusName
 * @property-read null|NbchFile $responseHtml
 * @property NbchConsent $consent
 * @deprecated
 */
class NbchChRequest extends \mfteam\nbch\models\creditHistory\NbchChRequest
{

}

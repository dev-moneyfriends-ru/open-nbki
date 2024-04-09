<?php

namespace mfteam\nbch\models;

use mfteam\nbch\components\file\NbchFile;
use yii\db\ActiveQuery;

/**
 * Согласия НБКИ
 * This is the model class for table "nbch_consent".
 *
 * @property int $id
 * @property int|null $createdAt
 * @property int|null $updatedAt
 * @property int|null $consentDate
 * @property int|null $consentExpireDate
 * @property int|null $consentPurpose
 * @property-read bool $isActive
 * @property string|null $otherConsentPurpose
 * @property-read null|NbchFile $sigFile
 * @property-read null|NbchFile $protocolFile
 * @property-read null|NbchFile $originalFile
 * @property int $type [int(2)]
 * @property-read NbchConsentRelations[] $relations
 * @property-read NbchConsentRelations[] $mainOfferRelation
 * @property-read NbchConsentRelations[] $userRelations
 * @property-read bool $isExpire
 * @property-read void $consentPurposeName
 * @property-read mixed $typeName
 * @property-read NbchConsentRelations|null $mainUserRelation
 * @property-read NbchChRequestQuery|ActiveQuery $chRequests
 * @property-read NbchChRequestQuery|ActiveQuery $activeChRequests
 * @property-read NbchOfferInterface $offer
 * @deprecated
 */
class NbchConsent extends \mfteam\nbch\models\creditHistory\NbchConsent
{

}

<?php

namespace mfteam\nbch\components\tutdf;

use mfteam\nbch\models\tutdf\NbchTutdfRequest;

interface CreateTutdfComponentInterface
{
    /**
     * @return \mfteam\nbch\models\tutdf\NbchTutdfRequest
     */
    public function getTutdfRequest(): NbchTutdfRequest;
}
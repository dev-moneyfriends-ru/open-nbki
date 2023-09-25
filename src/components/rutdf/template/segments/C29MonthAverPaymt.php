<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use DateTime;
use mfteam\nbch\components\BaseSegment;
use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\AccountRelationship;
use mfteam\nbch\models\rutdf\NbchEvents;

/**
 * Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета – C29_MONTHAVERPAYMT
 * @property RutdfTemplate $template
 */
class C29MonthAverPaymt extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C29_MONTHAVERPAYMT';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        if ($this->isNotAllowed()) {
            return [];
        }
        return [
            $this->segmentName,
            $this->averPaymtAmt(),
            $this->formatNewDate($this->template->offer->getTrade()->reportingDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Величина среднемесячного платежа' => '',
            'Дата расчета величины среднемесячного платежа' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 29. Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета – C29_MONTHAVERPAYMT';
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Сведения о величине среднемесячного платежа, рассчитанной в порядке,
            установленном приложением 1 к Положению Банка России «О порядке формирования кредитной истории».
            Если величина среднемесячного платежа не рассчитывается, блок не формируется и не передается .
            ';
    }
    
    /**
     * @return int
     */
    private function averPaymtAmt()
    {
        $trade = $this->template->offer->getTrade();
        
        $currentDate = new DateTime();
        $closeDate = (new DateTime())
            ->setTimestamp(
                \Yii::$app->formatter->asTimestamp($trade->closedDt)
            );
        
        if ($currentDate === $closeDate || $currentDate > $closeDate) {
            $countMonth = 1;
        } else {
            $interval = $currentDate->diff($closeDate);
            $countMonth = $interval->m + 1;
        }
        
        $sum = $trade->currentAmtOutstanding;
        
        return (int)($sum / $countMonth + $trade->amtPastDue);
    }
    
    /**
     * @return bool
     */
    private function isNotAllowed()
    {
        return true;
    }
}
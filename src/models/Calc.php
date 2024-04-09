<?php

namespace mfteam\nbch\models;


use Yii;

/**
 * @deprecated
 */
class Calc extends \yii\base\Model
{
    /**
     * Количество запросов кредитной истории кредитным провайдером за последние 24 месяца.
     * @var string
     */
    public $collectionsInquiries = '-';
    
    /**
     * Дата создания последнего счета.
     * @var string
     */
    public $mostRecentAcc = '-';
    
    /**
     * Дата последнего объявленного банкротства.
     * @var string
     */
    public $mostRecentBankruptcy = '-';
    
    /**
     * Когда совершался последний запрос в НБКИ
     * @var string
     */
    public $mostRecentInqText = '-';
    
    /**
     * Дата последнего обновления документов
     * @var string
     */
    public $mostRecentLegalItem = '-';
    
    /**
     * Дата последней попытки запроса кредита
     * @var string
     */
    public $mostRecentLoanAppDt = '-';
    
    /**
     * Дата обновления последней официальной информации в системе
     * @var string
     */
    public $mostRecentOfficialInfo = '-';
    
    /**
     * Количество счетов как открытых, так и закрытых, с отрицательным рейтингом.
     * @var int
     */
    public $negativeRating = '-';
    
    /**
     * Дата первого открытия счета
     * @var string
     */
    public $oldest = '-';
    
    /**
     * Дата подачи первого заявления о предоставлении кредита в кредитной истории.
     * @var string
     */
    public $oldestLoanAppDt = '-';
    
    /**
     * Количество запросов кредитной истории кредитным провайдером за последние 30 дней.
     * @var string
     */
    public $recentInquiries = '-';
    
    /**
     * Общее количество всех открытых и закрытых счетов.
     * @var string
     */
    public $totalAccts = '-';
    
    /**
     * Количество активных счетов
     * @var string
     */
    public $totalActiveBalanceAccounts = '-';
    
    /**
     * Общий кредитный лимит по счетам, как открытым, так и закрытым
     * @var BalanceValue
     */
    public $totalHighCredit;
    
    /**
     * Общая сумма, возвращенная за все счета, как открытые, так и закрытые.
     * @var BalanceValue
     */
    public $totalCurrentBalance;
    
    /**
     * Общая сумма просроченных платежей по всем счетам, как открытым, так и закрытым
     * @var BalanceValue
     */
    public $totalPastDueBalance;
    
    /**
     * Общая сумма задолженности по всем открытым счетам, включая проценты или пени
     * @var BalanceValue
     */
    public $totalOutstandingBalance;
    
    /**
     * Общая сумма ежемесячных платежей, подлежащих оплате по всем счетам, как открытым, так и закрытым
     * @var BalanceValue
     */
    public $totalScheduledPayments;
    
    /**
     * Общее количество банкротств в кредитной истории
     * @var string
     */
    public $totalBankruptcies = '-';
    
    /**
     * Общее количество судебных дел в кредитной истории
     * @var string
     */
    public $totalLegalItems = '-';
    
    /**
     * Общее количество исполнительных производст в кредитной истории
     * @var string
     */
    public $totalOfficialInfo = '-';
    
    /**
     * Количество запросов кредитной истории
     * @var string
     */
    public $totalInquiries = '-';
    
    public function rules()
    {
        return [
            [$this->attributes(), 'safe'],
        ];
    }
    
    public function setAttributes($values, $safeOnly = true)
    {
        foreach ($values as $name => $value) {
            switch ($name) {
                case 'totalScheduledPayments':
                case 'totalOutstandingBalance':
                case 'totalPastDueBalance':
                case 'totalCurrentBalance':
                case 'totalHighCredit':{
                    $this->$name = new BalanceValue($value);
                    unset($values[$name]);
                }break;
                case 'oldestLoanAppDt':
                case 'oldest':
                case 'mostRecentOfficialInfo':
                case 'mostRecentLoanAppDt':
                case 'mostRecentLegalItem':
                case 'mostRecentBankruptcy':
                case 'mostRecentAcc':
                    {
                        if (empty($value)) {
                            $this->$name = '-';
                        } else {
                            $this->$name = Yii::$app->formatter->asDate($value) . ' г.';
                        }
                        
                        unset($values[$name]);
                    }
                    break;
            }
            
        }
        parent::setAttributes($values, $safeOnly);
    }
}
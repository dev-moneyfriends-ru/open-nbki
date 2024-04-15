<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use yii\base\Model;

/**
 * Комментарий с пояснением причины представления группы блоков показателей.
 */
class GroupHeaderComment extends Model
{
    /**
     * Произвольный необязательный комментарий, не более 500 символов.
     * @var string|null
     */
    public $comment;
    
    /**
     * Код причины аннулирования/удаления.
     * @var string|null
     */
    public $annulReason;
    
    /**
     * Номер дела о банкротстве. Укажите его при передаче блоков C13_BANKRUPTCY и B6_BANKRUPTCY «Сведения по делу о несостоятельности (банкротстве)».
     * В противном случае будет невозможно идентифицировать конкретное дело о банкротстве. Не более 50 символов.
     * @var string|null
     */
    public $bankruptcyCaseNum;
    
    /**
     * Дата события, содержащего ошибку, исправляемую событием 3.2 в формате dd.MM.yyyy
     * @var string|null
     */
    public $startDate;
    
    /**
     * @return string[]
     */
    public function fields()
    {
        return [
            'comment',
            'annul_reason' => 'annulReason',
            'bankruptcy_case_num' => 'bankruptcyCaseNum',
            'StartDate' => 'startDate',
        ];
    }
}
<?php

/* @var $this \yii\web\View */
/* @var $accountReply \mfteam\nbch\models\AccountReply[] */
/* @var $accountReplyRUTDF \mfteam\nbch\models\AccountReplyRUTDF[] */

?>
<table class="table table-bordered table-striped table-condensed">
    <thead>
    <tr>
        <th>UID договора</th>
        <th>Тип
            источника
            информации
        </th>
        <th>
            Тип
            договора
        </th>
        <th>
            Cумма
            обязательств
            (лимит)
        </th>
        <th>Валюта</th>
        <th>Дата начала
            договора
        </th>
        <th>Дата
            планового
            окончания
            договора</th>
        <th>Текущая
            задолженность</th>
        <th>Текущая
            просроченная
            задолженность,
            сумма</th>
        <th>Текущая
            просроченная
            задолженность,
            дней</th>
        <th>Максимальная
            сумма
            просроченной
            задолженности</th>
        <th>Дата
            перехода
            в текущее
            состояние</th>
        <th>Дата
            актуальности
            информации
        </th>
        <th>Наихудшая
            просрочка
            по договору
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="15" style="text-align: center">Активные договоры</td>
    </tr>
        <?=$this->render('_summaryActiveAccounts', [
            'accountReply' => $accountReply,
            'accountReplyRUTDF' => $accountReplyRUTDF,
        ])?>
    <tr>
        <td colspan="15" style="text-align: center">Закрытые договоры</td>
    </tr>
       
        <?=$this->render('_summaryCloseAccounts', [
            'accountReply' => $accountReply,
            'accountReplyRUTDF' => $accountReplyRUTDF,
        ])?>
    <tr>
        <td colspan="15" style="text-align: center">Проданные договоры</td>
    </tr>
       
        <?=$this->render('_summaryAcquirerAccounts', [
            'accountReply' => $accountReply,
            'accountReplyRUTDF' => $accountReplyRUTDF,
        ])?>
    </tbody>
</table>

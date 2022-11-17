<?php



/* @var $this \yii\web\View */
/* @var $model \mfteam\nbch\models\AccountReplyRUTDF */
?>
<div class="row">
    <div class="col">
        <h2>Информация по договору: <?=$model->uuid??$model->serialNum?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Состояние договора</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Специальный статус договора</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Макс. сумма просроченной
                задолженности</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Дата перехода в состояние</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Дата актуальности информации</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Тип источника информации</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Уникальный
                идентификатор договора</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Вид отображения задолженности</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Дата начала выгрузок в БКИ</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">ID Договора</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Сумма погашенного основного долга</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Полная стоимость кредита</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Отношение к договору</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Общая выплаченная сумма</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Погашение за счет обеспечения</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Тип договора</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Сумма последнего платежа</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Аннуитет</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Дата начала договора</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Дата последнего платежа</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Дата уплаты процентов</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Дата окончания договора</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Текущая задолженность</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Количество пролонгаций</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Сумма обязательств по договору</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Текущий неиспользованный лимит</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-12 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Количество просрочек</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Первоначальный лимит</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
        <div class="row">
            <div class="col-md-6 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Статус кредитной линии</div>
            <div class="col-md-6" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Текущая просроченная задолженность</div>
            <div class="col-md-4" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;"></div>
        </div>
        <div class="row">
            <div class="col-md-8 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">Текущая просроченная задолженность, дней</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">
            <div class="col-md-4 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">от 30 до 59 дней</div>
            <div class="col-md-4 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">от 60 до 89 дней</div>
            <div class="col-md-4 bg-info" style="height: 100%; border-bottom: 1px solid #000000; margin-bottom: 5px;">более 90 дней</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
<hr>

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
        <div class="row">
            <div class="col-md-6 bg-info">Состояние договора</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Специальный статус договора</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Макс. сумма просроченной
                задолженности</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Дата перехода в состояние</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Дата актуальности информации</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Тип источника информации</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Уникальный
                идентификатор договора</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Вид отображения задолженности</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Дата начала выгрузок в БКИ</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">ID Договора</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Сумма погашенного основного долга</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Полная стоимость кредита</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Отношение к договору</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Общая выплаченная сумма</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Погашение за счет обеспечения</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Тип договора</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Сумма последнего платежа</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Аннуитет</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Дата начала договора</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Дата последнего платежа</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Дата уплаты процентов</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Дата окончания договора</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Текущая задолженность</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Количество пролонгаций</div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Сумма обязательств по договору</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Текущий неиспользованный лимит</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12 bg-info">Количество просрочек</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Первоначальный лимит</div>
            <div class="col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-md-6 bg-info">Статус кредитной линии</div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Текущая просроченная задолженность</div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-8 bg-info">Текущая просроченная задолженность, дней</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-4 bg-info">от 30 до 59 дней</div>
            <div class="col-md-4 bg-info">от 60 до 89 дней</div>
            <div class="col-md-4 bg-info">более 90 дней</div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
<hr>

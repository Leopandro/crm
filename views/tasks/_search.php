<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\TasksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<!--    --><?//= $form->field($model, 'id') ?>

    <div class="row">
        <div class="col-xs-3">
            <?= $form->field($model, 'user_id')->dropDownList(ArrayHelper::map(\app\models\User::find()->all(), 'id', 'username'),['prompt'=>'Выберите исполнителя',]) ?>
        </div>

        <div class="col-xs-3">
            <?= $form->field($model, 'order_opencart_id')->dropDownList(\app\models\Orders::getFullInfoOrderItemsForDropDownList(),['prompt'=>'Выберите заказ',]) ?>
        </div>
        <div class="col-xs-3">
            <?= $form->field($model, 'serial_number') ?>
        </div>
        <div class="col-xs-3">
            <div class="form-group" style="margin-top: 25px;">
                <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
<!--                        --><?//= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
            </div>


        </div>
    </div>




    <?php ActiveForm::end(); ?>

</div>

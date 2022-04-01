<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeCasillaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-casilla-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cas_id') ?>

    <?= $form->field($model, 'cas_nombre') ?>

    <?= $form->field($model, 'cas_ubicacion') ?>

    <?= $form->field($model, 'cas_gps') ?>

    <?= $form->field($model, 'cas_fkmunicipio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

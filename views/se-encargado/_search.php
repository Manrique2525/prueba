<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeEncargadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-encargado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'enc_id') ?>

    <?= $form->field($model, 'enc_nombre') ?>

    <?= $form->field($model, 'enc_paterno') ?>

    <?= $form->field($model, 'enc_materno') ?>

    <?= $form->field($model, 'enc_sexo') ?>

    <?php // echo $form->field($model, 'enc_domicilio') ?>

    <?php // echo $form->field($model, 'enc_fkmunicipio') ?>

    <?php // echo $form->field($model, 'enc_fktipoencargado') ?>

    <?php // echo $form->field($model, 'enc_fkuser') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

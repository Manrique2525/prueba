<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CatMunicipio;

/* @var $this yii\web\View */
/* @var $model app\models\SeCasilla */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-casilla-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cas_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cas_ubicacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cas_gps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cas_fkmunicipio')->DropDownList(CatMunicipio::map(), ['prompt' => 'Seleccione el Municipio']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

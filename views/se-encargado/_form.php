<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CatMunicipio;
use app\models\CatTipopersonal;

/* @var $this yii\web\View */
/* @var $model app\models\SeEncargado */
/* @var $form yii\widgets\ActiveForm */
$personal = ArrayHelper::map(CatTipopersonal::find()->all(), 'tipenc_id', 'tipenc_nombre');
?>

<div class="se-encargado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'enc_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_domicilio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enc_fkmunicipio')->DropDownList(CatMunicipio::map(), ['prompt' => 'Seleccione el Municipio']) ?>

    <?= $form->field($model, 'enc_fktipoencargado')->dropDownList(CatTipopersonal::map(), ['prompt' => 'Seleccione un Tipo de Encargado']) ?>

    <?= $form->field($model, 'enc_fkuser')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

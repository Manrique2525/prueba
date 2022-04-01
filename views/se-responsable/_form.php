<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SeCasilla;
use app\models\SeResponsable;

/* @var $this yii\web\View */
/* @var $model app\models\SeResponsable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-responsable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'res_fkcasilla')->dropDownList(SeCasilla::map(), ['prompt' => 'Seleccione la casilla']) ?>

    <?= $form->field($model, 'res_fkpersonal')->dropDownList(SeResponsable::map(), ['prompt' => 'Seleccione el personal']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
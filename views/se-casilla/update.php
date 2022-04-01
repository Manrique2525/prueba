<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeCasilla */

$this->title = 'Update Se Casilla: ' . $model->cas_id;
$this->params['breadcrumbs'][] = ['label' => 'Se Casillas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cas_id, 'url' => ['view', 'cas_id' => $model->cas_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="se-casilla-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

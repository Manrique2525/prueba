<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeResponsable */

$this->title = 'Update Se Responsable: ' . $model->res_id;
$this->params['breadcrumbs'][] = ['label' => 'Se Responsables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->res_id, 'url' => ['view', 'res_id' => $model->res_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="se-responsable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

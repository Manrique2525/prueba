<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeEncargado */

$this->title = 'Create Se Encargado';
$this->params['breadcrumbs'][] = ['label' => 'Se Encargados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-encargado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

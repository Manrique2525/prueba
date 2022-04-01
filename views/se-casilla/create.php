<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeCasilla */

$this->title = 'Crear una Casilla';
$this->params['breadcrumbs'][] = ['label' => 'Se Casillas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-casilla-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

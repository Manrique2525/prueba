<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SeCasilla */

$this->title = $model->cas_id;
$this->params['breadcrumbs'][] = ['label' => 'Casillas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="se-casilla-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'cas_id' => $model->cas_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'cas_id' => $model->cas_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea eliminar esta casilla?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cas_id',
            'cas_nombre',
            'cas_ubicacion',
            'cas_gps',
         // 'cas_fkmunicipio',
            'municipio',
        ],
    ]) ?>

</div>

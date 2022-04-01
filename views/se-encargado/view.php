<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SeEncargado */

$this->title = $model->enc_id;
$this->params['breadcrumbs'][] = ['label' => 'Se Encargados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="se-encargado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'enc_id' => $model->enc_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'enc_id' => $model->enc_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'enc_id',
            'enc_nombre',
            'enc_paterno',
            'enc_materno',
            'enc_sexo',
            'enc_domicilio',
            'enc_fkmunicipio',
            'enc_fktipoencargado',
            'enc_fkuser',
        ],
    ]) ?>

</div>

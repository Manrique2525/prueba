<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeCasillaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Casillas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-casilla-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Casilla', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

        //  'cas_id',
            'cas_nombre',
            'cas_ubicacion',
            'cas_gps',
        //  'cas_fkmunicipio',
            'municipio',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'cas_id' => $model->cas_id]);
                 }
            ],
        ],
    ]); ?>


</div>

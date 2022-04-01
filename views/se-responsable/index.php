<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeResponsableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Responsables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-responsable-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Responsable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'res_id',
            // 'res_fkcasilla',
            // 'res_fkpersonal',
            'casilla',
            'personal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'res_id' => $model->res_id]);
                }
            ],
        ],
    ]); ?>


</div>
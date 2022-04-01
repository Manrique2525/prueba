<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeEncargadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Se Encargados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-encargado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Encargado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'enc_id',
                'enc_nombre',
                'enc_paterno',
                'enc_materno',
                'enc_sexo',
                'enc_domicilio',
                'municipio',
            //   'enc_fkmunicipio',
            // 'enc_fktipoencargado',
            //   'enc_fkuser',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'enc_id' => $model->enc_id]);
                }
            ],
        ],
    ]); ?>


</div>
<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Sistema Electoral!</h1>

        <p class="lead">Sistema Ciudadano Electoral.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Municipios</h2>
                <p>Listado de los municipios.</p>

                <?= Html::a('Municipios', ['/cat-municipio'], ['class' => 'btn btn-primary']) ?>

            </div>
            <div class="col-lg-4">
                <h2>Casillas</h2>

                <p>Listado de las casillas.</p>

                <?= Html::a('Casillas', ['/se-casilla'], ['class' => 'btn btn-primary']) ?>

            </div>
            <div class="col-lg-4">
                <h2>Estados</h2>

                <p>Mostrar Estados.</p>

                <?= Html::a('Estados', ['/cat-estado'], ['class' => 'btn btn-primary']) ?>

            </div>
            <div class="col-lg-4"> <br> <br>
                <h2>Responsables</h2>

                <p>Mostrar Area de Responsables.</p>

                <?= Html::a('Responsable', ['/se-responsable'], ['class' => 'btn btn-primary']) ?>

            </div>
            <div class="col-lg-4"> <br> <br>
                <h2>Encargados</h2>

                <p>Mostrar Area de Encargados.</p>

                <?= Html::a('Encargado', ['/se-encargado'], ['class' => 'btn btn-primary']) ?>

            </div>
        </div>

    </div>
</div>
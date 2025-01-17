<?php

use app\models\Estado;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reserva */
/* @var $form yii\widgets\ActiveForm */
/* @var $apartamentos array */
/* @var $clientes array */

$this->title = 'Crear Reserva';
//$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reserva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="reserva-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'apartamento_id')->dropDownList($apartamentos, ['prompt' => 'Seleccionar Apartamento']) ?>
        <?= $form->field($model, 'cliente_id')->dropDownList($clientes, ['prompt' => 'Seleccionar Cliente']) ?>
        <?= $form->field($model, 'fecha_inicio')->input('date') ?>
        <?= $form->field($model, 'fecha_fin')->input('date') ?>
        <?= $form->field($model, 'estado_id')->dropDownList(
            ArrayHelper::map(Estado::find()->all(), 'id', 'nombre'),
            ['prompt' => 'Seleccionar Estado']
        ) ?>

        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>

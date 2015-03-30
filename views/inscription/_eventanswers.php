<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\TabularForm;
use kartik\builder\Form;


/* @var $this yii\web\View */
/* @var $model app\models\Eventanswer */

$this->title = 'Actualizar Respuesta por Evento: ' ;
//$this->params['breadcrumbs'][] = ['label' => 'Respuestas por Evento', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Actualziación';
?>

<div class="regresar">
<?= Html::a(\Yii::$app->params['btnRegresar'],['/inscription/viewown','id' => $id], ['class' => 'btn btn-default'])?>
</div>

<div class="panel panel-green">
  <div class="panel-heading">Preguntas del Evento</div>
  <div class="panel-body">
    <?php
$form = ActiveForm::begin();?>

<?=TabularForm::widget([
    'dataProvider' => $dataProvider,
    'form' => $form,
    'attributes' => $model->getGrid(),
/*    'attributeDefaults' => [

        [
            'type' => Form::INPUT_RAW,
            'value'=>function ($model, $key, $index, $widget) {return $model->eventquestion->text; }


        ],
    ],*/
    'actionColumn'=>false,
    'serialColumn'=>false,
    'checkboxColumn'=>false,
]);
// Add other fields if needed or render your submit button
?>
<?=Html::submitButton(\Yii::$app->params['btnGuardarSiguiente'], ['class' => 'btn btn-success']);?>
  </div>
</div>


<?php ActiveForm::end(); ?>

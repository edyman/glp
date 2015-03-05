<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\controllers\EventquestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preguntas por Evento';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventquestion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Pregunta por Evento', ['eventquestion/createown','eventtype_id'=>$eventtype_id,'event_id'=>$event_id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'status',
//            'created_at',
//            'updated_at',
//            'eventtype_id',
            [
                'attribute' => 'eventtype_id',
                'value'=> function ($data){ return $data->eventtype->name;}
            ],
//            'question_id',
            [
                'attribute' => 'question_id',
                'value'=> function ($data){ return $data->question->text;}
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
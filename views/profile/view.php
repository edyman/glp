<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\models\Profile */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            'lastname',
            'institution_name',
            'responsability_name',
            'gender',
            'phone_number',
            'mobile_number',
            'complete',
            'status',
            'created_at',
            'updated_at',
            'user_id',
            'institutiontype_id',
            'responsibilitytype_id',
            'country_id'
            /*[
                'label' => 'country_id',
                'value' => function($model){return $this->hasOne(Country::className(), ['id' => 'country_id']);},
            ]*/
            /*[
            'label' => 'country_id',
            'value' => '$model->author->name',
            'data'=>ArrayHelper::map(country::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
        ]*/
    ]]) ?>

</div>

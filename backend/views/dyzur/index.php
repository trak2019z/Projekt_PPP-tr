<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DyzurSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dyzurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dyzur-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dyzur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
				if($model->ID_Pracownik == NULL){
					return['class'=>'danger'];
				} else
					{
					return['class'=>'success'];
				}
				
			},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_dyzur',
            'funkcja.Nazwa',
            'miejsce.Nazwa',
            'Od_kiedy',
            'Do_kiedy',
            'pracownik.username',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

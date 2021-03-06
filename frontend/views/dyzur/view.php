<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dyzur */

$this->title = 'Dyzur Info';
$this->params['breadcrumbs'][] = ['label' => 'Dyzurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dyzur-view">

    <h1>Dyzur Info </h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_dyzur',
            'funkcja.Nazwa',
            'miejsce.Nazwa',
            'Od_kiedy',
            'Do_kiedy',
            'pracownik.username',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

$this->title = "Update Genre: $model->genre";
$this->params['breadcrumbs'][] = ['label' => 'genre', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->genre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

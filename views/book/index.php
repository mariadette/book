<?php 

use yii\helpers\Html;


$this->title = "BOOKS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a Book.</span>
<?php else: ?>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Genre ID</th>
        <th>ISBN</th>
        <th>Publish Date</th>
        <th>Review Date</th>
        <th>Review</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    
        <td><?= $model->genre_id ?></td>
        <td>
        <?= Html::a($model->title, ['/book/view', 'id'=>$model->id]); ?>
        </td> 
        <td><?= $model->ISBN ?></td>
        <td><?= $model->publishDate ?></td>
        <td><?= $model->reviewDate ?></td>
        <td><?= $model->review ?></td>
    </tr>
    <?php endforeach; ?>
</table>

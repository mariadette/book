<?php 

use yii\helpers\Html;


$this->title = "GENRE";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a Genre.</span>
<?php else: ?>
        <?= Html::a('Create Genre', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Genre</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->genre, ['/genre/view', 'id'=>$model->id]); ?>
        </td>
        <td><?= $model->genre ?></td>
    </tr>
    <?php endforeach; ?>
</table>

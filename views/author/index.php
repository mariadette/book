<?php 

use yii\helpers\Html;


$this->title = "AUTHORS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create an Author.</span>
<?php else: ?>
        <?= Html::a('Create Author', ['create'], ['class' => 'btn btn-success']) ?>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Nationality</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>

<td>
            <?= Html::a($model->name, ['/author/view', 'id'=>$model->id]); ?>
        </td>     
        <td><?= $model->name ?></td>
        <td><?= $model->gender ?></td>
        <td><?= $model->nationality ?></td>
    </tr>
    <?php endforeach; ?>
</table>

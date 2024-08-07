<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

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
            [
                'attribute' => 'image',
                'format' => ['html'],
                'value'=> function() use ($model){
                return Html::img($model->getImageUrl(), ['style' => 'width: 50px']);
                }
            ],
            'description:html',
            
            'price:currency',
            [ 
                'attribute' => 'status',
                'format' => 'html',
                'value' => function($model){
                    
                    return Html::tag('span', $model->status ? 'Active' : 'Draft', [
                        'class'=> $model -> status ? 'badge bg-success':'badge bg-danger',
                    ]);

                }
            ],
            'created_at:dateTime',
            'updated_at:dateTime',
            [
                'attribute' => 'created_by',
                'label' => 'Created By',
                'value' => function ($model) {
                    return $model->createdBy->username;
                },
            ],
            [
                'attribute' => 'updated_by',
                'label' => 'Updated By',
                'value' => function ($model) {
                    return $model->updatedBy->username;
                },
            ],
            
        ],
    ]) ?>

</div>

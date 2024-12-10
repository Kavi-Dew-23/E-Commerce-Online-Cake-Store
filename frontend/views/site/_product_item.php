<?php
use yii\helpers\StringHelper;

/** @var \common\models\Product $model */
?>
<div class="card h-100">
    <!-- Product image-->
    <a href="'#">
        <img class="card-img-top" src="<?php echo $model->getImageUrl() ?>" alt="..." />
    </a>                
    <!-- Product details-->
    <div class="card-body" >
        <h4 class="card-title text-center" >
            <a href="#"><?php echo $model->name ?></a>
        </h4>
        <h5 class="text-center"><?php echo Yii::$app->formatter->asCurrency($model->price) ?></h5>
        <div class="'card-text">
            <!-- print the user enter description and minimize the length of the description 

            php echo StringHelper::truncateWords($model->description,30)   --> 

            <!-- get user enter short description-->
            <?php echo $model->getShortDescription() ?>

        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 text-center">
        <a href="#" class="btn btn-primary">
            Add to Cart
        </a>
    </div>
</div>
            
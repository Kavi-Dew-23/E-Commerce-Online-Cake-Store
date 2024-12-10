<?php

use yii\bootstrap5\LinkPager;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Yii Application';
?>
<div class="site-index">
   

    <div class="body-content">
        
        <?php echo ListView::widget([
                'dataProvider'=> $dataProvider,

                'layout'=> '{summary}<div class="row">{items}</div>{pager}',
                'itemView'=> '_product_item',
               
                'itemOptions'=> [
                    'class'=> 'col-lg-4 col-md-6 mb-4',
                ],
                // navigation pager to link by using bootstrap5
                'pager'=> [
                    'class'=> LinkPager::class,
                ]
            ]) ?>
            
        </>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::class,[
    'editorOptions' => [
        'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
    ]); 
    ?>

    <?= $form->field($model, 'imageFile',[
        'template'=> '
            <div class = "custom-file">
                {input}
                {label}
                {error}
            </div>
        ',
        'labelOptions' => ['class' => 'custom-file-label'],
        'inputOptions' => ['class' => 'custom-file-input']
    ])->textInput(['type' => 'file']) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

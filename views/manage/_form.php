<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model jpunanua\seotools\models\base\MetaBase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meta-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'route')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'robots_index')->dropDownList([ 'INDEX' => 'INDEX', 'NOINDEX' => 'NOINDEX', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'robots_follow')->dropDownList([ 'FOLLOW' => 'FOLLOW', 'NOFOLLOW' => 'NOFOLLOW', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php
    echo $form->field($model, 'info')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false
        ],
    ]);
    ?>

    <?= $form->field($model, 'sitemap')->textInput() ?>

    <?= $form->field($model, 'sitemap_change_freq')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'sitemap_priority')->textInput(['maxlength' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('seotools', 'Create') : Yii::t('seotools', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

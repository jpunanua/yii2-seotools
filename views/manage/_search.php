<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model jpunanua\seotools\models\MetaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meta-base-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_meta') ?>

    <?= $form->field($model, 'hash') ?>

    <?= $form->field($model, 'route') ?>

    <?= $form->field($model, 'robots_index') ?>

    <?= $form->field($model, 'robots_follow') ?>

    <?php // echo $form->field($model, 'author') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'info') ?>

    <?php // echo $form->field($model, 'sitemap') ?>

    <?php // echo $form->field($model, 'sitemap_change_freq') ?>

    <?php // echo $form->field($model, 'sitemap_priority') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('seotools', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('seotools', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

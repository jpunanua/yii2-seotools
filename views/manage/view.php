<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model jpunanua\seotools\models\base\MetaBase */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('seotools', 'Meta Bases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-base-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('seotools', 'Update'), ['update', 'id' => $model->id_meta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('seotools', 'Delete'), ['delete', 'id' => $model->id_meta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('seotools', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_meta',
            'hash',
            'route',
            'robots_index',
            'robots_follow',
            'author',
            'title',
            'keywords:ntext',
            'description:ntext',
            'info:ntext',
            'sitemap',
            'sitemap_change_freq',
            'sitemap_priority',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

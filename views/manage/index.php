<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel jpunanua\seotools\models\MetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('seotools', 'Meta Bases');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-base-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('seotools', 'Create Meta Base'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_meta',
            'hash',
            'route',
            'robots_index',
            'robots_follow',
            // 'author',
            // 'title',
            // 'keywords:ntext',
            // 'description:ntext',
            // 'info:ntext',
            // 'sitemap',
            // 'sitemap_change_freq',
            // 'sitemap_priority',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

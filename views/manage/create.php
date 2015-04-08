<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model jpunanua\seotools\models\base\MetaBase */

$this->title = Yii::t('seotools', 'Create Meta Base');
$this->params['breadcrumbs'][] = ['label' => Yii::t('seotools', 'Meta Bases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-base-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

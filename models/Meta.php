<?php

namespace jpunanua\seotools\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use jpunanua\seotools\models\base\MetaBase;

/**
 * @inheritdoc
 */
class Meta extends MetaBase
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->created_at = new Expression('NOW()');
        $this->updated_at = new Expression('NOW()');
    }

    /**
     * @inheritdoc
     */
    public function beforeValidate()
    {
        $this->hash = md5($this->route);
        return parent::beforeValidate();
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        $this->hash = md5($this->route);
        return parent::beforeSave($insert);
    }

    public function setRoute($route) {
        $this->route = $route;
        $this->hash = md5($this->route);
    }
}

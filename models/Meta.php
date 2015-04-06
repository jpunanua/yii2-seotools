<?php

namespace jpunanua\seo\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use jpunanua\seo\models\base\MetaBase;

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
        $this->params = [];
        $this->created_at = new Expression('NOW()');
        $this->updated_at = new Expression('NOW()');
    }

    /**
     * @inheritdoc
     */
    public function beforeValidate()
    {
        $params = Json::encode($this->params);
        $this->hash = md5($this->route . $params);
        return parent::beforeValidate();
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        $this->params = Json::encode($this->params);
        $this->hash = md5($this->route . $this->params);
        return parent::beforeSave($insert);
    }

    /**
     * @inheritdoc
     */
    public function afterSave($insert, $changedAttributes)
    {
        $this->params = Json::decode($this->params);
        return parent::afterSave($insert, $changedAttributes);
    }

    /**
     * @inheritdoc
     */
    public function afterFind()
    {
        $this->params = Json::decode($this->params);
    }
}

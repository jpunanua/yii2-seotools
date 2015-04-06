<?php
/**
 * Created by PhpStorm.
 * User: javierperezunanua
 * Date: 1/4/15
 * Time: 17:01
 */

namespace \jpunanua\seo\models;

use jpunanua\seo\models\base\MetaBase;


class MetaSearch extends MetaBase
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'page_id'], 'integer'],
            [['name', 'content', 'date_modified'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Meta::find()->with('page');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'page_id' => $this->page_id,
            'date_modified' => $this->date_modified,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
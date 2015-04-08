<?php

namespace jpunanua\seotools\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use jpunanua\seotools\models\base\MetaBase;

/**
 * MetaSearch represents the model behind the search form about `jpunanua\seotools\models\base\MetaBase`.
 */
class MetaSearch extends MetaBase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_meta', 'sitemap'], 'integer'],
            [['hash', 'route', 'robots_index', 'robots_follow', 'author', 'title', 'keywords', 'description', 'info', 'sitemap_change_freq', 'sitemap_priority', 'created_at', 'updated_at'], 'safe'],
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
        $query = MetaBase::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_meta' => $this->id_meta,
            'sitemap' => $this->sitemap,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'hash', $this->hash])
            ->andFilterWhere(['like', 'route', $this->route])
            ->andFilterWhere(['like', 'robots_index', $this->robots_index])
            ->andFilterWhere(['like', 'robots_follow', $this->robots_follow])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'info', $this->info])
            ->andFilterWhere(['like', 'sitemap_change_freq', $this->sitemap_change_freq])
            ->andFilterWhere(['like', 'sitemap_priority', $this->sitemap_priority]);

        return $dataProvider;
    }
}

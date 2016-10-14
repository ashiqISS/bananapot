<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `backend\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'brand_id', 'merchant_id', 'merchant_type', 'header_visibility', 'sort_order', 'display_category_name', 'is_discount_available', 'quantity', 'requires_shipping', 'enquiry_sale', 'gift_option', 'stock_availability', 'weight_class', 'exchange', 'is_cod_available', 'is_available', 'is_featured', 'is_admin_approved', 'created_by', 'updated_by'], 'integer'],
            [['category_id', 'product_name', 'product_code', 'description', 'main_image', 'gallery_images', 'hover_image', 'canonical_name', 'meta_title', 'meta_description', 'meta_keywords', 'discount_type', 'discount_from', 'discount_to', 'new_from', 'new_to', 'sale_from', 'sale_to', 'special_price_from', 'special_price_to', 'video_link', 'video', 'status', 'search_tag', 'related_products', 'created_date', 'updated_date'], 'safe'],
            [['price', 'wholesale_price', 'discount', 'discount_rate', 'special_price', 'tax', 'weight'], 'number'],
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
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'brand_id' => $this->brand_id,
            'merchant_id' => $this->merchant_id,
            'merchant_type' => $this->merchant_type,
            'header_visibility' => $this->header_visibility,
            'sort_order' => $this->sort_order,
            'display_category_name' => $this->display_category_name,
            'price' => $this->price,
            'wholesale_price' => $this->wholesale_price,
            'is_discount_available' => $this->is_discount_available,
            'discount' => $this->discount,
            'discount_rate' => $this->discount_rate,
            'discount_from' => $this->discount_from,
            'discount_to' => $this->discount_to,
            'quantity' => $this->quantity,
            'requires_shipping' => $this->requires_shipping,
            'enquiry_sale' => $this->enquiry_sale,
            'new_from' => $this->new_from,
            'new_to' => $this->new_to,
            'sale_from' => $this->sale_from,
            'sale_to' => $this->sale_to,
            'special_price_from' => $this->special_price_from,
            'special_price' => $this->special_price,
            'special_price_to' => $this->special_price_to,
            'tax' => $this->tax,
            'gift_option' => $this->gift_option,
            'stock_availability' => $this->stock_availability,
            'weight' => $this->weight,
            'weight_class' => $this->weight_class,
            'exchange' => $this->exchange,
            'is_cod_available' => $this->is_cod_available,
            'is_available' => $this->is_available,
            'is_featured' => $this->is_featured,
            'is_admin_approved' => $this->is_admin_approved,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
        ]);

        $query->andFilterWhere(['like', 'category_id', $this->category_id])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_code', $this->product_code])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'main_image', $this->main_image])
            ->andFilterWhere(['like', 'gallery_images', $this->gallery_images])
            ->andFilterWhere(['like', 'hover_image', $this->hover_image])
            ->andFilterWhere(['like', 'canonical_name', $this->canonical_name])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords])
            ->andFilterWhere(['like', 'discount_type', $this->discount_type])
            ->andFilterWhere(['like', 'video_link', $this->video_link])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'search_tag', $this->search_tag])
            ->andFilterWhere(['like', 'related_products', $this->related_products]);

        return $dataProvider;
    }
}

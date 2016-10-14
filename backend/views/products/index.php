<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'product_name',
            'product_code',
            'brand_id',
            // 'merchant_id',
            // 'merchant_type',
            // 'description:ntext',
            // 'main_image',
            // 'gallery_images',
            // 'hover_image',
            // 'canonical_name',
            // 'meta_title',
            // 'meta_description:ntext',
            // 'meta_keywords',
            // 'header_visibility',
            // 'sort_order',
            // 'display_category_name',
            // 'price',
            // 'wholesale_price',
            // 'is_discount_available',
            // 'discount',
            // 'discount_type',
            // 'discount_rate',
            // 'discount_from',
            // 'discount_to',
            // 'quantity',
            // 'requires_shipping',
            // 'enquiry_sale',
            // 'new_from',
            // 'new_to',
            // 'sale_from',
            // 'sale_to',
            // 'special_price_from',
            // 'special_price',
            // 'special_price_to',
            // 'tax',
            // 'gift_option',
            // 'stock_availability',
            // 'video_link',
            // 'video',
            // 'weight',
            // 'weight_class',
            // 'status',
            // 'exchange',
            // 'search_tag',
            // 'related_products',
            // 'is_cod_available',
            // 'is_available',
            // 'is_featured',
            // 'is_admin_approved',
            // 'created_by',
            // 'updated_by',
            // 'created_date',
            // 'updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

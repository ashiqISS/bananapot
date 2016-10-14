<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $category_id
 * @property string $product_name
 * @property string $product_code
 * @property integer $brand_id
 * @property integer $merchant_id
 * @property integer $merchant_type
 * @property string $description
 * @property string $main_image
 * @property string $gallery_images
 * @property string $hover_image
 * @property string $canonical_name
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $header_visibility
 * @property integer $sort_order
 * @property integer $display_category_name
 * @property double $price
 * @property double $wholesale_price
 * @property integer $is_discount_available
 * @property double $discount
 * @property string $discount_type
 * @property double $discount_rate
 * @property string $discount_from
 * @property string $discount_to
 * @property integer $quantity
 * @property integer $requires_shipping
 * @property integer $enquiry_sale
 * @property string $new_from
 * @property string $new_to
 * @property string $sale_from
 * @property string $sale_to
 * @property string $special_price_from
 * @property double $special_price
 * @property string $special_price_to
 * @property double $tax
 * @property integer $gift_option
 * @property integer $stock_availability
 * @property string $video_link
 * @property string $video
 * @property double $weight
 * @property integer $weight_class
 * @property string $status
 * @property integer $exchange
 * @property string $search_tag
 * @property string $related_products
 * @property integer $is_cod_available
 * @property integer $is_available
 * @property integer $is_featured
 * @property integer $is_admin_approved
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_date
 * @property string $updated_date
 */
class Products extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'products';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['category_id', 'product_name', 'product_code', 'brand_id', 'merchant_id', 'merchant_type', 'description', 'main_image', 'gallery_images', 'hover_image', 'canonical_name', 'meta_title', 'meta_description', 'meta_keywords', 'header_visibility', 'sort_order', 'display_category_name', 'price', 'wholesale_price', 'is_discount_available', 'discount', 'discount_type', 'discount_rate', 'discount_from', 'discount_to', 'quantity', 'requires_shipping', 'enquiry_sale', 'new_from', 'new_to', 'sale_from', 'sale_to', 'special_price_from', 'special_price', 'special_price_to', 'tax', 'gift_option', 'stock_availability', 'video_link', 'video', 'weight', 'weight_class', 'status', 'exchange', 'search_tag', 'related_products', 'is_cod_available', 'is_available', 'is_featured', 'is_admin_approved', 'created_by', 'created_date'], 'required'],
                    [['brand_id', 'merchant_id', 'merchant_type', 'header_visibility', 'sort_order', 'display_category_name', 'is_discount_available', 'quantity', 'requires_shipping', 'enquiry_sale', 'gift_option', 'stock_availability', 'weight_class', 'exchange', 'is_cod_available', 'is_available', 'is_featured', 'is_admin_approved', 'created_by', 'updated_by'], 'integer'],
                    [['description', 'meta_description'], 'string'],
                    [['price', 'wholesale_price', 'discount', 'discount_rate', 'special_price', 'tax', 'weight'], 'number'],
                    [['discount_from', 'discount_to', 'new_from', 'new_to', 'sale_from', 'sale_to', 'special_price_from', 'special_price_to', 'created_date', 'updated_date'], 'safe'],
                    [['category_id', 'main_image', 'gallery_images', 'canonical_name'], 'string', 'max' => 200],
                    [['product_name', 'product_code', 'meta_title', 'meta_keywords', 'discount_type', 'video_link', 'status', 'search_tag', 'related_products'], 'string', 'max' => 225],
                    [['hover_image', 'video'], 'string', 'max' => 150],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'category_id' => 'Category',
                    'product_name' => 'Product Name',
                    'product_code' => 'Product Code',
                    'brand_id' => 'Brand',
                    'merchant_id' => 'Merchant ID',
                    'merchant_type' => 'Merchant Type',
                    'description' => 'Description',
                    'main_image' => 'Main Image',
                    'gallery_images' => 'Gallery Images',
                    'hover_image' => 'Hover Image',
                    'canonical_name' => 'Canonical Name',
                    'meta_title' => 'Meta Title',
                    'meta_description' => 'Meta Description',
                    'meta_keywords' => 'Meta Keywords',
                    'header_visibility' => 'Header Visibility',
                    'sort_order' => 'Sort Order',
                    'display_category_name' => 'Display Category Name',
                    'price' => 'Price',
                    'wholesale_price' => 'Wholesale Price',
                    'is_discount_available' => 'Is Discount Available',
                    'discount' => 'Discount',
                    'discount_type' => 'Discount Type',
                    'discount_rate' => 'Discount Rate',
                    'discount_from' => 'Discount From',
                    'discount_to' => 'Discount To',
                    'quantity' => 'Quantity',
                    'requires_shipping' => 'Requires Shipping',
                    'enquiry_sale' => 'Enquiry Sale',
                    'new_from' => 'New From',
                    'new_to' => 'New To',
                    'sale_from' => 'Sale From',
                    'sale_to' => 'Sale To',
                    'special_price_from' => 'Special Price From',
                    'special_price' => 'Special Price',
                    'special_price_to' => 'Special Price To',
                    'tax' => 'Tax',
                    'gift_option' => 'Gift Option',
                    'stock_availability' => 'Stock Availability',
                    'video_link' => 'Video Link',
                    'video' => 'Video',
                    'weight' => 'Weight',
                    'weight_class' => 'Weight Class',
                    'status' => 'Status',
                    'exchange' => 'Exchange',
                    'search_tag' => 'Search Tag',
                    'related_products' => 'Related Products',
                    'is_cod_available' => 'Is Cod Available',
                    'is_available' => 'Is Available',
                    'is_featured' => 'Is Featured',
                    'is_admin_approved' => 'Is Admin Approved',
                    'created_by' => 'Created By',
                    'updated_by' => 'Updated By',
                    'created_date' => 'Created Date',
                    'updated_date' => 'Updated Date',
                ];
        }

}

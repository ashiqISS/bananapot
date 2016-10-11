<?php

namespace backend\models;

use yii;

/**
 * This is the model class for table "product_categories".
 *
 * @property integer $id
 * @property string $parent
 * @property string $category_name
 * @property string $description
 * @property string $image
 * @property integer $sort_order
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $header_visibility
 * @property string $search_tag
 * @property integer $status
 * @property string $canonical_name
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $created_date
 * @property string $updated_date
 */
class Category extends \yii\db\ActiveRecord {

        /**
         * @inheritdoc
         */
        public static function tableName() {
                return 'product_categories';
        }

        /**
         * @inheritdoc
         */
        public function rules() {
                return [
                    [['parent', 'category_name', 'description', 'image', 'sort_order', 'meta_title', 'meta_description', 'meta_keywords', 'header_visibility', 'search_tag', 'status', 'canonical_name', 'created_by', 'created_date'], 'required'],
                    [['description', 'meta_description'], 'string'],
                    [['sort_order', 'header_visibility', 'status', 'created_by', 'updated_by'], 'integer'],
                    [['created_date', 'updated_date'], 'safe'],
                    [['parent', 'category_name', 'image', 'meta_title', 'meta_keywords', 'search_tag', 'canonical_name'], 'string', 'max' => 225],
                ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'parent' => 'Parent',
                    'category_name' => 'Category Name',
                    'description' => 'Description',
                    'image' => 'Image',
                    'sort_order' => 'Sort Order',
                    'meta_title' => 'Meta Title',
                    'meta_description' => 'Meta Description',
                    'meta_keywords' => 'Meta Keywords',
                    'header_visibility' => 'Header Visibility',
                    'search_tag' => 'Search Tag',
                    'status' => 'Status',
                    'canonical_name' => 'Canonical Name',
                    'created_by' => 'Created By',
                    'updated_by' => 'Updated By',
                    'created_date' => 'Created Date',
                    'updated_date' => 'Updated Date',
                ];
        }

        public function Categories($parent = 0) {
                $returnhtml = [];
                $mainCat = new \yii\db\Query;
                $mainCat->select(['id', 'parent', 'category_name', 'canonical_name'])
                        ->from('product_categories')
                        ->andwhere('parent =' . $parent);
                $command = $mainCat->createCommand();
                $categoryies = $command->queryAll();

                foreach ($categoryies as $category) {
                        $returnhtml[$category['id']] = $category['category_name'];
                        $childCat = new \yii\db\Query;
                        $childCat->select(['id', 'parent', 'category_name', 'canonical_name'])
                                ->from('product_categories')
                                ->andwhere('parent = ' . $category['id']);
                        $command1 = $childCat->createCommand();
                        $childs = $command1->queryAll();
                        if (count($childs) > 0) {
                                for ($j = 0; $j < count($childs); $j++) {
                                        $returnhtml[$childs[$j]["id"]] = $category['category_name'] . '->' . $childs[$j]["category_name"];
                                        $returnhtml = $returnhtml + self::listCategory($childs[$j]['id'], $category['category_name'] . '->' . $childs[$j]["category_name"]);
                                }
                        }
                }

                return $returnhtml;
        }

        public function listCategory($parent, $catname) {
                $html = [];
                $subCatw = new \yii\db\Query;
                $subCatw->select(['id', 'parent', 'category_name', 'canonical_name'])
                        ->from('product_categories')
                        ->andWhere(['parent' => $parent]);

                $command2 = $subCatw->createCommand();
                $subcats = $command2->queryAll();

                if (count($subcats) > 0) {
                        foreach ($subcats as $subcategory) {
                                $html[$subcategory["id"]] = $catname . '->' . $subcategory["category_name"];
                                $html = $html + $this->listCategory($subcategory["id"], $catname);
                        }
                }
                return $html;
        }

}

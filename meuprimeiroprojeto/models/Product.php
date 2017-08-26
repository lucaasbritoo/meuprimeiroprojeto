<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $model
 * @property integer $quantity
 * @property string $image
 * @property integer $shipping
 * @property string $price
 * @property string $date_available
 * @property string $weight
 * @property string $length
 * @property string $width
 * @property string $height
 * @property integer $sort_order
 * @property integer $status
 * @property integer $viewed
 * @property string $date_added
 * @property string $date_modified
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'date_added', 'date_modified'], 'required'],
            [['quantity', 'shipping', 'sort_order', 'status', 'viewed'], 'integer'],
            [['price', 'weight', 'length', 'width', 'height'], 'number'],
            [['date_available', 'date_added', 'date_modified'], 'safe'],
            [['model'], 'string', 'max' => 64],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'quantity' => 'Quantity',
            'image' => 'Image',
            'shipping' => 'Shipping',
            'price' => 'Price',
            'date_available' => 'Date Available',
            'weight' => 'Weight',
            'length' => 'Length',
            'width' => 'Width',
            'height' => 'Height',
            'sort_order' => 'Sort Order',
            'status' => 'Status',
            'viewed' => 'Viewed',
            'date_added' => 'Date Added',
            'date_modified' => 'Date Modified',
        ];
    }
}

<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ProdutoMeli extends Model
{
    public $id;
    public $title;
    public $category;
    public $price;
    public $available_quantity;
    public $thumbnail;
    public $permalink;

    public function rules()
    {
        return [
            [['id'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Código Meli'
        ];
    }

    public static function find()
    {
        return new ProdutoMeliQuery(get_called_class());
    }
}

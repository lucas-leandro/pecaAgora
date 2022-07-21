<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargo".
 *
 * @property int $id
 * @property string|null $nome
 *
 * @property Funcionarios[] $funcionarios
 */
class Cargo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cargo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * Gets query for [[Funcionarios]].
     *
     * @return \yii\db\ActiveQuery|FuncionariosQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionarios::className(), ['cargo_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CargoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CargoQuery(get_called_class());
    }
}

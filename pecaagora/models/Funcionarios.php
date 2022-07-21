<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionarios".
 *
 * @property string|null $nome
 * @property string|null $cpf
 * @property string|null $logradouro
 * @property string|null $cep
 * @property string|null $cidade
 * @property string|null $estado
 * @property string|null $numero
 * @property string|null $complemento
 * @property int $cargo_id
 * @property int $id
 *
 * @property Cargo $cargo
 */
class Funcionarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'logradouro', 'cep', 'cidade', 'estado', 'numero', 'complemento'], 'string'],
            [['cargo_id'], 'required'],
            [['cargo_id'], 'default', 'value' => null],
            [['cargo_id'], 'integer'],
            [['cargo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cargo::className(), 'targetAttribute' => ['cargo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nome' => Yii::t('app', 'Nome'),
            'cpf' => Yii::t('app', 'Cpf'),
            'logradouro' => Yii::t('app', 'Logradouro'),
            'cep' => Yii::t('app', 'Cep'),
            'cidade' => Yii::t('app', 'Cidade'),
            'estado' => Yii::t('app', 'Estado'),
            'numero' => Yii::t('app', 'Numero'),
            'complemento' => Yii::t('app', 'Complemento'),
            'cargo_id' => Yii::t('app', 'Cargo ID'),
            'id' => Yii::t('app', 'ID'),
        ];
    }

    /**
     * Gets query for [[Cargo]].
     *
     * @return \yii\db\ActiveQuery|CargoQuery
     */
    public function getCargo()
    {
        return $this->hasOne(Cargo::className(), ['id' => 'cargo_id']);
    }

    /**
     * {@inheritdoc}
     * @return FuncionariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FuncionariosQuery(get_called_class());
    }
}

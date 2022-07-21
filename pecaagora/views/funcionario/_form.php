<?php

use app\models\CargoQuery;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Funcionarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funcionarios-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput() ?>

    <?= $form->field($model, 'cpf')->textInput() ?>

    <?= $form->field($model, 'logradouro')->textInput() ?>

    <?= $form->field($model, 'cep')->textInput() ?>

    <?= $form->field($model, 'cidade')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'complemento')->textInput() ?>
    
    <?= $form->field($model, 'cargo_id')->dropDownList(
        ArrayHelper::map($cargos,'id','nome'),
        ['prompt'=>'Selecione seu cargo.']
        )
    ?>
    

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Salvar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
use \yii\widgets\ActiveForm;
use \yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProdutoMeli */


?>
<h2>Produtos Meli</h2>
<hr>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Pesquisar Produto',['class'=>'btn btn-dark'])?>
    </div>


<?php ActiveForm::end()?>
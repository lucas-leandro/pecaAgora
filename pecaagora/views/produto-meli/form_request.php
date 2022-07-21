<?php
/* @var $this yii\web\View */
/* @var $model app\models\ProdutoMeli */


?>
<div class="container ">
    <div class="card m-auto" style="width: 18rem;">
        <img class="card-img-top" src="<?=$model->thumbnail?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?=$model->title?></h5>
            <h4 class="card-text">Preço: <span class=" card-text text-success"> R$<?=$model->price?></span></h4>
            <h6 class="card-text">Quantidade Disponivel: <span class=" card-text text-danger"><?=$model->available_quantity?></span></h6>
            <a target="_blank" href="<?=$model->permalink?>" class="btn btn-dark">Comprar</a>
        </div>
    </div>

</div>

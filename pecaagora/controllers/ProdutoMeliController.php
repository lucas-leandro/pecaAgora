<?php

namespace app\controllers;
use  GuzzleHttp\Client ;
use app\models\ProdutoMeli;
use yii\web\Controller;

class ProdutoMeliController extends Controller
{
    public function actionIndex()
    {
        $dados = null;

        $model = new ProdutoMeli();
        $dados = \Yii::$app->request->post();


        if($model->load($dados)){
            $id = $dados['ProdutoMeli']['id'];


            $client = new Client();

            $res = $client->request('GET', 'https://api.mercadolibre.com/items/'.$id);
            $dados_produto = json_decode($res->getBody(),true);

            $model->title = $dados_produto['title'];
            $model->category = $dados_produto['category_id'];
            $model->price = $dados_produto['price'];
            $model->available_quantity = $dados_produto['available_quantity'];
            $model->thumbnail = $dados_produto['thumbnail'];
            $model->permalink = $dados_produto['permalink'];

            return $this->render('form_request',[
                'model' => $model
            ]);
        }else{
            return $this->render('form',[
                    'model'  => $model
                ]
            );
        }

    }



}

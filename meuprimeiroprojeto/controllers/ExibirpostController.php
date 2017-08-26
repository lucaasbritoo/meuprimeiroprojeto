<?php

namespace app\controllers;

use app\models\Post;
use app\models\PostSearch;
use Yii;


class ExibirpostController extends \yii\web\Controller
{
  
  public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $post = Post::find()->all();
        return $this->render('index',array(
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'post'=> $post
        ));
    }


    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $post = Post::findOne($id);
        
        
        //viewed = viewed + 1
        // salvar
        $post->viewed = $post->viewed +1;
        $post->save();
            
        return $this->render('view',array(
                                        'post'=> $post
                                    )
                            );
    }
    }
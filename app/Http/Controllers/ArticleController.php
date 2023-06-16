<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
//↑はlaravelのcontrollerをextends（継承）してArticleControllerのclassを作っているよという意味

{
    //ユーザーログイン画面の表示
    public function showList(){
        $model = new Article();
        $articles = $model->getList();


        return view('list',['articles' => $articles]);
    }
}


//①（M)article modelを呼び出す
//②（C)contorollerからbladeに渡す
//③（V)bladeで表示する

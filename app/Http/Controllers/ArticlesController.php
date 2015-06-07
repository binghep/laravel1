<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function index(){
        $articles=Article::all();

        //return $articles; //the browser displays valid json array
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article=Article::findOrFail($id);
        //return $id;
//        if (is_null($article)){
//            abort(404);
//        }
        return view('articles.show', compact('article'));
    }
}

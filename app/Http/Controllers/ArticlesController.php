<?php namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;


class ArticlesController extends Controller
{

    public function index()
    {
        //$articles=Article::all();                         //this is in ascending order
        $articles = Article::latest('published_at')->get(); //this is sort by published_at column in descending order

        //return $articles; //the browser displays valid json array
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        //return $id;
//        if (is_null($article)){
//            abort(404);
//        }
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public static function store()
    {
        //$title=Request::get('title');
//        $body=Request::get('body');
//        $title=$input['title'];
//        $article=new Article;
//        $article->title=$title;
//        $article->body=$body;
        Article::create(Request::all());
        return redirect('articles');
    }

}

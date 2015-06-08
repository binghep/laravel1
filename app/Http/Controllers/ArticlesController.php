<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;


class ArticlesController extends Controller
{

    public function index()
    {
        date_default_timezone_set( "America/Los_Angeles" );
        //$articles=Article::all();                         //this is in ascending order
        //$articles = Article::latest('published_at')->get(); //this is sort by published_at column in descending order
        $articles = Article::latest('published_at')->published()->get();
        //return $articles; //the browser displays valid json array
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $year=$article->created_at->year;
        $day=$article->created_at->addDays(8)->diffForHumans();

        //return $id;
//        if (is_null($article)){
//            abort(404);
//        }
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $carbon_time= Carbon::createFromFormat('Y-m-d', date('Y-m-d'));
        return view('articles.create', compact($carbon_time));
    }

    /**
     * Save a new article;
     *
     * @param CreateArticleRequest $request
     * @return Response
     */
    public static function store(CreateArticleRequest $request)
    {
        //validation (triggered before executing this method). the body will never fire unless our validation passed.

        //$title=Request::get('title');
//        $body=Request::get('body');
//        $title=$input['title'];
//        $article=new Article;
//        $article->title=$title;
//        $article->body=$body;
        Article::create($request->all());
        return redirect('articles');
    }

}

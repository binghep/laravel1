<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;


class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only'=>'create']); //use 'auth' middleware on every route(or 'create' route) in this ArticlesController. Now, /articles/create page is only available to users who logged in. redirect to login page. See kernel.php in App/Http
    }
    public function index()
    {
//        return \Auth::user();
//        return \Auth::user()->name;
        date_default_timezone_set("America/Los_Angeles");
        //$articles=Article::all();                         //this is in ascending order
        //$articles = Article::latest('published_at')->get(); //this is sort by published_at column in descending order
        //$articles = Article::latest('published_at')->published()->get();
        $articles = Article::latest()->get();  //sort by created_at desc

        //return $articles; //the browser displays valid json array
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $year = $article->created_at->year;
        $day = $article->created_at->addDays(8)->diffForHumans();

        //return $id;
//        if (is_null($article)){
//            abort(404);
//        }
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $carbon_time = Carbon::createFromFormat('Y-m-d', date('Y-m-d'));
        return view('articles.create', compact('carbon_time'));
    }

    /**
     * Save a new article;
     *
     * @param ArticleRequest $request
     * @return Response
     */
    public static function store(ArticleRequest $request)
    {
        //validation (triggered before executing this method). the body will never fire unless our validation passed.
        $article = new Article($request->all());
        \Auth::user()->articles()->save($article);
        //$title=Request::get('title');
//        $body=Request::get('body');
//        $title=$input['title'];
//        $article=new Article;
//        $article->title=$title;
//        $article->body=$body;

        //$request['published_at']=Carbon::now();
        //Article::create($request->all());
        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        //dd($article);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)//reflection, ok, laravel sees that we want a request object, we are gonna instatiate it and pass it in to this function.
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}

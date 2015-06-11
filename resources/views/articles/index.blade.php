@extends('app')

@section('content')
    <h1>Articles</h1>
    <hr/>

    @foreach($articles as $article)
        <article>
            <h2>
                {{--<a href="/articles/{{$article->id}}">{{$article->title}}</a>--}}
                <a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a>
            </h2>
            <span style="color:grey">  Posted at {{$article->created_at}} By <a href="{{action('UsersController@show', [$article->user_id])}}">{{$article->owner_name()}}</a></span>

            <div class="body">
                {{$article->body}}
            </div>
        </article>
    @endforeach
@endsection
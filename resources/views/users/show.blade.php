@extends('app')

@section('content')
        <h1>{{$user->name}}</h1>
        <h4>{{$user->name}}'s published articles</h4>
        <hr/>

        @foreach($articles as $article)
            <article>
                <h2>
                    {{--<a href="/articles/{{$article->id}}">{{$article->title}}</a>--}}
                    <a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a>
                </h2>
                <span style="color:grey">  Posted at {{$article->created_at}} </span>

                <div class="body">
                    {{$article->body}}
                </div>
            </article>
        @endforeach
@endsection
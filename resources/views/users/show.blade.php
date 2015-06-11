@extends('app')

@section('content')
        <h1>{{$user->name}}</h1>
        <p>Articles this user published:</p>
        <hr/>

        @foreach($articles as $article)
            <article>
                <h2>
                    {{--<a href="/articles/{{$article->id}}">{{$article->title}}</a>--}}
                    <a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a>
                </h2>
                <span style="color:grey">  Creation Date: {{$article->created_at}}</span>

                <div class="body">
                    {{$article->body}}
                </div>
            </article>
        @endforeach
@endsection
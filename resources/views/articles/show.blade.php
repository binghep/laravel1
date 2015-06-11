@extends('app')

@section('content')
        <article>
            <h1>{{$article->title}}</h1>
            @if (\Auth::user()->id==$article->user_id)
            <a href="{{action('ArticlesController@edit',[$article->id]}}">Edit</a>
            @endif
            <span>  Posted at {{$article->created_at}} By <a href="{{action('UsersController@show', [$article->user_id])}}">{{$article->owner_name()}}</a></span>

            <div>{{$article->body}}</div>
        </article>
@endsection
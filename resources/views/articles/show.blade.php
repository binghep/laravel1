@extends('app')

@section('content')
        <article>
            <button onclick='location.href="{{ URL::previous() }}"' >Back</button>

            <h1>{{$article->title}}</h1>

            <span>  Posted at {{$article->created_at}} By <a href="{{action('UsersController@show', [$article->user_id])}}">{{$article->owner_name()}}</a></span>
            @if (!Auth::guest() && Auth::user()->id==$article->user_id)
                <button onclick='location.href="{{action('ArticlesController@edit',[$article->id])}}"'>Edit</button>
            @endif

            <div>{{$article->body}}</div>
        </article>
@endsection
@extends('app')

@section('content')
        <article>
            <h1>{{$article->title}}</h1> <span>  {{$article->published_at}}</span>

            <div>{{$article->body}}</div>
        </article>
@endsection
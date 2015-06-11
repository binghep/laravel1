@extends('app')

@section('content')

        <article>
            <button onclick='location.href="{{ URL::previous() }}"' >Back</button>

            <h1>Edit: {{$article->title}}</h1>

            @include('errors.list')

            {!! Form::model($article, ['method'=>'PATCH','url'=>'articles/'.$article->id]) !!}
                @include('articles._form', ['submitButtonText'=>'Update Article'])
            {!! Form::close() !!}


        </article>
@endsection
@extends('app')

@section('content')
    <h1>Write a New Article</h1>
    <hr/>

    {{--<form action="post">--}}
    {{--<label for="article_title">Title</label>--}}
    {{--<input type="text" name="article_title"/>--}}
    {{--<br/>--}}
    {{--<label for="article_body">Content</label>--}}
    {{--<textarea name="article_body"  cols="100" rows="10"></textarea>--}}
    {{--</form>--}}

    {{--{!! Form::open() !!}--}}
    {{--{!! Form::label('name','Name:') !!}--}}
    {{--{!! Form::text('name') !!}--}}
    {{--{!! Form::close() !!}--}}

    @include('errors.list')

    {!! Form::open(['url'=>'articles']) !!}
        @include('articles._form', ['submitButtonText'=>'Add Article'])
    {!! Form::close() !!}

@endsection
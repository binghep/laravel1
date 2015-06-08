@extends('app')

@section('content')

        <article>
            <h1>Edit: {{$article->title}}</h1> <span>  {{$article->published_at}}</span>

            {!! Form::model($article, ['method'=>'PATCH','url'=>'articles/'.$article->id]) !!}
            <!-- Title Form Input -->
            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <!-- Body Form Input -->
            <div class="form-group">
                {!! Form::label('body','Body:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>

            <!-- Published_at Form Input -->
            <div class="form-group">
                {!! Form::label('published_at','Published On:') !!}
                {{--date('Y-m-d')--}}
                {!! Form::input('date','published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
            </div>

            <!-- Add Article Form Input-->
            <div class="form-group">
                {!! Form::submit('Update Article',['class'=>'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('errors.list')

        </article>
@endsection
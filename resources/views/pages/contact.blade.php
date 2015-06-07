@extends('app')

@section('content')
    {{--do not escape html characters, can execute script--}}
    <h1>You can contact me at jiayi@gmail.com. {!!$name!!}</h1>
@stop


@section('footer')
    This is a footer
@stop
@extends('app')

@section('content')
    {{--if array is empty, don't display ul--}}
    @if (count($people))
    <h1>People I like</h1>
    <ul>
        @foreach ($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif
@stop


@section('footer')
    This is a footer
@stop
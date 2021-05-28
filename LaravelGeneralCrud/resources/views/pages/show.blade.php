@extends('layouts.main-layout')

@section('content')

    <h1>Match:</h1>

    <h2>
        @if ($match -> result)

            {{$match -> team1}} - <u>{{$match -> team2}}</u>
        @else

            <u>{{$match -> team1}}</u> - {{$match -> team2}}

        @endif

    </h2>

    <h3>

        {{$match -> point1}} - {{$match -> point2}}

    </h3>

    <h4>

        Result: {{$match -> result}}

    </h4>

@endsection

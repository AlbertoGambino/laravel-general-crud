@extends('layouts.main-layout')

@section('content')

<h1>Edit Match</h1>

<form action="{{ route('update', $match -> id)}}" method="post">

@csrf

@method('POST')

<label for="team1">Team 1</label>

<input id="team1" type="text" name="team1" value="{{$match->team1}}">

<label for="team2">Team 2</label>

<input id="team2" type="text" name="team2" value="{{$match->team2}}">

<label for="point1">Point 1</label>

<input id="point1" type="number" name="point1" value="{{$match->point1}}">

<label for="point2">Point 2</label>

<input id="point2" type="number" name="point2" value="{{$match->point2}}">

<label for="result">Result</label>

<select id="result" name="result">

    <option value="0"

        @if ($match -> result == 0)

            selected

        @endif

    >Team 1</option>

    <option value="1"

        @if ($match -> result == 1)

            selected

        @endif

    >Team 2</option>

</select>

<input type="submit" value="UPDATE">

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
       </div>
@endif

</form>

@endsection

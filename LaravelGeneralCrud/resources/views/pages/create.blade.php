@extends('layouts.main-layout')

@section('content')

<h1>Create Match</h1>

<form action="{{ route('store')}}" method="post">

@csrf

@method('POST')

<label for="team1">Team 1</label>

<input id="team1" type="text" name="team1" value="">

<label for="team2">Team 2</label>

<input id="team2" type="text" name="team2" value="">

<label for="point1">Point 1</label>

<input id="point1" type="number" name="point1" value="">

<label for="point2">Point 2</label>

<input id="point2" type="number" name="point2" value="">

<label for="result">Result</label>

<select id="result" name="result">

    <option value="0">Team 1</option>

    <option value="1">Team 2</option>

</select>

<input type="submit" value="CREATE">

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

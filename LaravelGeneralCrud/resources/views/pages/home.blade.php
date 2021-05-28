@extends('layouts.main-layout')

@section('content')

    <h1>Available Matches:</h1>

    <ul>

        @foreach ($matches as $match)

            <li>

            <a href="{{route('show', $match -> id)}}">

                {{$match -> getTeams()}}

            </a>
            <a href="{{ route('edit', $match -> id)}}">

                &#128398;

            </a>

            <a href="{{ route('delete', $match -> id)}}">

                &#128500;

            </a>

        </li>

        @endforeach


    </ul>

@endsection

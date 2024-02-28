@extends('layouts.app')
@section('head')
    <title>Projects</title>
@endsection

@section('content')

    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
        <li>
            <strong>{{ $project -> name }} : </strong>{{ $project -> type -> name }}
        </li>
        @endforeach
    </ul>

@endsection
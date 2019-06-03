@extends('layouts.layout')

@section('content')
    <h1>Projects</h1>

    @foreach ($project as $project)
        <li>{{ $project->title }}</li>
    @endforeach
@endsection
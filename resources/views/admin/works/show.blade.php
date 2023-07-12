@extends('admin.layouts.base')

@section('contents')

    <h1>{{ $work->title }}</h1>
    <div class="d-flex">
        <p>{{ $work->link }}</p>
        <p>{{ $work->github }}</p>
    </div>
    <img src="{{ $work->image_large }}" alt="{{ $work->title }}">
    <div class="d-flex">
        <img src="{{ $work->image_secondary_one }}" alt="{{ $work->title }}">
        <img src="{{ $work->image_secondary_two }}" alt="{{ $work->title }}">
        <img src="{{ $work->image_secondary_three }}" alt="{{ $work->title }}">    
    </div>
    <p>{{ $work->short_description }}</p>
    <p>{{ $work->description }}</p>

@endsection
@extends('layouts.app')

@section('page_title')
    Show Comic
@endsection

@section('main_content')
    
    <h1>{{ $comic->title }}</h1>

@endsection
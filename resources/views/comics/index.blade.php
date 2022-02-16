@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')
    
    <h1>Lista di fumetti</h1>
            
    @foreach ($comics as $comic)
        <h3><a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a></h3>
        <div>Serie: {{ $comic->series }}</div>
    @endforeach

@endsection
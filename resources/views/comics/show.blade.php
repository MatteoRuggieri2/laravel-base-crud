@extends('layouts.app')

@section('page_title')
    Show Comic
@endsection

@section('main_content')
    
<div class="container">
    <div class="card">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <div>Series: {{ $comic->series }}</div>
          <div>Tipo: {{ $comic->type }}</div>
          <div>Prezzo: {{ $comic->price }}</div>
          <div>Saldi: {{ $comic->sale_date }}</div>
          <p class="card-text">{!! $comic->description !!}</p>
        </div>
    </div>

    {{-- Edit Button --}}
    <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>

    {{-- Delete Button --}}
    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('DELETE')

        <button class="btn btn-danger">Elimina</button>
    </form>
</div>

@endsection
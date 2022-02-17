@extends('layouts.app')

@section('page_title')
    Modifica un fumetto
@endsection

@section('main_content')

    <div class="container">
        <h1>Modifica il fumetto</h1>

        {{-- Form per la modifica di un fumetto --}}
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{ $comic->title }}">
            </div>

            {{-- Series --}}
            <div class="mb-3">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Serie" value="{{ $comic->series }}">
            </div>

            {{-- Type --}}
            <div class="mb-3">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Tipo" value="{{ $comic->type }}">
            </div>

            {{-- Price --}}
            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo" value="{{ $comic->price }}">
            </div>

            {{-- Sale Date --}}
            <div class="mb-3">
                <label for="sale_date">Data degli sconti</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Data" value="{{ $comic->sale_date }}">
            </div>

            {{-- Url img --}}
            <div class="mb-3">
                <label for="thumb">Url Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url" value="{{ $comic->thumb }}">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Descrizione">{{ $comic->description }}</textarea>
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-primary">Conferma Modifica</button>
            
        </form>

        {{-- Delete Changes Button --}}
        <a class="btn btn-danger" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Annulla Modifiche</a>

    </div>

@endsection
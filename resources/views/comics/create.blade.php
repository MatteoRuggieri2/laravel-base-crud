@extends('layouts.app')

@section('page_title')
    Crea un nuovo fumetto
@endsection

@section('main_content')

    <div class="container">
        <h1>Crea un nuovo fumetto</h1>

        {{-- Form per la creazione di un nuovo fumetto --}}
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            {{-- Title --}}
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="" id="title" placeholder="Titolo">
            </div>

            {{-- Series --}}
            <div class="mb-3">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="" id="series" placeholder="Serie">
            </div>

            {{-- Type --}}
            <div class="mb-3">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" name="" id="type" placeholder="Tipo">
            </div>

            {{-- Price --}}
            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="" id="price" placeholder="Prezzo">
            </div>

            {{-- Sale Date --}}
            <div class="mb-3">
                <label for="sale_date">Data degli sconti</label>
                <input type="text" class="form-control" name="" id="sale_date" placeholder="Data">
            </div>

            {{-- Url img --}}
            <div class="mb-3">
                <label for="thumb">Url Immagine</label>
                <input type="text" class="form-control" name="" id="thumb" placeholder="Url">
            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="" id="description" cols="30" rows="10" placeholder="Descrizione"></textarea>
            </div>

            {{-- Submit --}}
            <button type="submit" class="btn btn-primary">Crea</button>
            
        </form>
    </div>

@endsection
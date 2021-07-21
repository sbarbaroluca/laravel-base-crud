@extends ('layouts.app')

@section('title')
  <title>DC | Modifica {{ $comic->title }}</title>
@endsection  

@section('content')
  <h2 class="my-3">Modifica {{ $comic->title }}</h2>
  <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="mt-3">
    @csrf
    @method('PATCH')
    <div class="md-3">
      <label for="title">Titolo</label>
      <input type="text" class="from-control" id="title" placeholder="Inserisci il titolo del fumetto" name="title" value="{{ $comic->title }}">
    </div>
    <div class="md-3">
      <label for="thumb">Url Immagine</label>
      <input type="text" class="from-control" id="thumb" placeholder="Inserisci l'immagine di copertina del fumetto" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="md-3">
      <label for="price">Prezzo</label>
      <input type="number" step="0.01" class="from-control" id="price" placeholder="Inserisci il prezzo del fumetto" name="price" value="{{ $comic->price }}">
    </div>
    <div class="md-3">
      <label for="series">Serie</label>
      <input type="text" class="from-control" id="series" placeholder="Inserisci la serie del fumetto" name="series" value="{{ $comic->series }}">
    </div>
    <div class="md-3">
      <label for="sale_date">Data d'uscita</label>
      <input type="date" class="from-control" id="sale_date" placeholder="Inserisci la data d'uscita del fumetto" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="md-3">
      <label for="type">Tipo</label>
      <input type="text" class="from-control" id="type" placeholder="Inserisci il tipo di fumetto" name="type" value="{{ $comic->type }}">
    </div>
    <div class="md-3">
      <label for="description">Trama</label>
      <textarea class="from-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto" rows="4">{{ $comic->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary my-5">Salva</button>
    <a class="btn btn-secondary text-light" href="{{ route('comics.index') }}">Torna all'indice</a>
  </form>
@endsection    

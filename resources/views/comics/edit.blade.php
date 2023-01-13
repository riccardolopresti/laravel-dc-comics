@extends('layout.main')

@section('content')
<div class="container">
    <div class="row py-3">

        <h2 class="fw-bold">COMICS EDIT</h2>


        <div class="col py-5">

            <form action="{{route('comics.update', $comic)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" placeholder="Inserisci il titolo">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}" placeholder="Inserisci URL dell'immagine">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}" placeholder="Inserisci il prezzo">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}" placeholder="Inserisci la serie">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Inserisci la data di uscita XXXX-XX-XX">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}" placeholder="Inserisci il tipo">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="5"  placeholder="Inserisci la descrizione">
                        {{old('description', $comic->description)}}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-success">Invia</button>

            </form>

        </div>
    </div>
</div>
@endsection

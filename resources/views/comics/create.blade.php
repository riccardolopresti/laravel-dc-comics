@extends('layout.main')

@section('content')
<div class="container">

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row py-3">

        <h2 class="fw-bold">COMICS ADD</h2>


        <div class="col py-5">

            <form action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo *</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" placeholder="Inserisci il titolo">

                    @error('title')
                        <p class="invalid-feedback">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine *</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}" placeholder="Inserisci URL dell'immagine">

                    @error('thumb')
                        <p class="invalid-feedback">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo *</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" placeholder="Inserisci il prezzo">

                    @error('title')
                        <p class="invalid-feedback">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie *</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}" placeholder="Inserisci la serie">

                    @error('series')
                        <p class="invalid-feedback">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Uscita *</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}" placeholder="Inserisci la data di uscita XXXX-XX-XX">

                    @error('sale_date')
                        <p class="invalid-feedback">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo *</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}" placeholder="Inserisci il tipo">

                    @error('type')
                        <p class="invalid-feedback">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Invia</button>

            </form>

            <a class="btn btn-success mt-5" href="{{route('comics.index')}}" role="button">Torna alla Home</a>

        </div>
    </div>
</div>
@endsection

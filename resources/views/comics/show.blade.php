@extends('layout.main')

@section('content')
<div class="container">
    <div class="row py-3">

        <h2>Comics Detail</h2>

        <div class="col py-5">

            <div class="card text-capitalize" style="width: 25rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                  <h5 class="card-title fw-bold">{{$comic->title}}</h5>
                  <p><strong>Prezzo:</strong> &euro; {{$comic->price}}</p>
                  <p><strong>Serie:</strong> {{$comic->series}}</p>
                  <p><strong>Tipo:</strong> {{$comic->type}}</p>
                  <p><strong>Uscita:</strong> {{$comic->sale_date}}</p>
                  <p class="card-text">{{$comic->description}}</p>
                </div>
              </div>

              <a class="btn btn-success mt-5" href="{{route('comics.index')}}" role="button">Torna alla Home</a>

        </div>


    </div>

</div>
@endsection

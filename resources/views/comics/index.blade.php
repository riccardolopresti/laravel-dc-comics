@extends('layout.main')

@section('content')
<div class="container">
    <div class="row py-3">

        <h1>Comics List</h1>
        <div class="col py-5">



            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>

                    @forelse ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->type}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('comics.show', $comic)}}" role="button"><i class="fa-solid fa-eye"></i></a>
                                <a class="btn btn-warning" href="#" role="button"><i class="fa-solid fa-pencil"></i></a>
                                <a class="btn btn-danger" href="#" role="button"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <h3>Nessun risultato!</h3>
                    @endforelse

                </tbody>
              </table>

              <a class="btn btn-success w-100 mb-5" href="{{route('comics.create')}}" role="button"><i class="fa-solid fa-plus"></i> Add New Comic</a>

              {{ $comics->links() }}
        </div>

    </div>

</div>
@endsection

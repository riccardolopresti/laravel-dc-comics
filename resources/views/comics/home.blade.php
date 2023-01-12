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
                            <td>xxxxx</td>
                        </tr>
                    @empty

                    @endforelse


                </tbody>
              </table>
        </div>

    </div>

</div>
@endsection

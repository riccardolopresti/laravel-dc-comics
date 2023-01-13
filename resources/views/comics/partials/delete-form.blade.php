<form class="d-inline" onsubmit="return confirm('Vuoi davvero eliminare eliminare {{$comic->title}}?')" action="{{route('comics.destroy', $comic)}}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger" title="delete"><i class="fa-solid fa-trash"></i></button>
</form>

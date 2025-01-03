<x-main-layout>
<x-success></x-success>
<h1>Gestisci i tuoi articoli</h1>
<div><button class="btn btn-outline-primary btn-lg"><a href="{{route('articles.create')}}">Crea il tuo articolo</a></button></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
            </tr>
        </thead>
            <tbody>

            @foreach ($articles as $article)

            <tr>
                <th scope="row">{{$article->id}}</th>
                <td colspan="2">{{$article->title}}</td>
                <td><button class="btn btn-outline-primary"><a href="{{route('articles.edit',$article)}}">Modifica</a></button>
                <form class="d-inline" action="{{route('articles.destroy',$article)}}" method="POST">
                @csrf
                @method('DELETE')
                <button  type="submit" class="btn btn-warning">Elimina</button></td>
                </form>
            </tr>

            @endforeach
            </tbody>
    </table>
</x-main-layout>
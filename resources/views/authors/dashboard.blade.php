<x-main-layout>
<x-success></x-success>
<h1>Gestisci i tuoi autori</h1>
<div><button class="btn1 btn-outline-primary btn-lg"><a href="{{route('authors.create')}}">Inserisci un nuovo autore</a></button></div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th colspan="2">Nome</th>
                <th colspan="1">Cognome</th>
                <th>Azioni</th>
            </tr>
        </thead>
            <tbody>

            @foreach ($authors as $author)

            <tr>
                <th scope="row">{{$author->name}}</th>
                <td colspan="2">{{$author->surname}}</td>
                <td><button class="btn_modify btn-outline-primary"><a href="{{route('authors.edit',$author)}}">Modifica</a></button>
                <form class="d-inline" action="{{route('authors.destroy',$author)}}" method="POST">
                @csrf
                @method('DELETE')
                <button  type="submit" class="btn_delete btn-warning">Elimina</button></td>
                </form>
            </tr>

            @endforeach
            </tbody>
    </table>
</x-main-layout>
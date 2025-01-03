
    <x-main-layout>
    <x-success></x-success>
        <h1>Modifica l'autore {{$author->name}}</h1>
        <div class="row">
        <div class="col-4 mx-auto mt-5">
            <form action="{{route('authors.update',$author)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nome</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name',$author->name)}}">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="surname">Cognome</label>
            <input class="form-control @error('surname') is-invalid @enderror" type="text" name="surname" id="surname" cols="60" rows="10" value="{{old('surname',$author->surname)}}">
            @error('surname')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="phone">Telefono</label>
            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{old('phone',$author->phone)}}">
            @error('phone')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-primary mt-3">Modifica autore</button>
            </form>
            
        </div>
        </div>
    </x-main-layout>


    <x-main-layout>
    <x-success></x-success>
        <h1>Scrivi il tuo articolo!</h1>
        <div class="row">
        <div class="col-4 mx-auto mt-5">
            <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Titolo</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="body">Testo</label>
            <input class="form-control @error('body') is-invalid @enderror" type="text" name="body" id="body" cols="60" rows="10" value="{{old('body')}}">
            @error('body')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="author_id">Autore</label>
                       <select name="author_id" id="author" class="form-control">
             <option value="" selected>Scegli l'autore</option>
                @foreach ($authors as $author)               
                    <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                @endforeach
            @error('author_id')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </select>
            @foreach ($categories as $category)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$category->id}}" name="categories[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    {{$category->name}}
                </label>
            </div>
            @endforeach
            <label for="image">Carica un'immagine</label>
            <input type="file" name="image" id="image" class="form-control">

            <button type="submit" class="btn1 btn-primary mt-3">Invia</button>
            </form>
            
        </div>
        </div>
    </x-main-layout>

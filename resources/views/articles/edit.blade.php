<x-main-layout>
<h1>Modifica il tuo articolo!</h1>

        <div class="row">
        <div class="col-4 mx-auto mt-5">
            <form action="{{route('articles.update',$article)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title">Titolo</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title',$article->title)}}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="body">Testo</label>
            <input class="form-control @error('body') is-invalid @enderror" type="text" name="body" id="body" cols="60" rows="10" value="{{old('body',$article->body)}}">
            @error('body')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="author">Autore</label>
             <select name="author_id" id="author" class="form-control">
                @foreach ($authors as $author)               
                    <option value="{{$author->id}}" @selected($author->id == $article->author->id)>{{$author->name}} {{$author->surname}}</option>
                @endforeach
            @error('author_id')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </select>
            @foreach ($categories as $category)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{$category->id}}" name="categories[]" id="flexCheckDefault" @checked($article->categories->contains($category))>
                <label class="form-check-label" for="flexCheckDefault">
                    {{$category->name}}
                </label>
            </div>
            @endforeach
            <label for="image">Carica un'immagine</label>
            <input type="file" name="image" id="image" class="form-control">

            <button type="submit" class="btn_modify btn-primary mt-3">Invia le modifiche</button>
            </form>
            
        </div>
        </div>
</x-main-layout>
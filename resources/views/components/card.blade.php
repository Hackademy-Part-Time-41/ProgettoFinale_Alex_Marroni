<div class="card2" style="width: 12rem;">
  <img src="{{$article->image ?? 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->body}}</p>
    <p class="card-text">{{$article->author->name}} {{$article->author->surname}}</p>
    <a href="{{route('articles.show',$article)}}" class="btn1 btn-primary">Leggi l'articolo</a>
    <hr>
    <p style="color:rgb(217, 243, 176)">Categoria:</p>
    @foreach($article->categories as $category)
    <div class="col-auto">
      <a href="{{route('articles.byCategory',$category)}}">
      <button class="btn1 btn-primary">{{$category->name}}</button>
      </a>
      </div>
    @endforeach
  </div>
</div>
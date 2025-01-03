
    <x-main-layout>
        <h1> Homepage </h1>
        <div class="container-fluid">
         <div class="column">
            @foreach($categories as $category)
                <a href="{{route('articles.byCategory',$category)}}"><button class="btn btn-outline-primary btn-lg">{{$category->name}}</button></a>
            @endforeach
        </div>
        </div>


        <div class="container-fluid">
    <div class="row gap-2 mx-5">
        @foreach ($articles as $article)

            <x-card class="col-4" :title="$article->title" :body="$article->body" :image="asset($article->image)" :author="$article->author->name.' '.$article->author->surname" :route="route('articles.show', $article->id)" />

        @endforeach
    </x-main-layout>
  </body>

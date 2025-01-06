
    <x-main-layout>
        <h1> Homepage </h1>
        <div class="container-fluid">
         <div class="column">
            @foreach($categories as $category)
                <a href="{{route('articles.byCategory',$category)}}"><button class="btn btn_cat">{{$category->name}}</button></a>
            @endforeach
        </div>
        </div>
        <hr>


        <div class="container-fluid">
            <div class="row gap-2 mx-5">

        @foreach ($articles as $article)

            <x-card :article="$article" />

        @endforeach
            </div>
        </div>
        
    </x-main-layout>
  </body>

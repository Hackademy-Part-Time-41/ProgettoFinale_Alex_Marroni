    <x-main-layout>
    @auth
    <h1>Benvenuto nel tuo profilo,{{Auth::user()->name}}</h1>
    @endauth

    <div class="row gap-2 mx-5">
        @foreach ($articles as $article)

            <x-card class="col-4" :title="$article->title" :body="$article->body" :image="asset($article->image)" :author="$article->author->name.' '.$article->author->surname" :route="route('articles.show', $article->id)" />

        @endforeach
    </x-main-layout>

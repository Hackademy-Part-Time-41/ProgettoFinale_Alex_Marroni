<x-main-layout>
<h1> News </h1>
<div class="container-fluid">
    <div class="row gap-2 mx-5">
        @foreach ($articles as $article)

            <x-card class="col-4" :title="$article->title" :body="$article->body" :image="asset($article->image)" :author="$article->author" :route="route('articles.show', $article->id)" />

        @endforeach
</x-main-layout>

<x-main-layout>
<h1> News </h1>
<div class="container-fluid">
    <div class="row gap-2 mx-5">
        @foreach ($articles as $key => $article)

            <x-card class="col-4" :title="$article['title']" :description="$article['description']" :image="$article['image']" :route="route('articles.show', ['article'=>$key])" />

        @endforeach
</x-main-layout>

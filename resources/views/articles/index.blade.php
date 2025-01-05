<x-main-layout>
<h1> News </h1>
<div class="container-fluid">
    <div class="row gap-2 mx-5">
        @foreach ($articles as $article)



            <x-card :article="$article"/>

        @endforeach
</x-main-layout>

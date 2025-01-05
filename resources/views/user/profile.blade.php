    <x-main-layout>
    @auth
    <h1>Benvenuto nel tuo profilo,{{Auth::user()->name}}</h1>
    @endauth

    <div class="row gap-2 mx-5">
        @foreach ($articles as $article)

            <x-card :article="$article" />

        @endforeach
    </x-main-layout>

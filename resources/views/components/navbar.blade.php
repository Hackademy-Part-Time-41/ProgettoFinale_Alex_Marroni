<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetto Finale</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href={{route('articles.index')}}>Archivio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('contacts')}}>Contattaci</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href={{route('register')}}>Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route('login')}}>Accedi</a>
       </ul>
       @endguest
       @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sezione Utente
          </a>
          <ul class="dropdown-menu">
            <li>
            <a class="nav-link" href={{route('articles.dashboard')}}>Dashboard articoli</a>
            </li>
            <li>
            <a class="nav-link" href={{route('authors.index')}}>Dashboard autori</a>
            </li>
            <li>
            <a class="nav-link" href={{route('user.profile')}}>Profilo utente</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-submit">Disconnetti</button>
            </form>
            </li>
          </ul>

       @endauth
    </div>
  </div>
  </nav>

    {{$slot}}

  </body>
</html>
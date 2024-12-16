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
          <a class="nav-link" href="/articles/index">Archivio</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/articles/create">Angolo Autori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/contacts">Contattaci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/userprofile">Profilo utente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
       </ul>
    </div>
  </div>
  </nav>

    {{$slot}}

  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetto Finale</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg">
  <x-navbar/>
    <div>
      {{$slot}}
    </div>
  <x-footer/>
  </body>
</html>
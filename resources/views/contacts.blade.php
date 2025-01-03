    <x-main-layout>
      <div>
        <x-success/>
        <h1>Contattaci</h1>
      </div>
      <div class="row">
      <div class="col-4 mx-auto mt-5">
        <form action="{{route('feedback.send')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome utente</label>
            <input  name="name" type="text" class="form-control" id="name">
            <label for="email" class="form-label">Indirizzo Email</label>
            <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
            <textarea name="message" id="" cols="60" rows="10"></textarea>
            <label class="form-check-laber" for="feedback">Scrivi qui...</label>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>

      </div>
      </div>

          </form>
          </x-main-layout>

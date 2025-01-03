<x-main-layout>
<h1>Inserisci le tue credenziali</h1>
    <div class="row">
    <div class="col-4 mx-auto mt-5">
    <form action="/register" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome utente</label>
            <input  name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{old('password')}}">
            @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="exampleInputPassword1" class="form-label">Conferma password</label>
            <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" value="{{old('password_confirmation')}}">
            @error('password_confirmation')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Registrati</button>

      </div>
      </div>

          </form>
</x-main-layout>

    <x-main-layout>
    <h1>Accedi</h1>
        <div class="row">
        <div class="col-4 mx-auto mt-5">
        <form action="/login" method="POST">
        @csrf
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" value="{{old('email')}}">
             @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{old('password')}}">
             @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn1 btn-primary">Accedi</button>
        </form>
        </div>
        </div>
    </x-main-layout>

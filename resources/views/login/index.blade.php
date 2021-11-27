@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if (session('status'))
            <div class="alert alert-success mb-1">
                {{ session('status') }}
            </div>
            @endif
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">not register ? <a href="/register">registrasi sekarang</a></small>
            </main>
        </div>
    </div>
@endsection
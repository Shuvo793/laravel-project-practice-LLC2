@extends('partsial.master')
@section('content')

    <form class="form-signin" action="{{ route('register')}}" method="post">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Submit</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>

@endsection
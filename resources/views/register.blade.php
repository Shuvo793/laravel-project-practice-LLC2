@extends('partsial.master')
@section('content')
    @if( session()->has('message'))
        <div class="alert alert-success">
            {{ session('message')}}
        </div>
    @endif
    <form class="form-signin" action="{{ route('register')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
        <label for="inputEmail" >Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="{{old('email')}}"  autofocus>
        @if ($errors->has('email'))
            <div class="alert-danger">{{ $errors->first('email') }}</div>
        @endif
        <label for="inputPassword" >Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" >
        @if ($errors->has('password'))
            <div class="alert-danger">{{ $errors->first('password') }}</div>
        @endif

        <label for="inputfiles" >Uploads Files</label>
        <input type="file" id="inputfiles" class="form-control" placeholder="Please upload your file" name="photo" >
        @if ($errors->has('photo'))
            <div class="alert-danger">{{ $errors->first('photo') }}</div>
        @endif

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Submit</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>

@endsection
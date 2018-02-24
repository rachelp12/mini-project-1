@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="'card-title"><h1>Sign in</h1>
        <div class="card-body">
            <form action="/signin" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name='email' type="email" class="form-control" id="email" placeholder="dummy@example.com">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input name='password' type="password" class="form-control" id="password" placeholder="dummypassword">

                </div>
                <button type="submit" class="btn btn-primary mb-2">login</button>
            </form>
        </div>
    </div>

@endsection
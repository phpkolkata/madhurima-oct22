@extends('tpl.master')

@section('title')
     Admin Login
@endsection

@section('body')
    <h1>Please Login</h1>

    <form action="/admin/login-check" method="post">
        @csrf()
        email:<input type="text" name="email"><br>
        password:<input type="password" name="password">

        <div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection

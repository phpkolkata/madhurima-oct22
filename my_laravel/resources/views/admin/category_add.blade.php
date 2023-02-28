@extends('tpl.master')

@section('title')
     Category Add
@endsection

@section('body')
    <h1>Category Add</h1>

    <form action="{{ route('add-cat') }}" method="post">
        @csrf()
        Name:<input type="text" name="name"><br>
        isActive:
            <input type="radio" name="is_active" value="y">Yes
            <input type="radio" name="is_active" value="n">No
        <br>
        <div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection

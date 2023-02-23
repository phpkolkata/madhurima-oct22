@extends('tpl.master')

@section('title')
     Add-Product
@endsection

@section('body')

<h1>Product Add</h1>

<form action="product-add" method="post">
    @csrf()

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <div>
        Name:<input type="text" name="name" class="form-control">
    </div>
    <div>
        Age:<input type="text" name="age" class="form-control">
    </div>
    <div>
        Email:<input type="text" name="email" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>


@endsection

@extends('tpl.master')

@section('title')
     Add-Product
@endsection

@section('body')

<h1>Product Add</h1>

     <form action="product-add" method="post">

        @csrf()

        Name:<input type="text" name="nm"><br>
        <button>Add</button>
     </form>
@endsection

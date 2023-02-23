@extends('tpl.master')

@section('title')
     Category
@endsection

@section('body')
<h1>Category Listing</h1>

<table border="1" width="400" class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>isActive</th>
    </tr>

    @foreach ($db as $cat)
    <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->name }}</td>
        <td>{{ $cat->is_active }}</td>
    </tr>

    @endforeach

</table>


{{ $db->links() }}
@endsection

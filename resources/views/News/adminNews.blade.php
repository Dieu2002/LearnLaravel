@extends('master')
@section('content')
<div class="container beta-relative">
    <h2>Admin page</h2>
    <table id="table_admin_product" class="table table-striped display">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Date</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col"><a href="" class="btn btn-primary"
                        style="width:80px;">Add</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="products-list-admin">
                <th scope="row">{{$product->id}}</th>
                <th><img src="source/image/product/{{$product->image}}" alt="image" style="height: 100px;" /></th>
                <td>{{$product->name}}</td>
                <td>{{$product->id_type}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->unit_price}}</td>
                <td>{{$product->promotion_price}}</td>
                <td>{{$product->unit}}</td>
                <td>{{$product->new}}</td>
                <td>
                    <a href='admin-edit-form/{{$product->id}}' type="submit" class="btn btn-warning"
                        style="width:80px;">Edit</a>
                    <form role="form" action="admin-delete/{{$product->id}}" method="post">
                        @csrf
                        <button name="edit" type="submit" class="btn btn-danger" style="width:80px;">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
$(document).ready(function() {
    $('#table_admin_product').DataTable();
});
</script>
@endsection
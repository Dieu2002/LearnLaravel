<!DOCTYPE html>
<html lang="en">
<head>
    <title>FashionShop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
</head>

<div class="container beta-relative">
    <h2>Admin page</h2>
    <table id="table_admin_new" class="table table-striped display">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Date</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col"><a href="{{route('admin-add-form')}}" class="btn btn-primary"
                        style="width:80px;">Add</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $new)
            <tr class="news-list-admin">
                <th scope="row">{{$new->Id}}</th>
                <td>{{$new->Title}}</td>
                <td>{{$new->Author}}</td>
                <td>{{$new->Date}}</td>
                <th><img src="/Image/news'/{{$new->Image}}" alt="image" style="height: 100px;" /></th>
                <td>{{$new->Description}}</td>
                <td>
                    <a href="new-edit-form/{{$new->Id}}" type="submit" class="btn btn-warning"
                        style="width:80px;">Edit</a>
                    <form role="form" action="/new-delete/{{$new->Id}}" method="POST">
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
    $('#table_admin_new').DataTable();
});
</script>

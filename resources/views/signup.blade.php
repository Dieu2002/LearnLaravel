<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>Stacked form</h2>
    <form method="post">
        @csrf
        <div class="form-group">
        <label for="name">Fullname:</label>
        <input type="text" class="form-control"  placeholder="Enter name" name="name" value="{{old('name')}}">
        <!-- @error('name')
        {{message}}
        @enderror -->
        </div>
        <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" placeholder="Enter age" name="age">
        </div>
        <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" placeholder="Enter date" name="date">
        </div>
        <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" placeholder="Enter phone" name="phone">
        </div>
        <div class="form-group">
        <label for="web">Web:</label>
        <input type="url" class="form-control" placeholder="Enter web" name="web">
        </div>
        <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" placeholder="Enter adress" name="address">
        </div>
        <div>@include('error')</div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="display-infor">
            @if(isset($user))
            <p>Name: {{$user['name']}}</p>
            <p>Age: {{$user['age']}}</p>
            <p>Date: {{$user['date']}}</p>
            <p>Phone: {{$user['phone']}}</p>
            <p>Web: {{$user['web']}}</p>
            <p>Addrres: {{$user['address']}}</p>
            @endif
        </div>
    </form>
    </div>
</body>
</html>
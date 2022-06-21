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

<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <h1 class="text-center">Admin Page</h1>
    <form action="/action_page.php">
        @csrf
        <div class="mb-3 mt-3">
            <label for="text" class="form-label">Danh mục sản phẩm:</label>
            <input type="danhmuc" class="form-control" id="danhmuc" placeholder="Điện thoại di động" name="danhmuc">
        </div>
        <div class="mb-3">
            <label class="form-label">Thông tin:</label>
            <input type="text" class="form-control" id="spnb" placeholder="Sản phẩm nổi bật" name="spnb">
            <input type="number" class="form-control" id="ten" placeholder="Tên sản phẩm" name="ten">
            <input type="number" class="form-control" id="gia" placeholder="Giá sản phẩm" name="gia">
            <input type="text" class="form-control" id="giacu" placeholder="Giá cũ sản phẩm" name="giacu">
        </div>
        <div class="mb-3">
            <label class="form-label">Thêm ảnh sản phẩm: </label>
            <input class="form-control" type="file" id="anh" name="anh" multiple>
        </div>
        <div>
            @include ('error')
        </div>
        <button type="submit" class="btn btn-primary" onclick="chooseFile()">Submit</button>

        <script>
            function chooseFile() {
              $("#anh").click();
            }
        </script>
        <!-- <div class="display-infor">
            @if(isset($product))
                <p>Danh mục: {{$product['danhmuc']}}</p>
                <p>Sản phẩm nổi bật: {{$product['spnb']}}</p>
                <p>Tên: {{$product['ten']}}</p>
                <p>Giá: {{$product['gia']}}</p>
                <p>Giá cũ: {{$product['giacu']}}</p>
                <p>Ảnh: {{$product['anh']}}</p>
            @endif
        </div> -->
    </form>
    </div>
</body>
</html>
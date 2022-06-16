<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST">
                @csrf
                <!-- <div class="form-group">
                    <label for="">Danh mục sản phẩm </label>
                    <select class="form-control">
                        <option value="volvo">Điện thoại di động</option>
                        <option value="saab">Máy tính bảng</option>
                        <option value="mercedes">Lap top</option>
                        <option value="audi">Đồng hồ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Thông tin </label>
                    <select class="form-control">
                        <option value="spnb">Sản phẩm nổi bật</option>
                        <option value="spmrm">Sản phẩm mới ra mắt</option>
                        <option value="spgg">Sản phẩm giảm giá</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name ="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" id="image">Ảnh sản phẩm</label><br>
                    <input type="file" name ="image">
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name ="price" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name ="quantity" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name ="description" class="form-control">
                </div>
               </div>
                <button type="submit" name="sbm" class="btn btn-primary">Thêm</button>
            </form>
            <div></div>
            <script>
                function chooseFile(){
                    $("image").click()
                }
            </script>
        </div>
    </div>
</div>
</body>
</html>
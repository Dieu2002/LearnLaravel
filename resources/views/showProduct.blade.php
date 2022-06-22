<?php
    use function PHPunit\Framework\isNull;
    if(session_id()==='')
    session_start();
?>
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
    <div class="container row">
    <?php 
    $imageTemp = '';
    if(isset($_SESSION['product'])){
        $arr=$_SESSION['product'];
        foreach($arr as $key =>$value){
            $imageTemp='images/'.$value['image'];

            return`
            <div class="card col-md-3 col-12 mr-2">
            <div class="card" style="width: 18rem;">
                  
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">a</h5>
                        <h5 class="card-title">d</h5>
                        <p class="card-text">v</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                 </div>
            </div>
        </div>
            `;

        }
    }
        ?>
        

    <?php
       
     ?>
     
</body>
</html>
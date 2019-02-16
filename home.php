<?php
include('./controller/c_tintuc.php');
$c_tintuc = new C_tintuc();
$noi_dung = $c_tintuc->index();
$slide = $noi_dung['slide'];
$menu = $noi_dung['menu'];


//print_r($menu);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/font-awesome.css" />
    <link rel="stylesheet" href="./public/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./public/css/all.css" />
    <link rel="stylesheet" href="./public/css/header.css" />
    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    
    

    
    <script src="./public/css/jquery.js"></script>
    <script src="./public/css/bootstrap.min.js"></script>
    
</head>
<body>
    <?php include './public/header.php';?>
    <?php include './public/main.php';?>
    <?php include './public/footer.php';?>
    <script src="./public/css/menu.js"></script>
</body>
</html>
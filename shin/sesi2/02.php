<?php
    $pg = 1;
    if(isset($_GET["pg"])){
    $pg = $_GET["pg"];
    }

    switch($pg){
        case 1:
            $konten = "<h3>page 1</h3>";
            break;
        case 2:
            $konten = "<h3>page 2</h3>";
            break;
        case 3:
            $konten = "<h3>page 3</h3>";
            break;
        default:
            $konten = "<h3>page 1</h3>";
            break;
    }
    $judulpage = "latihan 02";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
</head>
<body>
    <?=$konten;?>
<nav>
    <ul>
        <li><a href="?pg=1">Page 1</a></li>
        <li><a href="?pg=2">Page 2</a></li>
        <li><a href="?pg=3">Page 3</a></li>
    </ul>
</nav>
</body>
</html>
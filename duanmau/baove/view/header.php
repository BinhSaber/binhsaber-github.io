<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="../view/CSS/trangchu.css">
</head>
<body>
    <div class="container">
        <div class="menu-dautien">
        <nav>
            <div id="menu">
                <a href="index.php" id="logo">
                    <img src="./img/logo.png">
                </a>
            <ul id="main-menu">
                <li><a href="index.php">Photos</a></li>
                <li><a href="">Video</a></li>
                <li><a href="index.php?act=about">About</a></li>
                <li><a href="index.php?act=contact">Contact</a></li>
            </ul>
        </div>
        <header>
            <div class="timkiem-box">
                <form action="index.php?act=timkiem" method="post"> 
                    <input type="text" name="kyw">
                    <input type="submit" value="Tìm kiếm">
                </form>
            <div>
        </header>
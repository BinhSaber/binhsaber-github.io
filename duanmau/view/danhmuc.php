<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hương Xưa Shop</title>
    <link rel="stylesheet" href="../view/css/trangchu.css">
</head>
<body>
    <div class="container">
        <nav>
</div>
        </nav>
        <div class="sp">
        <div class="heading">
            <h3>SẢN PHẨM MỚI</h3>
        </div>
        <div id="sanphammoi">
            <?php
                $i=0;
                foreach($spnew as $sp) {
                    extract($sp);
                    $hinh=$img_path.$img;
                    $linksp="index.php?act=sanphamct&idsp=".$id;

                    echo '
                    <div class="sp">
                    <div class="sanpham-moi">
                        <a href="index.php?act=sanphamct&idsp='.$id.'">
                            <img src="'.$hinh.'">
                        </a>
                        <h4>'.$tensp.'</h4>
                        <p>'.$price.'đ</p>
                        <form action="index.php?act=addtocart" method="post">  
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$tensp.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                    </div>
                    ';
                        
                }
            ?>
        </div>
        <div class="heading">
            <h3>TOP 4 SẢN PHẨM YÊU THÍCH</h3>
        </div>
        <div id="sanphambanchay">
            <?php
                foreach($dstop4 as $sp) {
                    extract($sp);
                    $hinh=$img_path.$img;
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    
                    echo '
                    <div class="sp">
                    <div class="sanpham-moi">
                        <img src="'.$hinh.'">
                        <h4>'.$tensp.'</h4>
                        <p>'.$price.'đ</p>
                        <form action="index.php?act=addtocart" method="post">  
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$tensp.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                    </div>
                    ';
                        
                }
            ?>
        </div>
        </div>
    </div>
</div>
    <canvas id='canvas' width='200px' height='200px'>
        <script>
            var canvas = document.getElementById("canvas");
            var ctx = canvas.getContext("2d");
            ctx.setLineDash([5, 3]);/*dashes are 5px and spaces are 3px*/
            ctx.beginPath();
            ctx.moveTo(0,100);
            ctx.lineTo(400, 100);
            ctx.stroke();
        </script>
    </canvas>
</body>
</html>
    </div>
</body>
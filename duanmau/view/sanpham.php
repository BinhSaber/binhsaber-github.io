<link rel="stylesheet" href="../view/CSS/chitietsanpham.css">
<div class="chitiet">
        <div class="thanhtieude">
            <p> Sản Phẩm <strong><?=$tendm?></strong>
                <?php
                    $i=0;
                    foreach($dssp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        echo '
                    <div class="sp">
                    <div class="sanpham-moi">
                        <a href="index.php?act=sanphamct">
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
            </p>
        </div>
        <!-- Code chi tiết sản phẩm -->

    </section>
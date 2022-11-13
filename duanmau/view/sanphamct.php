<link rel="stylesheet" href="../view/CSS/chitietsanpham.css">
<div class="chitiet">
        <div class="thanhtieude">
            <p>
                <a href="menu.html"><b>Menu</b></a> /
                <a href="laptop.html"><b>Laptop</b></a> /
                <?php
                    extract($onesp);
                    echo ''.$tensp.'';
                ?>
            </p>
        </div>
        <!-- Code chi tiết sản phẩm -->
        <?php 
            extract($onesp);
            $img=$img_path.$img;
            echo '
        <div class="sanpham">
            <div class="trai">
                <img src="'.$img.'">
            </div>
            <div class="phai">
                <p>'.$tensp.'</p>
                <p>Mã : '.$id.'</p>
                <p>'.$mota.'</p>
            </div>
        </div>
        ';
        ?>
    </section>
    
    </div>
        <section class="splienquan">
            <h3>Sản phẩm liên quan</h3>
            <div class="listsplq">
                <?php
                    foreach($spcungloai as $spcungloai) {
                        extract($spcungloai);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<div class="sanphamcungloai">
                        <li><a href="'.$linksp.'">'.$tensp.'</a></li>
                        </div>';
                    }
                ?>
        </div>
        </section>
    </div>
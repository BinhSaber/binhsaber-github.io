<link rel="stylesheet" href="./css/chitiethinhanh.css">
<div class="chitiet">
    <?php
        include('./model/database.php');
        if(!$connect)
        die('<h3> fail</h3>');         
        $result = mysqli_query($connect,'SELECT * FROM  hinhanh WHERE idhinhanh = 5');
        while($row = mysqli_fetch_assoc($result)){
            echo '
                <div class="thanhtieude">
                <h3>
                    Acer Nitro 5 Tiger
                </h3>
            </div>
            <div class="sanpham">
                <div class="trai">
                    <img src="./img/'.$row['anh'].'">
                </div>
                <div class="phai">
                    <p><b>Nhấp vào bên dưới để dowloand<p>
                    <input type="submit" name="" id="btn-dow" value="Dowloand">
                    <p>Dimension: '.$row['kichthuoc'].'</p>
                    <p>Format: '.$row['format'].'</p>
                    <h3>License</h3>
                    <div class="tag">
                        <p>'.$row['mota'].'</p>
                    </div>
                    <h3>Tag</h3>
                    <div class="tag">
                        <a href="">laptop</a>
                        <a href="">mobile</a>
                    </div>
                </div>
            </div>
            ';
        }
        mysqli_close($connect);
    ?>
    </section>
        <section class="splienquan">
            <h3>Hình ảnh liên quan</h3>
            <div class="listsplq">
                <?php
                    include('./model/database.php');
                    if(!$connect)
                    die('<h3> fail</h3>');      
                    $result = mysqli_query($connect,'SELECT * FROM  hinhanh order by idhinhanh desc limit 0,8');
                    while($row = mysqli_fetch_assoc($result)){
                            echo '
                                <div class="sp">
                                <div class="sanpham-moi">
                                    <img src="img/'.$row['anh'].'">
                                    <h4>'.$row['ngay'].'</h4>
                                    <p>Lượt xem: '.$row['luotxem'].'</p>
                                </div>
                                </div>
                            ';
                    }
                    mysqli_close($connect);
                ?>
        </div>
        </section>
    </div>
    
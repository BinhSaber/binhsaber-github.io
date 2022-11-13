<link rel="stylesheet" href="../CSS/add.css">
<div class="row">
    <div>
        <h2>Thêm một loại hàng hóa</h2>
    </div>
    <div>
        <form action="#" method="post">
            <div class="row mb9">
                Mã loại<br>
                <input type="text" name="maloai" disable>
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="tenloai">
            </div>
            <div class="button">
                <input type="submit" name="them" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao=""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>

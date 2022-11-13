<link rel="stylesheet" href="../CSS/add.css">
<?php 
    if(is_array($dm)) {
        extract($dm);
    }
?>

<div class="row">
    <div>
        <h2>Cập nhật một loại hàng hóa</h2>
    </div>
    <div>
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb9">
                Mã loại<br>
                <input type="text" name="maloai" disable>
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="tenloai" value="<?=$name?>">
            </div>
            <div class="button">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao=""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>

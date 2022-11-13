<link rel="stylesheet" href="../CSS/add.css">
<div class="row">
    <div>
        <h2>Thêm mới sản phẩm</h2>
    </div>
    <div>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb9">
                Danh mục<br>
                <select name="iddm">
                    <?php
                        foreach ($listdanhmuc as $danhmuc) { 
                           extract($danhmuc);
                           echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>    
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="giasp">
            </div>
            <div class="row ">
                Hình<br>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" cols="30"></textarea>
            </div>
            
            <div class="button">
                <input type="submit" name="them" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao=""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
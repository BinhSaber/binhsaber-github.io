<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];

    $dsbl=loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/CSS/binhluan.css">
</head>
<body>
 

    <div class="form-binhluan">
        <div class="boxcontent">
        <div class="title"><h4>BÌNH LUẬN</h4></div>
            <table>
                <ul>
                    <?php
                        foreach($dsbl as $bl) {
                            extract($bl);
                            echo '<tr><td>'.$noidung.'</td>';
                            echo '<td>'.$iduser.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';
                        }
                    ?>
                </ul>
            </table>
        </div>
        
        <?php
          // if(isset($_SESSION['id'])&&($_SESSION['id']>0)) {
        ?>
        <div class="searbox">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" value="idpro" value="<?=$idpro?>">
                <input type="text" id="content" name="noidung">
                <input type="submit" id="button-submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>

        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                $noidung=$_POST['noidung'];
                $iduser=$_POST['iduser'];
                $ngaybinhluan=date('h:i:sa d/m/Y');
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
        <?php //} else {
            //echo "<a href='index.php?act=dangnhap' target='_parent'>Bạn vui lòng đăng nhập!</a>";
        //}?>
    </div>

   
</body>
</html>
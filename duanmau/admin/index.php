<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "header.php";
    include "global.php";

    $spnew=loadall_sanpham_home();

    if(isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['them'])&&($_POST['them'])) {
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Add succesfully";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_danhmuc($_GET['id']);
                }
                $sql="select * from danhmuc order by name";
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Update succesfully";
                }
                $sql="select * from danhmuc order by name";
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            /* Control Sản Phẩm */
            case 'addsp':
                if(isset($_POST['them'])&&($_POST['them'])) {
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Add succesfully";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])) {
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                } else {
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_sanpham($_GET['id']);
                }
                $sql="select * from sanpham order by name";
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $price=$_POST['price'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    update_sanpham($id,$iddm,$tensp,$price,$mota,$hinh);
                    $thongbao="Update succesfully";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham();
                include "sanpham/list.php";
                break;
            case 'dskh':

                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'xoakh':
                if(isset($_GET['makh'])&&($_GET['makh']>0)) {
                    delete_taikhoan($makh);
                }
                $sql="select * from khachhang order by makh";
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'dsbl':

                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }

    include "footer.php";

?>
<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm':
            // kiểm tra người dùng có nhấn vào nút add hay không 
           if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
            $tenloai = $_POST['tenloai'];
            insert_danhmuc($tenloai);
            $thongbao = "Thêm thành công";
           } 
           
            include "danhmuc/add.php";
            break;
        case 'listdm':
           
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&$_GET['id']>0)
            {
                delete_danhmuc($_GET['id']);

            }
            $SQL = "select * from danhmuc ";
            $listdanhmuc = pdo_query($SQL);
            include "danhmuc/list.php";
            break;


        case 'suadm':
            if(isset($_GET['id'])&&$_GET['id']>0)
            {
                $dm=loadone_danhmuc($_GET['id']);
            }
            
            include "danhmuc/update.php";
            break;    
        case 'updatedm':
            if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
               } 
                
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;      
            /* Sản phẩm*/
            case 'addsp':
                // kiểm tra người dùng có nhấn vào nút add hay không 
               if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
                $iddanhmuc = $_POST['iddanhmuc'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                    //echo "Sorry, there was an error uploading your file.";
                  }
                
                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddanhmuc);
                $thongbao = "Thêm thành công";
               } 
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok']) &&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddanhmuc=$_POST['iddanhmuc'];
                }else{
                    $kyw = '';
                    $iddanhmuc=0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddanhmuc);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&$_GET['id']>0)
                {
                    delete_sanpham($_GET['id']);
    
                }
               
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
    
    
            case 'suasp':
                if(isset($_GET['id'])&&$_GET['id']>0)
                {
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                include "sanpham/update.php";
                break;    
            case 'updatesp':
                if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $iddanhmuc = $_POST['iddanhmuc'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                      update_sanpham($id,$iddanhmuc,$tensp,$giasp,$mota,$hinh);
                      $thongbao = "Cập nhật thành công";
                   } 
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_sanpham("",0);
                    include "sanpham/list.php";
                    break;    
                




            default:
            include "home.php";
            break;
    }
    }else{
        include "home.php";
    }


include "footer.php";

?>
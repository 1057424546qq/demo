<?php
    //包含一个文件上传类中的上传类
    include "upload.class.php";
    $up = new fileupload();
    include "DB.class.php";
    $edit = new db('shop');

    $arr['title'] = $_POST['title'];
    $arr['des'] = $_POST['des'];
    $arr['url'] = $_POST['url'];
    $arr['price'] = $_POST['price'];
    $arr['ord']= $_POST['ord'];
    // $id = '';
    
    //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
    $up -> set("path", "./img/");
    $up -> set("maxsize", 2000000);
    $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));
    $up -> set("israndname", false);
  
    //使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false
    if($up -> upload("pic")) {
        //获取上传后文件名子
        $arr["pic"]=$up->getFileName();
        // $pic=$_POST['pic'];
        // $url= $_SERVER["DOCUMENT_ROOT"]."/img/".$pic;
        
        // unlink($url);
        if ($_POST['id']!="-1"){
            $id = $_POST['id'];
            $play = $edit -> save($arr,"id=$id");
        }else{
            $play = $edit -> add($arr);
        }
        
        echo "<script>alert('操作成功，请确定！');location.replace('index.php?act=list')</script>";
  
    } 
    

?>
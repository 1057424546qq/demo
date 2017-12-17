<?php
    include('libs/Smarty.class.php');
    $smarty = new Smarty;
   
    //包含一个文件上传类中的上传类
    include "DB.class.php";
    $add = new db('shop');

    $id = $_POST['id'];
    print_r($id);
    $arr['title'] = $_POST['title'];
    $arr['des'] = $_POST['des'];
    $arr['url'] = $_POST['url'];
    $arr['price'] = $_POST['price'];
    $arr['ord']= $_POST['ord'];
    $arr['pic']=$pic;
    $play = $add -> update($arr);
    echo "<script>alert('操作成功，请确定！');location.replace('list.php')</script>";
    
    $smarty -> display('post.html');
?>
<?php
include "DB.class.php";
$del = new db('shop');
$id = $_GET['id'];
$re = $del -> delect(" id=$id ");
if($re){
      echo "<script>location.replace('list.php')</script>";
}
?>
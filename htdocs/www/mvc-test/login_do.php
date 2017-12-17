<?php
session_start();
include('DB.class.php');
$school = new db('admin');

$user_name = $_POST['user_name'];
$user_pwd = $_POST['user_pwd'];
$user_pwd = md5($user_pwd);
$_SESSION['user_name'] = $user_name;

$school = $school -> find($field =" count(*) as n ",$where=" user_name='$user_name' and user_pwd='$user_pwd'",$order='',$limit='');

if($school['n']==1){
     $_SESSION['admin'] = $user_name;
     echo '<script>alert("登录成功!");location.replace("list.php")</script>';
}else{
  $_SESSION['admin']=null;
  echo '<script>alert("登录失败,请重试!");location.replace("lodin.php")</script>';
}
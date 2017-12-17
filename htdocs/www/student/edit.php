<?php
$link = mysqli_connect('127.0.0.1','root','root','school');
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$score = $_POST['score'];


$sql = "update student set name='$name',age='$age',sex='$sex',score='$score'  where id=$id limit 1";

$result = mysqli_query($link,$sql);
if($result){
      echo '<script>alert("修改成功!");location.replace("student_list.php")</script>';
}?>
<?php
$link = mysqli_connect('127.0.0.1','root','root','school');
$name = $_POST['name'];
$num = $_POST['num'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$score = $_POST['score'];
print_r($_FILES);
$cover = time().rand(1, 999).'.jpg';
$new_file = $_SERVER['DOCUMENT_ROOT'].'/examination/img/'.$cover;
move_uploaded_file($_FILES['cover']['tmp_name'], $new_file);
$sql = "insert into student set num='$num',name='$name',age='$age',sex='$sex',score='$score' ";

$result = mysqli_query($link,$sql);
if($result){
      echo '<script>alert("增加成功!");location.replace("student_list.php")</script>';
}

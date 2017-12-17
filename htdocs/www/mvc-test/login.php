<?PHP
session_start();
include('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty -> display('login.html');
?>
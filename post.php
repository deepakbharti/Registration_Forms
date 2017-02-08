<?php
if(isset($_POST['submit'])){
echo 'Name = ',$n = addslashes($_REQUEST['fname']).'<br>';
echo 'Email = ',$e = $_POST['email'].'<br>';
echo 'Dob = ',$d = $_POST['dob'].'<br>';
echo 'Password = ',$p = md5($_POST['pwd']).'<br>';
echo 'Gender = ',$g = $_POST['gend'].'<br>';
echo 'Country = ',$c = $_POST['coun'].'<br>';
echo 'Address = ',$a = $_POST['addr'].'<br>';
echo 'Language = ',implode(',',$_POST['lang']);
} else {
	header("location:regForms.php");
	exit;
}
?>
<?php

if(Session::getUID()!=""){
	$users = UserData::getById(Session::getUID());
	$password = sha1(md5($_POST["password"]));
	if($password==$users->password){
		$users->password = sha1(md5($_POST["newpassword"]));
		$users->update();
		setcookie("password_updated","true");
		print "<script>window.location='logout.php';</script>";
	} else {
		print "<script>window.location='index.php?view=security&msg=invalidpasswd';</script>";		
	}
} else {
		print "<script>window.location='index.php';</script>";
}

?>
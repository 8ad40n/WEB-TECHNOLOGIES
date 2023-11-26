<?php  
require_once('../Models/dbAll.php');
if(isset($_REQUEST['btnSubmit']))
{
	$name=$_REQUEST['name'];
	$gmail=$_REQUEST['gmail'];
    $id=$_REQUEST['id'];
	$pass=$_REQUEST['pass'];

	if(empty($id) || empty($name) || empty($gmail) || empty($pass))
	{
		echo "Empty";
	}
	else
	{
		$status= auth($name,$gmail,$id,$pass);
		if($status)
		{
			header('location:../Views/Home.php');
		}
		else
		{
			header('location:../Views/Registration.php');
		}
	}

}


?>
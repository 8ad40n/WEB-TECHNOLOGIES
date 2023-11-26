<?php
require_once('dbConnect.php');

function auth($name,$gmail,$id,$pass)
{
    $con=getConnection();
    $s= "select * from labuserinfo where ID = '$id'";
    $r=mysqli_query($con,$s);
    if(mysqli_num_rows($r) ==0)
    {
        $sql = "INSERT INTO labuserinfo (Name, ID, Password, Gmail) VALUES ('$name', '$id', '$pass', '$gmail')";
        $res=mysqli_query($con,$sql);
        if($res)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
	


}
?>
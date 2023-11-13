<?php
session_start();
$servername="localhost";
$username= "root";
$password="";
$dbname="project";
$conn= new mysqli($servername,$username,$password,$dbname);
if (!$conn) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }    
if(isset($_POST['login'])) 
{
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    $sql= "select * from userinfo where ID='$id' and Password='$pass'";
    $res= mysqli_query($conn,$sql);
    if (!empty($id) && !empty($pass)){
    if($res->num_rows==1)
    {
        $new=mysqli_fetch_assoc($res);
        $user=$new["Type"];
        $_SESSION['id']=$new["ID"];

        if($user=="Admin")
        {
            header("location: Dashboard.php");
        }

    }
    else
    {
        echo "<script>alert('Wrong password. Please try again.');</script>";
    }
}
    else
    {
        echo "<script>alert('Please fill in all the fields.');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>  
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="post">
    <h1>Login</h1>
    <script>
    function togglePassword() 
    {
    var passwordInput = document.getElementById("pass");
    if (passwordInput.type == "password") 
    {
    passwordInput.type = "text";
    } 
    else 
    {
    passwordInput.type = "password";
    }
    }
    </script>
    
    <label for="id">ID:</label><br> <input type="text" name="id" placeholder="User Name"><br><br>
    <label for="password">Password:</label> <br><input type="password" name="pass" id="pass" placeholder="Password"><br>
     <input type="checkbox" id="showPassword" onclick="togglePassword()">
     <small>Show Password</small><br><br>
     <button name="login">Login</button><br>
     <a href="EmailVerification.php">Forgot Password?</a>
    
    </form>
</body>
</html>
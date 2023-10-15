
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="Select * from labuserinfo";
$result = mysqli_query($conn, $sql);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a=0;
if(isset($_POST["btnLogin"])) {
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    while($r= mysqli_fetch_assoc($result)){
        if($r["ID"]==$id && $r["Password"]==$pass)
        {
            echo "Login Successful";
            header("Location: /WEB TECHNOLOGIES/LAB/LAB 3/Dashboard.php");

        }
        else{
            $a=1;
        }
    }
    if($a==1){
        echo "Try again";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP</title>
</head>
<body>
	<form method="post">
        <h1>Login</h1>
        ID:<input type="number" name="id"><br>
        Pass:<input type="password" name="pass"><br>
    	<button name="btnLogin">Login</button>
  </form>    
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["btnSubmit"])) {
    
    $name = $_POST["name"];
    $gmail = $_POST["gmail"];
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    if (!empty($name) && !empty($gmail) && !empty($id) && !empty($pass)) {
        $sql = "INSERT INTO labuserinfo (Name, ID, Password, Gmail) VALUES ('$name', '$id', '$pass', '$gmail')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: /WEB TECHNOLOGIES/LAB/LAB 3/Login.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Please fill in all the fields.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>
    <form method="post">
        <h1>Registration:</h1>
        Name:<input type="text" name="name"><br>
        Gmail:<input type="text" name="gmail"><br>
        ID:<input type="number" name="id"><br>
        Pass:<input type="password" name="pass"><br>
        <button name="btnSubmit">Submit</button>
    </form>

</body>

</html>

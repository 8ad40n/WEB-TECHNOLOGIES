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

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>
    <h1>DATA:</h1>
<form method="get">
  <table border="1" >
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Gmail</th>
    </tr>
    <?php while($r= mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $r["ID"] ; ?></td>
      <td><?php echo $r["Name"] ; ?></td>
      <td><?php echo $r["Gmail"] ; ?></td>
    </tr>
  <?php } ?>
  </table>
</form>

</body>

</html>

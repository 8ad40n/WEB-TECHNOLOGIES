
<?php
include 'dbConnect.php';

if(isset($_POST["btnLogin"]))
{
  header("Location: /WEB TECHNOLOGIES/Learn/Dashboard.php");
  exit; 
}
elseif (isset($_POST["btnSubmit"]))
{
    $name = $_POST["name"];
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    
    $sql = "INSERT INTO `userinfo` (`Id`, `Name`, `Password`) VALUES ('$id', '$name', '$pass')";
    $result1 = mysqli_query($conn, $sql); 

    if($result1){
      echo "Insertion successful";
    } 
    else {
      echo "Insertion failed: " . mysqli_error($conn);
    }
}
// if(isset($_POST["del"]))
// {
//   $idd= $_GET['del'];
//   $sql1="Delete from userinfo where Id='$idd'";
//   mysqli_query($conn,$sql1);
// }

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP</title>
</head>
<body>

	<form method="post">
        Name:<input type="text" name="name"><br>
        ID:<input type="number" name="id"><br>
        Pass:<input type="password" name="pass"><br>
    	<button name="btnLogin">Login</button>
      <button name="btnSubmit">Submit</button>
  </form>
<form method="post">
  <table border="1" >
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Password</th>
    </tr>

    <?php 
    $sql1= "select * from userinfo";
    $result = mysqli_query($conn, $sql1); 

    while($r= mysqli_fetch_assoc($result)){
      ?>
    <tr>
      <td><?php echo $r["Id"] ; ?></td>
      <td><?php echo $r["Name"] ; ?></td>
      <td><?php echo $r["Password"] ; ?></td>
      <!-- <td><button type="submit" name="edit" value="<?php echo $r["Id"] ; ?>">Edit</button>   </td>
      <td><button type="submit" name="del" value="<?php echo $r["Id"] ; ?>">Delete</button>   </td> -->
    </tr>
  <?php } ?>
  </table>
  </form>
    
</body>
</html>

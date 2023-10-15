<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form method="post">
        <b>Name:</b><input type="text" name="name"><br><br>
        <b>Password:</b><input type="password" name="pass"><br><br>
        <button name="btnLogin">Login</button>
        <button name="btnReg">Registration</button>
    </form>
    <br><br>

    <?php
    if(isset($_POST["btnLogin"]))
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        if(!empty($name) && !empty($pass))
        {
            if($name==$pass)
            {
                echo "Matched";
            }
            elseif($name!=$pass){
                echo "Not matched";
            }
        }
        
    }
    elseif (isset($_POST["btnReg"]))
    {
        header("Location:/WEB TECHNOLOGIES/LAB/LAB 2/registration.php");
    }
    
    ?>
    
</body>
</html>
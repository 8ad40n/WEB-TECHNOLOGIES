<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center><img height="200" width="500" src="aiub.jpg" alt="aiub"></center>
    <center><a href="https://www.aiub.edu/">
            <h1 style="color:blue">AIUB</h1>
        </a></center>
    <h1 style="color: blue;">WELCOME</h1><br>
    <?php
    //echo $_POST['name']
    if (empty($_GET['name'])) {
        echo "Empty";
    } else {
        echo $_GET['name'];
    }
    ?>
    <br>
    <br>


    <form method="post">
        <input type="submit" name="btn1" value="BUTTON 1">
        <button name="btn2">BUTTON 2</button>

    </form>

    <?php
    if(isset($_POST['btn1']))
    {
        header("Location:/WEB TECHNOLOGIES/Learn/Login.php");
    }
    elseif(isset($_POST['btn2']))
    {
        header("Location:/WEB TECHNOLOGIES/Learn/Practice.php");
    }
    ?>

</body>

</html>

<!-- comment -->
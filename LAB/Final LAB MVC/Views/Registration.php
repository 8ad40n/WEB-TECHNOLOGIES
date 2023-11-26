<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>

<body>
    <form method="post" action="../Controllers/RegCheckController.php">
        <h1>Registration:</h1>
        Name:<input type="text" name="name"><br>
        Gmail:<input type="text" name="gmail"><br>
        ID:<input type="number" name="id"><br>
        Pass:<input type="password" name="pass"><br>
        <button name="btnSubmit">Submit</button>
    </form>
</body>

</html>
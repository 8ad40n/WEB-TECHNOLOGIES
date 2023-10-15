<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB TASK 1</title>
</head>
<body>
    
    <form>
    <fieldset>
        <h1>
            <center>Login Page</center>
        </h1>

        <label for="txtName">UName:</label>
        <input type="text" name="txtName"><br><br>

        <hr>
        <label for="txtPassword">Password: </label>
        <input type="password" name="txtPassword">
        <br><hr><br>
       
        <input type="button" name="btnSubmit" value="Submit">

    </fieldset>
    </form><br>
    <br>
    <br>
    <br>
    <br>

    <fieldset>
        <legend>
            <h1>Course</h1>
        </legend>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
            </tr>
            <tr>
                <td>13</td>
                <td rowspan="2">ab</td>
                <td>web</td>
            </tr>
            <tr>
                <td>14</td>
                <td rowspan="2">CN</td>
            </tr>
            <tr>
                <td>16</td>
                <td>cd</td>
            </tr>
        </table>
    </fieldset>

</body>
</html>
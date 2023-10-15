<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>amne</h1>
    <br>

    <?php
    $x = 5;
    $y = 10;
    $s = "Bangladesh";
    echo $x + $y . "<br>";
    echo "I love " . $s . "!<br>";
    ?>
    <img src="hello.jpg" alt="hello"><br>
    <a href="https://google.com">Google</a><br>
    <!-- se target="_blank" to open the linked document in a new browser window or tab: -->
    <a href="https://www.w3schools.com/" target="_blank">Visit W3Schools!</a> <br>

    <hr>

    <pre>
        Hi 
        I 
        am 
        Joy
    </pre><br>

    <!-- comment
        me -->

    <h1 style="background-color:powderblue;">This is a heading</h1>
    <h1 style="color:blue;">This is a heading</h1>
    <h1 style="font-family:verdana;">This is a heading</h1>
    <h1 style="font-size:100%;">This is a heading</h1>
    <h1 style="text-align:center;">Centered Heading</h1>
    <p style="background-color:blue; color:white; font-family:Arial, Helvetica, sans-serif; font-size:300%; text-align:center">This is a paragraph</p><br>



    <b>This text is bold</b><br>
    <strong>This text is important!</strong><br>

    <i>This text is italic</i><br>
    <em>This text is emphasized</em><br>

    <small>This is some smaller text.</small><br>
    <p>Do not forget to buy <mark>milk</mark> today.</p><br>
    <p>My favorite color is <del>blue</del> red.</p><br>
    <p>My favorite color is <del>blue</del> <ins>red</ins>.</p><br>
    <p>This is <sub>subscripted</sub> text.</p><br>
    <p>This is <sup>superscripted</sup> text.</p><br>

    <address>
        Written by John Doe.<br>
        Visit us at:<br>
        Example.com<br>
        Box 564, Disneyland<br>
        USA
    </address>

    




    <h1>TABLE:</h1><br>
    <table border="1">
        <tr>
            <th colspan="6">Time Table</th>
        </tr>
        <tr>
            <td rowspan="6">Hours</td>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <tr>
            <td colspan="5">Lunch</td>
        </tr>
        <tr>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td rowspan="2" colspan="2">Project</td>
        </tr>
        <tr>
            <td>14</td>
            <td>15</td>
            <td>16</td>
        </tr>

    </table>

    <form>
        <h1>
            Event Registration
        </h1>
        
        <label for="txtName">Name:</label><br>
        <input type="text" name="txtName" placeholder="Enter your name"><br><br>

        <label for="txtEmail">Email:</label><br>
        <input type="email" name="txtEmail" placeholder="Enter your email"><br><br>

        <label for="txtNumber">Phone:</label><br>
        <input type="tel" name="txtNumber" placeholder="Enter your phone no."><br><br>

        <label for="txtRead">Read:</label><br>
        <input type="text" name="txtRead" value="Read the text" readonly><br><br>

        <label for="OccipationType">Occupation:</label><br>
        <select name="OccipationType">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="other">Other</option>
        </select><br><br>

        <fieldset>
            <legend>Topics of interest:</legend>

            <input type="checkbox" name="cbHtml">
            <label for="cbHtml">HTML</label><br>
            <input type="checkbox" name="cbCss">
            <label for="cbCss">CSS</label><br>
            
        </fieldset><br>

        <label for="dtpDOB">Date of Birth:</label><br>
        <input type="date" name="dtpDOB"><br><br>

        <input type="button" name="btnSubmit" value="SUBMIT"><br><br>
    </form>
    



</body>

</html>
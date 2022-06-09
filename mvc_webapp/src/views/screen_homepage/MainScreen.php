<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> Hello World, This is an basic template </p>

    <form action="index.php ">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="<?php 
            if (isset($_POST['fname'])) {
                echo $_POST['fname']; 
            } else {
                echo "Your first name";
            }
            ?>"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="<?php
            if (isset($_POST['lname'])) {
                echo $_POST['lname']; 
            } else {
                echo "Your last name";
            } ?>"><br><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>
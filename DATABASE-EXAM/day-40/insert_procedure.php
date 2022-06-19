<?php
if(isset($_POST['btnSubmit']))
{
    $name = $_POST['txtmfg'];
    $address = $_POST['txtAddress'];
    $contact = $_POST['txtContact'];

    $db = new mysqli("localhost","root","","procedure_database");
    $resutl = $db->query("call add_manufacture('$name','$address','$contact')");
    echo "successfully added";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert procedure</title>
</head>
<body>
    <form action="" method="post">
        <div>
            Manufacurer<br>
            <input type="text" name="txtmfg" id="">
        </div>
        <div>
            Address<br>
            <input type="text" name="txtAddress" >
        </div>
        <div>
            Contact<br>
            <input type="text" name="txtContact" >
        </div>
        <div>
            <input type="submit" value="submit" name="btnSubmit">
        </div>
    </form>
</body>
</html>
<?php
include('database.php');
if(isset($_POST['trigger']))
{
    $deleteQuery=$db->query('DELETE FROM manufacturer WHERE id="'.$_POST['manufacture-id'].'"');
    if($deleteQuery)
    {
        echo "successfully deleted";
    }
    else
    {
        echo "no, not deleted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trigger</title>
</head>
<body>
    <form action="" method="post"> 
        <select name="manufacture-id" id="">
            <?php
            $dbQuery = $db->query("SELECT * FROM manufacturer");
            while($recordRow=$dbQuery->fetch_array()){
               echo "<option value='$recordRow[0]'>$recordRow[1]</option>";
            } 
            ?>
        </select>
        <input type="submit" value="Delete By Trigger" name="trigger">
        <table>
            <tr>
                <th>Product List</th>
            </tr>
            <?php
            $query = $db->query("select * from product");
            while($pdResult=$query->fetch_array()){
                echo "<tr><td>$pdResult[1]</td></tr>";

            }
             ?>
            
        </table>

    </form>
</body>
</html>
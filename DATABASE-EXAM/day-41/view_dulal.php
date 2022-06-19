<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show view Table Data</title>
</head>
<body>
  <div style="text-align:center">
  <h2>click the button to show all the products from <br> product table where price is greater than 5000</h2>
    <form action="" method="post">
        <input type="submit" value="Show view Table Data" name="view">
    </form>
    <?php
    include('database.php');
    if(isset($_POST['view']))
    {
        $viewQuery=$db->query("SELECT * FROM product_view_table");
      echo   "<table style='margin: 0 auto; padding-top: 20px;'>";
      echo    "<tr><th>ID</th><th>Name</th><th>Price</th></tr>";
      while($viewRecords=$viewQuery->fetch_array())
      {
      echo  "<tr>
        <td>$viewRecords[0]</td>
        <td>$viewRecords[1]</td>
        <td>$viewRecords[2]</td>
        </tr>";
        
      }
      echo "</table>";
    }
    ?>
    </div>
</body>
</html>
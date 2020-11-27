<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'tra-data.mysql.database.azure.com', 'kaiwin50@tra-data', '7144Eba1', 'itftest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM shop');
?>
<div class="container">
  <div class="row">
    <div class="col m-auto>
      <div class="col mt-5>
        <table width="600" class="table rounded table-bordered">
          <thead class="thead-light">
          <tr class="bg-secondary">
            <th width="25"> <div align="center">Name product</div></th>
            <th width="150"> <div align="center">Price per unit</div></th>
            <th width="300"> <div align="center">Amount</div></th>
            <th width="175"> <div align="center">Total</div></th>
            <th>Delete</th>
          </tr>
<?php
          while($Result = mysqli_fetch_array($res))
{
           $ProductID = $Result['Id'];
           $Product = $Result['Product'];
           $Price = $Result['Price'];
           $Amount = $Result['Amount'];
           $Total = $Result['Total'];
?>
           <tr class="bg-light">
             <td><?php echo $Product;?></div></td>
             <td><?php echo $Price;?></td>
             <td><?php echo $Amount;?></td>
             <td><?php echo $Total;?></td> 
             <td><a href="delete2.php?GetID=<?php echo $ProductID ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
           </tr>
<?php
}
?>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<div align="center">
  <a href="add2.php"><button type="button" class="btn btn-success">Add++</button></a>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>

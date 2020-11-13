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
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kaiwin50.mysql.database.azure.com', 'kaiwin50@kaiwin50', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th width="25"> <div align="center">ID</div></th>
      <th width="100"> <div align="center">Name</div></th>
      <th width="225"> <div align="center">Comment </div></th>
      <th width="150"> <div align="center">Link </div></th>
      <th width="100"></th>
    </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
    <tr>
      <td><?php echo $Result['ID'];?></div></td>
      <td><?php echo $Result['NAME'];?></div></td>
      <td><?php echo $Result['Comment'];?></td>
      <td><?php echo $Result['Link'];?></td>
      <td><a href="form.html" $Result['ID']><div align="center"><button type="button" class="btn btn-primary" width="50">Edit</button></div></a></td>
    </tr>
<?php
}
?>
  </thead>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>

<html>
<head>
<title>ITF Lab</title>
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
  <thead class="thead-dark">
    <tr>
        <th width="100"> <div align="center">Name</div></th>
        <th width="350"> <div align="center">Comment </div></th>
        <th width="150"> <div align="center">Link </div></th>
    </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
    <tr>
        <td><?php echo $Result['NAME'];?></div></td>
        <td><?php echo $Result['Comment'];?></td>
        <td><?php echo $Result['Link'];?></td>
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

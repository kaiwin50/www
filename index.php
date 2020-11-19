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
mysqli_real_connect($conn, 'kaiwindata.mysql.database.azure.com', 'kaiwin50@kaiwindata', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
  <div class="row">
    <div class="col m-auto>
      <div class="col mt-5>
        <table width="600" class="table table-bordered">
          <thead class="thead-light">
          <tr class="bg-secondary">
            <th width="25"> <div align="center">ID</div></th>
            <th width="150"> <div align="center">Name</div></th>
            <th width="300"> <div align="center">Comment </div></th>
            <th width="175"> <div align="center">Link </div></th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
<?php
          while($Result = mysqli_fetch_array($res))
{
           $UserID = $Result['ID'];
           $Name = $Result['NAME'];
           $Comment = $Result['Comment'];
           $Link = $Result['Link'];
?>
           <tr class="bg-light">
             <td><?php echo $UserID;?></div></td>
             <td><?php echo $Name;?></div></td>
             <td><?php echo $Comment;?></td>
             <td><?php echo $Link;?></td>
             <td><a href="edit.php?GetID=<?php echo $UserID ?>"><button type="button" class="btn btn-primary">Edit</button></a></td>
             <td><a href="delete.php?GetID=<?php echo $UserID ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
  <a href="add.php"><button type="button" class="btn btn-success">Add++</button></a>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>

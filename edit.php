<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'kaiwin50.mysql.database.azure.com', 'kaiwin50@kaiwin50', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');

$UserID = $_GET['GetID'];
while($Result = mysqli_fetch_array($res))
{
           $UserID = $Result['ID'];
           $Name = $Result['NAME'];
           $Comment = $Result['Comment'];
           $Link = $Result['Link'];
}
?>
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
<div class="container">
  <div class="row">
    <div class="col m-auto">
      <div class="col mt-5">

            <form action = "update.php" method = "post" id="CommentForm" >
                Name:<br>
                <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
                Comment:<br>
                <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
                Link:<br>
                <input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
                <input type="submit" id="commentBtn">
            </form>

      </div>
    </div>
  </div>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>

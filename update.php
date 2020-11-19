<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'kaiwindata.mysql.database.azure.com', 'kaiwin50@kaiwindata', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if(isset($_POST['update']))
{  
    $UserID = $_GET['ID']
    $name = $_POST['NAME'];
    $comment = $_POST['Comment'];
    $link = $_POST['Link'];


    $sql = "UPDATE guestbook SET NAME='".$name."', Comment='".$comment."', Link='".$link."' WHERE ID='".$UserID."'";
    $result = mysqli_sql($conn,$sql)
}
else
{
    header("location:index.php)

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

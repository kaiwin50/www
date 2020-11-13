<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'kaiwin50.mysql.database.azure.com', 'kaiwin50@kaiwin50', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "UPDATE guestbook SET Name='$name', Comment='$comment', Link='$link' WHERE id='$id'"


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

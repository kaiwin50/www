<?php

require_once("connection.php");

$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$query = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $query)) {
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

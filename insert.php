<?php

require_once("connection.php");

$Name = $_POST['name'];
$Comment = $_POST['comment'];
$Link = $_POST['link'];


$query = "INSERT INTO guestbook (NAME , Comment , Link) VALUES ('$Name', '$Comment', '$Link')";


if (mysqli_query($conn, $query)) {
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

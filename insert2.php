<?php

require_once("connection2.php");

$Name = $_POST['product'];
$Price = $_POST'price'];
$Amount = $_POST['amount'];


$query = "INSERT INTO guestbook (Product , Price , Amount) VALUES ('$Product', '$Price', '$Amount')";


if (mysqli_query($conn, $query)) {
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

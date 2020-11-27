<?php

require_once("connection2.php");

$Name = $_POST['product'];
$Price = $_POST'price'];
$Amount = $_POST['amount'];
$Total = $Price * $Amount;

$query = "INSERT INTO shop (Product , Price , Amount, Total) VALUES ('$Product', '$Price', '$Amount', $Total)";


if (mysqli_query($conn, $query)) {
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

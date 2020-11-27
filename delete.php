<?php

require_once("connection.php");


$ProductID = $_GET['GetID'];


$sql = "DELETE FROM guestbook WHERE ID=$ProductID";

if ($conn->query($sql) === TRUE) {
  header("location:index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

<?php

require_once("connection.php");


$UserID = $_GET['GetID'];


$sql = "DELETE FROM MyGuests WHERE ID=$UserID";

if ($conn->query($sql) === TRUE) {
  header("location:index.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

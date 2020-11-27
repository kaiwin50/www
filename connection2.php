<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'tra-data.mysql.database.azure.com', 'kaiwin50@tra-data', '7144Eba1', 'itftest', 3306);

if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

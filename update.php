<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'kaiwindata.mysql.database.azure.com', 'kaiwin50@kaiwindata', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    if(empty($_POST['name']) || empty($_POST['comment']) || empty($_POST['link']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
    {
        $UserID = $_GET['ID'];
        $FixName = $_POST['name'];
        $FixComment = $_POST['comment'];
        $FixLink = $_POST['link'];

        $query = "UPDATE guestbook SET NAME='".$FixName."', Comment='".$FixComment."', Link='".$FixLink."' where ID='".$UserID."'";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo $UserID
            echo $FixName
        }
        else
        {
            echo '  Please Check Your Query ';
        }
    }
}
else
{
    header("location:index.php");
}



?>

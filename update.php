<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'kaiwindata.mysql.database.azure.com', 'kaiwin50@kaiwindata', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    if(empty($_POST['NAME']) || empty($_POST['Comment']) || empty($_POST['Link']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
    {
        $FixName = $_POST['name'];
        $FixComment = $_POST['comment'];
        $FixLink = $_POST['link'];

        $query = " insert into records (NAME, Comment, Link) values('$FixName','$FixComment','$FixLink')";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:index.php");
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
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

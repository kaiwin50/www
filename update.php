<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'kaiwindata.mysql.database.azure.com', 'kaiwin50@kaiwindata', '7144Eba1', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']))
    {
        echo ' Please Fill in the Blanks ';
    }
    else
    {
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];

        $query = " insert into records (User_Name, User_Email,User_Age) values('$UserName','$UserEmail','$UserAge')";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
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

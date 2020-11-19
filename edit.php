<?php

require_once("connection.php");


$UserID = $_GET['GetID'];

?>
<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
<div class="container">
  <div class="row">
    <div class="col m-auto">
      <div class="col mt-5">
          <div class="card-title text-dark">
            <h3 class="bg-success text-white text-center">Update Form</h>
        </div>
        <div class="card-body bg-light">
           
             <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                <input type="text" class="form-control mb-2" placeholder=" Name " name="name">
                <input type="text" class="form-control mb-2" placeholder=" Comment " name="comment">
                <input type="text" class="form-control mb-2" placeholder=" Link " name="link">
                <button class="btn btn-primary" name="update">Submit</button>
             </form>
            
        </div>
      </div>
    </div>
  </div>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>

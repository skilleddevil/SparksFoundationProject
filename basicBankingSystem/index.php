<?php
include 'includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Sparks Foundation Bank</title>
</head>
<body style="background-color : #ADD8E6; ">
<nav class="navbar navbar-fixed-top " style="background-color:#363636;">
  <div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    <a class="navbar-brand" style="color: white;">Sparks Foundation Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="nav navbar-nav navbar-right" >
            <li ><a href = "index.php" style="color: #007FFF;"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="user.php" style="color: #007FFF;"><span class="glyphicon glyphicon-user"></span> New Users</a></li>
            <li><a href="transaction.php" style="color: #007FFF;"><span class="glyphicon glyphicon-transfer"></span> Transfer Money</a></li>
            <li class="active"><a href="history.php" style="color: #007FFF;"><span class="glyphicon glyphicon-inbox"></span> History</a></li>
        </ul>
    </div>
  </div>
</nav>

<div class="flex-container">
  <div>
      <a target="_blank" href="https://www.sparksfoundation.org/wp-content/uploads/2017/12/nocrop-1.png">
    <img src="https://www.sparksfoundation.org/wp-content/uploads/2017/12/nocrop-1.png" alt="Forest" width="600" height="600">
  </a>
  </div>
  <div class="flex-container2">
        <div><a href="transaction.php"><button class="button button1">TransferMoney</button></a></div>
        <div><a href="history.php"><button class="button button2">History</button></a></div>    
  </div>
   
</div>

<div>
<br><br><br><br>
<?php
include 'includes/footer.php';
?>
</div>
</body>
</html>
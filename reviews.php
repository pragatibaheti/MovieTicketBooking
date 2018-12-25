<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Booking Confirmation</title>
  <style>
    
    #logo
    {
      width:275px;
      height:200px;
      margin-top: 50px;
      margin-left: 500px;
      border-radius:100px;
    }
    #box
    {
      width:700px;
      height:500px;
      background-color:#FFEFD5;
      margin-top: -70px;
      margin-left: 300px;
      z-index: 1;
    }
    .content
    {
      position: absolute;
      margin-left: 20px;
      margin-top: 80px;
      
    }
    span
    {
      padding-bottom: 20px;
      padding-top: 5px;
    }
    .glyphicon
    {
      color: #48D1CC;
      font-size: 25px;
    }
.c
{

    padding-left: 40px;
    font-family: comic sans;
    color:#4682B4;
}
#home
{
  width:55px;
  height:40px;
  background-color: red;
  margin-left: 1200px;
  margin-top:-240px; 
}

</style>
</head>
<body>
  <img id="logo" src="images/logo1.jpg">
  <div id="box">
    <div class="content">
      <span class="glyphicon glyphicon-user"><span class="c"><?php session_start(); echo $_SESSION['name']?></span></span> <br><br>
       <span class="glyphicon glyphicon-film"><span class="c">Namaste England - 6:30pm</span> <br><br>
       <span class="glyphicon glyphicon-euro"><span class="c">RS.<?php echo $_SESSION['amount']?></span></span><br><br>
       <span class="glyphicon glyphicon-list-alt"><span class="c">Seat NO:<?php echo $_SESSION['seat']?></span></span><br><br>
       <span class="glyphicon glyphicon-barcode"><span class="c">Pay From Wallet.Booked on <?php date_default_timezone_set("Asia/Calcutta"); echo date("H:i:s");?></span></span><br><br>
       <span class="glyphicon glyphicon-envelope"><span class="c">Contact for any issues:Email-pvrcinemas@ac.in</span></span><br><br>
    </div>
   
  </div>
  <div id="home"><a href="intro.php"><img style="width:55px;height:40px;" src="images/home.png"></a></div>
</body>
</html>
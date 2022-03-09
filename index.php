<?php
 require("database/connection.php");
 $em = "voting254";
 $email = htmlspecialchars($em);
 $out = crypt($email,'voting_salt%6(*(@*&*(@$*&Q@*$*@**');
// $dec = decrypt($email,'voting_salt%6(*(@*&*(@$*&Q@*$*@**');
 // echo ("<br><br>".$out);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <title>Voting System | Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" url="favicon.ico">

</head>

<body>

    <!-- <center>
  <div style="padding-top:10vh;">
  <?php 
  /*  if($em ="voting254"){
      header('Location: second.php');
      echo "moving";
    }
   */


   ?>

  </div>
</center> -->

    <div class="nav">
        <a href="" class="navbar">
            Voting
        </a>
        <a href="" class="navbar first">Dashboard</a>
        <a href="" class="navbar">Login</a>

    </div>

    <div class="top container">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <p>
                        Join millions of people in getting
                        credible results to any poll
                    </p>
                    <br><br>
                    <a href="login.php">
                        <button class="btn-info btn vote-btn">Vote Today</button>
                    </a>
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <img src="assets/images/vote-svg.svg" class="ban-img" alt="vote">
                </center>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="footer">
        <center>&copy; 2022 Voting system</center>
    </div>



</body>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/script.js"></script>

</html>
<?php
require 'common.php';
?>
<html>
    <head>
      <title>Sell</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
        a:hover {
            background-color: white;
            color: black !important;
            cursor: pointer;
        }
        #background-image{
            
           border:2px #5cb85c solid;
           border-radius: 0px 0px 25px 25px;
           margin-bottom: 15px;
        }
        .top-right {
  position: absolute;
  top: 6px;
  right: 22px;
}
    </style>
    </head>
    <body>
<nav class="navbar navbar-success navbar-fixd-top" style="background-color:#5cb85c;position: sticky;top: 0;z-index: 1;">
<div class="container-fluid">
<div class="navbar-header">
    <button type="button" class="navbar-toggle " style="background-color:white;" data-toggle="collapse" data-target="#rs">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
    
<a href="user_detail.php" class="nav navbar-nav navbar-brand" style="color:white;margin-top: 1px;margin-right: px;"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></a>
<a href="dev.php" class="navbar-brand" style="color:blanchedalmond;font-family: Brush Script MT;font-size: 32px;">College-buddy</a>
</div>
<div class="collapse navbar-collapse" id="rs">
<ul class="nav navbar-nav navbar-right">
    <li class="" style="margin-right: 15px;"><a href="index.php" style="color:white;font-size: 20px;"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
    <li class="" style="margin-right: 15px;"><a href="signup.php" style="color:white;font-size: 20px;"><i class="fa fa-user-plus" aria-hidden="true"></i>Signup</a></li>
    <li class="" style="margin-right: 15px;"><a href="login.php" style="color:white;font-size: 20px;"><i class="fa fa-key" aria-hidden="true"></i>Login</a></li>
</ul>
</div>
</div>
</nav>
    <center><i class="fa fa-user-circle fa-5x"></i></center>
                <center><h3 style="font-family: Lucida Bright">Create your account</h3></center>
    </body>
</html>


<?php
require 'common.php';
?>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
 <nav class='navbar navbar-success navbar-fixd-top' style="background-color:#5cb85c;position: sticky;top: 0;z-index: 1;">
            <div class='container-fluid'>
            <div class='navbar-header'>
                <a href="dev.php" class="navbar-brand" style="color:blanchedalmond;font-family: Brush Script MT;font-size: 32px;">College-buddy</a>
            </div>
                <div class=' navbar-brand nav-link navbar-right '><a href='logout.php' style="color: white;"><i class="fa fa-power-off"></i>Logout</a></div>
                  <div class='navbar-brand navbar-right '><a href='home.php' style="color: white;"><i class="fa fa-home"></i>Home</a></div>
            </div>
        </nav>
<div style="width:600px;margin-left:500px;margin-bottom:378px;">
<h3>Change Password</h3>
<form method="post" action="settings.php">
<div class="form-group" >
<input type="password" placeholder="Old Password" class="form-control" name="old">
</div>
<div class="form-group">
    <input type="password" placeholder="New Password" class="form-control" name="new">
</div>
<div class="form-group">
    <input type="password" placeholder="Re-type Password" class="form-control" name="rnew">
</div>
<p><button class="btn btn-success">change</button></p>
</form>

</div>
</body>
</html>


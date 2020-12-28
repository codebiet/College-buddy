<?php
include 'common.php';
?>
<html>
<head>
<title>Log in</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.column{
margin-top:50px;
}
</style>
</head>
<body>
    <?php
    include 'home2.php';
    ?>
<div class="column" >
<div class="panel panel-success" style="max-width:500px;margin-left:auto;margin-right:auto;">
<div class="panel-heading">
<h3>LOGIN</h3>
</div>
<div class="panel-body">
    <form method="post" action="log_script.php">
<div class="form-group">
<input type="email" placeholder="Email" class="form-control" name="email">
</div>
<div class="form-group">
<input type="password" placeholder="Password" class="form-control" name="password">
</div>
<button class="btn btn-success btn-block">Login</button>
</div>
<div class="panel-footer">
Don't have an account?<a href="signup.php">Register</a>
</div>
</div>
</div>
</body>
</html>


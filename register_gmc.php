<!DOCTYPE HTML>

<html>
<meta name="viewport"
content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<head>
	<link href="css/bootstrap.min.css"
rel="stylesheet">
</head>
<body>
<div id="semua" class="container-fluid">
	<div class="row">
	<div class="col-md-12"></div>
	</div>
</div>
<div class="modal fade"
id="loginModal" role="dialog"
aria-labelledby="myModalLabel"
aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
	<h4 class="modal-title" 
id="myModalLabel">
	Login Dahulu
	</h4>
	</div>
	<div class="modal-body">
	<p><center>Untuk Bisa
Memanfaatkan Aplikasi Ini Anda Dipersilahkan Untuk Login Dahulu</center>center></p>
	<from class="from-horizontal" role="form"
id="loginFrom" action="login.php? action=login">
	<div class="from-group">
	<label for="username" class="col-sm-2 control-label">
	Username
	</label>
	<div class="col-sm-10">
	<input type="email" class="form-control"
	name="username" id="logEmail" placeholder="Username here"/>
	</div>
	</div>
	<div class="from-group">

<label 
for="inputPassword3" class="col-sm-2 control-label">
	Password
	</label>
	<div class="col-sm-10">
	<input
type="password" class="from-control" name="password"
id="logPassword"
placeholder="Input Your"
Password"/>
	</div>
	</div>
	</form>
	</div>
	<div class="modal-footer">

	<button type="button"
class="btn btn-default" data-dismiss="modal">
	No,Thanks 
	</button>
	<button id="btnLogin"
type="button" class="btn btn-primary">

	Login
	</button>
	</div>
	</div>
	</div>
	</div>
<script src="js/jquery.min.js"></script>
	<script src="js/login.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
	<head>
	<title>Welcome back user!</title>
	<style type="text/css">
		h1{
		position:relative;
		top:0px;
		color:red;
		}
		input.user{
		position:relative;
		top:30px;
		width:300px;
		padding:10px;
		}
		input.pass{
		position:relative;
		top:60px;
		width:300px;
		padding:10px;
		}
	</style>
	</head>
		<body bgcolor="#3E0D6B">
		<img src="http://archives.njit.edu/vhlib/images/njit_logo.gif" alt="NJIT logo">
		<form action="form.php" method="post">
		<div>
		<center><h1>Log in!</h1></center>
		</div>
		<div>
		<center><input placeholder="Enter username" type="text" class="user"/></center>
		</div>
		<div>
		<center><input placeholder="Enter password" type="password" class="pass"/></center>
		</div>
		<br><br><br><br>
		<div>
		<center><input type="submit" value="Log in"></center>
		</div>
		<br><br><br>
		<div>
		<center><input type="button" value="Go back home"
		onclick="window.location.href='http://web.njit.edu/~bss46/forms/index.php'"/></center>
		</div>
		</form>
		</body>
</html>

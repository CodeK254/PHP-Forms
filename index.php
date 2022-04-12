<?php 

	$fname = $email = $uname = $pword = '';
	$errors = array('fname'=>'','email'=>'','uname'=>'','pword'=>'');

	if(isset($_POST['submit'])){
		if(empty($_POST['fname'])){
			$errors['fname'] = 'Fullname cannot be blank.';
		} else {
			$fname = $_POST['fname'];
		}
		if(empty($_POST['mail'])){
			$errors['email'] = 'Email cannot be blank.';
		} else {
			$email = $_POST['mail'];
		}
		if(empty($_POST['uname'])){
			$errors['uname'] = 'Username cannot be blank.';
		} else {
			$uname = $_POST['uname'];
		}
		if(empty($_POST['pword'])){
			$errors['pword'] = 'Password required.';
		} else {
			$pword = $_POST['pword'];
		}

		if(!array_filter($errors)){
			header('Location: home.php');
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Fill Page</title>
	<style type="text/css">
		input[type=submit]{
			border-radius: 10px;	
			border: none;
			border-bottom: 2px solid #D1D1D4;
			background-color: teal;
			width: 100px;
			transition: .2s;
			color: white;
			font-size: 15px;
			margin-top: 20px;
			height: 30px;
			padding: 0px;
		}
		.red-text{
			margin-left: 30px;
			color: red;
			font-size: 12px;
			margin-bottom: 0px;
		}
	</style>
</head>
<body>
	<h1>Sign Up page</h1>
	<center>
		<form class="signup" action="index.php" method="POST">
			<h3></h3>
			<div>
				<label>Fullname: </label><br>
				<input type="text" name="fname" value="<?php echo htmlspecialchars($fname); ?>">
				<div class="red-text">
					<p><?php echo $errors['fname']; ?></p>
				</div>
			</div>
			<br>
			<div>
				<label>Email: </label><br>
				<input type="text" name="mail" value="<?php echo htmlspecialchars($email);?>">
				<div class="red-text">
					<p><?php echo $errors['email']; ?></p>
				</div>
			</div>
			<br>
			<div>
				<label>Username: </label><br>
				<input type="text" name="uname" value="<?php echo htmlspecialchars($uname); ?>">
				<div class="red-text">
					<p><?php echo $errors['uname']; ?></p>
				</div>
			</div>
			<br>
			<div>
				<label>Password: </label><br>
				<input type="text" name="pword" value="<?php echo htmlspecialchars($pword); ?>">
				<div class="red-text">
					<p><?php echo $errors['pword']; ?></p>
				</div>
			</div>
			<br>
			<center><div>
				<input type="submit" name="submit" value="submit">
			</div></center>
		</form>
	</center>
</body>
</html>
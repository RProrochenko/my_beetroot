<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Paper Stack</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
	<div class="container">
		<section id="content">
			<form action="userCheck.php" method="POST">
				<h1>Login Form</h1>
				<div>
					<input type="text" placeholder="Username" required="" id="username" name="username" />
				</div>
				<div>
					<input type="password" placeholder="Password" required="" id="password" name="password"/>
				</div>
				<div>
					<input type="submit" value="Log in" />
				</div>
			</form><!-- form -->

		</section><!-- content -->
	</div><!-- container -->
</body>

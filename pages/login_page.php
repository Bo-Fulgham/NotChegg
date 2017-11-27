<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8" />
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="extfiles/bootstrap.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style style="text/css">
		.container1 {

		 	width: 500px;
		 	clear: both;
	 		padding: 20px;
	 		width: inherit;
	 		height: inherit;

 		}
	 .container1 input {

			 width: 100%;
			 height: 100%;
			 clear: both;


	 	}
		.center {
    	margin: auto;
			margin-top: 10px;
    	width: 50%;

		}
		.orange {
			background-color: #F9690E;
		}

		.dark-blue{
			background-color: #2C3E50;
		}

		</style>
	</head>
	<body>
		<?php require '../functions/pagesbar.php';?>
		<div class="container">
					<!-- Header -->
					<header class="w3-container orange w3-center" style="padding:128px 16px">
			  		<h1 class="w3-margin w3-jumbo">Login</h1>
						<p>NotChegg.com</p>
			  		<p class="w3-xlarge"></p>
						<form method="post" action="login_page.php">
								<label>Username: </label>
								<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"> <br>
								<label>Password: </label>
								<input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"> <br>
								<input type="submit" value="Log in">
						</form>
					</div>
				</header>
		</div>

				</header>
	    </div>

	    </div>

		<?php
			require '../functions/loginFunctions.php';
			isLoggedIn();
			checkCredentials();
			?>



	<?php include '../functions/footer.php';?>
	<script type="text/javascript" src="extfiles/jquery-2.1.4.js "></script>
	<script type="text/javascript" src="extfiles/bootstrap.min.js"></script>
	</body>
</html>

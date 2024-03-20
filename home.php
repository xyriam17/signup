<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);">
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-450 p-3 text-center">
            <h3 class="display-4 ">Hello, <?=$_SESSION['fname'] ?></h3>
            <a href="logout.php" class="btn btn-secondary" style="background: linear-gradient(#e66465, #9198e5);">
            	Logout
            </a>
		</div>
    </div>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>
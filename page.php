<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?
		include("A1/style.css");
		require("A1/header.php");

		$page = $_GET["page"];

		switch($page) {
		
			case 'about':
				include("A1/about.php");
			break;
			case 'classes':
				include("A1/classes.php");
			break;
			default:
				include("A1/home.php");
			break;
		}

		require("A1/footer.php");
	?>
	
</body>
</html>
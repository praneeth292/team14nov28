<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');
$year = date('Y');
$aura = "Global Clothing";
$section = "shirts";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Global clothing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../images/logo.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Mukta+Malar" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .prod img:hover {
 -webkit-transform: scale(1.8);
 transform: scale(1.8);
 }
  </style>
   <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
<div class="container">
<div class="row">
<div class="col-md-1"></div>


<div class="col-md-4 prod">
<?php include("products.php");
     
 ?>
		<a class="products">
			<?php foreach($shirts as $product_id => $product) {
			echo "<li>"; 
			echo '<a href="detail.php?id=' . $product_id . '">';
			echo '<img src="' . $product["img"] . '" alt="' . $product["name"] .'">';
			echo "</a>";
			echo "<BUTTON>View Details</BUTTON>"; 
			echo "</li>";
			echo "<br>";
			 } ?>
		</a>
</div>
		<div class="col-md-1">
</div>


</div>
<?php include("include/footer.inc") ?>


</body>
</html>



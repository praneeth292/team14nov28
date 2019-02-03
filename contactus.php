<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>Global Clothing</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container">
    	<div class="row">
        	<div class="col">
            	<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #0000ff solid thick">
<h1 style="align-items:center">Contact Us</h1>

<p style="align-items:center">349, Queens Street</p>
<p style="align-items:center"> Brisbane City</p>
<p style="align-items:center">4000</p>

</br>
<p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
            	<div class="col">
                	<label for="name">Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" />
                </div>
            </div>
           
            <div class="row">
            	<div class="col">
                	<label for="message">* Message:</label>
                    <textarea id="message" name="message" rows="4" cols="30" required></textarea>
                </div>
            </div>

            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                    <input type="reset" id="reset" value="Clear Form" />
                </div>
            </div></p>

<h2>Maps to help you out</h2>
<p><div class="mapouter"><div class="gmap_canvas"><div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=james%20cook%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pure black</a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></p>

<?php include("include/footer.inc") ?>
</body>
</html>
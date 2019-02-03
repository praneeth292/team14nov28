
<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Global Clothing</title>
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
     <script src="js/member.js"></script>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>

<div class="container">
        <h1>Member Page</h1>
        <?php
        // check session variable
        if (isset($_SESSION['valid_user']))
        {
            //make the database connection
            $conn  = db_connect();

            $user_check = $_SESSION['valid_user'];
           

            //make a query to check if a valid user
            $ses_sql = "select name from users where email='$user_check'";

            $result = $conn -> query($ses_sql);

            if ($result -> num_rows == 1) {
                $row = $result -> fetch_assoc();
                $name = $row['name'];
                //header("location: cart.php");  
                echo "<p>Welcome <b>$name!</b></p>";
                echo "<p><a href=\"logout.php\" id=\"4\" onClick=\"nav-item_selected(4)\">Logout</a></p>";


            }
            else {
                echo "<p>Something is wrong.</p>";
                echo "<p><a href=\"login.php\" id=\"4\" 
        onClick=\"nav_item_selected(4)\">Login</a></p>";
            }
            
        }
        else
        {
            echo "<p>You are not logged in.</p>";
            echo "<p><a href=\"login.php\" id=\"4\" 
      onClick=\"nav_item_selected(4)\">Login</a></p>";
        }
        ?>
    </div>
<?php include("include/footer.inc") ?>
</body>
</html>





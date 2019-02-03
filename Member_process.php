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

<?php
if(isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['number'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);
    $number = $conn -> real_escape_string($_POST['number']);
    //create an insert query
    $sql = "insert into users (name, email, password, number) 
			VALUES ('$name', '$email', '$password', '$number')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
        echo "<h1>Welcome</h1>";
        echo "<p>Hi <b>$name</b></p>";
        echo "<p><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">You can login now</a></p>";
        echo "</div>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>

<?php include("include/footer.inc") ?>
</body>
</html>





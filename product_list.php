<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Global Clothing</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container">
    <?php
		//make the database connection
		$conn  = db_connect();
		//create and execute a query
		$sql = "SELECT * FROM products;";
		$result = $conn -> query($sql);
		print "<h1>Products</h1>\n";
		print "<div class=\"table-responsive mt-3\">\n";
		print "<table class=\"table table-striped\">\n";
            print "<thead>\n";
				//get field names
				print "<tr>\n";
					while ($field = $result -> fetch_field())
					{
  						print "<th>" . strtoupper($field->name) . "</th>\n";
					} // end while
      			print "</tr>\n";
    		print "</thead>\n";
    		print "<tbody>\n";
                //get row data as an associative array
                while ($row = $result -> fetch_assoc()){
                    //look at each field
                    $id = $row["id"];
                    $type = $row["type"];
                    $manufacturer = $row["manufacturer"];
                    $description = $row["description"];
                    $price = number_format($row["price"],2);
                    $image = $row["image"];

      			    print "<tr>\n";
                    //output
                    print "<td class=\"align-middle\">$id</td>\n";
                    if($type)
                        print "<td class=\"align-middle\">$type</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";;

                    if($manufacturer)
                        print "<td class=\"align-middle\">$manufacturer</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if($description)
                        print "<td class=\"align-middle\">$description</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if($price)
                        print "<td class=\"align-middle\">$price</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if (@file_exists($image))
                    {
                        print "<td class=\"align-middle\"><img src = $image width=60 height=60></td>\n";
                    }
                    else
                    {
                        print "<td class=\"align-middle\">&nbsp;</td>\n";;
                    }

      			    print "</tr>\n";
                }// end while

    		print "</tbody>\n";
        print "</table>\n";
        print "</div>\n";
        $conn -> close();
	?>	
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>
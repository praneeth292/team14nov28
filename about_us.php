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

  <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <script src="js/nav.js"></script>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>


<div class="container">

<h3>ABOUT US</h3>
<p>	Why do I adore online shopping?  This is the question I get asked quite a lot.  The thing is, you can get better value out of online shopping than you can physically going into a shop.

Most online stores will email you when there are sales on, most of the time if you join mailing lists you can receive vouchers for up to $20 off.  So I love shopping online – plus I don’t have to leave the house – and the parcel comes to me!Stay at Home Mum has scoured the internet – and of course asked you, our reader, for a list of the very best online stores for women’s clothing in Australia and Worldwide.</p>

<p>
		The Iconic The Iconic has a great range, a little on the pricey side, but good if you are off somewhere special.
St Frock has some truly beautiful and feminine clothing for all ages and it is super well priced!
Blue Bungalow has clothing that cover more of the parts we don’t like, and accentuates the bits we do! They have free shipping for orders over $100.00
Boden Clothing Australia has some very high-quality women’s fashion that is truly unique! Loads of vintage-chic clothing.
City Chic has plus sizes,gorgeous clothing!
Forever New has really stepped up its game and has really on-trend girly clothing for all sizes.
Jay Jays have loads of stores around Australia – but you get the best deals online!
Atomic Cherry has loads of Rockabilly fashion – just beautiful – I buy most of my clothing there!
Crossroads is a discount women’s clothing shop but they now sell online.
Cotton On Clothing have an online store and if you sign up you get an additional 30% off! Great basic pieces.
Portmans is a great site for work wear and basics. </p><br><p>	 They have really nice tailored pants and basics.
Jacqui E has terrific workwear that is great quality and reasonably priced.
Millers are usually for the more mature lady, but if you hunt around you can find some great basic pieces.
Target also has an online clearance section!  I get a tad excited when I see ‘clearance’ on any website!
Rivers have a rather good online section now – so you can get the discount deals right to your door!
Asos are US based but ship great pieces to Australia for very little. <span style="display: none;" id="expand-text0"> They have a great range of maternity dresses too!
Birdsnest comes highly recommended by our Facebook followers.
Just Jeans has a terrific website – check out their sales items for really great deals!
Wish.com.au  Super inexpensive clothing for women.  Get 10% off when you sign up to their newsletter.
Jeans West has some beautiful current relaxed fashion.
Dotti has fun, young fashion.  They have a range of jeans, skirts and dresses for every-where wear.
Ally Fashion has low-cost trending items.</span><button id="expand-click0" href="javascript:;" style="text-decoration: none;" onClick="show_text('expand-click0','expand-text0','inline')"> Read more...</button>   </p><br><p>
Esther & Co provides practical clothing for the everyday woman.  Their clothing is budget conscious and pretty.
General Pants has everyday fashion for women and men. They offer globally recognised brands and specialise in jeans.
Missguided Shop the latest on-trend women’s fashion online at Missguided. With over 150 new products hitting our shelves every week, check out our new collections.
Showpo is a fun & forward Australian online fashion clothing store. We feature the best of women’s fashion in dresses, playsuits, skirts, two piece sets and much more!
Asos Discover the latest fashion trends with ASOS. Shop the new collection of clothing, footwear, accessories, beauty products and more. Order today from ASOS.
Witchery offers a wide selection of Australian clothing and accessories. Shop the latest women’s & children’s fashion online now. Free shipping when you spend $200.
Pretty Little Thing Shop the latest women’s fashion at <span style="display: none;" id="expand-text1">PrettyLittleThing Australia from $8. Offering thousands of must-have looks & trends – Students get 50% off.
Lyst Huge variety of the most stylish stores and brands all in the one place!
Pretty Little Thing has party wear, dresses and club wear mainly for the younger woman.
Dotti is ‘Fast Fashion’ much like Supre.  Aimed at 15 – 22 year olds.
Lee Jeans A traditional old school jeans maker, Lee has all the jeans you could ever need and they aren’t expensive.
Glassons stocks casual wear for the younger woman with dresses, jeans, t-shirts, shoes and knitwear.
General Pants Co stock brand-name casual wear for young women.  Think Metalicus, Converse, Alice & Eve and Stussy.
Mister Zimi has women’s resort wear and holiday themed clothing.  Cute, comfortable with brightly colour, bold prints and light fabrics.</span><button id="expand-click1" href="javascript:;" style="text-decoration: none;" onClick="show_text('expand-click1','expand-text1','inline')"> Read more...</button>   

 </p> </div>

<?php include("include/footer.inc") ?>


</body>
</html>


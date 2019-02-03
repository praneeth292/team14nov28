    <nav class="container navbar navbar-expand-lg bg-dark navbar-dark" style="border-radius: 5px; font-family: 'Permanent Marker', cursive;">
	<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="width:40px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!-- md-auto: left, ml-auto: right, mx-auto: center -->
            <ul class="navbar-nav md-auto">
                <li class="nav-item"><a class="nav-link" id="0" onClick="nav_item_selected(0)" href="index.php">Home</a></li>
				<li class="nav-item">
                    <a class="nav-link" href="about_us.php" id="1" onClick="nav_item_selected(1)">About Us</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="2" onClick="nav_item_selected(2)" data-toggle="dropdown">
                        Gender
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Men.php">For  Men</a>
                        <a class="dropdown-item" href="Women.php">For women</a>
                    </div>
                </li>
				
				<li class="nav-item">
                    <a class="nav-link" href="Contactus.php" id="3" onClick="nav_item_selected()">Contact us</a>
                </li>
                
				<?php if(isset($_SESSION['valid_user'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" id="4" onClick="nav_item_selected(4)">Sign-out</a>
                </li>
              

                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" id="4" onClick="nav_item_selected(4)">Sign-in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="member.php" id="5" onClick="nav_item_selected(5)">Sign-up</a>
                </li>
				
				<li class="nav-item">
                    <a class="nav-link" href="Feedback.php" id="6" onClick="nav_item_selected(6)">Feedback</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="product_list.php" id="7" onClick="nav_item_selected(7)">Product list</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
		<form class="form-inline" action="search.php" method="GET">
            <input class="form-control mr-sm-2" type="Search" name="key" placeholder="Search">		
		    <button class="btn light my-sm-0" type="submit">Search</button>
        </form>
    </nav>


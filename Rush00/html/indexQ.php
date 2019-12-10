<?php
	session_start();
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Q-serial models</title>
    <link href="../css/top.css" rel="stylesheet">
    <link href="../css/hamburger.css" rel="stylesheet">
    <link href="../css/body.css" rel="stylesheet">
    <link href="../css/product_block.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
</head>

<body>
    <div class="top" id="intro-top">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="indexA.php">A-class</a></li>
                <li><a class="menu__item" href="indexQ.php">Q-class</a></li>
                <li><a class="menu__item" href="indexRS.php">RS-class</a></li>
            </ul>
        </div>
	    <a href="index.php">
		    <img src="../img/audi_logo.png" alt="audi logo" class="logo clearfix">
	    </a>
        <div class="top_menu">
	        <?php
		        if ($_SESSION['loggued_on_user'] != "") {
			        echo "<a href='logout.php' class='top_button'>Logout</a><a href='login.html' class='top_button'>Cart</a>";
		        }
		        else{
		            echo "<a href='login.html' class='top_button'>Login</a>";
                }
	        ?>
        </div>
    </div>
    <div class="heading">
        <img src="https://www.audi.com/content/dam/gbp2/experience-audi/audi-sport/r-rs-serial-models/rs-q8/my2020/1920x600_ARSQ8_191003.jpg" alt="models">
        <!--    <h1>All models</h1>-->
    </div>
    <div class="container">
        <div class="heading">
            <h1>Q-serial models</h1>
        </div>
	    <?php
	    include ("check_count.php");
	    if (check('Q3')) {
		    $exist = "display: block";
	    } else{
		    $exist = "display: none";
	    }
	    echo "<div id='Q3' class='product_block response clearfix' style='".$exist."'>";
	    ?>
            <img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/q3/my2019/1920x1080-gal-prop-tx/1920x1080_desktop_AQ3_181001.jpg" alt="Q3">
            <div class="product_title">
                Audi Q3
            </div>
            <div class="product_ description">
                The Audi Q3 family: the first SUV in the compact class. The Audi Q3 embodies versatility; a fun drive that's efficient on every road and track.
            </div>
            <div class="delimiter"></div>
            <div class="product_ specifications">
                Fuel consumption combined*: 7.6–4.7 l/100km<br> CO₂-emissions combined*: 174–123 g/km
            </div>
            <div class="cost">from €31,200</div>
		    <?php
		    if ($_SESSION['loggued_on_user']) {
			    echo "<form method='post' action='changehtml.php'><input class='button_add_to_cart' type='submit' name='Q3' value='Add to cart'></form>";
		    }
		    ?>
        </div>
	    <?php
	    if (check('Q7')) {
		    $exist = "display: block";
	    } else{
		    $exist = "display: none";
	    }
	    echo "<div id='Q7' class='product_block response clearfix' style='".$exist."'>";
	    ?>
            <img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/q7/my-2020/1920x1080_AQ7_191002.jpg" alt="Q7">
            <div class="product_title">
                Audi Q7
            </div>
            <div class="product_ description">
                The Audi Q7 embodies pure freedom. With its permanent all-wheel drive and a flexible interior concept, it is an ideal companion.
            </div>
            <div class="delimiter"></div>
            <div class="product_ specifications">
                Fuel consumption combined*: 9.1–6.6 l/100km<br> CO₂-emissions combined*: 208–174 g/km
            </div>
            <div class="cost">from €56,800</div>
		    <?php
		    if ($_SESSION['loggued_on_user']) {
			    echo "<form method='post' action='changehtml.php'><input class='button_add_to_cart' type='submit' name='Q7' value='Add to cart'></form>";
		    }
		    ?>
        </div>
	    <?php
	    if (check('Q8')) {
		    $exist = "display: block";
	    } else{
		    $exist = "display: none";
	    }
	    echo "<div id='Q8' class='product_block response clearfix' style='".$exist."'>";
	    ?>
		    <a href="cardQ8.php">
			    <img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/a8/my2019/desktop/1920x1080_teaser_AA8_171002.jpg" alt="A8">
		    </a>
            <div class="product_title">
                Audi Q8
            </div>
            <div class="product_ description">
                The Audi Q8 combines the elegance of a four-door luxury coupé with the versatility of an SUV. The new face of the Q family.
            </div>
            <div class="delimiter"></div>
            <div class="product_ specifications">
                Fuel consumption combined*: 9.1–6.5 l/100km<br> CO₂-emissions combined*: 208–172 g/km
            </div>
            <div class="cost">from €73,100</div>
		    <?php
		    if ($_SESSION['loggued_on_user']) {
			    echo "<form method='post' action='changehtml.php'><input class='button_add_to_cart' type='submit' name='Q8' value='Add to cart'></form>";
		    }
		    ?>
        </div>
    </div>
    <div class="footer" id="intro-footer">
        <div class="footer_menu clearfix">
            <a class="footer_link" href="https://www.facebook.com/Audi.AG">
                <svg id="facebook" class="footer_logo">
                <path d="M20.1,20.4 L15.1,20.4 L15.1,24.8 L20.1,24.8 L20.1,38 L26,38 L26,24.8 L31.9,24.8 L31.9,20.4 L26,20.4 L26,18.6 C26,17.3 27.4,14.5 29.4,14.5 L31.8,14.5 L31.8,10.1 L26.7,10.1 C19.5,11.2 20.1,20.4 20.1,20.4 Z"></path>
            </svg>
                <div class="footer_link_underscore"></div>
            </a>
            <a class="footer_link" href="https://twitter.com/audiofficial?lang=en">
                <svg id="twitter" class="footer_logo">
                <path d="M34.5,16.2 C34.5,16.2 37.7,16.6 38.6,16 C37.1,16.8 35.6,17.8 34.4,19 C34.4,19 35.6,32.3 21.7,35.5 C21.7,35.5 14.5,36.1 9.4,32.2 C9.4,32.2 14.9,33.7 17.9,30.3 C17.9,30.3 12.8,30.8 11.5,26.8 C12.7,26.8 13.9,26.6 15.1,26.3 C15.1,26.3 10.3,25.4 10.4,20.6 C11.2,21.1 12.1,21.3 13.1,21.3 C13.1,21.3 9.1,17.7 11.6,13.5 C11.6,13.5 16.9,20 23.5,19.6 C22.7,16.6 24.5,13.5 27.6,12.7 C29.6,12.2 31.6,12.8 33,14.2 C34.4,13.9 35.7,13.3 36.9,12.3 C36.8,12.5 36.9,14.3 34.5,16.2 Z"></path>
            </svg>
                <div class="footer_link_underscore"></div>
            </a>
            <a class="footer_link" href="https://de.linkedin.com/company/audi-ag">
                <svg id="linkedin" class="footer_logo">
                <path d="M34.2,12 L13.8,12 C12.8,12 12,12.8 12,13.7 L12,34.2 C12,35.2 12.8,35.9 13.8,35.9 L34.3,35.9 C35.3,35.9 36.1,35.1 36.1,34.2 L36.1,13.7 C36,12.8 35.2,12 34.2,12 Z M19.1,32.5 L15.5,32.5 L15.5,21 L19.1,21 L19.1,32.5 Z M17.3,19.4 C16.2,19.4 15.2,18.5 15.2,17.3 C15.2,16.2 16.1,15.2 17.3,15.2 C18.5,15.2 19.4,16.1 19.4,17.3 C19.4,18.5 18.5,19.4 17.3,19.4 Z M32.5,32.5 L28.9,32.5 L28.9,26.9 C28.9,25.6 28.9,23.9 27,23.9 C25.1,23.9 24.9,25.3 24.9,26.8 L24.9,32.5 L21.3,32.5 L21.3,21 L24.7,21 L24.7,22.6 C25.2,21.7 26.3,20.7 28.1,20.7 C31.7,20.7 32.4,23.1 32.4,26.2 L32.5,32.5 Z"></path>
            </svg>
                <div class="footer_link_underscore"></div>
            </a>
        </div>
        <div class="footer_author">
            <a href="https://profile.intra.42.fr/users/jareynol">jareynol</a>
            <a href="https://profile.intra.42.fr/users/fsmith">fsmith</a>
        </div>
    </div>

</body>

</html>
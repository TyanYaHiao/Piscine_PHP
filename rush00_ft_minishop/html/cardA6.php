<?php
	error_reporting(0);
	session_start();
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Audi A6</title>
    <link href="../css/top.css" rel="stylesheet">
    <link href="../css/hamburger.css" rel="stylesheet">
    <link href="../css/body.css" rel="stylesheet">
    <link href="../css/product_block.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
	<link href="../css/card.css" rel="stylesheet">
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
			        echo "<a href='logout.php' class='top_button'>Logout</a><a href='cart.php' class='top_button'>Cart</a>";
		        }
		        else{
		            echo "<a href='login.html' class='top_button'>Login</a>";
                }
	        ?>
        </div>
    </div>
    <div class="heading">
        <img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/a6/my-2019/1920x1080-gal-prop/1920x1080_mobile_AA6_A_181001.jpg" alt="models">
        <!--    <h1>All models</h1>-->
    </div>
    <div class="container">
        <div class="heading">
            <h1>Audi A6</h1>
	        <h2>Comfortable, sporty and fully networked – the Audi A6 scores with its versatility,
		        which is also reflected in the wide range of model variants. The A6 Saloon can be obtained
		        with combustion engines or as the TFSI e with an innovative plug-in hybrid drive. The A6 Avant
		        gives you extra storage space, the A6 allroad quattro the ability to drive off the paved roads.
		        The S6 Saloon TDI and S6 Avant TDI will win you over with their extra sportiness,
		        both outside and inside.</h2>
        </div>
	    <div class="underline clearfix"></div>
		<div class="picture">
			<img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/a6/my-2019/1920x1080-gal-prop/1920x1080_desktop_AA6_L_181012.jpg" alt="A6">
		</div>
	    <div class="text">
		    <h2>A clear statement: the Audi A6 Saloon</h2>
		    <p>From the widened single frame over the side air intakes with sporty chrome trim to the narrow
			    headlights – the front of the A6 Saloon will impress you with its progressive nature at first glance.
			    The sharpened shoulder line with the strong curves over the wheel arches emphasise the quattro genes.
			    The coupé-like flowing roofline flows into the rear end, formed in three dimensions with a
			    characteristic aluminium style.</p>
	    </div>
	    <div class="underline clearfix"></div>
	    <div class="text">
		    <h2>Off-road-competent: the Audi A6 allroad quattro</h2>
		    <p>Both visually and technically, the Audi A6 allroad quattro is clearly identifiable as an off-roader.
			    In the exterior, among other things, there is the single-frame grill with vertical struts,
			    colour-highlighted wheel arch and an allroad-specific rear diffuser. Below the surface, the quattro
			    standard all-wheel drive with ultra-technology and the standard air suspension with adaptive dampers
			    ensure good traction, high safety and agile handling – regardless of the road surface. </p>
	    </div>
	    <div class="picture">
		    <img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/a6/my-2020/1920x1080_AA6_181015_1.jpg" alt="A6">
	    </div>
	    <div class="underline clearfix"></div>
	    <div class="picture">
		    <img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/a6/my-2020/1920x1080_desktop_AA6_TFSIe_191001_RGB.jpg" alt="A6">
	    </div>
	    <div class="text">
		    <h2>Innovatively driven: the Audi A6 Saloon TFSI e</h2>
		    <p>The Audi A6 Saloon TFSI e extends the A6 series with a plug-in hybrid vehicle. The special feature is
			    the drive system: thanks to the combination of electric motor and combustion engine, you can be both
			    efficient and locally emission-free on the road, as well as using the high-performance system power up
			    to 270 kW (367 hp) for sporty rides. Sporty elements in the exterior and interior also contribute to
			    the innovative business saloon's dynamic look.</p>
	    </div>
	    <div class="underline clearfix"></div>
	    <div class="text">
		    <h2>Versatile powerhouses: the S-models</h2>
		    <p>The Audi S6 Saloon TDI and the Audi S6 Avant TDI will win you over with their multi-talented sportiness.
			    With a full range of in-car technologies in the areas of infotainment and driver assistance systems, a
			    dynamically focused exterior, and last but not least the 257 kW (349 hp) V6 TDI engine, you're well
			    prepared for a variety of activities – whether you're on a family outing in the mountains or taking
			    longer business trips.</p>
	    </div>
	    <div class="picture">
		    <img src="https://www.audi.com/content/dam/gbp2/experience-audi/models-and-technology/production-models/a6/my-2019/1920x1080-gal-prop/1920x1080_AS6_A_181006.jpg" alt="A6">
	    </div>
    <div class="container_wrapper"></div>
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
<!-- assignment 1, pizza place website-->
<!--html to be converted to php at appropriate point in progress-->
<!--things to include
    Number of pizzas
    Size (number of slices)
    Shape (square or round)
    Toppings
    Deep dish, thin crust or some other crust types
    Take out, delivery, or eat-in g. And so on…
    php -S 0.0.0.0:8000
-->
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
	    <title>Papapia Pizzaria | Real Fake Pizza</title>
        <link rel="icon" type="image/pizzaicon" href="images/pizzaicon.png">
	    <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <?php
				//Grab Site Navigation
				include('nav.php')
			?>
        </header>
        <main>
           <!--https://maps.app.goo.gl/aUVSdrGGXE5nE8Jy6-->
            <div class="homepage">
                <a href="https://maps.app.goo.gl/aUVSdrGGXE5nE8Jy6" target="blank"> <img src="images/addressimage.png" alt="Restaurant Location"/></a>
                <div>
                    <div class="address">
                        <h1><strong>PAPAPIA PIZZERIA</strong></h1>
                        <address>123 Fake Lane<br>Orangeburg, SC 29118</address>
                    </div>
                        <div class="storehours">
                            <h2><strong>RESTAURANT HOURS</strong></h2>
                                <div class="hours">
                                <ul>
                                    <li>Monday</li>
                                    <li>Tuesday</li>
                                    <li>Wednesday</li>
                                    <li>Thursday</li>
                                    <li>Friday</li>
                                    <li>Saturday</li>
                                    <li>Sunday</li>
                                </ul>
                                <ul>
                                    <li>10:00am - 10:00pm</li>
                                    <li>10:00am - 10:00pm</li>
                                    <li>10:00am - 10:00pm</li>
                                    <li>10:00am - 12:00am</li>
                                    <li>10:00am - 2:00am</li>
                                    <li>10:00am - 2:00am</li>
                                    <li>Closed</li>
                                </ul>
                                <div class="imgcontain">
                                    <img src="images/cheffella.gif" alt="lil chef guy tossing some pizza"/>
                                </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="gotopb">
                <a href="pizzabuild.php"><h1>CUSTOMIZE YOUR PIZZA!</h1></a>
            </div>
        </main>
        <footer>
            <?php
				//Grab footer
				include('footer.php')
			?>
        </footer>
    </body>
</html>
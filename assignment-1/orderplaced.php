<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
	    <title>Order Placed!</title>
	    <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/pizzaicon" href="images/pizzaicon.png">
    </head>
    <body>
        <header>
            <?php
				//Grab Site Navigation
				include('nav.php')
                
			?>
        </header>
        <main>
            <h1>YOUR ORDER HAS BEEN PLACED</h1>
            <?php
                $fname = $_GET["fname"];
                $address1 = $_GET["address1"];
                $address2 = $_GET["address2"];
                $cheese = $_GET["CHEESE"];
                $sauce = $_GET["SAUCE"];
                $meat = $_GET["MEAT"];
                $veggies = $_GET["VEGGIES"];
                $size = $_GET["SIZE"];
                $crust = $_GET["CRUST"];
                $shape = $_GET["SHAPE"];
                $quantity = $_GET["quantity"];
                $delvorpick = $_GET["deliverypickup"];
			?>
            <p>Thank you for purchase fname</p>
            <p>Your order will be ready for pickup in 15min.</p>
            <p>Your order will be on it's way shortly.</p>
            <h2>Thank you for ordering from PAPAPIA PIZZERIA</h2>
            <h3>ORDER SUMMARY</h3>
            <ul>
                <li>Quantity</li>
                <li>Size</li>
                <li>Shape</li>
                <li>Crust</li>
                <li>Cheese</li>
                <li>Sauce</li>                
                <li>Toppings</li>
                <li>Order Total</li>
            </ul>
        </main>
        <footer>
            <?php
				//Grab footer
				include('footer.php')
                
			?>
        </footer>
    </body>
</html>
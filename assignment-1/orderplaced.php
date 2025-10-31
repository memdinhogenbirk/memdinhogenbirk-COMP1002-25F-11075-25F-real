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
            session_start();
                $fname = $_GET["fname"];
                $address1 = $_GET["address1"];
                $address2 = $_GET["address2"];
                $alert = $_GET["alert"];
                $cheese = $_SESSION["CHEESE"];
                $sauce = $_SESSION["SAUCE"];
                $toppings = $_SESSION[""];
                $size = $_SESSION["SIZE"];
                $crust = $_SESSION["CRUST"];
                $total = $_SESSION["Total"];
                $shape = $_SESSION["SHAPE"];
                $quantity = $_SESSION["quantity"];
                $delvorpick = $_SESSION["deliverypickup"];
                
            echo('<div>');
            echo('<p>Thank you for your purchase '.$fname.'!</p>');
            echo('<p>Your order will be ');
                if ($delvorpick=="Delivery"){
                    print('on its way shortly. ');
                    print('To be delivered to '.$address1.'');
                    if (!empty($address2)){
                        print(' Unit '.$address2.'');
                    }
                }
                else if ($delvorpick=="Pickup"){
                    print('ready for pickup in 15 minutes.');
                };
            echo('<p>You will be notified via ');
                print($alert.' when it is ready.');
		        
            echo('</p>');
            echo('<h3>Thank you for ordering from PAPAPIA PIZZERIA!</h3>');
            echo('</div>');
            echo('<div>');
            echo('<h2>ORDER SUMMARY</h2>');
            echo('<ul>');
            echo('<li>Quantity x'.$quantity.'</li>');
            echo('<li>Size: '.$size.'</li>');
            echo('<li>Shape: '.$shape.'</li>');
            echo('<li>Crust: '.$crust.'</li>');
            echo('<li>Cheese: '.$cheese.'</li>');
            echo('<li>Sauce: '.$sauce.'</li>');
            echo('<li>Toppings: '.$toppings.'</li>');
            echo('</ul>');
            echo('<h3>Order Total: '.$total.'</h3>');
            echo('</div>');
			?>
        </main>
        <footer>
            <?php
				//Grab footer
				include('footer.php')
                
			?>
        </footer>
    </body>
</html>
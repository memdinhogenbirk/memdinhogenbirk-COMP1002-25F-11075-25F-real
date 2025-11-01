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
        <main class="orderp">
            
            <?php
                echo('<section>');
                    echo('<h1>YOUR ORDER HAS BEEN PLACED</h1>');
                    session_start();
                    /*echo "SESSION: "; var_dump($_SESSION);*/
                        $fname = $_GET["fname"];
                        $address1 = $_GET["address1"];
                        $address2 = $_GET["address2"];
                        $alert = $_GET["alert"];
                        $cheese = $_SESSION["CHEESE"];
                        $sauce = $_SESSION["SAUCE"];
                        $meat = $_SESSION["MEAT"];
                        $veggies = $_SESSION["VEGGIES"];
                        $size = $_SESSION["SIZE"];
                        $crust = $_SESSION["CRUST"];
                        $total = $_SESSION["total"];
                        $shape = $_SESSION["SHAPE"];
                        $quantity = $_SESSION["quantity"];
                        $delvorpick = $_SESSION["deliverypickup"];
                        $pickgif = "images/pickup.gif";//gif I made for pickup
                        $delvgif = "images/delivor.gif";//gif I made for delivery
                    if (!empty($crust)){    
                    
                        echo('<p>Thank you for your purchase '.$fname.'!</p><br>');
                        echo('<p>Your order will be ');
                            if ($delvorpick=="Delivery"){
                                print('on its way shortly. ');
                                print('<br>To be delivered to '.$address1.',');
                                if (!empty($address2)){
                                    print(' Unit '.$address2.'');
                                    echo('<p><br>You will be notified via ');
                                    print($alert.' when it is on its way.');
                                }
                            }
                            else if ($delvorpick=="Pickup"){
                                print('ready for pickup shortly.');
                                echo('<p><br>You will be notified via ');
                                print($alert.' when it is ready.');
                            };
                            echo('</p>');
                        echo('<h3><br>Thank you for ordering from <i>PAPAPIA PIZZERIA</i>!</h3>');

                        echo('<div>');
                            echo('<h2>ORDER SUMMARY</h2>');
                            echo('<span>');
                                echo('<ul>');
                                    echo('<li><b>Quantity</b> x'.$quantity.'</li>');
                                    echo('<li><b>Size: </b>'.$size.'</li>');
                                    echo('<li><b>Shape: </b>'.$shape.'</li>');
                                    echo('<li><b>Crust: </b>'.$crust.'</li>');
                                    echo('<li><b>Cheese: </b>'.$cheese.'</li>');
                                    echo('<li><b>Sauce: </b>'.$sauce.'</li>');
                                echo('</ul>');
                                echo('<ul><b>Meat Toppings </b>');
                                            foreach ($meat as $item){
	                                    		echo('<li>'.$item.' </li>');
	                                    	};
                                            if (empty($meat)){
                                                echo('<li>none</li>');
                                            }	
                                        echo('</ul>');
                                        echo('<ul><b>Veggie Toppings </b>');
	                                    	foreach ($veggies as $item){
	                                    		echo('<li>'.$item.' </li>');
	                                    	};
                                            if (empty($veggies)){
                                                echo('<li>none</li>');
                                            }
                                            echo('</ul>');
                            echo('</span>');
                            echo('<h3>Order Total: $'.$total.'</h3>');
                        echo('</div>');
                    echo('</section>');
                    echo('<figure>');
                            if($delvorpick=="Delivery")
                                print'<img src="'.$delvgif.'"width="600" height="500"/>';
                                //the gifs I made in action
                            elseif($delvorpick=="Pickup")
                                print'<img src="'.$pickgif.'"width="600" height="500"/>';
                        
                    echo('</figure>');
                }
                else{
                    echo('<h1>You have placed an order for nothing. Well done.</h1>');
                };//this only exists because the means to deactivate the submit button is more scripting, and I need to finish this

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
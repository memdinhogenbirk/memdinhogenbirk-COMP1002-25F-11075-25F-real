<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
	    <title>Checkout</title>
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
        <main class="cartmain">
                    <div class="cartitems"><!--items in cart-->
                        <?php 
                        session_start();
                        $cheese = $_GET["CHEESE"];
                        $sauce = $_GET["SAUCE"];
                        $meat = $_GET["MEAT"];
                        $veggies = $_GET["VEGGIES"];
                        $size = $_GET["SIZE"];
                        $crust = $_GET["CRUST"];
                        $shape = $_GET["SHAPE"];
                        $quantity = $_GET["quantity"];
                        $delvorpick = $_GET["deliverypickup"];
                        $image1 = "images/original2.jpg";
                        $image2 = "images/thincrust.jpg";
                        $image3 = "images/deepdish.jpg";
                    echo('<h1>YOUR ORDER</h1>');
                    echo('<div class="sideitems">'); 
                    
                    echo('<figure>');
                        if ($crust=="Original"){
                            print'<img src="'.$image1.'"width="200" height="200"/>';
                        }
                        if ($crust=="Thin"){
                            print'<img src="'.$image2.'"width="200" height="200"/>';
                        }
                        if ($crust=="Deepdish"){
                            print'<img src="'.$image3.'"width="200" height="200"/>';
                        }
                    echo('</figure>');
                    echo('<div class="subsideitems">');
                    echo('<h3 class="qssc">'.$quantity.' '.$size.' '.$shape.' '.$crust.' Crust</h3>');
                    
	            	echo('<p>'.$cheese.' Cheese</p>');
                    echo('<p>'.$sauce.' Sauce</p>');
	            	echo('<ul>Meat Toppings: ');
                        foreach ($meat as $item){
	                		echo('<li>'.$item.' </li>');
	                	};
                        if (empty($meat)){
                            print ('none');
                        }	
                    echo('</ul>');
                    echo('<ul>Veggie Toppings: ');
	                	foreach ($veggies as $item){
	                		echo('<li>'.$item.' </li>');
	                	};
                        if (empty($veggies)){
                            print ('none');
                        }
                    echo('</ul>');
                    echo('</div>');
                    echo('</div>');
                    echo('<div class="cost">');   
                    echo('<p><b>For: </b>'.$delvorpick.'</p>');	
	                		
                            echo('<p class="subtotal"><b>SubTotal:</b> $');
                            if ($size=="Xlarge"){
                                $price=19.99;
                                print($price * $quantity);
                            }
                            elseif ($size=="Large"){
                                $price=14.99;
                                print($price * $quantity);
                            }
                            elseif ($size=="Medium"){
                                $price=11.99;
                                print($price * $quantity);
                            }
                            elseif ($size=="Small"){
                                $price=8.99;
                                print($price * $quantity);
                            };
                            echo('</p>');
                            echo('<p><b>Delivory Fee:</b> $');
                            if ($delvorpick=="Delivery"){
                                $fee=5;
                                print($fee);
                            }
                            elseif ($delvorpick=="Pickup"){
                                $fee=0;
                                print('0');
                            };
                            echo('</p>');
                            echo('<p><b>Taxes: </b> $');
                            if ($delvorpick=="Delivery"){
                                $taxes=(($price*$quantity*0.13)+($fee*0.13));
                                print(round($taxes,2));
                            }
                            elseif ($delvorpick=="Pickup"){
                                $taxes=($price*$quantity*0.13);
                                print(round($taxes,2));
                            };
                            echo('</p>');
                            echo('<h2>Total: $');
                            if ($delvorpick=="Delivery"){
                                $fee=5;
                                print($price * $quantity + $fee + round($taxes,2));
                            }
                            elseif ($delvorpick=="Pickup"){
                                $total=$price * $quantity + round($taxes,2);
                                
                                print($total);
                            };
                            echo('</h2>');
                        echo('</div>');
                            $_SESSION["total"] = $total;
                            $_SESSION["CHEESE"] = $cheese;
                            $_SESSION["MEAT"] = $meat;
                            $_SESSION["VEGGIES"] = $veggies;
                            $_SESSION["SIZE"] = $size;
                            $_SESSION["CRUST"] = $crust;
                            $_SESSION["SHAPE"] = $shape;
                            $_SESSION["SAUCE"] = $sauce;
                            $_SESSION["quantity"] = $quantity;
                            $_SESSION["deliverypickup"] = $delvorpick;
                            ?>
                        </div>                
                
        
            <form action="orderplaced.php" method="get">
                <fieldset class="infobox">
                <div class="checkout">
                    <div class="personal"><!--Name Address-->
                        <h3>PERSONAL INFORMATION</h3>
                        <ul>
                            
                            <li><label for="fname">First Name</label>
                            <input type="text" name="fname"></li>
                            <li><label for="lname">Last Name</label>
                            <input type="text" name="lname"></li>
                            <li><label for="address1">Address Line 1</label>
                            <input type="text" name="address1"></li>
                            <li><label for="address2">Address Line 2</label>
                            <input type="text" name="address2"></li>
                            <li><label for="email">Email</label>
                            <input type="Email" name="email"></li>
                            <li><label for="phone">Phone Number</label>
                            <input type="Phone Number" name="phone"></li>
                        </ul>
                        <div class="notifications"><!--notifications options contact info-->
                        <input type="radio" name="alert" id="alert1" value="phone call" />
                        <label for="alert1">Call Me</label>
                        <input type="radio" name="alert" id="alert2" value="email" />
                        <label for="alert2">Email Me</label>
                        <input type="radio" name="alert" id="alert3" value="sms" />
                        <label for="alert3">Text Me</label>
                        </div>
                    </div>
                    
                    
                    <div class="payment">
                        <!--Payment info-->
                        <h3>PAYMENT INFO</h3>
                        <div class="debitcredit">
                            <input type="radio" name="debit">
                            <label for="debit">Debit</label>
                            <input type="radio" name="credit">
                            <label for="credit">Credit</label>
                        </div>
                        <div class="carddetails">
                            <ul>
                            <li><label for="cfname">Name On Card</label></li>
                            <li><input type="tel" class="namef" placeholder="FIRST NAME" name="cfname">
                            <input type="tel" class=namel placeholder="LAST NAME" name="clname"></li>
                            </ul>
                            <ul>
                            <li><label for="payment">Card Number</label></li>
                            <li><input type="tel" class="ccnumber" placeholder="xxxx-xxxx-xxxx-xxxx" name="payment"></li>
                            <li><label for="securitycode">CSC <small>(3 or 4 digit security code)</small></label></li>
                            <li><input type="tel" class="ccsecurity" placeholder="xxxx" name="securitycode"></li>
                            <li><label for="mexpiry">Expiry Date</label></li>
                            <li><input type="tel" class="ccexpire" placeholder="mm" name="mexpiry">
                            <input type="tel" class="ccexpire" placeholder="yy" name="yexpiry"></li>
                            </ul>
                        </div>
                </div>      
                    </div>
                    <div class="finalbuttons">
                        <!--purchase button reset button-->
                        <button type="submit">Place Order</button>
                        <button type="reset">Clear Info</button>
                    </div>
                
                </fieldset>
            </form>
        
        </main>
        <footer>
            <?php
				//Grab footer
				include('footer.php')
                
			?>
        </footer>
    </body>
</html>
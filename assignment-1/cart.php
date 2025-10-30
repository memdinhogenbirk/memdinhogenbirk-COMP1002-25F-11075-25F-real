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
                        $cheese = $_GET["CHEESE"];
                        $sauce = $_GET["SAUCE"];
                        $meat = $_GET["MEAT"];
                        $veggies = $_GET["VEGGIES"];
                        $size = $_GET["SIZE"];
                        $crust = $_GET["CRUST"];
                        $shape = $_GET["SHAPE"];
                        $quantity = $_GET["quantity"];
                        $delvorpick = $_GET["deliverypickup"];	
                    echo('<p><b>Size: </b>'.$size.'</p>');
	            	echo('<p><b>Crust: </b>'.$crust.'</p>');
	            	echo('<p><b>Shape: </b>'.$shape.'</p>');
	            	echo('<p><b>Cheese: </b>'.$cheese.'</p>');
                    echo('<p><b>Sauce: </b>'.$sauce.'</p>');
	            	echo('<b>Meat Toppings:</b><ul>');
                        foreach ($meat as $item){
	                		echo('<li>'.$item.' </li>');
	                	};
                        if (empty($meat)){
                            print ('none');
                        }	
                    echo('</ul>');
                    echo('<b>Veggie Toppings:</b><ul>');
	                	foreach ($veggies as $item){
	                		echo('<li>'.$item.' </li>');
	                	};
                        if (empty($veggies)){
                            print ('none');
                        }
                    echo('</ul>');    
                    echo('<p><b>For: </b>'.$delvorpick.'</p>');	
	                echo('<p><b>Quantity: </b>'.$quantity.'</p>');		
                            echo('<p><b>SubTotal:</b> $');
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
                                print('none');
                            };
                            echo('</p>');
                            echo('<h3>Total: $');
                            if ($delvorpick=="Delivery"){
                                $fee=5;
                                print($price * $quantity + $fee);
                            }
                            elseif ($delvorpick=="Pickup"){
                                $fee=0;
                                print($price * $quantity + $fee);
                            };
                            echo('</h3>');
                            ?>
                        </div>                
                
        
            <form class="checkout" action="orderplaced.php" method="get">
                <fieldset class="infobox">
                    <h3>PERSONAL INFORMATION</h3>
                    <div class="personal"><!--Name Address-->
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
                    </div>
                    <div class="notifications"><!--notifications options contact info-->
                        <input type="checkbox" name="alert[]" id="alert1" value="call" />
                        <label for="alert1">Call Me</label>
                        <input type="checkbox" name="alert[]" id="alert2" value="email" />
                        <label for="alert2">Email Me</label>
                        <input type="checkbox" name="alert[]" id="alert3" value="sms" />
                        <label for="alert3">Text Me</label>
                    </div>
                    <h3>PAYMENT INFO</h3>
                    <div class="payment">
                        <!--Payment info-->
                        <input type="radio" name="debit">
                        <label for="debit">Debit</label>
                        <input type="radio" name="credit">
                        <label for="credit">Credit</label>
                       
                            <label for="cfname">Name On Card</label>
                            <input type="tel" placeholder="FIRST NAME" name="cfname">
                            <input type="tel" placeholder="LAST NAME" name="clname">
                            <label for="payment">Card Number</label>
                            <input type="tel" placeholder="xxxx-xxxx-xxxx-xxxx" name="payment">
                            <label for="securitycode">CSC</label>
                            <input type="tel" placeholder="xxxx" name="securitycode">
                            <label for="mexpiry">Expiry Date</label>
                            <input type="tel" placeholder="mm" name="mexpiry">
                            <input type="tel" placeholder="yy" name="yexpiry">
                        
                    </div>
                    <div class="finalbuttons">
                        <!--purchase button reset button-->
                        <button type="submit">Place Order</button>
                        <button type="reset">Reset</button>
                    </div>

                </fieldset>
            </form>
        
        </main>
        <footer>
            <?php
				//Grab Site Navigation
				include('footer.php')
                
			?>
        </footer>
    </body>
</html>
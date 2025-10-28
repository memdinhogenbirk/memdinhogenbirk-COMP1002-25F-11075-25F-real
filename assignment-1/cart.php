<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
	    <title>Papapia Pizzaria | Checkout</title>
	    <link href="css/styles.css" rel="stylesheet" />
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
                        $quantity = $_GET["quantity"];
                        	
                    echo('<p><b>Size: </b>'.$size.'</p>');
	            	echo('<p><b>Crust: </b>'.$crust.'</p>');
	            	echo('<p><b>Sauce: </b>'.$sauce.'</p>');
	            	echo('<p><b>Cheese: </b>'.$cheese.'</p>');
	            		
                    echo('<b>Veggie Toppings:</b><ul>');
	                	foreach ($veggies as $item){
	                		echo('<li>'.$item.' </li>');
	                	};
                    echo('</ul>');    
                    echo('<b>Meat Toppings:</b><ul>');
                        foreach ($meat as $item){
	                		echo('<li>'.$item.' </li>');
	                	};
	                echo('</ul>');
	                echo('<p><b>Quantity: </b>'.$quantity.'</p>');		
                            echo('<b>Total: </b> $');
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
                            ?>
                        </div>                
                </fieldset>
        
            <form class="checkout">
                <fieldset class="infobox">
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
                        </ul>
                    </div>
                    <div class="contact">
                        <ul>
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
                    <div class="payment">
                        <!--Payment info-->
                        <input type="radio" name="debit">
                        <label for="debit">Debit</label>
                        <input type="radio" name="credit">
                        <label for="credit">Credit</label>
                        <div>
                            <label for="payment">Card Number</label>
                            <input type="text" name="payment">
                        </div>
                    </div>
                    <div class="finalbuttons">
                        <!--purchase button reset button-->
                        <button id="submit">Place Order</button>
                        <button id="reset">Reset</button>
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
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
                                    if (!empty($crust)){
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
                                    }
                                    else {
                                        print('<div><h3>CART IS EMPTY</h3><i>Please add at least one pizza to your cart</i><br><br></div>');
                                    };   
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
                                                $fee=5;
                                                $taxes=(number_format($price*$quantity*0.13+($fee*0.13),2));
                                                print(round($taxes,2));
                                            }
                                            elseif ($delvorpick=="Pickup"){
                                                $fee=0;
                                                $taxes=(number_format($price*$quantity*0.13+($fee*0.13),2));
                                                print(round($taxes,2));
                                            };
                                        echo('</p>');
                                        echo('<h2>Total: $');
                                            if ($delvorpick=="Delivery"){

                                                $total=(number_format($price * $quantity + $fee + round($taxes,2),2));
                                                print($total);
                                            }
                                            elseif ($delvorpick=="Pickup"){
                                                $total=(number_format($price * $quantity + round($taxes,2),2));
                                                print($total);
                                            };
                                        echo('</h2>');
                            echo('</div>');
                                    /*echo "SESSION: "; var_dump($_SESSION);*/
                                    $total=(number_format($price * $quantity + round($taxes,2) + ($fee==5 ? 5: 0),2));
                                    $_SESSION["total"] = $total;
                                    $_SESSION["CHEESE"] = $cheese;
                                    $_SESSION["MEAT"] = $meat;
                                    $_SESSION["VEGGIES"] = $veggies;
                                    $_SESSION["SIZE"] = $size;
                                    $_SESSION["CRUST"] = $crust;
                                    $_SESSION["SHAPE"] = $shape;
                                    $_SESSION["SAUCE"] = $sauce;
                                    $_SESSION["toppings"] = $toppings;
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
                            <li><label for="fname"><i>*</i>First Name</label>
                            <input type="text" name="fname"></li>
                            <li><label for="lname"><i>*</i>Last Name</label>
                            <input type="text" name="lname"></li>
                            <li><label for="address1"><i>*</i>Address Line 1</label>
                            <input type="text" name="address1" required></li>
                            <li><label for="address2">Address Line 2</label>
                            <input type="text" name="address2"></li>
                            <li><label for="email"><i>*</i>Email</label>
                            <input type="email" name="emailphone" id="email" required></li>
                            <li><label for="phone"><i>*</i>Phone Number</label>
                            <input type="tel" name="emailphone" id="phone" required></li>
                        </ul>
                        <div class="notifications"><!--notifications options contact info-->
                            <i>*</i><input type="radio" name="alert" required id="alert1" value="phone call" />
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
                            <i>*</i><input type="radio" name="debitcredit" id="debit" required>
                            <label for="debit">Debit</label>
                            <input type="radio" name="debitcredit" id="credit">
                            <label for="credit">Credit</label>
                        </div>
                        <div class="carddetails">
                            <ul>
                                <li><label for="cfname"><i>*</i>Name On Card</label></li>
                                <li><input type="tel" class="namef" placeholder="FIRST NAME" name="cfname" required>
                                <input type="tel" class=namel placeholder="LAST NAME" name="clname" required></li>
                            </ul>
                            <ul>
                                <li><label for="payment"><i>*</i>Card Number</label></li>
                                <li><input type="tel" class="ccnumber" placeholder="xxxx-xxxx-xxxx-xxxx" name="payment" required></li>
                                <li><label for="securitycode"><i>*</i>CSC <small>(3 or 4 digit security code)</small></label></li>
                                <li><input type="tel" class="ccsecurity" placeholder="xxxx" name="securitycode" required></li>
                                <li><label for="mexpiry"><i>*</i>Expiry Date</label></li>
                                <li><input type="tel" class="ccexpire" placeholder="mm" name="mexpiry" required>
                                <input type="tel" class="ccexpire" placeholder="yy" name="yexpiry" required></li>
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
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
            <!--below is the php that grabs the info from the pizzabuilder page, and applies it where relevant on the cart page. It also grabs the info for the next page, orderplaced. Session_start is needed for the latter-->
                    <div class="cartitems"><!--items in cart-->
                        <?php 
                            session_start();
                            $cheese = $_GET["CHEESE"];//gets to grab pizza builder info
                            $sauce = $_GET["SAUCE"];
                            $meat = $_GET["MEAT"];
                            $veggies = $_GET["VEGGIES"];
                            $size = $_GET["SIZE"];
                            $crust = $_GET["CRUST"];
                            $shape = $_GET["SHAPE"];
                            $quantity = $_GET["quantity"];
                            $delvorpick = $_GET["deliverypickup"];
                            $image1 = "images/original2.jpg";//needed to place images in php
                            $image2 = "images/thincrust.jpg";
                            $image3 = "images/deepdish.jpg";
                            echo('<h1>YOUR ORDER</h1>');
                            echo('<div class="sideitems">'); 
                            //if statements for the different crust types determining which picture ought to be displayed
                                echo('<figure>');
                                    if ($crust=="Original"){
                                        echo'<img src="'.$image1.'"width="200" height="200"/>';
                                    }
                                    if ($crust=="Thin"){
                                        echo'<img src="'.$image2.'"width="200" height="200"/>';
                                    }
                                    if ($crust=="Deepdish"){
                                        echo'<img src="'.$image3.'"width="200" height="200"/>';
                                    };
                                echo('</figure>');
                                    //if else that will rely on a required radio value to echo a different message if no pizza was built, and the user just goes to the cart first. Ideally the cart would save your choices when you leave it, but I didn't get this far.
                                    if (!empty($crust)){
                                        echo('<div class="subsideitems">');
                                            echo('<h3 class="qssc">'.$quantity.' '.$size.' '.$shape.' '.$crust.' Crust</h3>');
                                    
	            	                        echo('<p>'.$cheese.' Cheese</p>');
                                            echo('<p>'.$sauce.' Sauce</p>');
	            	                        echo('<ul>Meat Toppings: ');
                                                foreach ($meat as $item){
	                                        		echo'<li>'.$item.' </li>';
	                                        	}
                                                if (empty($meat)){
                                                    echo 'none';
                                                };	
                                            echo('</ul>');
                                            echo('<ul>Veggie Toppings: ');
	                                        	foreach ($veggies as $item){
	                                        		echo'<li>'.$item.' </li>';
	                                        	}
                                                if (empty($veggies)){
                                                    echo 'none';
                                                };
                                            echo('</ul>');
                                        echo('</div>');
                                    }
                                    //else for empty cart
                                    else {
                                        echo'<div><h3>CART IS EMPTY</h3><i>Please add at least one pizza to your cart</i><br><br></div>';
                                    };   
                            echo('</div>');
                            //cost calculations    
                            echo('<div class="cost">');   
                                echo('<p><b>For: </b>'.$delvorpick.'</p>');	

                                        echo('<p class="subtotal"><b>SubTotal:</b> $');
                                            if ($size=="Xlarge"){
                                                $price=19.99;
                                                echo($price * $quantity);
                                            }
                                            elseif ($size=="Large"){
                                                $price=14.99;
                                                echo($price * $quantity);
                                            }
                                            elseif ($size=="Medium"){
                                                $price=11.99;
                                                echo($price * $quantity);
                                            }
                                            elseif ($size=="Small"){
                                                $price=8.99;
                                                echo($price * $quantity);
                                            };
                                        echo('</p>');
                                        echo('<p><b>Delivory Fee:</b> $');
                                            if ($delvorpick=="Delivery"){
                                                $fee=5;
                                                echo$fee;
                                            }
                                            elseif ($delvorpick=="Pickup"){
                                                $fee=0;
                                                echo'0';
                                            };
                                            echo('</p>');
                                            echo('<p><b>Taxes: </b> $');
                                            if ($delvorpick=="Delivery"){
                                                $fee=5;
                                                $taxes=number_format($price*$quantity*0.13+($fee*0.13),2);
                                                echo(round($taxes,2));
                                                //I don't think round is necessary anymore since I added number_format, but I work all weekend, and I must spend my free time cleaning up my CSS and checking for things I missed. It's working, so it will do.
                                            }
                                            elseif ($delvorpick=="Pickup"){
                                                $fee=0;
                                                $taxes=number_format($price*$quantity*0.13+($fee*0.13),2);
                                                echo(round($taxes,2));
                                            };
                                        echo('</p>');
                                        echo('<h2>Total: $');
                                            if ($delvorpick=="Delivery"){

                                                $total=number_format($price * $quantity + $fee + round($taxes,2),2);
                                                echo$total;
                                            }
                                            elseif ($delvorpick=="Pickup"){
                                                $total=number_format($price * $quantity + round($taxes,2),2);
                                                echo$total;
                                            };
                                        echo('</h2>');
                            echo('</div>');
                                    /*echo "SESSION: "; var_dump($_SESSION);*/
                                    //I used that above line to figure out why my total wasn't carrying to the next page. The fix I came up with is duplicating the total calculation below, with an added if else for the delivery fee.
                                    $total=number_format($price * $quantity + round($taxes,2) + ($fee==5 ? 5: 0),2);
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
                                    //these sessions drag the php values to the next page
                        ?>
                    </div>                
                
                <!--back to html, this form contains payment info and important personal info. Majority is required to submit(place order)-->
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
                            <!--two php additions below that make address optional if pickup is selected-->
                            <li><label for="address1"><?php if($delvorpick=='Delivery') echo '<i>*</i>';?>Address Line 1</label>
                            <input type="text" name="address1" <?php if ($delvorpick=='Delivery')echo 'required';?>></li>
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
                        <div>
                            <label for="instructions">Special Instructions</label>
                            <textarea name="instructions" rows="5" cols="40"></textarea>
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
                                <li><input type="text" class="namef" placeholder="FIRST NAME" name="cfname" required>
                                <input type="text" class=namel placeholder="LAST NAME" name="clname" required></li>
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
                            <img src="images/payopts.png"/>
                            <!--image source for accepted payment picture 
                            https://www.customsigns.com/horizontal-credit-card-accepted-decal-3-x-10-->
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
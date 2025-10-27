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
        <main>
            <form>
                <fieldset class="checkout">
                    <div><!--items in cart-->
                        <?php 
                        $cheese = $_GET["CHEESE"];
                        $sauce = $_GET["SAUCE"];
                        $meat = $_GET["MEAT"];
                        $veggies = $_GET["VEGGIES"];
                        $size = $_GET["SIZE"];
                        $crust = $_GET["CRUST"];

                        echo('<p>Thank you, ' .$cheese.' '.$crust.'!</p>');	
    echo('<ul>');
		foreach ($crust as $item){
			echo('crust: '.$item.'');
		};
    echo('<ul>');	
	echo('<ul>');
		foreach ($sauce as $item){
			echo('Sauce: '.$item.'');
		};
    echo('</ul>');
    echo('<ul>');
		foreach ($cheese as $item){
			echo('Cheese: '.$item.'');
		};
    echo('</ul>');		
    echo('<ul>');
		foreach ($veggies as $item){
			echo('<li>'.$item.'</li>');
		};
	echo('</ul>');
    echo('<ul>');
		foreach ($meat as $item){
			echo('<li>'.$item.'</li>');
		};
	echo('</ul>');
    echo('<ul>');
		foreach ($size as $item){
			echo('Size: '.$item.'');
		};
    echo('</ul>');
    
                        ?>
                    </div>
                    <div><!--Total cost-->
                    
                    </div>
                    <div><!--Name Address-->
                        <input type="text" name="fname">
                        <label for="fname">First Name</label>
                        <input type="text" name="lname">
                        <label for="lname">Last Name</label>
                    </div>
                    <div><!--notifications options contact info-->
                        <input type="checkbox" name="alert[]" id="alert1" value="call" />
                        <label for="alert1">Call Me</label>
                        <input type="checkbox" name="alert[]" id="alert2" value="email" />
                        <label for="alert2">Email Me</label>
                        <input type="checkbox" name="alert[]" id="alert3" value="sms" />
                        <label for="alert3">Text Me</label>
                    </div>
                    <div>
                        <input type="Email" name="email">
                        <label for="email">Email</label>
                        <input type="Phone Number" name="phone">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div>
                        <!--Payment info-->
                        <input type="radio" name="debit">
                        <label for="debit">Debit</label>
                        <input type="radio" name="credit">
                        <label for="credit">Credit</label>
                        <input type="text" name="payment">
                        <label for="payment">Payment</label>
                    </div>
                    <div>
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
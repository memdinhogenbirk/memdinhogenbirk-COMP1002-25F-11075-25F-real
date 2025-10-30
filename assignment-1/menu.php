<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
	    <title>Menu</title>
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
           <div class="pizzaoptions">
                <div class="pizzaheadings"><a href="pizzabuild.php"><h1>ORIGINAL CRUST</h1><img src="images/original2.jpg"></a><p>Our <em>FAMOUS</em> original crust, soft, fluffy, and cooked to perfection.</p></div>
                <div class="pizzaheadings"><a href="pizzabuild.php"><h1>DEEP DISH</h1><img src="images/deepdish.jpg"></a><p>Our delightfully deep dished Chicago style crust. For the deep soul and deeper stomach.</p></div>
                <div class="pizzaheadings"><a href="pizzabuild.php"><h1>THIN CRUST</h1><img src="images/thincrust.jpg"></a><p>Our thin bread, classic style crust. Just like mama used to make.</p></div>
           </div>
           <div>
                <h2>AVAILABLE TOPPINGS</h2>
                <div class="toppingoptions">
                    <ul>
<!--Image references
cheddar https://www.agropursolutions.ca/en/products/cheese/coloured-cheddar/25kg-shredded-medium-coloured-cheddar-34-mf
mozzarella https://avron.ca/en/shredded-mozzarella-cheese.html
Vegan https://thebehive.com/products/garlic-chz-shredz-6-pack
Tomato sauce https://pngtree.com/freepng/thick-and-rich-tomato-ketchup_18972477.html
Marinara sauce https://www.vecteezy.com/png/48113524-marinara-sauce-in-a-white-bowl-transparent-background
Alfredo sauce https://www.vecteezy.com/png/48113524-marinara-sauce-in-a-white-bowl-transparent-background
Peppers https://www.istockphoto.com/photo/cut-slices-of-green-sweet-bell-pepper-isolated-on-white-background-top-view-gm1177893341-329008072
Tomatoes https://gofreshusa.com/product/gofresh/vegetables/tomatoes/tomato-sliced-2-5-lb/
Olives https://www.pcfreshco.com/sliced-black-olives-no10can-oliblan10sli/
Onions https://gofreshusa.com/product/gofresh/vegetables/onions/onion-red-sliced-tray-pk-4-5-lb/
Pepperoni https://www.gfsstore.com/en-us/products/429267/
Bacon https://www.foodnetwork.com/recipes/food-network-kitchen/real-bacon-bits-recipe-2106075
Chicken https://www.aubut.ca/en/products/details/frozen-fully-cooked-grilled-chicken-breast-strips-15641
Ham https://kerrigans.ie/products/diced-ham
-->
                        <h3>CHEESE</h3>
                        <li>Cheddar</li>
                        <li>Mozzarella</li>
                        <li>Vegan</li>
                    </ul>
                    <ul>
                        <h3>SAUCE</h3>
                        <li>Tomato</li>
                        <li>Marinara</li>
                        <li>Alfredo</li>
                    </ul>
                    <ul>
                        <h3>MEATS</h3>
                        <li>Pepperoni</li>
                        <li>Bacon</li>
                        <li>Chicken</li>
                        <li>Ham</li>
                    </ul>
                    <ul>
                        <h3>VEGGIES</h3>
                        <li>Peppers</li>
                        <li>Onions</li>
                        <li>Tomatoes</li>
                        <li>Olives</li>
                    </ul>
                </div>
           </div>
        </main>
        <footer>
            <?php
				//Grab Site Navigation
				include('footer.php')
                
			?>
        </footer>
    </body>
</html>
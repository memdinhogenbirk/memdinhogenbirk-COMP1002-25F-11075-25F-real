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
                <div class="pizzaheadings"><a href="pizzabuild.php"><h1>ORIGINAL CRUST</h1><img src="images/original.jpg"></a><p>Our <em>FAMOUS</em> original crust, soft, fluffy, and cooked to perfection.</p></div>
                <div class="pizzaheadings"><a href="pizzabuild.php"><h1>DEEP DISH</h1><img src="images/original.jpg"></a><p>Our delightfully deep dished Chicago style crust. For the deep soul and deeper stomach.</p></div>
                <div class="pizzaheadings"><a href="pizzabuild.php"><h1>THIN CRUST</h1><img src="images/original.jpg"></a><p>Our thin bread, classic style crust. Just like mama used to make.</p></div>
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
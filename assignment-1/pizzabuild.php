<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
	    <title>Customize Your Pizza</title>
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
        <main class="pbmain">
            <form id="pform" action="cart.php" method="get">
                <div>
                <h2 class="pizzaCust">CUSTOMIZE YOUR PIZZA</h2>
                <fieldset class="pizzaB">
                    <div class="pizzaBLD">
                        
                        <div class="pizzatoppings">
                            
                            <ul>
                                <li><h3>CHEESE</h3></li>
                                <li><input type="radio" name="CHEESE" id="CHEESE1" value="Cheddar" required/><label for="CHEESE1">Cheddar</label></li>
                                
                                <li><input type="radio" name="CHEESE" id="CHEESE2" value="Mozzarella" /><label for="CHEESE2">Mozzarella</label></li>
                                
                                <li><input type="radio" name="CHEESE" id="CHEESE3" value="Vegan" /><label for="CHEESE3">Vegan</label></li>
                                
                            </ul>
                            
                            <ul>
                                <li><h3>SAUCE</h3></li>
                                <li><input type="radio" name="SAUCE" id="SAUCE1" value="Tomato" required/><label for="SAUCE1">Tomato Sauce</label></li>
                                
                                <li><input type="radio" name="SAUCE" id="SAUCE2" value="Marinara" /><label for="SAUCE2">Marinara Sauce</label></li>
                                
                                <li><input type="radio" name="SAUCE" id="SAUCE3" value="Alfredo" /><label for="SAUCE3">Alfredo Sauce</label></li>
                                
                            </ul>
                            
                            <ul>
                                <li><h3>MEAT</h3></li>
                                <li><input type="checkbox" name="MEAT[]" id="MEAT1" value="Pepperoni" /><label for="MEAT1">Pepperoni</label></li>
                                
                                <li><input type="checkbox" name="MEAT[]" id="MEAT2" value="Bacon" /><label for="MEAT2">Bacon</label></li>
                                
                                <li><input type="checkbox" name="MEAT[]" id="MEAT3" value="Chicken" /><label for="MEAT3">Chicken</label></li>
                                
                                <li><input type="checkbox" name="MEAT[]" id="MEAT4" value="Ham" /><label for="MEAT4">Ham</label></li>
                                
                            </ul>
                            
                                
                            <ul>
                                <li><h3>VEGGIES</h3></li>
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES1" value="Peppers" /><label for="VEGGIES1">Peppers</label></li>
                                
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES2" value="Onions" /><label for="VEGGIES2">Onions</label></li>
                                
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES3" value="Tomatoes" /><label for="VEGGIES3">Tomatoes</label></li>
                                
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES4" value="Olives" /><label for="VEGGIES4">Olives</label></li>
                                
                            </ul>
                            <div class="quantity">
                                <label for="quantity"><h3>QUANTITY</h3></label>
                                <select name="quantity" id="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                </select>
                            </div>
                            
                        </div>
                           
                        
                    </div>
                    <div class="shape">
                        <h3>SHAPE</h3>
                        <input type="radio" name="SHAPE" id="SQUARE" value="Square"/><label for="SQUARE" required>Square</label>
                        <input type="radio" name="SHAPE" id="ROUND" value="Round"/><label for="ROUND">Round</label>
                    </div>
                    <div class="sizes">
                        <h3>SIZES</h3>
                        <input type="radio" name="SIZE" id="SMALL" value="Small" required/><label for="SMALL">Small (8")</label>
                        <input type="radio" name="SIZE" id="MEDIUM" value="Medium" /><label for="MEDIUM">Medium (12")</label>
                        <input type="radio" name="SIZE" id="LARGE" value="Large" /><label for="LARGE">Large (16")</label>
                        <input type="radio" name="SIZE" id="XLARGE" value="Xlarge" /><label for="XLARGE">Extra-Large (20")</label>
                        <h3>CRUST</h3>
                        <input type="radio" name="CRUST" id="ORIGINAL" value="Original" required/><label for="ORIGINAL">Original Crust</label>
                        <input type="radio" name="CRUST" id="THIN" value="Thin" /><label for="THIN">Thin Crust</label>
                        <input type="radio" name="CRUST" id="DEEPDISH" value="Deepdish" /><label for="DEEPDISH">Deep Dish</label>
                                    
                    </div>
                    </div> 
                </fieldset>
            
                <aside class="pbaside">
                <h2>YOUR ORDER</h2>
                
                    <fieldset>
                        <div id="order">
                            <ul class="itemdec">
                                <li>Size:</li>
                                <li>Crust:</li>
                                <li>Shape:</li>
                                <li>Cheese:</li>
                                <li>Sauce:</li>
                                <li>Meat:</li>
                                <li>Veggies:</li>
                                <li>Quantity:</li>
                                
                            </ul>
                            <ul id="orderoutput">
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>x1</li>
                                
                            </ul>
                            <select class="delvorpick" name="deliverypickup"/>
                                <option value="Pickup"<?php echo (($_GET['type'] ?? 'pickup') === 'pickup') ? 'selected' : ''; ?>>PICKUP</option>
                                <option value="Delivery"<?php echo (($_GET['type'] ?? 'delivery') === 'delivery') ? 'selected' : ''; ?>>DELIVERY</option>
                            </select>
                        </div>
                        
                        <div class="asidebuttons">
                            <button type="submit">CHECKOUT</button>
                            <button type="reset">CLEAR SELECTION</button>
                        </div>
                    </fieldset>
                </aside>
            </form>
            <script>
                            //READ ME:
                //please note, I have never used Java before. I have learned all this from the internet.
                //most of these annotations are pour moi, not pour vous.
                //I am explaining what the heck I wrote to myself now that it is working as I wanted it to.
                //You did say "don't use AI". I take this as, don't have AI write your code for you.
                //To learn the syntax, I asked Google and Grok, 
                //"How do I store radio, checkbox and selection inputs from a page?"
                //"How do I output inputs to a ul?"
                //etc.
                //I then used the examples they came up with to create my own code.
                //nothing here was copied and pasted, other than syntax examples to work off of.
                //I feel my commits will back me up on this given the multitude of errors and rewrites I had to do to get it working.

                            //radio, check box, and select box info grabber
                            //querySelectorAll grabs all matching elements(by name in this case)
                            const crustradios = document.querySelectorAll('input[name="CRUST"]');
                            const sizeradios = document.querySelectorAll('input[name="SIZE"]');
                            const sauceradios = document.querySelectorAll('input[name="SAUCE"]');
                            const cheeseradios = document.querySelectorAll('input[name="CHEESE"]');
                            const shaperadios = document.querySelectorAll('input[name="SHAPE"]')
                            const meatcheck = document.querySelectorAll('input[name="MEAT[]"]');
                            const veggiescheck = document.querySelectorAll('input[name="VEGGIES[]"]');
                            //.getElementById pretty self expanatory, grabs elements based on id
                            //used for quantity selection elements in this case
                            const quantityselect = document.getElementById('quantity');
                            //used for li items of ul orderoutput in this case
                            const orderDIV = document.getElementById('orderoutput');
                            //used to grab form elements
                            const form = document.getElementById('pform');
                            //array for every single checkbox, radio, or select element, to be used for output list
                            const itemspicked = {
                                Small: 'Small', Medium: 'Medium', Large: 'Large', Xlarge: 'Extra-Large',
                                Original: 'Original', Thin: 'Thin', Deepdish:'Deep Dish', 
                                Square: 'Square', Round: 'Round',
                                Cheddar:'Cheddar', Mozzarella:'Mozzarella', Vegan:'Vegan',
                                Tomato:'Tomato', Marinara:'Marinara', Alfredo:'Alfredo',
                                Pepperoni:'Pepperoni', Bacon:'Bacon', Chicken:'Chicken', Ham:'Ham',
                                Peppers:'Peppers', Onions:'Onions', Tomatoes:'Tomatoes', Olives:'Olives',
                                1:'x1', 2:'x2', 3:'x3', 4:'x4', 5:'x5', 6:'x6', 7:'x7', 8:'x8', 9:'x9'
                            };
                            //big ol function begins for updating the "your order" output list
                            function updateOrder(){
                                //constant variable veggies defined (declared?) as the array of vegetable checkboxes
                                const veggies = Array.from(veggiescheck)
                                .filter(cb => cb.checked)
                                //assigns cb(for checkboxes) as filtered checkboxes (checked checkboxes only)
                                //cb=> is shortform of function(cb){...}
                                .map(cb => itemspicked[cb.value]);
                                //maps checked cbs to their respective values in the itemspicked array
                                //rince repeat for meat
                                const meats = Array.from(meatcheck)
                                .filter(cb => cb.checked)
                                .map(cb => itemspicked[cb.value]);
                                //simpler constant variables given only 1 item is checked at a time
                                const sauces = Array.from(sauceradios).find(r => r.checked)?.value || 'None';
                                //find returns the first checked value(the only checked value)
                                //r for radios, assigned to checked values or none if none checked
                                //r=> is shortform of function(r){...}
                                //.value is called a "chains" the value to r
                                const cheeses = Array.from(cheeseradios).find(r => r.checked)?.value || 'None';
                                const crusts = Array.from(crustradios).find(r => r.checked)?.value || 'None';
                                const sizes = Array.from(sizeradios).find(r => r.checked)?.value || 'None';
                                const shapes = Array.from(shaperadios).find(r => r.checked)?.value || 'None';
                                const quant = quantity.value;
                                //quantity is a selection, only one value is in it at any given time once selected
                                //.value "chains" the current selection value to quantity

                                //variables for text outputs of each previously defined variable
                                //uses items picked array for radios and quantities
                                //check boxes already assigned to itemspicked array values
                                //check boxes use .length to make as many outputs as there are checkboxes selected
                                //.join joins each item together with(', ')adding a comma and space between
                                //>0?....: 'none' is a if else operation saying if there are more than 0 boxes checked
                                //the meat values will print, else print none
                                const sizeText = itemspicked[sizes] || 'none';
                                const crustText = itemspicked[crusts] || 'none';
                                const cheeseText = itemspicked[cheeses] || 'none';
                                const sauceText = itemspicked[sauces] || 'none';
                                const shapeText = itemspicked[shapes] || 'none';
                                const meatText =  meats.length >0? meats.join(', '): 'none';
                                const veggieText = veggies.length >0? veggies.join(', '): 'none';
                                const quantityText = itemspicked[quant] || 'none';
                                //.innerHTML reads or writes html inside of an element
                                //orderDIV is the variable that acquired the orderoutput list elements
                                //=`...` contains the new html text, with newly acquired variable text values
                                orderDIV.innerHTML = `

                                <li>${sizeText}</li>
                                <li>${crustText}</li>
                                <li>${shapeText}</li>
                                <li>${cheeseText}</li>
                                <li>${sauceText}</li>
                                <li>${meatText}</li>
                                <li>${veggieText}</li>
                                <li>${quantityText}</li>
                                
                                `;
                            }
                            //for each radio, do function addEventListener
                            //event listener is "listening" for user inputs, which will then trigger the overall
                            //updateOrder function, each time something is checked or selected
                            //'change' is the event in question
                            //for when something is "changed" in the various user input options                          
                            crustradios.forEach(r => r.addEventListener('change', updateOrder));
                            sizeradios.forEach(r => r.addEventListener('change', updateOrder));
                            shaperadios.forEach(r => r.addEventListener('change', updateOrder));
                            sauceradios.forEach(r => r.addEventListener('change', updateOrder));
                            cheeseradios.forEach(r => r.addEventListener('change', updateOrder));
                            //for each checkbox, do function addEvenListener
                            meatcheck.forEach(cb => cb.addEventListener('change', updateOrder));
                            veggiescheck.forEach(cb => cb.addEventListener('change', updateOrder));
                            quantityselect.addEventListener('change', updateOrder);
                            //form event listener is listening for the reset button to be pressed
                            //without this, only the form options reset, not the java
                            form.addEventListener('reset', () => {
                            setTimeout(updateOrder, 0);
                            //run updateOrder later, 0=no delay
                            //necessary little bit of code to ensure reset button actually resets the java scripted outputs
                            });
                            //updateOrder(); no longer needed, requires a second reset input if done this way
            </script>
                   
            
        </main>
        
        <footer>
            <?php
				//Grab Site Navigation
				include('footer.php')
                
			?>
        </footer>
    </body>
</html>
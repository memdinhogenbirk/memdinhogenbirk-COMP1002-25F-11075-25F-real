<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
	    <title>Papapia Pizzaria | Real Fake Pizza</title>
	    <link href="css/styles.css" rel="stylesheet" />
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
                                <li><input type="radio" name="CHEESE[]" id="CHEESE1" value="cheddar" /><label for="CHEESE1">Cheddar</label></li>
                                
                                <li><input type="radio" name="CHEESE[]" id="CHEESE2" value="mozzarella" /><label for="CHEESE2">Mozzarella</label></li>
                                
                                <li><input type="radio" name="CHEESE[]" id="CHEESE3" value="vegan" /><label for="CHEESE3">Vegan</label></li>
                                
                            </ul>
                            
                            <ul>
                                <li><h3>SAUCE</h3></li>
                                <li><input type="radio" name="SAUCE[]" id="SAUCE1" value="tomatosauce" /><label for="SAUCE1">Tomato Sauce</label></li>
                                
                                <li><input type="radio" name="SAUCE[]" id="SAUCE2" value="marinara" /><label for="SAUCE2">Marinara Sauce</label></li>
                                
                                <li><input type="radio" name="SAUCE[]" id="SAUCE3" value="alfredo" /><label for="SAUCE3">Alfredo Sauce</label></li>
                                
                            </ul>
                            
                            <ul>
                                <li><h3>MEAT</h3></li>
                                <li><input type="checkbox" name="MEAT[]" id="MEAT1" value="pepperoni" /><label for="MEAT1">Pepperoni</label></li>
                                
                                <li><input type="checkbox" name="MEAT[]" id="MEAT2" value="bacon" /><label for="MEAT2">Bacon</label></li>
                                
                                <li><input type="checkbox" name="MEAT[]" id="MEAT3" value="chicken" /><label for="MEAT3">Chicken</label></li>
                                
                                <li><input type="checkbox" name="MEAT[]" id="MEAT4" value="ham" /><label for="MEAT4">Ham</label></li>
                                
                            </ul>
                            
                                
                            <ul>
                                <li><h3>VEGGIES</h3></li>
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES1" value="pepper" /><label for="VEGGIES1">Peppers</label></li>
                                
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES2" value="onion" /><label for="VEGGIES2">Onions</label></li>
                                
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES3" value="tomato" /><label for="VEGGIES3">Tomatoes</label></li>
                                
                                <li><input type="checkbox" name="VEGGIES[]" id="VEGGIES4" value="olive" /><label for="VEGGIES4">Olives</label></li>
                                
                            </ul>
                            <div class="deliverpickup">
                                <label for="delivorpick"><h3>DELIVERY OR PICKUP</h3></label>
                                <select name="delivorpick" id="delivorpick">
                                        <option value="DP">DELIVERY</option>
                                        <option value="PP">PICKUP</option>
                                </select>
                            </div>
                            
                        </div>
                           
                        
                    </div>
                    <div class="sizes">
                        <h3>SIZES</h3>
                        <input type="radio" name="SIZE[]" id="SMALL" value="small" /><label for="SMALL">Small (8")</label>
                        <input type="radio" name="SIZE[]" id="MEDIUM" value="medium" /><label for="MEDIUM">Medium (12")</label>
                        <input type="radio" name="SIZE[]" id="LARGE" value="large" /><label for="LARGE">Large (16")</label>
                        <input type="radio" name="SIZE[]" id="XLARGE" value="xlarge" /><label for="XLARGE">Extra-Large (20")</label>
                        <h3>CRUST</h3>
                        <input type="radio" name="CRUST[]" id="ORIGINAL" value="original" /><label for="ORIGINAL">Original Crust</label>
                        <input type="radio" name="CRUST[]" id="THIN" value="thin" /><label for="THIN">Thin Crust</label>
                        <input type="radio" name="CRUST[]" id="DEEPDISH" value="deepdish" /><label for="DEEPDISH">Deep Dish</label>
                                    
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
                                <li>Cheese:</li>
                                <li>Sauce:</li>
                                <li>Meat:</li>
                                <li>Veggies:</li>
                                <li>For</li>
                                
                            </ul>
                            <ul id="orderoutput">
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                <li>none</li>
                                
                            </ul>
                        </div>
                        <div class="asidebuttons">
                            <button type="submit">CHECKOUT</button>
                            <button type="reset">RESET</button>
                        </div>
                    </fieldset>
                </aside>
            </form>
                        <script>
                            const crustradios = document.querySelectorAll('input[name="CRUST[]"]');
                            const sizeradios = document.querySelectorAll('input[name="SIZE[]"]');
                            const sauceradios = document.querySelectorAll('input[name="SAUCE[]"]');
                            const cheeseradios = document.querySelectorAll('input[name="CHEESE[]"]');
                            const meatcheck = document.querySelectorAll('input[name="MEAT[]"]');
                            const veggiescheck = document.querySelectorAll('input[name="VEGGIES[]"]');
                            const deliverselect = document.getElementById('delivorpick');
                            const orderDIV = document.getElementById('orderoutput');
                            const form = document.getElementById('pform');

                            const itemspicked = {
                                small: 'Small', medium: 'Medium', large: 'Large', xlarge: 'Extra-Large',
                                original: 'Original', thin: 'Thin', deepdish:'Deep Dish',
                                cheddar:'Cheddar', mozzarella:'Mozzarella', vegan:'Vegan',
                                tomatosauce:'Tomato', marinara:'Marinara', alfredo:'Alfredo',
                                pepperoni:'Pepperoni', bacon:'Bacon', chicken:'Chicken', ham:'Ham',
                                pepper:'Peppers', onion:'Onions', tomato:'Tomatoes', olive:'Olives',
                                DP:'Delivery', PP:'Pickup'
                            };

                            function updateOrder(){
                                const veggies = Array.from(veggiescheck)
                                .filter(cb => cb.checked)
                                .map(cb => itemspicked[cb.value]);
                                
                                const meats = Array.from(meatcheck)
                                .filter(cb => cb.checked)
                                .map(cb => itemspicked[cb.value]);
                                
                                const sauces = Array.from(sauceradios).find(r => r.checked)?.value || 'None';
                                const cheeses = Array.from(cheeseradios).find(r => r.checked)?.value || 'None';
                                const crusts = Array.from(crustradios).find(r => r.checked)?.value || 'None';
                                const sizes = Array.from(sizeradios).find(r => r.checked)?.value || 'None';
                                const dlvpck = deliverselect.value;

                                const sizeText = itemspicked[sizes] || 'none';
                                const crustText = itemspicked[crusts] || 'none';
                                const cheeseText = itemspicked[cheeses] || 'none';
                                const sauceText = itemspicked[sauces] || 'none';
                                const meatText =  meats.length >0? meats.join(', '): 'none';
                                const veggieText = veggies.length >0? veggies.join(', '): 'none';
                                const deliveryText = itemspicked[dlvpck] || 'none';
                                orderDIV.innerHTML = `

                                <li>${sizeText}</li>
                                <li>${crustText}</li>
                                <li>${cheeseText}</li>
                                <li>${sauceText}</li>
                                <li>${meatText}</li>
                                <li>${veggieText}</li>
                                <li>${deliveryText}</li>
                                
                                `;
                            }
                            crustradios.forEach(r => r.addEventListener('change', updateOrder));
                            sizeradios.forEach(r => r.addEventListener('change', updateOrder));
                            sauceradios.forEach(r => r.addEventListener('change', updateOrder));
                            cheeseradios.forEach(r => r.addEventListener('change', updateOrder));
                            meatcheck.forEach(cb => cb.addEventListener('change', updateOrder));
                            veggiescheck.forEach(cb => cb.addEventListener('change', updateOrder));
                            deliverselect.addEventListener('change', updateOrder);
                            form.addEventListener('reset', updateOrder);
                            updateOrder();
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
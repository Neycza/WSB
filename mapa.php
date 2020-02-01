<?php
/*
		if(isset($_POST['mapaok'])){
			$mapa = $_POST['mapa'];
		}
		else
			{
				$mapa = "warszawa";
			}
*/		



if (isset($_GET['piramida2']))
{
$mapa = $_GET['piramida2'];
str_replace(" ","+",$mapa);
}
else {
$mapa = "Warszawa";
}

if (!isset($_GET['piramida2']))
{
?>
Wpisz miejscowość:<div class="form__group">
  <input type="text" class="form__input" id="mapa" placeholder="Miejscowość" name="mapa" required="" />

</div><br />

           <button onclick="piramida2()" class="button-cztery" name="mapaok"><span>Wyszukaj</span></button><br /><br />
<?php
}
echo '<div id="piramida2"><iframe style="width:80%;" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/search?q=sale%20do%20wynajęcia%20near%20'.$mapa.'&key=AIzaSyBEQ2In_w7BzUXDN8OyH8b9OXkhn2rRz5Y" allowfullscreen></iframe></div>';

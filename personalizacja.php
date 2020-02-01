<?php
$dbh = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($dbh, "inzynierka");

if(!isset($_SESSION)) {
     session_start();
}

$id = $_SESSION['id'];
$rodzaj = $_SESSION['rodzaj'];

echo '<div id="piramida5">';

$mysql2 = mysqli_query($dbh, "select * from `players` where `id` = '$id'");
$row2 = mysqli_fetch_array($mysql2);

$miejscowosc = $row2['miejscowosc'];	
$imie = $row2['imie'];
$alias = $row2['alias'];
$email = $row2['email'];
$telefon = $row2['telefon'];
$opis = $row2['opis'];
$wojewodztwo = $row2['wojewodztwo'];
$video = $row2['videoset'];
$cennik = $row2['cennik'];
$min_h = $row2['min_h'];
$max_h = $row2['max_h'];

if ($row2['pop'] == 1){$pop = 'Tak';}else{$pop = 'Nie';}
if ($row2['elektroniczna'] == 1){$elektroniczna = 'Tak';}else{$elektroniczna = 'Nie';}
if ($row2['discopolo'] == 1){$discopolo = 'Tak';}else{$discopolo = 'Nie';}
if ($row2['lata80'] == 1){$lata80 = 'Tak';}else{$lata80 = 'Nie';}
if ($row2['lata90'] == 1){$lata90 = 'Tak';}else{$lata90 = 'Nie';}
if ($row2['rock'] == 1){$rock = 'Tak';}else{$rock = 'Nie';}
if ($row2['hiphop'] == 1){$hiphop = 'Tak';}else{$hiphop = 'Nie';}
if ($row2['rb'] == 1){$rb = 'Tak';}else{$rb = 'Nie';}
if ($row2['jazz'] == 1){$jazz = 'Tak';}else{$jazz = 'Nie';}
if ($row2['metal'] == 1){$metal = 'Tak';}else{$metal = 'Nie';}

if ($row2['urodziny'] == 1){$urodziny = 'Tak';}else{$urodziny = 'Nie';}
if ($row2['wesele'] == 1){$wesele = 'Tak';}else{$wesele = 'Nie';}
if ($row2['studniowka'] == 1){$studniowka = 'Tak';}else{$studniowka = 'Nie';}
if ($row2['komers'] == 1){$komers = 'Tak';}else{$komers = 'Nie';}
if ($row2['jubileusz'] == 1){$jubileusz = 'Tak';}else{$jubileusz = 'Nie';}
if ($row2['firmowa'] == 1){$firmowa = 'Tak';}else{$firmowa = 'Nie';}



if ($rodzaj == 'KLIENT')
		{
			
		// Aktualizacja
		if(isset($_GET['ok']) && ($_GET['ok']) == "imie"){
		$imie2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `imie` = '$imie2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Imię zostało zmienione.</font><br />';
		}
		}
		
		if(isset($_GET['ok']) && ($_GET['ok']) == "miejscowosc"){
		$miejscowosc2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `miejscowosc` = '$miejscowosc2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Miejscowość została zmieniona.</font><br />';
		}
		}		
		
		if(isset($_GET['ok']) && ($_GET['ok']) == "email"){
		$email2 = $_GET['tresc'];
		$haslo = $_GET['tresc2'];
		
		$mysql3 = mysqli_query($dbh, "select * from `players` where `id` = '$id'");
		$row3 = mysqli_fetch_array($mysql3);
		$haslo2 = $row3['pass']; 
		
		if ($haslo == $haslo2)
			{
				if($email2 != NULL){
						
				$mysql = "UPDATE `players` SET `email` = '$email2' where `id` = '$id'";
				if (mysqli_query($dbh, $mysql))
				{
					echo '<br /><font color="red">Email został zmieniony.</font><br />';
				}
				}
				else {
					echo 'Wypełnij wszystkie pola.';
				}
			}
		else
			{
				echo 'Podaj prawidłowe hasło.';
			}
		
		}			
		
		if(isset($_GET['ok']) && ($_GET['ok']) == "pass2"){
		$haslo3 = $_GET['tresc'];
		$haslo = $_GET['tresc3'];
		$haslo4 = $_GET['tresc2'];
		
		$mysql3 = mysqli_query($dbh, "select * from `players` where `id` = '$id'");
		$row3 = mysqli_fetch_array($mysql3);
		$haslo2 = $row3['pass']; 
		
		if ($haslo == $haslo2)
			{
				if ($haslo3 == $haslo4)
				{
				if($haslo3 != NULL){
					
						
				$mysql = "UPDATE `players` SET `pass` = '$haslo3' where `id` = '$id'";
				if (mysqli_query($dbh, $mysql))
				{
					echo '<br /><font color="red">Hasło zostało zmienione.</font><br />';
				}
				}
					else
						{
							echo 'Wypełnij wszystkie pola.';
						}
			}
				else
					{
						echo 'Hasła się różnią.';
					}
			}
		else
			{
				echo 'Podaj prawidłowe hasło.';
			}
		
		}			
		
    	echo '<br /><br /><b><font size="6px">Personalizacja konta:</font></b><br />';
		echo '<br /><b><font size="3px">Imię: </font></b>'.$imie.' (<a onclick="piramida7(\'imie\')" style="cursor: pointer;">Edytuj imię</a>)';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'imie') 
		{
			 echo '<br />Wpisz imię:<div class="form__group">
  <input type="text" class="form__input" id="imie" placeholder="Imię" name="imie" required="" />

</div><br /> <button onclick="piramida8(\'imie\')" class="button-cztery" style="" name="ok1"><span>Zmień</span></button>'; 
		}}		
		echo '<br /><b><font size="3px">Miejscowość: </font></b>'.$miejscowosc.' (<a onclick="piramida7(\'miejscowosc\')" style="cursor: pointer;">Edytuj miejscowość</a>)';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'miejscowosc') 
		{
			 echo '<br />Wpisz miejscowość:<div class="form__group">
  <input type="text" class="form__input" id="miejscowosc" placeholder="Miejscowość" name="miejscowosc" required="" />

</div><br /> <button onclick="piramida8(\'miejscowosc\')" class="button-cztery" style="" name="ok2"><span>Zmień</span></button>'; 
		}}		
		echo '<br /><b><font size="3px">Email: </font></b>'.$email.' (<a onclick="piramida7(\'email\')" style="cursor: pointer;">Edytuj email</a>)';	
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'email') 
		{
			 echo '<br />Wpisz email:<div class="form__group">
  <input type="email" class="form__input" id="email" placeholder="Email" name="email" required="" />

</div> ';
			 echo 'Wpisz aktualne hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass" placeholder="Hasło" name="pass" required="" />

</div><br /><button onclick="piramida8(\'email\', \'pass\')" class="button-cztery" style="" name="ok3"<span>Zmień</span></button>';			  
		}}		
		echo '<br />(<a onclick="piramida7(\'haslo\')" style="cursor: pointer;">Zmień hasło</a>)';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'haslo') 
		{
			 echo '<br />Wpisz nowe hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass2" placeholder="Nowe hasło" name="pass2" required="" />

</div> ';
			 echo 'Wpisz ponownie nowe hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass3" placeholder="Nowe hasło" name="pass3" required="" />

</div>';
			 echo 'Wpisz aktualne hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass4" placeholder="Aktualne hasło" name="pass" required="" />

</div><br /><button onclick="piramida8(\'pass2\', \'pass3\', \'pass4\')" class="button-cztery" style="" name="ok4"<span>Zmień</span></button>';			  
		}}
	
	
		echo '</div>';
		}
		else
		{
			// DJ
		// Aktualizacja
		if(isset($_GET['ok']) && ($_GET['ok']) == "alias"){
		$alias2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `alias` = '$alias2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Alias został zmieniony.</font><br />';
		}
		}
		if(isset($_GET['ok']) && ($_GET['ok']) == "miejscowosc"){
		$miejscowosc2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `miejscowosc` = '$miejscowosc2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Miejscowość została zmieniona.</font><br />';
		}
		}		
		
		if(isset($_GET['ok']) && ($_GET['ok']) == "email"){
		$email2 = $_GET['tresc'];
		$haslo = $_GET['tresc2'];
		
		$mysql3 = mysqli_query($dbh, "select * from `players` where `id` = '$id'");
		$row3 = mysqli_fetch_array($mysql3);
		$haslo2 = $row3['pass']; 
		
		if ($haslo == $haslo2)
			{
				if($email2 != NULL){
						
				$mysql = "UPDATE `players` SET `email` = '$email2' where `id` = '$id'";
				if (mysqli_query($dbh, $mysql))
				{
					echo '<br /><font color="red">Email został zmieniony.</font><br />';
				}
				}
				else {
					echo 'Wypełnij wszystkie pola.';
				}
			}
		else
			{
				echo 'Podaj prawidłowe hasło.';
			}
		
		}			
		
		if(isset($_GET['ok']) && ($_GET['ok']) == "pass2"){
		$haslo3 = $_GET['tresc'];
		$haslo = $_GET['tresc3'];
		$haslo4 = $_GET['tresc2'];
		
		$mysql3 = mysqli_query($dbh, "select * from `players` where `id` = '$id'");
		$row3 = mysqli_fetch_array($mysql3);
		$haslo2 = $row3['pass']; 
		
		if ($haslo == $haslo2)
			{
				if ($haslo3 == $haslo4)
				{			
				if($haslo3 != NULL){
					
						
				$mysql = "UPDATE `players` SET `pass` = '$haslo3' where `id` = '$id'";
				if (mysqli_query($dbh, $mysql))
				{
					echo '<br /><font color="red">Hasło zostało zmienione.</font><br />';
				}
				}
					else
						{
							echo 'Wypełnij wszystkie pola.';
						}
				}
				else
					{
						echo 'Hasła się różnią.';
					}
			}
		else
			{
				echo 'Podaj prawidłowe hasło.';
			}
		
		}
		
				if(isset($_GET['ok']) && ($_GET['ok']) == "telefon"){
		$telefon2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `telefon` = '$telefon2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Nr telefonu został zmieniony.</font><br />';
		}
		}	
				
				if(isset($_GET['ok']) && ($_GET['ok']) == "opis"){
		$opis2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `opis` = '$opis2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Opis został zmieniony.</font><br />';
		}
		}				

				if(isset($_GET['ok']) && ($_GET['ok']) == "wojewodztwo"){
		$wojewodztwo2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `wojewodztwo` = '$wojewodztwo2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Województwo zostało zmienione.</font><br />';
		}
		}
				
		if(isset($_GET['ok']) && ($_GET['ok']) == "video"){
		$video2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `videoset` = '$video2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Videoset został zmieniony.</font><br />';
		}
		}
		
				if(isset($_GET['ok']) && ($_GET['ok']) == "cennik"){
		$cennik2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `cennik` = '$cennik2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Cennik został zmieniony.</font><br />';
		}
		}
				
								if(isset($_GET['ok']) && ($_GET['ok']) == "minh"){
		$min_h2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `min_h` = '$min_h2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Minimalna liczba godzin została zmieniona.</font><br />';
		}
		}
								
												if(isset($_GET['ok']) && ($_GET['ok']) == "maxh"){
		$max_h2 = $_GET['tresc'];	
		$mysql = "UPDATE `players` SET `max_h` = '$max_h2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Maksymalna liczba godzin została zmieniona.</font><br />';
		}
		}

												if(isset($_GET['ok']) && ($_GET['ok']) == "pop"){
												
		$pop2 = $_GET['tresc']; if ($pop2 == "true"){$pop2 = 1;} else {$pop2 = 0;}
		$elektroniczna2 = $_GET['tresc2']; if ($elektroniczna2 == "true"){$elektroniczna2 = 1;} else {$elektroniczna2 = 0;}
		$discopolo2 = $_GET['tresc3']; if ($discopolo2 == "true"){$discopolo2 = 1;} else {$discopolo2 = 0;}
		$lata802 = $_GET['tresc4']; if ($lata802 == "true"){$lata802 = 1;} else {$lata802 = 0;}
		$lata902 = $_GET['tresc5']; if ($lata902 == "true"){$lata902 = 1;} else {$lata902 = 0;}
		$rock2 = $_GET['tresc6']; if ($rock2 == "true"){$rock2 = 1;} else {$rock2 = 0;}
		$hiphop2 = $_GET['tresc7']; if ($hiphop2 == "true"){$hiphop2 = 1;} else {$hiphop2 = 0;}
		$rb2 = $_GET['tresc8']; if ($rb2 == "true"){$rb2 = 1;} else {$rb2 = 0;}
		$jazz2 = $_GET['tresc9']; if ($jazz2 == "true"){$jazz2 = 1;} else {$jazz2 = 0;} 
		$metal2 = $_GET['tresc10']; if ($metal2 == "true"){$metal2 = 1;} else {$metal2 = 0;}
		
		
		$mysql = "UPDATE `players` SET `pop` = '$pop2', `elektroniczna` = '$elektroniczna2', `discopolo` = '$discopolo2', `lata80` = '$lata802', `lata90` = '$lata902', `rock` = '$rock2', `hiphop` = '$hiphop2', `rb` = '$rb2', `jazz` = '$jazz2', `metal` = '$metal2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Gatunki zostały zmienione.</font><br />';
		}
		}		


												if(isset($_GET['ok']) && ($_GET['ok']) == "urodziny"){
		$urodziny2 = $_GET['tresc']; if ($urodziny2 == "true"){$urodziny2 = 1;} else {$urodziny2 = 0;}
		$wesele2 = $_GET['tresc2']; if ($wesele2 == "true"){$wesele2 = 1;} else {$wesele2 = 0;}
		$studniowka2 = $_GET['tresc3']; if ($studniowka2 == "true"){$studniowka2 = 1;} else {$studniowka2 = 0;}
		$komers2 = $_GET['tresc4']; if ($komers2 == "true"){$komers2 = 1;} else {$komers2 = 0;} 
		$jubileusz2 = $_GET['tresc5']; if ($jubileusz2 == "true"){$jubileusz2 = 1;} else {$jubileusz2 = 0;}
		$firmowa2 = $_GET['tresc6']; if ($firmowa2 == "true"){$firmowa2 = 1;} else {$firmowa2 = 0;}
		
		
		$mysql = "UPDATE `players` SET `urodziny` = '$urodziny2', `wesele` = '$wesele2', `studniowka` = '$studniowka2', `komers` = '$komers2', `jubileusz` = '$jubileusz2', `firmowa` = '$firmowa2' where `id` = '$id'";
		if (mysqli_query($dbh, $mysql))
		{
			echo '<br /><font color="red">Imprezy zostały zmienione.</font><br />';
		}
		}
		
		
		
		echo '<b><font size="5px">Personalizacja konta:</font></b><br />';	
		echo '<br /><b><font size="3px">Alias: </b>'.$alias.' (<a onclick="piramida7(\'alias\')" style="cursor: pointer;">Edytuj Alias</a>)</font>';	
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'alias') 
		{
			 echo '<br />Wpisz alias:          
<div class="form__group">
  <input type="text" class="form__input" id="alias" placeholder="Alias" name="alias" required="" />

</div><br />

           <button onclick="piramida8(\'alias\')" class="button-cztery" style="" name="ok1"<span>Zmień</span></button>'; 
		}}				
				echo '<br /><b><font size="3px">Miejscowość: </b>'.$miejscowosc.' (<a onclick="piramida7(\'miejscowosc\')" style="cursor: pointer;">Edytuj miejscowość</a>)</font>';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'miejscowosc')  
		{
			 echo '<br />Wpisz miejscowość:
  <input type="text" class="form__input" id="miejscowosc" placeholder="Miejscowość" name="miejscowosc" required="" />

</div><br />

           <button onclick="piramida8(\'miejscowosc\')" class="button-cztery" style="" name="ok2"<span>Zmień</span></button>'; 
		}}
			 echo '<br /><b><font size="3px">Województwo: </b>'.$wojewodztwo.' (<a onclick="piramida7(\'wojewodztwo\')" style="cursor: pointer;">Edytuj województwo</a>)</font>';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'wojewodztwo') 
		{
			 echo '<br />Wybierz województwo:
			 <div class="select">
			 <select name="wojewodztwo" id="wojewodztwo">
		<option>dolnośląskie</option>
        <option>kujawsko-pomorskie</option>
		<option>lubelskie</option>
		<option>lubuskie</option>
		<option>łódzkie</option>
		<option>małopolskie</option>
		<option>mazowieckie</option>		
		<option>opolskie</option>
		<option>podkarpackie</option>	
		<option>podlaskie</option>	
		<option>pomorskie</option>
		<option>śląskie</option>	
		<option>świętokrzyskie</option>																				        
		<option>warmińsko-mazurskie</option>	
		<option>wielkopolskie</option>	
		<option>zachodniopomorskie</option>					
	</select>
	</div>
			 <br /><button onclick="piramida8(\'wojewodztwo\')" class="button-cztery" style="" name="ok7"<span>Zmień</span></button>'; 
		}}
				echo '<br /><b><font size="3px">Telefon: </b>'.$telefon.' (<a onclick="piramida7(\'telefon\')" style="cursor: pointer;">Edytuj nr telefonu</a>)</font>';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'telefon')
		{
			 echo '<br />Wpisz nr telefonu:<div class="form__group">
  <input type="text" class="form__input" id="telefon" placeholder="Telefon" name="telefon" required="" />

</div><br />

           <button onclick="piramida8(\'telefon\')" class="button-cztery" style="" name="ok5"<span>Zmień</span></button>'; 
		}}		
		echo '<br /><br /><b><font size="3px">Opis: </b>'.$opis.' (<a onclick="piramida7(\'opis\')" style="cursor: pointer;">Edytuj opis</a>)</font>';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'opis') 
		{
			 echo '<br />Wpisz opis:<textarea maxlength="900" id="opis" name="opis" cols="50" rows="4"></textarea><br /><br /><button onclick="piramida8(\'opis\')" class="button-cztery" style="" name="ok6"<span>Zmień</span></button>'; 
		}}
		echo '<br /><br /><b><font size="3px">Ustal Cennik: </b>'.$cennik.'zł za godzinę (<a onclick="piramida7(\'cennik\')" style="cursor: pointer;">Edytuj cennik</a>)</font>';
				if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'cennik')  
		{
			 echo '<br />Wpisz cennik:<div class="form__group">
  <input type="text" class="form__input" id="cennik" placeholder="Cennik" name="Cennik" required="" />

</div><br />

           <button onclick="piramida8(\'cennik\')" class="button-cztery" style="" name="ok11"<span>Zmień</span></button>'; 
		}}
		echo '<br /><b><font size="3px">Ustal minimalna liczbe godzin: </b>'.$min_h.' (<a onclick="piramida7(\'minh\')" style="cursor: pointer;">Edytuj minimalna liczbe godzin</a>)</font>';	
						if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'minh') 
		{
			 echo '<br />Wpisz minimalna liczbe godzin:<div class="form__group">
  <input type="text" class="form__input" id="minh" placeholder="Minimalna liczba godzin" name="minh" required="" />

</div><br />

           <button onclick="piramida8(\'minh\')" class="button-cztery" style="" name="ok12"<span>Zmień</span></button>'; 
		}}		
		echo '<br /><b><font size="3px">Ustal maksymalna liczbe godzin: </b>'.$max_h.' (<a onclick="piramida7(\'maxh\')" style="cursor: pointer;">Edytuj maksymalna liczbe godzin</a>)</font>';		


		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'maxh') 
		{
			 echo '<br />Wpisz maksymalna liczbe godzin:<div class="form__group">
  <input type="text" class="form__input" id="maxh" placeholder="Maksymalna liczba godzin" name="maxh" required="" />

</div><br />

           <button onclick="piramida8(\'maxh\')" class="button-cztery" style="" name="ok13"<span>Zmień</span></button>'; 
		}}		

		echo '<br /><br /><b><font size="3px">Gatunki muzyczne: </b> (<a onclick="piramida7(\'gatunki\')" style="cursor: pointer;">Edytuj gatunki</a>)';		
echo '<br />Pop: '.$pop;
echo '<br />Elektroniczna: '.$elektroniczna;
echo '<br />Disco-Polo: '.$discopolo;
echo '<br />Lata 80-te: '.$lata80;
echo '<br />Lata 90-te: '.$lata90;
echo '<br />Rock: '.$rock;
echo '<br />Hip-Hop: '.$hiphop;
echo '<br />R&B: '.$rb;
echo '<br />Jazz: '.$jazz;
echo '<br />Metal: '.$metal;

		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'gatunki') 
		{
		?>	
	
<br />Pop: <input type="checkbox" id="pop" name="pop" value="0">
<br />Elektroniczna: <input type="checkbox" id="elektroniczna" name="elektroniczna" value="1">
<br />Disco-Polo: <input type="checkbox" id="discopolo" name="discopolo" value="1">
<br />Lata 80-te: <input type="checkbox" id="lata80" name="lata80" value="1">
<br />Lata 90-te: <input type="checkbox" id="lata90" name="lata90" value="1">
<br />Rock: <input type="checkbox" id="rock" name="rock" value="1">
<br />Hip-Hop: <input type="checkbox" id="hiphop" name="hiphop" value="1">
<br />R&B: <input type="checkbox" id="rb" name="rb" value="1">
<br />Jazz: <input type="checkbox" id="jazz" name="jazz" value="1">
<br />Metal: <input type="checkbox" id="metal" name="metal" value="1">
<br /><button onclick="piramida9('pop', 'elektroniczna', 'discopolo', 'lata80', 'lata90', 'rock', 'hiphop', 'rb', 'jazz', 'metal')" class="button-cztery" style="" name="ok14"<span>Zmień</span></button>
		<?php
}}

		echo '<br /><br /><b><font size="3px">Rodzaje imprez: </font></b> (<a onclick="piramida7(\'imprezy\')" style="cursor: pointer;">Edytuj rodzaje imprez</a>)';		
echo '<br />Urodziny: '.$urodziny;
echo '<br />Wesela: '.$wesele;
echo '<br />Studniówki: '.$studniowka;
echo '<br />Komersy: '.$komers;
echo '<br />Jubileusze: '.$jubileusz;
echo '<br />Imprezy firmowe: '.$firmowa;

		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'imprezy') 
		{
		?>	
		
<br />Urodziny: <input type="checkbox" id="urodziny" name="urodziny" value="1">
<br />Wesela: <input type="checkbox" id="wesele" name="wesele" value="1">
<br />Studniówki: <input type="checkbox" id="studniowka" name="studniowka" value="1">
<br />Komersy: <input type="checkbox" id="komers" name="komers" value="1">
<br />Jubileusze: <input type="checkbox" id="jubileusz" name="jubileusz" value="1">
<br />Imprezy firmowe: <input type="checkbox" id="firmowa" name="firmowa" value="1">
<br /><button onclick="piramida9('urodziny', 'wesele', 'studniowka', 'komers', 'jubileusz', 'firmowa')" class="button-cztery" style="" name="ok15"<span>Zmień</span></button>
		<?php
}}







?>
<br /><b><font size="3px">Wstaw zdjęcie:</font></b>
<br /><font size="3px">Zdjęcie 1:</font><form action="upload.php" method="post" enctype="multipart/form-data">
    <font size="3px">Wybierz zdjęcie:</font>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button type="submit" class="button-cztery" style="" name="submit"<span>Wrzuć</span></button>
</form>
<?php
echo '<img src="images/1_'.$id.'.jpg" alt="">';
?>
<br /><font size="3px">Zdjęcie 2:</font><form action="upload.php" method="post" enctype="multipart/form-data">
    <font size="3px">Wybierz zdjęcie:</font>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button type="submit" class="button-cztery" style="" name="submit2"<span>Wrzuć</span></button>
</form>
<?php
echo '<img src="images/2_'.$id.'.jpg" alt="">';
?>
<br /><font size="3px">Zdjęcie 3:</font><form action="upload.php" method="post" enctype="multipart/form-data">
    <font size="3px">Wybierz zdjęcie:</font>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button type="submit" class="button-cztery" style="" name="submit3"<span>Wrzuć</span></button>
</form>
<?php
echo '<img src="images/3_'.$id.'.jpg" alt="">';
?>
<?php

				echo '<br /><b><font size="3px">Zamieść Videoset: </font></b> (<a onclick="piramida7(\'video\')" style="cursor: pointer;">Edytuj Videoset</a>)';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'video')  
		{
			 echo '<br />Wpisz link z youtube (sama końcówka):<div class="form__group">
  <input type="text" class="form__input" id="video" placeholder="Link do videoseta" name="video" required="" />

</div><br />

           <button onclick="piramida8(\'video\')" class="button-cztery" style="" name="ok9"<span>Zmień</span></button>'; 
		}}			
			if ($video != NULL)
			{
			echo '<br /><br /><iframe style="width:70%;" height="500" src="https://www.youtube.com/embed/'.$video.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
			}				
		echo '<br /><br /><br /><b><font size="3px">Email: </font></b>'.$email.' (<a onclick="piramida7(\'email\')" style="cursor: pointer;">Edytuj email</a>)';	
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'email') 
		{
			 echo '<br />Wpisz email:<div class="form__group">
  <input type="email" class="form__input" id="email" placeholder="Email" name="email" required="" />

</div>

           ';
			 echo '<br />Wpisz aktualne hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass" placeholder="Hasło" name="pass" required="" />

</div><br /><button onclick="piramida8(\'email\', \'pass\')" class="button-cztery" style="" name="ok3"<span>Zmień</span></button>';			  
		}}		
		echo '<br />(<a onclick="piramida7(\'haslo\')" style="cursor: pointer;">Zmień hasło</a>)<br />';
		if (isset($_GET['personalizacja'])) { if($_GET['personalizacja'] == 'haslo') 
		{
			 echo '<br />Wpisz nowe hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass2" placeholder="Nowe hasło" name="pass2" required="" />

</div>';
			 echo '<br />Wpisz ponownie nowe hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass3" placeholder="Nowe hasło" name="pass3" required="" />

</div>';			 
			 echo '<br />Wpisz aktualne hasło:<div class="form__group">
  <input type="password" class="form__input" id="pass" placeholder="Aktualne hasło" name="pass" required="" />

</div><br /><button onclick="piramida8(\'pass2\', \'pass3\', \'pass\')" class="button-cztery" style="" name="ok4"<span>Zmień</span></button>';			  
		}}	
		
	include("kalendarz.php");
	echo '<b><font size="3px">Ustal zajęte terminy: </font></b><br />';

$mysql4 = mysqli_query($dbh, "select * from `kalendarz` where `dj` = '$id'");	

while ($row4 = mysqli_fetch_array($mysql4))
      {
$dzien = $row4['dzien'];
$miesiac = $row4['miesiac'];
$miesiac = $miesiac + 1;
$rok = $row4['rok'];

	echo $dzien.'-'.$miesiac.'-'.$rok.'<br />';
	  }	
			
			
			
			
			
			
			
			
			
			
		}



















?>

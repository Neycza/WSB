<?php
$dbh = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($dbh, "inzynierka");

if(!isset($_SESSION)) {
     session_start();
}

$id = $_SESSION['id'];








echo '<div id="piramida4">';



//////////////////////////////
//// Tablica z DJami /////////
//////////////////////////////





if (!isset($_GET['wybrany']) && !isset($_GET['wiadomosc']))
{
	echo '<font size="6px">Wyszukaj Dja:</font><br /><br />';
if(isset($_GET['select']) && $_GET['select'] != 'wszystkie'){
			
		$woj = $_GET['select'];

}
else
	{
		$woj = NULL;

	}


if(isset($_GET['select2']))
{
$cena = $_GET['select2'];
}
echo '<font size="5px">Województwo: </font>
	<div class="select">
  <select name="wojewodztwo2" id="slct">
		<option>wszystkie</option>
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
	
	';
	
	echo '<font size="5px"> Cena: 	</font><div class="select"><select name="cena" id="slct2">
		<option>rosnąco</option>
		<option>malejąco</option>
	</select></div>   <br /><button onclick="piramida5()" name="ok7" class="button-cztery"><span>Sortuj</span></button>';

if(isset($_GET['select2']))
{
if ($cena == 'malejąco')
{

if ($woj != NULL)
{
$mysql4 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = '$woj' ORDER BY `cennik` DESC");
}
else {
$mysql4 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' ORDER BY `cennik` DESC");	
}
}
else
	{
if ($woj != NULL)
{
$mysql4 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = '$woj' ORDER BY `cennik` ASC");
}
else {
$mysql4 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' ORDER BY `cennik` ASC");	
}	
	}
}
else
	{
$mysql4 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ'");		
	}



$licznik = 0;
echo "<center><ul id='infinite-list'>";

while ($row4 = mysqli_fetch_array($mysql4))
      {
echo "<li><a onclick='piramida6(".$row4['id'].")' style='cursor: pointer;'>".$row4["alias"]." || średnio ".$row4["cennik"]."zł za godzinę || ".$row4["miejscowosc"]." || woj. ".$row4["wojewodztwo"]."</a></li>";
$dj_alias[$licznik] = $row4['alias'];
$dj_id[$licznik] = $row4['id'];
$dj_miejscowosc[$licznik] = $row4['miejscowosc'];
$dj_wojewodztwo[$licznik] = $row4['wojewodztwo'];
$dj_opis[$licznik] = $row4['opis'];
$dj_cennik[$licznik] = $row4['cennik'];
$licznik++;
	//echo '<a href="index.php?dj='.$dj_id.'"><div class="lista">'.$dj_alias.' || '.$dj_cennik.'zł za godzinę || '.$dj_miejscowosc.' || województwo '.$dj_wojewodztwo.'</div></a><br /><br />';
	  }
echo '</ul></center>';
}











/*
echo "<center><ul id='infinite-list'>
</ul></center>";



print "<script language='JavaScript'>



  


var listElm = document.querySelector('#infinite-list');
var dj_alias = ".json_encode($dj_alias)."
var dj_id = ".json_encode($dj_id)."
var dj_miejscowosc = ".json_encode($dj_miejscowosc)."
var dj_wojewodztwo = ".json_encode($dj_wojewodztwo)."
var dj_cennik = ".json_encode($dj_cennik)."
// Add 20 items.
var nextItem = 1;
var licznik = 0;
var odliczanie = ".$licznik.";
var loadMore = function() {
  for (var i = 0; i < 20; i++) {
  	if (odliczanie > 0)
  	{
    var item = document.createElement('li');
    var anchor = document.createElement('a');
    anchor.innerText = dj_alias[licznik] + ' || ' + dj_cennik[i] + 'zł za godzinę || ' + dj_miejscowosc[i] + ' || woj. ' + dj_wojewodztwo[i];
    anchor.href = 'main.php?dj=' + dj_id[i];

item.appendChild(anchor);

    listElm.appendChild(item);
    odliczanie = odliczanie - 1;
    }
    licznik = licznik + 1; 
  }
}

// Detect when scrolled to bottom.
listElm.addEventListener('scroll', function() {
  if (listElm.scrollTop + listElm.clientHeight >= listElm.scrollHeight) {
    loadMore();
  }
});

// Initially load some items.
loadMore();



</script>";
*/








if(!isset($_GET['select']) && !isset($_GET['wiadomosc']) && isset($_GET['wybrany']))
{
echo '<font size="6px">Wyszukaj Dja:</font><br /><br />';



//////////////////////////////
//// Poszczegolny DJ /////////
//////////////////////////////


	$dj_idd = $_GET['wybrany'];
	$mysql5 = mysqli_query($dbh, "select * from `players` where `id` = '$dj_idd'");
	$row5 = mysqli_fetch_array($mysql5);
	$dj_alias = $row5['alias'];
	$dj_miejscowosc = $row5['miejscowosc'];
	$dj_wojewodztwo = $row5['wojewodztwo'];
	$dj_opis = $row5['opis'];
	$dj_telefon = $row5['telefon'];
	$dj_minh = $row5['min_h'];	
	$dj_cennik = $row5['cennik'];
	$dj_maxh = $row5['max_h'];
	$dj_videoset = $row5['videoset'];
	if ($row5['pop'] == 1){$dj_pop = "Tak";}else{$dj_pop = "Nie";} 	
	if ($row5['elektroniczna'] == 1){$dj_elektroniczna = "Tak";}else{$dj_elektroniczna = "Nie";} 	
	if ($row5['discopolo'] == 1){$dj_discopolo = "Tak";}else{$dj_discopolo = "Nie";}
	if ($row5['lata80'] == 1){$dj_lata80 = "Tak";}else{$dj_lata80 = "Nie";}
	if ($row5['lata90'] == 1){$dj_lata90 = "Tak";}else{$dj_lata90 = "Nie";}
	if ($row5['rock'] == 1){$dj_rock = "Tak";}else{$dj_rock = "Nie";}
	if ($row5['hiphop'] == 1){$dj_hiphop = "Tak";}else{$dj_hiphop = "Nie";}
	if ($row5['rb'] == 1){$dj_rb = "Tak";}else{$dj_rb = "Nie";}
	if ($row5['jazz'] == 1){$dj_jazz = "Tak";}else{$dj_jazz = "Nie";}
	if ($row5['metal'] == 1){$dj_metal = "Tak";}else{$dj_metal = "Nie";} 
	
	if ($row5['urodziny'] == 1){$dj_urodziny = "Tak";}else{$dj_urodziny = "Nie";}
	if ($row5['wesele'] == 1){$dj_wesele = "Tak";}else{$dj_wesele = "Nie";}
	if ($row5['studniowka'] == 1){$dj_studniowka = "Tak";}else{$dj_studniowka = "Nie";}
	if ($row5['komers'] == 1){$dj_komers = "Tak";}else{$dj_komers = "Nie";}
	if ($row5['jubileusz'] == 1){$dj_jubileusz = "Tak";}else{$dj_jubileusz = "Nie";}
	if ($row5['firmowa'] == 1){$dj_firmowa = "Tak";}else{$dj_firmowa = "Nie";}	
		
	echo '<b><font size="5px" color="#390346">Alias: </b></font><font size="3px">'.$dj_alias.'</font>';
	echo '<br /><b><font size="5px" color="#390346">Miejscowość: </b></font><font size="3px">'.$dj_miejscowosc.'</font>';
	echo '<br /><b><font size="5px" color="#390346">Województwo: </font><font size="3px"></b>'.$dj_wojewodztwo.'</font>';
	echo '<br /><br /><b><font size="5px" color="#390346">Opis: </font><font size="3px"></b>'.$dj_opis.'</font>';
	echo '<br /><br /><b><font size="5px" color="#390346">Telefon: </font><font size="3px"></b>'.$dj_telefon.'</font>';
	echo '<br /><b><font size="5px" color="#390346">Cennik: </font><font size="3px"></b>'.$dj_cennik.'zł za godzinę</font>';
	echo '<br /><b><font size="5px" color="#390346">Minimalna liczba godzin: </font><font size="3px"></b>'.$dj_minh.'</font>';	
	echo '<br /><b><font size="5px" color="#390346">Maksymalna liczba godzin: </font><font size="3px"></b>'.$dj_maxh.'</font>';	
	echo '<br /><br /><b><font size="5px" color="#390346">Gatunki muzyczne: </font><font size="3px"></b>';
	echo '<br />Pop: '.$dj_pop;	
	echo '<br />Elektroniczna: '.$dj_elektroniczna;	
	echo '<br />Disco-Polo: '.$dj_discopolo;
	echo '<br />Lata 80-te: '.$dj_lata80;
	echo '<br />Lata 90-te: '.$dj_lata90;
	echo '<br />Rock: '.$dj_rock;
	echo '<br />Hip-Hop: '.$dj_hiphop;
	echo '<br />R&B: '.$dj_rb;
	echo '<br />Jazz: '.$dj_jazz;
	echo '<br />Metal: '.$dj_metal;
	echo '<br /><br /><b></font><font size="5px" color="#390346">Rodzaje imprez: </font></b><font size="3px">';
	echo '<br />Urodziny: '.$dj_urodziny;
	echo '<br />Wesela: '.$dj_wesele;
	echo '<br />Studniówki: '.$dj_studniowka;
	echo '<br />Komersy: '.$dj_komers;
	echo '<br />Jubileusze: '.$dj_jubileusz;
	echo '<br />Imprezy firmowe: '.$dj_firmowa;
			
	echo '<br /><br /><b></font><font size="5px" color="#390346">Zdjęcie 1: </font></b>';	
	echo '<img src="images/1_'.$dj_idd.'.jpg" alt="">';
	echo '<br /><br /><b><font size="5px" color="#390346">Zdjęcie 2: </font></b>';	
	echo '<img src="images/2_'.$dj_idd.'.jpg" alt="">';	
	echo '<br /><br /><b><font size="5px" color="#390346">Zdjęcie 3: </font></b>';	
	echo '<img src="images/3_'.$dj_idd.'.jpg" alt="">';		

	echo '<br /><br /><b><font size="5px" color="#390346">Videoset: </font></b>';		
			if ($dj_videoset != NULL)
			{
			echo '<br /><br /><iframe style="width:70%;" height="500" src="https://www.youtube.com/embed/'.$dj_videoset.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
			}		
	
		echo '<br /><br /><b><font size="5px" color="#390346">Zajęte terminy: </font></b><br /><font size="3px">';

$mysql4 = mysqli_query($dbh, "select * from `kalendarz` where `dj` = '$dj_idd'");	

while ($row4 = mysqli_fetch_array($mysql4))
      {
$dzien = $row4['dzien'];
$miesiac = $row4['miesiac'];
$miesiac = $miesiac + 1;
$rok = $row4['rok'];

	echo $dzien.'-'.$miesiac.'-'.$rok.'<br />';
	  }	
if ($id != $dj_idd)
{
	echo '<br /><button onclick="piramida10('.$dj_idd.')" name="ok9" class="button-two"><span>Wyślij wiadomość</span></button><br /><br /><br />';	
}



}
if(!isset($_GET['select']) && !isset($_GET['wybrany']) && isset($_GET['wiadomosc']))
{
echo "<div id='piramida3'>";

	$id_djaa = $_GET['wiadomosc'];	
	$mysql9 = mysqli_query($dbh, "select * from `players` where `id` = '$id_djaa'");
	$row9 = mysqli_fetch_array($mysql9);
	$nick_dja = $row9['alias'];

		if(isset($_GET['djj'])){
		$tresc_wiadomosci = $_GET['djj'];	
$mysql = "INSERT INTO `wiadomosci` (`tresc`, `nadawca`, `odbiorca`, `data`, `godzina`) VALUES ('$tresc_wiadomosci', '$id', '$id_djaa', NOW(), NOW())";
mysqli_query($dbh, $mysql);
		}		
	
	$mysql8 = mysqli_query($dbh, "select * from `wiadomosci` where `nadawca` = '$id' && `odbiorca` = '$id_djaa' || `nadawca` = '$id_djaa' && `odbiorca` = '$id' ORDER BY `ID` DESC");


				echo '<b><font size="6px">'.$nick_dja.':</font></b>';
echo '<div class="wiadomosci" id="style-1">';
while ($row8 = mysqli_fetch_array($mysql8))
      {
      		$trescc = $row8['tresc'];
			$data = $row8['data'];
			$godzina = $row8['godzina'];
			
			$id_nadawcy = $row8['nadawca'];     
	$mysql10 = mysqli_query($dbh, "select * from `players` where `id` = '$id_nadawcy'");
	$row10 = mysqli_fetch_array($mysql10);  	
	$alias_nadawcy = $row10['alias'];
      		echo '<font color="#530d64">'.$alias_nadawcy.':</font> <font color="white">'.$trescc.'</font><font color="#811f99"> ('.$godzina.') ('.$data.')</font><br />';
      	}	
echo '</div>';			

	echo '<br /><textarea id="wiadomosc" style="background-color: #b640d4; width:80%; height:200px;" name="wiadomosc"  placeholder="Wpisz wiadomość..."></textarea><br /><br /><button onclick="piramida11('.$id_djaa.')" name="ok9" class="button-two"><span>Wyślij</span></button>';			

	echo "</div>";					
						
						
							

}
echo '</div>';							
?>

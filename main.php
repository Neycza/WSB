<?php
session_start();
$dbh = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($dbh, "inzynierka");

//$dbh = mysqli_connect("localhost", "id12204886_inzynierkawsb", "testowe12345");
//$db = mysqli_select_db($dbh, "id12204886_inzynierka");
?>
<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<title>INŻYNIERKA</title>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-language" content="pl">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="" />
<meta name="Keywords" content="" />
<link rel="Stylesheet" type="text/css" href="style2.css" />
<link rel="stylesheet/less" type="text/css" href="style.less" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<LINK REL="SHORTCUT ICON" HREF="images/ikona.png">
</head>
<body>
<script src="main.js"></script>
<script src="less.js"></script>
<script src="ajax.js"></script>
<script src="jquery-3.4.1.js"></script>


<a href="main.php?wyloguj=tak"><div class="wyloguj"></div></a>

<div class="container">
			
			<div class="st-container">
			
				<input type="radio" name="radio-set" checked="checked" id="st-control-1"/>
				<a href="#st-panel-1">Wyszukaj</a>
				<input type="radio" name="radio-set" id="st-control-2"/>
				<a href="#st-panel-2">Wiadomości</a>
				<input type="radio" name="radio-set" id="st-control-3"/>
				<a href="#st-panel-3">Twoje konto</a>
				<input type="radio" name="radio-set" id="st-control-4"/>
				<a href="#st-panel-4">Wyszukaj sale</a>
				<input type="radio" name="radio-set" id="st-control-5"/>
				<a href="#st-panel-5">Statystyki</a>
				
				<div class="st-scroll">
				
					<!-- Placeholder text from http://hipsteripsum.me/ -->
					
					<section class="st-panel" id="st-panel-1">
            <a href="main.php"><div class="st-deco"><img style="transform: rotate(-45deg); position: relative; left: 85px; top: 100px;" src="graphic/logo2.png"/></div></a>
						<h2>

						
<?php
$id = $_SESSION['id'];
$mysql2 = mysqli_query($dbh, "select * from `players` where `id` = '$id'");
$row2 = mysqli_fetch_array($mysql2);
	
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

// Wylogowanie
if (isset($_GET['wyloguj']))
{
if($_GET['wyloguj'] == 'tak')
    {
    	$_SESSION['id'] = NULL;
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php"> ';
	}
}

// Jeśli jesteś zalogowany
if ($_SESSION['id'] != NULL)
{

//echo '<br /><a href="main.php?wiadomosci=tak">Wiadomości</a>';
//echo '<br /><a href="main.php?konto=tak">Twoje konto</a>';
//echo '<br /><a href="main.php?poradnik=tak">Poradnik weselny</a>';
//echo '<br /><a href="main.php?statystyki=tak">Statystyki</a>';



if ($telefon == 0) { $telefon = NULL; }
$miejscowosc = $row2['miejscowosc'];
$rodzaj = $row2['rodzaj'];
$_SESSION['rodzaj'] = $rodzaj;
//if (!isset($_GET['konto']) && !isset($_GET['dj']) && !isset($_GET['wiadomosci']) && !isset($_GET['poradnik']) && !isset($_GET['statystyki']))
//{

include ("wyszukaj.php");












//////////////////////////////
//// Personalizacja konta /////////
//////////////////////////////


if (isset($_GET['konto']))
{
if($_GET['konto'] == 'tak')
    {
    	
	}
}






//////////////////////////////
//// Wiadomosci /////////
//////////////////////////////




if (isset($_GET['wiadomosci']))
{

}


//////////////////////////////
//// Poradnik DJ /////////
//////////////////////////////

if (isset($_GET['poradnik']))
{
if($_GET['poradnik'] == 'tak')
    {

    	}
}



//////////////////////////////
//// Statystyki /////////
//////////////////////////////

if (isset($_GET['statystyki']))
{
if($_GET['statystyki'] == 'tak')
    {
    	
include("statystyki.php");
		
	}}


}
?>
</h2></section>
					
					<section class="st-panel st-color" id="st-panel-2">
						<a href="main.php"><div class="st-deco" data-icon="&#xf118;"><img style="transform: rotate(-45deg); position: relative; left: 85px; top: 100px;" src="graphic/logo2.png"/></div></a>
						<h2>
						<?php
include ("wiadomosci.php");							
						?>	
						</h2>
						
					</section>
					
					<section class="st-panel" id="st-panel-3">
						<a href="main.php"><div class="st-deco" data-icon="&#xf0f4;"><img style="transform: rotate(-45deg); position: relative; left: 85px; top: 100px;" src="graphic/logo2.png"/></div></a>
						<h2>
						<?php
						
						include ("personalizacja.php");
							
							
							?>
						</h2>
						
					</section>
					
					<section class="st-panel st-color" id="st-panel-4">
						<a href="main.php"><div class="st-deco" data-icon="&#xf06c;"><img style="transform: rotate(-45deg); position: relative; left: 85px; top: 100px;" src="graphic/logo2.png"/></div></a>
						<h2>
						
						<?php
						echo '<font size="6px">Wyszukaj sale:</font><br /><br />';
						include("mapa.php");	

						?>								
							
						</h2>
						
						
						
						
						
					</section>
					
					<section class="st-panel" id="st-panel-5">
						<a href="main.php"><div class="st-deco" data-icon="&#xf004;"><img style="transform: rotate(-45deg); position: relative; left: 85px; top: 100px;" src="graphic/logo2.png"/></div></a>
						<h2>
						<?php
						echo '<font size="6px">Statystyki:</font><br /><br />';
						include("statystyki.php");	

						?>	
						</h2>
						
					</section>

				</div><!-- // st-scroll -->
				
			</div><!-- // st-container -->
			
</div>
</body>
</html>

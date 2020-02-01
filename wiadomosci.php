<?php
$dbh = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($dbh, "inzynierka");

if(!isset($_SESSION)) {
     session_start();
}

$id = $_SESSION['id'];
echo "<div id='piramida3'>";
						if(!isset($_GET['djj']))
    {
    	    	echo '<b><font size="6px">Wiadomości:</font></b><br />';				
				$mysql6 = mysqli_query($dbh, "select DISTINCT odbiorca from `wiadomosci` where `nadawca` = '$id' || `odbiorca` = '$id' UNION select nadawca from `wiadomosci` where `nadawca` = '$id' || `odbiorca` = '$id'");	
				echo '<div class="wiadomosci" id="style-1">';
while ($row6 = mysqli_fetch_array($mysql6))
      {
      	
$id_djaa = $row6['odbiorca'];

$mysql7 = mysqli_query($dbh, "select * from `players` where `id` = '$id_djaa' && `id` != '$id'");
$row7 = mysqli_fetch_array($mysql7);

$alias_djaa = $row7['alias'];
echo '<div class="pozycja"><a onclick="piramida3('.$id_djaa.')" style="cursor: pointer;"><font size="3px">'.$alias_djaa.'</font></a></div>';

	  }	
	  echo '</div>';							
	}
else
{
	$id_djaa = $_GET['djj'];	
	$mysql9 = mysqli_query($dbh, "select * from `players` where `id` = '$id_djaa'");
	$row9 = mysqli_fetch_array($mysql9);
	$nick_dja = $row9['alias'];

		if(isset($_GET['wiadomosc'])){
		$tresc_wiadomosci = $_GET['wiadomosc'];	
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
      		echo '<font color="#530d64">'.$alias_nadawcy.':</font> '.$trescc.'<font color="#811f99"> ('.$godzina.') ('.$data.')</font><br />';
      	}	
echo '</div>';			

	echo '<br /><textarea id="wiadomosc" style="background-color: #b640d4; width:80%; height:200px;" name="wiadomosc"  placeholder="Wpisz wiadomość..."></textarea><br /><br /><button onclick="piramida4('.$id_djaa.')" name="ok9" class="button-two"><span>Wyślij</span></button>';			
}
	echo "</div>";					
						
						
							

?>

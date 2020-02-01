<?php
session_start();
$dbh = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($dbh, "inzynierka");

//$dbh = mysqli_connect("localhost", "id12204886_inzynierkawsb", "testowe12345");
//$db = mysqli_select_db($dbh, "id12204886_inzynierka");

$id = $_SESSION['id'];

if (isset($_GET['piramida']))
{
if ($_GET['piramida'] == 1){
$dzien = $_GET['dzien'];
$miesiac = $_GET['miesiac'];
$rok = $_GET['rok'];

$mysql1 = mysqli_query($dbh, "select * from `kalendarz` where `dj` = '$id' && `dzien` = '$dzien' && `miesiac` = '$miesiac' && `rok` = '$rok'");
$row1 = mysqli_fetch_array($mysql1);

if($row1 == NULL){
$mysql22 = "INSERT INTO `kalendarz` (`dj`, `dzien`, `miesiac`, `rok`) VALUES ('$id', '$dzien', '$miesiac', '$rok')";
mysqli_query($dbh, $mysql22);	
}
else {
$mysql11 = "DELETE FROM `kalendarz` WHERE `dj` = '$id' && `dzien` = '$dzien' && `miesiac` = '$miesiac' && `rok` = '$rok'";
mysqli_query($dbh, $mysql11);
}

echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php?konto=tak"> ';

}
}

?>



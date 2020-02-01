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
<link rel="Stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet/less" type="text/css" href="style.less" />
<LINK REL="SHORTCUT ICON" HREF="images/ikona.png">
</head>
<body>
<script src="main.js"></script>
<script src="less.js"></script>
<script src="ajax.js"></script>
<script src="jquery-3.4.1.js"></script>
<div class="kontener">
<a href="index.php"><div class="logo"></div></a>
<?php 


if (!isset($_SESSION['id']))
{
	$_SESSION['id'] = NULL;
}
// Jeśli jesteś zalogowany
if ($_SESSION['id'] != NULL)
{
	//include ('main.php');
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=main.php"> ';
}
else { 

if(isset($_POST['ok']) AND isset($_POST['username']) AND isset($_POST['password'])){

$login = $_POST['username'];
$pass = $_POST['password'];
$mysql = mysqli_fetch_array(mysqli_query($dbh, "SELECT `email`, `pass` FROM `players` WHERE `email` = '$login' AND `pass` = '$pass' LIMIT 1"));
if($mysql != NULL){
$mysql5 = mysqli_query($dbh, "select * from `players` where `email` = '$login'");
$row5 = mysqli_fetch_array($mysql5);
$_SESSION["login"] = $login;
$_SESSION['id'] = $row5["id"];
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=main.php"> ';


} else {

echo '<center><b><div class="cd-tabs">Wystąpił błąd podczas logowania!</center>';
echo '<center><b>Podałeś zły email lub hasło!</b></center>';
echo '<center><b><a href="index.php">Zaloguj ponownie</a></div></b></center>';
}
}
else {
if (!isset($_GET['rejestracja']))
{	
?>














    <div class="cd-tabs">
      <nav>
        <ul class="cd-tabs-navigation">
          <li><a href="#" data-content="login" class="selected">Logowanie</a></li>
          <li><a href="#" data-content="signup">Rejestracja</a></li>
        </ul>
      </nav>
      <ul class="cd-tabs-content">
        <li data-content="login" class="selected">
          <form name="login-form" action='' method='POST'>
            <div class="form-fild">
              <label for="username">Email</label>
              <input type="text" name="username">
            </div>
            <div class="form-fild">
              <label for="password">Hasło</label>
              <input type="password" name="password">
            </div>
            <span class="error"></span>
            <button name="ok" type="submit">Zaloguj</button>
          </form>
        </li>
        <li data-content="signup">
          <form name="signup-form" action='' method='POST'>
            <div class="form-fild">
              <label for="susername">Email</label>
              <input type="text" name="susername">
            </div>
            <div class="form-fild">
              <label for="spassword">Hasło</label>
              <input type="password" name="spassword">
            </div>
            <div class="form-fild">
              <label for="spassword2">Powtórz hasło</label>
              <input type="password" name="spassword2">
            </div>
            <div class="rodzaj_konta">Wybierz rodzaj konta:
<select name="profesja">
		<option>DJ</option>
                <option>KLIENT</option>
</select></div>
            
            <button name="ok2" type="submit">Zarejestruj</button>
          </form>
        </li>
      </ul>
    </div> <!-- end cd-tabs -->



<?php
}
}	
}


    	if(isset($_POST['ok2'])){
$password = $_POST['spassword']; 
$password_2 = $_POST['spassword2'];
$email = $_POST['susername'];
$profesja = $_POST['profesja'];
if($password != NULL AND $password_2 != NULL AND $email != NULL){
if($password !== $password_2){
exit("Podane hasła są różne!");
} 

$mysql1 = mysqli_query($dbh, "select * from `players` where `email` = '$email'");
$row1 = mysqli_fetch_array($mysql1);

if($row1 != NULL){
exit("Podany gracz już istnieje!");
}
$mysql = "INSERT INTO `players` (`pass`, `email`, `rodzaj`) VALUES ('$password', '$email', '$profesja')";


if (mysqli_query($dbh, $mysql)) {
    echo "Konto stworzone";
} else {
    echo "Error: " . $mysql . "<br>" . mysqli_error($dbh);
}
}
		else
			{
				echo 'podaj wszystko';
			}
} 










?>
</div>
</body>
</html>





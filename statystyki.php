<?php

$mysql11 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ'");
$dje = mysqli_num_rows($mysql11);
$mysql12 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'KLIENT'");
$klienci = mysqli_num_rows($mysql12);
$mysql13 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'dolnośląskie'");
$woj1 = mysqli_num_rows($mysql13);
$mysql14 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'kujawsko-pomorskie'");
$woj2 = mysqli_num_rows($mysql14);
$mysql15 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'lubelskie'");
$woj3 = mysqli_num_rows($mysql15);
$mysql16 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'lubuskie'");
$woj4 = mysqli_num_rows($mysql16);
$mysql17 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'łódzkie'");
$woj5 = mysqli_num_rows($mysql17);
$mysql18 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'małopolskie'");
$woj6 = mysqli_num_rows($mysql18);
$mysql19 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'mazowieckie'");
$woj7 = mysqli_num_rows($mysql19);
$mysql20 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'opolskie'");
$woj8 = mysqli_num_rows($mysql20);
$mysql21 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'podkarpackie'");
$woj9 = mysqli_num_rows($mysql21);
$mysql22 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'podlaskie'");
$woj10 = mysqli_num_rows($mysql22);
$mysql23 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'pomorskie'");
$woj11 = mysqli_num_rows($mysql23);
$mysql24 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'śląskie'");
$woj12 = mysqli_num_rows($mysql24);
$mysql25 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'świętokrzyskie'");
$woj13 = mysqli_num_rows($mysql25);
$mysql26 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'warmińsko-mazurskie'");
$woj14 = mysqli_num_rows($mysql26);
$mysql27 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'wielkopolskie'");
$woj15 = mysqli_num_rows($mysql27);
$mysql28 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `wojewodztwo` = 'zachodniopomorskie'");
$woj16 = mysqli_num_rows($mysql28);

$mysql31 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `pop` = '1'");
$gatunek1 = mysqli_num_rows($mysql31);
$mysql32 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `discopolo` = '1'");
$gatunek2 = mysqli_num_rows($mysql32);
$mysql33 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `elektroniczna` = '1'");
$gatunek3 = mysqli_num_rows($mysql33);
$mysql34 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `lata80` = '1'");
$gatunek4 = mysqli_num_rows($mysql34);
$mysql35 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `lata90` = '1'");
$gatunek5 = mysqli_num_rows($mysql35);
$mysql36 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `rock` = '1'");
$gatunek6 = mysqli_num_rows($mysql36);
$mysql37 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `hiphop` = '1'");
$gatunek7 = mysqli_num_rows($mysql37);
$mysql38 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `rb` = '1'");
$gatunek8 = mysqli_num_rows($mysql38);
$mysql39 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `jazz` = '1'");
$gatunek9 = mysqli_num_rows($mysql39);
$mysql40 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ' && `metal` = '1'");
$gatunek10 = mysqli_num_rows($mysql40);

	$mysql29 = mysqli_query($dbh, "select SUM(cennik) from `players` where `rodzaj` = 'DJ'");
	$row29 = mysqli_fetch_array($mysql29);
	$mysql30 = mysqli_query($dbh, "select * from `players` where `rodzaj` = 'DJ'");
	$cennik_liczba = mysqli_num_rows($mysql30);
	$suma_cennik = $row29[0];
	$srednia_cennik = round($suma_cennik / $cennik_liczba);
	
	$mysql34 = mysqli_query($dbh, "select SUM(min_h) from `players` where `rodzaj` = 'DJ'");
	$row34 = mysqli_fetch_array($mysql34);
	$suma_minimalna = $row34[0];	
	$srednia_minimalna = round($suma_minimalna / $cennik_liczba);
	
	$mysql35 = mysqli_query($dbh, "select SUM(max_h) from `players` where `rodzaj` = 'DJ'");
	$row35 = mysqli_fetch_array($mysql35);
	$suma_maksymalna = $row35[0];	
	$srednia_maksymalna = round($suma_maksymalna / $cennik_liczba);
	
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Visits'],

<?php


	echo "['DJe',".$dje."],";
	echo "['Klienci',".$klienci."],";
?>

        ]);

        var options = {
          title: 'Użytkownicy',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Visits'],

<?php


	echo "['dolnośląskie',".$woj1."],";
	echo "['kujawsko-pomorskie',".$woj2."],";
	echo "['lubelskie',".$woj3."],";		
	echo "['lubuskie',".$woj4."],";
	echo "['łódzkie',".$woj5."],";
	echo "['małopolskie',".$woj6."],";
	echo "['mazowieckie',".$woj7."],";
	echo "['opolskie',".$woj8."],";
	echo "['podkarpackie',".$woj9."],";
	echo "['podlaskie',".$woj10."],";
	echo "['pomorskie',".$woj11."],";
	echo "['śląskie',".$woj12."],";
	echo "['świętokrzyskie',".$woj13."],";
	echo "['warmińsko-mazurskie',".$woj14."],";
	echo "['wielkopolskie',".$woj15."],";
	echo "['zachodniopomorskie',".$woj16."],";													
?>

        ]);

        var options = {
          title: 'Województwa',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }
    </script>
            <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Visits'],

<?php


	echo "['Pop',".$gatunek1."],";
	echo "['Disco-Polo',".$gatunek2."],";
	echo "['Elektroniczna',".$gatunek3."],";
	echo "['Lata 80',".$gatunek4."],";
	echo "['Lata 90',".$gatunek5."],";
	echo "['Rock',".$gatunek6."],";
	echo "['Hip-Hop',".$gatunek7."],";
	echo "['R&B',".$gatunek8."],";
	echo "['Jazz',".$gatunek9."],";
	echo "['Metal',".$gatunek10."],";
			
												
?>

        ]);

        var options = {
          title: 'Gatunki',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d3'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 80%; height: 500px; margin: 0 auto;"></div>
  <div id="piechart_3d2" style="width: 80%; height: 500px; margin: 0 auto;"></div>
    <div id="piechart_3d3" style="width: 80%; height: 500px; margin: 0 auto;"></div>
  <?php
  echo "<br /><br /><font size='6px'>Średnia stawka za godzine wśród dji: ".$srednia_cennik."zł</font><br /><br />";
  echo "<br /><br /><font size='6px'>Średnia minimalna liczba godzin pracy dji: ".$srednia_minimalna."h</font><br /><br />";  
  echo "<br /><br /><font size='6px'>Średnia maksymalna liczba godzin pracy dji: ".$srednia_maksymalna."h</font><br /><br />";    
  ?>
  </body>
</html>
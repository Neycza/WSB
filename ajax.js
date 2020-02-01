var ajax = false;
if(window.XMLHttpRequest){
    ajax = new XMLHttpRequest();
} else if(window.ActiveXObject){
    ajax = new ActiveXObject("Microsoft.XMLHTTP");
}

function piramida(x, y, z){
   if(ajax){
        ajax.open("GET", "ajax.php?piramida=1&dzien="+x+"&miesiac="+y+"&rok="+z);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida").innerHTML = ajax.responseText;

                }
      
        }
    

        ajax.send(null);

    }


}

function piramida2(){
	var testtt = document.getElementById("mapa");
	   if(ajax){
        ajax.open("GET", "mapa.php?piramida2="+testtt.value);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida2").innerHTML = ajax.responseText;

                }
      
        }
    

        ajax.send(null);

    }
}

function piramida3(x){


	   if(ajax){
        ajax.open("GET", "wiadomosci.php?djj="+x);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida3").innerHTML = ajax.responseText;

                }
      
        }
    

        ajax.send(null);

    }

}

function piramida4(x){
	var wiadomosc = document.getElementById("wiadomosc");

	   if(ajax){
        ajax.open("GET", "wiadomosci.php?djj="+x+"&&wiadomosc="+wiadomosc.value);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida3").innerHTML = ajax.responseText;

                }
      
        }
    

        ajax.send(null);

    }

}




function piramida5(){
		var select = document.getElementById("slct");
		var select2 = document.getElementById("slct2");		

	var wiadomosc = document.getElementById("wiadomosc");

	   if(ajax){
        ajax.open("GET", "wyszukaj.php?select="+select.value+"&&select2="+select2.value);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida4").innerHTML = ajax.responseText;


                }
      
        }
    

        ajax.send(null);

    }

}

function piramida6(x){




	   if(ajax){
        ajax.open("GET", "wyszukaj.php?wybrany="+x);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida4").innerHTML = ajax.responseText;


                }
      
        }
    

        ajax.send(null);

    }

}

function piramida7(x){





	   if(ajax){
        ajax.open("GET", "personalizacja.php?personalizacja="+x);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida5").innerHTML = ajax.responseText;


                }
      
        }
    

        ajax.send(null);

    }

}

function piramida8(x, y, z, c, v, b, n, m, a, s){


var ok = document.getElementById(x);
var ok2 = document.getElementById(y);
if (ok2 == null) { ok2 = "cos"}
var ok3 = document.getElementById(z);
if (ok3 == null) { ok3 = "cos"}
var ok4 = document.getElementById(c);
if (ok4 == null) { ok4 = "cos"}
var ok5 = document.getElementById(v);
if (ok5 == null) { ok5 = "cos"}
var ok6 = document.getElementById(b);
if (ok6 == null) { ok6 = "cos"}
var ok7 = document.getElementById(n);
if (ok7 == null) { ok7 = "cos"}
var ok8 = document.getElementById(m);
if (ok8 == null) { ok8 = "cos"}
var ok9 = document.getElementById(a);
if (ok9 == null) { ok9 = "cos"}
var ok10 = document.getElementById(s);
if (ok10 == null) { ok10 = "cos"}


	   if(ajax){
        ajax.open("GET", "personalizacja.php?ok="+x+"&&tresc="+ok.value+"&&ok2="+y+"&&ok3="+ok3+"&&tresc2="+ok2.value+"&&tresc3="+ok3.value+"&&tresc4="+ok4.value+"&&tresc5="+ok5.value+"&&tresc6="+ok6.value+"&&tresc7="+ok7.value+"&&tresc8="+ok8.value+"&&tresc9="+ok9.value+"&&tresc10="+ok10.value+"&&ok4="+c+"&&ok5="+v+"&&ok6="+b+"&&ok7="+n+"&&ok8="+m+"&&ok9="+a+"&&ok10="+s);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida5").innerHTML = ajax.responseText;

                }
      
        }
    

        ajax.send(null);

    }

}

function piramida9(x, y, z, c, v, b, n, m, a, s){


var ok = document.getElementById(x).checked;
var ok2 = document.getElementById(y).checked;
if (ok2 == null) { ok2 = "cos"}
var ok3 = document.getElementById(z).checked;
if (ok3 == null) { ok3 = "cos"}
var ok4 = document.getElementById(c).checked;
if (ok4 == null) { ok4 = "cos"}
var ok5 = document.getElementById(v).checked;
if (ok5 == null) { ok5 = "cos"}
var ok6 = document.getElementById(b).checked;
if (ok6 == null) { ok6 = "cos"}
if (n != null)
{
var ok7 = document.getElementById(n).checked;
}
if (ok7 == null) { ok7 = "cos"}
if (m != null)
{
var ok8 = document.getElementById(m).checked;
}
if (ok8 == null) { ok8 = "cos"}
if (a != null)
{
var ok9 = document.getElementById(a).checked;
}
if (ok9 == null) { ok9 = "cos"}
if (s != null)
{
var ok10 = document.getElementById(s).checked;
}
if (ok10 == null) { ok10 = "cos"}




	   if(ajax){
        ajax.open("GET", "personalizacja.php?ok="+x+"&&tresc="+ok+"&&ok2="+y+"&&ok3="+z+"&&tresc2="+ok2+"&&tresc3="+ok3+"&&tresc4="+ok4+"&&tresc5="+ok5+"&&tresc6="+ok6+"&&tresc7="+ok7+"&&tresc8="+ok8+"&&tresc9="+ok9+"&&tresc10="+ok10+"&&ok4="+c+"&&ok5="+v+"&&ok6="+b+"&&ok7="+n+"&&ok8="+m+"&&ok9="+a+"&&ok10="+s);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida5").innerHTML = ajax.responseText;

                }
      
        }
    

        ajax.send(null);

    }

}

function piramida10(x){





	   if(ajax){
        ajax.open("GET", "wyszukaj.php?wiadomosc="+x);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida4").innerHTML = ajax.responseText;


                }
      
        }
    

        ajax.send(null);

    }

}

function piramida11(x){
	var wiadomosc = document.getElementById("wiadomosc");

	   if(ajax){
        ajax.open("GET", "wyszukaj.php?djj="+wiadomosc.value+"&&wiadomosc="+x);
        ajax.onreadystatechange = function(){
            if(ajax.readyState==4 && ajax.status==200){
                    document.getElementById("piramida4").innerHTML = ajax.responseText;

                }
      
        }
    

        ajax.send(null);

    }

}
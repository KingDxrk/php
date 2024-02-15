<html>
    <body>
        <h2>ESTRUCTURA DE CONTROL (IF)</h2>
    </body>
</html>

<?php
//CODIGO PHP
$a=35;
$b=30;
#IF SIMPLE*************************
if($a>$b)
{
    echo "El mayor es: ", $a, "<br>";
}
#IF ELSE****************************
echo "RESULTADO DEL IF ELSE <HR>";
if($a>=$b)
{
echo "El Mayor es A: ", $b, "<br>";
}
else
{
  echo "El mayor es B: ", $b, "<br>";
}
#IF ELSE IF******************************
$estacion="verano";
if($estacion == "invierno")
{
    echo "Invierno, del 21 de diciembre al 20 de marzo <br>";
}
else if($estacion == "primavera")
{
    echo "Primavera, del 21 de marzo al 20 de junio";
}
else if($estacion == "verano")
{
    echo "Verano, del 21 de junio al 20 de septiembre";
}
else if($estacion == "otoño")
{
    echo "otoño, del 21 de septiembre al 20 de diciembre";
}
?>
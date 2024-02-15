<html>
<body>

    <?php
//VERIFICAR OPERADORES
$x=5;
$y=3;
echo "Valores x, y: ", $x, " ", $y , "<br>";
$x+=$y; //EQUIVALE A: $x=$y+$x
echo "x: ", $x, "<br>";
$x-=$y;
echo "x: ", $x, "<br>"; //X VALE S
$a=$x++;
echo "a x: ", $a, " ", $x, "<br>";
$a=++$x;
echo "a x: ", $a, " ", $x, "<br>";
if($a==$x and $x%2==1)
{
    echo "CUMPLE CONDICION";
}
ECHO "ENCUENTRA EL MAXIMO: <br>";
echo max(2,3,12,698,7);
    ?>
</body>
</html>
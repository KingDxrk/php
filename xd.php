<html>
<body>

    <?php
//VERIFICAR OPERADORES
$x=5;
$y=3;
echo "Valores x, y: ", $x, " ", $y , "<br>";
$x+=$y; //equivale a $x=$y+$x
echo "x: ", $x, "<br>";
$x-=$y;
echo "x: ", $x, "<br>"; //x vale s
$a=$x++;
echo "a x: ", $a, " ", $x, "<br>";
    ?>
</body>

</html>
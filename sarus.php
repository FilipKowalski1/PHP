
<form action="" method="get">
    A<input type="text" name="a">
    B<input type="text" name="b">
    C<input type="text" name="c"><br>
    D<input type="text" name="d">
    E<input type="text" name="e">
    F<input type="text" name="f"><br>
    G<input type="text" name="g">
    H<input type="text" name="h">
    I<input type="text" name="i"><br>
<button name="wynik" type="submit" value="git"> xd</button>
</form>

<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f=$_GET['f'];
$g=$_GET['g'];
$h=$_GET['h'];
$i=$_GET['i'];

$wynik;
$wynik=($a*$e*$i)+($b*$f*$g)+($c+$d+$h)-(($c*$e*$g)+($a*$f*$h)+($b*$d*$i));
echo "Wynik: $wynik";
?>
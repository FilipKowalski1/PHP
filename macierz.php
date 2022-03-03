
<form action="" method="get">
    A<input type="text" name="a"><br>
    B<input type="text" name="b"><br>
    C<input type="text" name="c"><br>
    D<input type="text" name="d"><br>

<button name="wynik" type="submit" value="git"> xd</button>
</form>

<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];

$wynik;
$wynik=($a*$d)-($b*$c);
echo "Wynik: $wynik";
?>
<meta charset="UTF-8">
<form method="POST" action="">
Imie<input name="imie"></input><br>
Nazwisko<input name="nazwisko"></input><br>
Nr<input name="numer"></input><br>

<button type="submit" name="wyslij">Wyślij</button>
</form>


<?php
if (isset($_POST['wyslij'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $numer = $_POST['numer'];
 

    $imieliczba=substr($imie,$numer);
    $nazwiskoliczba=substr($nazwisko,$numer);

    echo $imieliczba ." ". $nazwiskoliczba;
}
?>
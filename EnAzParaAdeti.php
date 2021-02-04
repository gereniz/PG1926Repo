<!DOCTYPE html>
<html>
<body>

<form action = "" method="post">
	Para Miktari : <input type="text" name="paraMiktari">
	<input type = "submit" name="gonder" value="gonder">
</form>

<?php
$birkurus = 1;
$beskurus = 5;
$onKurus = 10;
$yirmibesKurus = 25;
$elliKurus = 50;
$birLira = 100;
$adet = 0;
$paraUstu = $_POST["paraMiktari"];


if ($paraUstu >= 100) {
    while ($paraUstu >= 100) {
        $paraUstu = $paraUstu-100;
        $adet = $adet +1;
    }
}
  
if ($paraUstu >= 50){
    while ($paraUstu >= 50){
        $paraUstu = $paraUstu-50;
        $adet = $adet +1;
    }
}
  
if ($paraUstu >= 25){
    while ($paraUstu >= 25){
        $paraUstu = $paraUstu-25;
        $adet = $adet +1;
    }
}
if ($paraUstu >= 10){
    while ($paraUstu >= 10){
        $paraUstu = $paraUstu-10;
        $adet = $adet +1;
    }
}
if ($paraUstu >= 5){
    while ($paraUstu >= 5){
        $paraUstu = $paraUstu-5;
        $adet = $adet +1;
    }
}
if ($paraUstu >= 1){
    while ($paraUstu >= 1){
        $paraUstu = $paraUstu-1;
        $adet = $adet +1;
    }
}
echo "En az verilecek para adeti : ".$adet;
?>
</body>
</html>




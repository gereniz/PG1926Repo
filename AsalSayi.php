
<!DOCTYPE html>
<html>
<body>

<form action = "" method="post">
	Sayı : <input type="text" name="degisken">
	<input type = "submit" name="gonder" value="gonder">
</form>

<?php

$degisken = $_POST["degisken"];
$deger=1;
for($i=2; $i < $degisken; $i++){
	if($degisken % $i == 0){
    	 $deger = $i;
         break;
    }
}
if($degisken<2){
	echo $degisken." asal sayı değildir";
}
elseif($deger == 1){
	echo $degisken." asal sayıdır";
}
else{
	echo $degisken." asal sayı değildir";
}

?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<form action = "" method="post">
	Sayı : <input type="text" name="degisken">
	<input type = "submit" name="gonder" value="gonder">
</form>

<?php

$degisken = $_POST["degisken"];
$deger = 0;
for($i=1; $i < $degisken; $i++){
	if($degisken % $i == 0){
    	 $deger = $deger + $i;
    }
}
if($degisken<1){
	echo $degisken." mükemmel sayı değildir";
}
elseif($deger == $degisken){
	echo $degisken." mükemmel sayıdır";
}
else{
	echo $degisken." mükemmel  değildir";
}

?>

</body>
</html>

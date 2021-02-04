<!DOCTYPE html>
<html>
<body>

<?php
 $saat =  date('H:i');
 if("06:00" < $saat and $saat < "10:00"){
 	echo "Günaydın";
 }
 elseif("10:00" < $saat and $saat < "17:00"){
 	echo "İyi Günler";
 }
 elseif("17:00" < $saat and $saat < "20:00"){
 	echo "İyi Akşamlar";
 }
 elseif("20:00" < $saat and $saat < "00:00"){
 	echo "İyi Geceler";
 }
 else{
 	echo "Esenlikler Dilerim";
 }
?> 

</body>
</html>


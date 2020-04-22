<?php
echo"Jarak antara kota A – Z 360 km. Jika
 ditempuh dengan sepeda motor berkecepatan
 90 km/jam maka lama perjalanan…";
$s = 360;
$v = 90;
$t = $s / $v;
$tmenit = $t * 60;
echo "<br>";
echo "Diketahui <br>";
echo "Jarak kota A-Z = $s Km <br>";
echo "Kecepatan Motor = $v Km/jam <br>";
echo "Waktu Tempuh = ? <br>";
echo "Ditanyakan : ... Menit <br>";
echo "Jawaban <br>";
echo "Waktu Tempuh (t) &ensp; = Jarak(s)/Kecepatan(v) <br>";
echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; = $s (km)/ $v (km/jam) <br>";
echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; = $t Jam * 60 = $tmenit menit<br>";
echo "Jadi waktu yang ditempuh sepeda motor tersebut adalah $tmenit menit"


?>

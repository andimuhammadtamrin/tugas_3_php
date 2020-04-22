<?php
  echo"Defan menabung di Bank Rp. 150.000. Bunga 1 tahunnya adalah 12,5 %. Maka
  jumlah tabungan Defan setelah 1 tahun adalah…<br>";
  $Mo = 150000;
  $b = 12.5;
  $B = $b/100 * 150000;
  $tabungan = $Mo + $B;
  echo "Tabungan Awal = Rp $Mo <br>";
  echo "Bunga Setahun = $b % <br>";
  echo "Total Tabungan Setahun = ? <br>";
  echo "Jawaban : Rp...<br>";
  echo "Bunga Setahun = $b % = $b/100 * 150000 = Rp.$B<br>";
  echo "Total Tabungan Setahun = Rp. $Mo + Rp. $B = Rp. $tabungan <br>";
  echo "Jadi jumlah tabungan Defan selama 1 tahun adalah Rp. $tabungan";

?>

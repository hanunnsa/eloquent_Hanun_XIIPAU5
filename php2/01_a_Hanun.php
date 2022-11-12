<?php
$nama = "Hanun";
$akhir = "Shabrina";

echo $nama ." ". $akhir; 
echo"<hr>";

$a=5;
$b=2;

echo "$a + $b = " . ($a+$b). "<br>";
echo "$a - $b = " . ($a-$b). "<br>";
echo "$a * $b = " . ($a*$b). "<br>";
echo "$a / $b = " . ($a/$b). "<br>";
echo "$a % $b = " . ($a%$b). "<br>";
echo "$a <sup>$b</sup>  = " . pow($a,$b). "<br>";
echo "&#8730;$a = " . sqrt($a). "<br>";
echo "&radic;$a = " . sqrt($a). "<br>";

echo"<hr>";
echo "Baris\nbaru <br>"; # ini hanya bekerja di console, tidak di HTML
echo 'Baris\nbaru <br>'; # ditampilkan apa adanya, \n tidak direplace dg sesuatu

echo "Halo\rDunia <br>"; # Halo Dunia
echo 'Halo\rDunia <br>'; # Halo\rDunia

echo "<pre>Halo\tDunia!</pre>"; # Halo	Dunia!
echo '<pre>Halo\tDunia!</pre>'; # Halo\tDunia!

echo "Katakanlah \"Tidak pada narkoba!\" <br>"; # Katakanlah "Tidak pada narkoba!"
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; # Katakanlah 'Tidak pada narkoba!'

echo"<hr>";
echo strlen("Katakanlah Tidak pada narkoba!"); //string lenght = panjang karakter


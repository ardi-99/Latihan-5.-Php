<form action="" method="get">
Nilai Ke-n <input type="number" name="n" placeholder="Max 50" required>
<input type="submit" value="submit">
</form>
<hr>
<h2>Hasil Deret Bilangan Fibonacci</h2>

<?php

$deret[1] = 4;
$deret[2] = 7;

$n = isset($_GET['n'])?$_GET['n']:'1';

if ($n >= 3 and $n <= 50)
{
 $hasil = "$deret[1], $deret[2]";
 for($i=3;$i<=$n;$i++)
 {
  $x=$i-1;
  $y=$i-2;

  $deret[$i] = $deret[$x] + $deret[$y];
  $hasil .= ", $deret[$i]";

 }
 echo "<b>Deret Bilangan Fibonacci adalah 1 - $n</b>";
 echo "<div style='color:red'>Output: $hasil</div>";
} else {
 echo "<b style='color:red'>Silakan masukkan nilai n diantara 3-50<b>";
}
?>

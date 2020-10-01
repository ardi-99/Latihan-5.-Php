<form  method="POST" action="">

Masukkan Nilai awal  <input type="text" name="a" value="<?=isset($_POST['a']) ? $_POST['a'] : ''?>"><br><br>
Masukkan Nilai beda  <input type="text" name="b" value="<?=isset($_POST['b']) ? $_POST['b'] : ''?>"><br><br>
Masukan Suku yang di cari  <input type="text" name="suku" value="<?=isset($_POST['suku']) ? $_POST['suku'] : ''?>"><br><br>

<input type="submit" name="submit" value="output">

</form>

<hr>

<h3>Hasil aritmatika</h3>

<?php
if (isset($_POST['submit'])){
$a = $_POST['a'];
$b = $_POST['b'];
$suku = $_POST['suku'];
echo "Nilai Awal = ". $a;
echo "<br> Nilai Beda = ". $b;
echo "<br> Nilai dari aritmatika setelah diinput : " ;
for ($i=1 ; $i<=$suku; $i++){
    $output = $a + ($b*($i-1));
    echo "<br>".$output;
}
$nilaisuku = $a + ($suku-1) * $b;
echo "<br> <br> Nilai suku ke- ". $suku;
echo "<br>".$nilaisuku;
}
?>

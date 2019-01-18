<!DOCTYPE html>
<html>
<form method="POST">
<body>
	<center>
	<table>
		<h2>Menghitung Berat Badan</h2>
		<tr>
			<td>Tinggi</td>
			<td>:</td>
			<td><input type="text" name="tinggi"></td><br>
		</tr>
		<tr>
			<td>Berat</td>
			<td>:</td>
			<td><input type="text" name="berat"></td><br>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis" value="Laki-laki">Laki-laki
				<input type="radio" name="jenis" value="perempuan">Perempuan</td><br>
			</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</center>

</body>
</form>
</html>
<?php  
class data{
	

	public function hitung($berat,$tinggi,$jk){
	
		echo $this->bmi= $berat/(($tinggi/100)*($tinggi/100));
		
		if ($jk=='Laki-laki') {
			if ($this->bmi<17) {
				echo "Underweight";
			}elseif ($this->bmi>17 && $this->bmi<25) {
				echo "Normal";
			}elseif ($this->bmi>23 && $this->bmi<27) {
				echo "Kegemukan";
			}elseif($this->bmi>27){
				echo "obesitas";
			}
		}
		if ($jk=='perempuan') {
			if ($this->bmi<18) {
				echo "Underweight";
			}elseif ($this->bmi>18 && $this->bmi<25) {
				echo "Normal";
			}elseif ($this->bmi>25 && $this->bmi<27) {
				echo "Kegemukan";
			}elseif($this->bmi>27){
				echo "obesitas";
			}
		}
	}

	
}

$dat = new data();
if (isset($_POST['submit'])) {
	$tinggi=$_POST['tinggi'];
	$berat=$_POST['berat'];
	$jk=$_POST['jenis'];

	if ($jk=='Laki-laki') {
		
		$dat->hitung($tinggi,$berat,$jk);
	}elseif ($jk=='perempuan') {
	
		$dat->hitung($tinggi,$berat,$jk);
	}

}




?>
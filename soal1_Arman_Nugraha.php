<!--*
	* @Author Arman Nugraha
	* JWD
	* Since 20 November 2019
	* Tugas Simulasi Uji Kompetensi
	* Soal 1
	* buat app dan flowchart untuk mengurutkan suatu deret bilangan dengan ketentuan :
		- bilangan ganjil diurutkan secara desc dari kiri ke kanan
		- bilangan genap di urutkan secara asc dari kiri ke kanan
		- hitung jumlah bilangan ganjil dan genap
		- history tersimpan dalam file (data lama tidak di tindih)
		contoh :
		input : 32415698724
		output : 97531224468
		ganjil : 5
		genap : 6
	*-->

<!DOCTYPE html>
<html>
	<head>
		<title>Simulasi Uji Kompetensi Soal 1</title>
	</head>
	<body>

		<?php

			$get_number = 32415698724;

			if (!empty($_GET["number"])) {
				$get_number = $_GET["number"];
			}
		?>

		<form>
			Input Bilangan : <input type="number" name="number" required value="<?php echo $get_number; ?>"> <br>
			<input type="submit"> <br>
		</form>

		<?php

			if (!empty($_GET["number"])) {

				$get_number = $_GET["number"];
				$array  = array_map('intval', str_split($get_number));

				$arr_odd = [];
				$arr_even = [];

				$count_array = count($array);

				for ($i=0; $i < $count_array; $i++) {

					if ($array[$i]%2){
						$arr_odd[] = $array[$i];
				    }else{
				    	$arr_even[] = $array[$i];
				    }

				}

				// sort to ganjil
				rsort($arr_odd);
				// sort to genap
				sort($arr_even);

				$myFile = "generate_bilangan.txt";

				$create = fopen($myFile, 'a') or die("can't open file");
				$stringData = "Input : " . $get_number . "<br> Output : " . implode(",", $arr_odd) . implode(",", $arr_even) . "<br> Ganjil : " . count($arr_odd) . " <br> Genap : " . count($arr_even);
				fwrite($create, $stringData);

				$read = fopen($myFile, "r");
				echo fread($read, filesize($myFile));

				fclose($create);

			}

		?>

	</body>
</html>
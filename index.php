<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/site.webmanifest">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
        if ($bil1 == "" && $bil2 == "") {
            $bil1 = 0;
            $bil2 = 0;
        } else if ($bil1 == "" || $bil2 == "") {
            if ($bil1 == "") {
                $bil1 = 0;
            } else if ($bil2 == "") {
                $bil2 = 0;
            }
        }
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;
            default:
                $hasil = "ERROR";
            break;
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama" id="input1aja">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil" id="hasil-proses">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
        <button type="button" id="ambil-datanya" class="tombol-ulang">Ambil hasil</button>			
	</div>
    <script src="script.js"></script>
</body>
</html>
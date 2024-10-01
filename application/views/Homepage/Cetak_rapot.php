<!DOCTYPE html>
<html>
<head>
	<title>Cetak Rapot</title>

</head>
<body>
	<style type="text/css">
		.judul{
			font-size: 18px;
			font-weight: bold;
			text-align: center;
		}
		.sub_judul{
			font-size: 18px;
			font-weight: bold;
			text-align: center;
		}

	</style>
	<style>
		.row {
			display: flex;
		}
		.col {
			flex: 1;
			padding: 10px;
			border: 1px solid #ccc;
		}
	</style>
	<p class="judul">Laporan Hasil Belajar</p>
	<p class="sub_judul">(Rapor)</p>
	<div class="row">
		<div class="col-md-6">
			<?php
			$no = 0;
			foreach ($data_siswa->result_array() as $row) :

				$no++;
				$nis           = $row['nis'];
				$nama_siswa = $row['nama_siswa'];
				$kelas = $row['kelas'];
				?>
				<table class="row" border="0">
					<tr>
						<td>NIS</td>
						<td>:</td>
						<td><?php echo $nis;?></td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><?php echo $nama_siswa;?></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td><?php echo $kelas;?></td>
					</tr>
				</table>
			<?php endforeach;?>
		</div>
		<div class="col-md-6">
			<table style="padding-left: 320px;">
				<tr>
					<td>Tahun Ajaran</td>
					<td>:</td>
					<td>2023 / 2024</td>
				</tr>
				<?php
				$no = 0;
				foreach ($data_walas->result_array() as $row) :

					$no++;
					$nama_guru           = $row['nama_guru'];
					
					?>
					<tr>
						<td>Wali Kelas</td>
						<td>:</td>
						<td><?php echo $nama_guru;?></td>
					</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>

	<hr>
	<p style="font-weight: bold;">Nilai Mata Pelajaran</p>

	<table border="1" width="100%">
		<tr style="text-align: center; font-weight: bold;">
			<td width="50%">Mata Pelajaran</td>
			<td width="20%">Nilai</td>
			<td>Predikat</td>
			<td>Deskripsi</td>
		</tr>
		<?php
		$no = 0;
		foreach ($data_nilai_mapel->result_array() as $row) :

			$no++;
			$mapel           = $row['nis'];
			$nilai_pengetahuan = $row['nilai_pengetahuan'];
			$nilai_keterampilan = $row['nilai_keterampilan'];
			$nilai_pts = $row['nilai_pts'];
			$nilai_pas = $row['nilai_pas'];
			$mapel = $row['mapel'];


			$bobot_keterampilan = 20; 
			$bobot_pengetahuan = 20;  
			$bobot_pts = 30;          
			$bobot_pas = 30;         

			$nilai_akhir = ($nilai_keterampilan * $bobot_keterampilan / 100) +
			($nilai_pengetahuan * $bobot_pengetahuan / 100) +
			($nilai_pts * $bobot_pts / 100) +
			($nilai_pas * $bobot_pas / 100);

			if ($nilai_akhir > 90) {
				$predikat = "A";
				$deskripsi_hasil = "Baik Sekali";
			}elseif ($nilai_akhir >= 80) {
				$predikat = "B";
				$deskripsi_hasil = "Baik";
			}elseif ($nilai_akhir >= 75) {
				$predikat = "C";
				$deskripsi_hasil = "Cukup";
			}else{
				$predikat = "D";
				$deskripsi_hasil = "Kurang";
			}

			?>
			<tr>
				<td><?php echo $mapel;?></td>
				<td><?php echo $nilai_akhir;?></td>
				<td><?php echo $predikat;?></td>
				<td><?php echo $deskripsi_hasil;?></td>
			</tr>
		<?php endforeach;?>
	</table>
	<hr>
	<p style="font-weight: bold;">Nilai Sosial</p>
	<table border="1" width="100%">
		<tr style="text-align: center; font-weight: bold;">

			<td>Predikat</td>
			<td>Deskripsi</td>
		</tr>
		<?php
		$no = 0;
		foreach ($data_nilai_sosial->result_array() as $row) :

			$no++;

			$predikat_nilai = $row['predikat'];
			$deskripsi_nilai_sosial = $row['deskripsi'];

			?>
			<tr>

				<td><?php echo $predikat_nilai;?></td>
				<td><?php echo $deskripsi_nilai_sosial;?></td>
			</tr>
		<?php endforeach;?>
	</table>

	<p style="font-weight: bold;">Nilai Spiritual</p>
	<table border="1" width="100%">
		<tr style="text-align: center; font-weight: bold;">

			<td>Predikat</td>
			<td>Deskripsi</td>
		</tr>
		<?php
		$no = 0;
		foreach ($data_nilai_spiritual->result_array() as $row) :

			$no++;

			$predikat_nilai_spiritual = $row['predikat'];
			$deskripsi_nilai_spritual = $row['deskripsi'];

			?>
			<tr>

				<td><?php echo $predikat_nilai_spiritual;?></td>
				<td><?php echo $deskripsi_nilai_spritual;?></td>
			</tr>
		<?php endforeach;?>
	</table>

	<p style="font-weight: bold;">Data Kehadiran</p>
	<?php
	$no = 0;
	foreach ($data_kehadiran->result_array() as $row) :

		$no++;

		$sakit = $row['sakit'];
		$izin = $row['izin'];
		$alpa = $row['alpa'];

		?>
		<table border="0" width="30%">
			<tr>
				<td>Sakit</td>
				<td>:</td>
				<td><?php echo $sakit;?></td>
			</tr>
			<tr>
				<td>Izin</td>
				<td>:</td>
				<td><?php echo $izin;?></td>
			</tr>
			<tr>
				<td>Alpa</td>
				<td>:</td>
				<td><?php echo $alpa;?></td>
			</tr>
		</table>
	<?php endforeach;?>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
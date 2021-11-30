<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

<body>
	<?php
$nopesan =  $_POST['nopesan'];
$time = $_POST['currentTime'];
$nama=$_POST['nama'];
$jeniskamar=$_POST['jenis kamar'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$biaya=$_POST['biaya'];
	?>   
	<div class="main mx-4">
	<h2 class="text-center pt-5" style="font-weight: bold;">Konfirmasi Pemesanan Kamar Hotel</h2>
    <hr>
		<div class="container mt-3 col-4">
			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="font-weight: bold;">No. Pemesanan</td>
						<td><input type="text" id="nopesan" style="border: none;"value="<?php echo $nopesan ?>" disabled></td>
      				</tr>
					<tr>
						<td style="font-weight: bold;">Waktu Pemesanan</td>
						<td><input type="text" id="currentTime" style="border: none;"value="<?php echo $nama ?>" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Nama Pemesan</td>
						<td><input type="text" id="nama" style="border: none;" value="<?php echo $nama ?>"disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Jenis Kamar</td>
						<td><input type="text" id="jenis kamar" style="border: none;"value="<?php echo $jeniskamar ?>" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check In</td>
						<td><input type="text" name="checkin" id="checkin" style="border: none;" value ="<?php  echo $checkin ?>"disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check Out</td>
						<td><input type="text" name="checkout" id="checkout" style="border: none;"value ="<?php  echo $checkout ?>" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Biaya</td>
						<td><input type="text" name="biaya" id="biaya" style="border: none" value="<?php echo $biaya?>" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Status Pemesanan</td>
						<td> Terkonfirmasi</td>
					</tr>
				</tbody>
			</table>
</form>
		</div>
<?= $this->endSection('content'); ?>
</body>

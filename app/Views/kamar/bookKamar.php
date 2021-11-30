<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  
  function getWaktu(){
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  document.getElementById("currentTime").value = date +" " + time;
  }
  function noPemesanan(){
    document.getElementById("nopesan").value = Math.floor(Math.random() * 100);
  }
  function addLoadEvent(func) { 
	var oldonload = window.onload; 
	if (typeof window.onload != 'function') { 
		window.onload = func; 
	} else { 
		window.onload = function() { 
			if (oldonload) { 
				oldonload(); 
			} 
			func(); 
		} 
	} 
} 
addLoadEvent(getWaktu); 
addLoadEvent(noPemesanan);

</script>
<body>
	<?php
$date1 = strtotime($_POST['checkin']);
$date2 = strtotime($_POST['checkout']);
 $checkin = date('Y/m/d',strtotime($_POST['checkin'])); 
$checkout = date('Y/m/d',strtotime($_POST['checkout'])); 
 $diff = abs(($date2) - ($date1));;
 $years = floor($diff / (365*60*60*24));
 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	?>   
	<div class="main mx-4">
	<h2 class="text-center pt-5" style="font-weight: bold;">Konfirmasi Pemesanan Kamar Hotel</h2>
    <hr>
		<div class="container mt-3 col-4">
		<form action="/ListKamar/bukti/<?= $kamar['id_kamar']; ?>" method="post">  
			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="font-weight: bold;">No. Pemesanan</td>
						<td><input type="text" name="nopesan" id="nopesan" style="border: none;"  class="form-control" disabled></td>
      				</tr>
					<tr>
						<td style="font-weight: bold;">Waktu Pemesanan</td>
						<td><input type="text" name="currentTime" id="currentTime" style="border: none;"  class="form-control" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Nama Pemesan</td>
						<td><input type="text" name="nama" id="nama" style="border: none;" class="form-control" value="<?php echo (session()->get('first_name'))."  ".(session()->get('last_name'))?>"disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Jenis Kamar</td>
						<td><input type="text" name="jenis kamar" id="jenis kamar" style="border: none;" class="form-control" value="<?php echo $kamar['jenis_kamar']; ?>" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check In</td>
						<td><input type="text" name="checkin" id="checkin" style="border: none;"  class="form-control" value ="<?php  echo $checkin ?>"disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check Out</td>
						<td><input type="text" name="checkout" id="checkout" style="border: none;" class="form-control" value ="<?php  echo $checkout ?>" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Biaya</td>
						<td><input type="text" name="biaya" id="biaya" style="border: none"  class="form-control" value="<?php echo $days*$kamar['harga']?>" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Status Pemesanan</td>
						<td>Menunggu Konfirmasi</td>
					</tr>
				</tbody>
			</table>
			<center><input type="submit" value="Konfirmasi" class="btn btn-success mx-2"></a></center><br><br>
		</form>
</div>

<?= $this->endSection('content'); ?>
</body>

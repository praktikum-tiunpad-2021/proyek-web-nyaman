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
</script>
<body>
	<?php
$date1 = strtotime($_POST['checkin']);
$date2 = strtotime($_POST['checkout']);
 $checkin = date('Y/m/d',strtotime($_POST['checkin'])); 
$checkout = date('Y/m/d',strtotime($_POST['checkout'])); 
 $diff = ($date2) - ($date1);;
 $years = floor($diff / (365*60*60*24));
 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	?>   
	<div class="main mx-4">
	<h2 class="text-center pt-5" style="font-weight: bold;">Konfirmasi Pemesanan Kamar</h2>
    <hr>
		<div class="container mt-3 col-4">
		<form action="/ReservasiKamar/simpan/<?php echo session()->get('username')?>" method="post">  
			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="font-weight: bold;">Pemesanan dilakukan pada</td>
						<td><input type="text" name="currentTime" id="currentTime" style="border: none;" readonly></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Nama Pemesan</td>
						<td> <input type="text" name="namapemesan" style="border: none;" value = "<?php echo (session()->get('first_name'))."  ".(session()->get('last_name')) ?>" readonly></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Jenis Kamar</td>
						<td><input type="text" name="jenis kamar" id="jenis kamar" style="border: none;" value="<?php echo $kamar['jenis_kamar']; ?>" readonly></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check In</td>
						<td><input type="text" name="checkin" id="checkin" style="border: none;"  value ="<?php  echo $checkin ?>"readonly></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check Out</td>
						<td><input type="text" name="checkout" id="checkout" style="border: none;" value ="<?php  echo $checkout ?>" readonly></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Biaya</td>
						<td><input type="text" name="biaya" id="biaya" style="border: none"  value="<?php echo $days*$kamar['harga']?>" readonly></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Status</td>
						<td style="color: red; font-weight: bold;">Menunggu Konfirmasi</td>
					</tr>
				</tbody>
			</table>
			<center><button type="submit" class="btn btn-success mx-2">Konfirmasi</button></center>
			<!-- <center><a href="/buktiBayar/<?= $kamar['id_kamar']; ?>" class="btn btn-success mx-2">Konfirmasi</a></center><br> -->
		</div>

<br><br><br><br>

<?= $this->endSection('content'); ?>
</body>

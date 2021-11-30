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
	<div class="main mx-4">
	<h2 class="text-center pt-5" style="font-weight: bold;">Konfirmasi Pemesanan Kamar Hotel</h2>
    <hr>
		<div class="container mt-3 col-4">
			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="font-weight: bold;">No. Pemesanan</td>
						<td><input type="text" id="nopesan" style="border: none;" disabled></td>
      				</tr>
					<tr>
						<td style="font-weight: bold;">Waktu Pemesanan</td>
						<td><input type="text" id="currentTime" style="border: none;" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Nama Pemesan</td>
						<td><?php echo (session()->get('first_name'))."  ".(session()->get('last_name'))?></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Jenis Kamar</td>
						<td><?php echo $kamar['jenis_kamar']; ?></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check In</td>
						<td><input type="text" name="checkin" id="checkin" style="border: none;" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Check Out</td>
						<td><input type="text" name="checkout" id="checkout" style="border: none;" disabled></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Status Pemesanan</td>
						<td>Menunggu Konfirmasi</td>
					</tr>
				</tbody>
			</table>
			<center><a href="/buktiBayar/<?= $kamar['id_kamar']; ?>" class="btn btn-success mx-2">Konfirmasi</a></center><br><br>
		</div>



<?= $this->endSection('content'); ?>
</body>

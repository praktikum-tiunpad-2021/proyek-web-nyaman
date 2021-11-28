<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>
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
    <nav class="pt-4">
<div class="col-8">
<p>No Pemesanan:<input type="text" id="nopesan" disabled> </p>
<p>Waktu : <input type="text" id="currentTime" disabled>  </p>
<p>Nama:<?php echo (session()->get('first_name'))."  ".(session()->get('last_name'))?>
<p>Jenis Kamar: <?php echo $kamar['jenis_kamar']; ?></p>
<p>Checkin :</p>
<p>CheckOut:</p>
<p>Status : Menunggu</p>
<a href="/buktiBayar/<?= $kamar['id_kamar']; ?>" class="btn btn-success mx-2">Konfirmasi</a>
<?= $this->endSection('content'); ?>
</body>

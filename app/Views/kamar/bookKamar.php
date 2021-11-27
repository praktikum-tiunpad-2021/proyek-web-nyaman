<?= $this->extend('/base'); ?>
<?= $this->section('content'); ?>

<div class="main mx-4">
    <nav class="pt-4">

<div class="col-8">
<h2> <?php echo $kamar['jenis_kamar']; ?></h2>
<?= $this->endSection('content'); ?>
<script>
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  document.getElementById("currentTime").value = time;
</script>
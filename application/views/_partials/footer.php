<?php 
	$this->config->load('fm_config',TRUE);
	$versi = $this->config->item('version','fm_config');
 ?>
<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
	  <b>Version</b> <?php echo $versi; ?>
	</div>
	<strong class="color-change-4x">Copyright &copy; <?php echo date("Y"); ?> <a href="https://topyk27.github.io/"><?php echo "Taufik Dwi Wahyu Putra"; ?> </a></strong>
</footer>
<?php
	include "Barcode39.php";

	$kodebar = $_GET['kode_barang'];

	$objeck = new Barcode39($kodebar);
	$objeck->draw();

?>
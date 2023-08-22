<?php
date_default_timezone_set('Asia/Jakarta');

$kon = mysqli_connect('localhost', 'root', '', 'bid2_pkl');

if (mysqli_connect_errno()) {
	printf('Koneksi ke database gagal. : ' . mysqli_connect_error());
}

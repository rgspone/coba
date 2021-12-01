<?php

	$server		 = "localhost";
	$user		 = "root";
	$password 	 = "";
	$db			 = "mhs_rogas";
	
	$koneksi = mysqli_connect($server, $user, $password, $db);

	if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
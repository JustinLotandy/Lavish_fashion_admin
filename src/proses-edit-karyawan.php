<?php
include 'koneksi.php';

if (isset($_POST['ubah'])) {
	//tangkap data dari form edit anggota

	$ambil_id_karyawan = $_POST['id_karyawan'];
	$ambil_kode_karyawan = $_POST['kode_karyawan'];
	$ambil_username_karyawan = $_POST['username_karyawan'];
	$ambil_nama_karyawan = $_POST['nama_karyawan'];
	$ambil_email_karyawan = $_POST['email_karyawan'];

	//mengupdate data pada tabel anggota
	$query = mysqli_query($koneksi, "UPDATE karyawan
								 SET 
								 	kode_karyawan 		= '$ambil_kode_karyawan',									
								 	username_karyawan 		= '$ambil_username_karyawan',
								 	nama_karyawan 		= '$ambil_nama_karyawan',
									email_karyawan 	= '$ambil_email_karyawan'
								WHERE 
									id_karyawan 		= '$ambil_id_karyawan'");

	header("location:lihat-karyawan.php");
}
?>
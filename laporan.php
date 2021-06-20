<?php
include 'koneksi/db.php';
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$tahun = $_POST['tahun'];
$id = $_POST['id'];

$html = '<!DOCTYPE html>
			<html lang="en">
			<head>
			    <meta charset="utf-8">
			    <title>Laporan Agent</title>
			</head>
			<body>
			    <section>
			        <h1>Laporan Terjual</h1>
			        <table border="1" cellpadding="10" cellspacing="0">
			            <thead>
			                <tr>
			                	<th>No</th>
			                    <th>Tanggal Terjual</th>
			                    <th>Judul Property</th>
			                    <th>Alamat</th>
			                    <th>Pemilik</th>
			                    <th>Bukti Pembayaran</th>
			                    <th>Harga</th>
			                </tr>
			            </thead>
			            <tbody>';
			            	$no = 1;
			            	$laporansql = "
			            		SELECT * FROM tb_produk
			            		INNER JOIN tb_user
			            		ON tb_produk.id_pemilik = tb_user.id 
			            		WHERE id_agen = '$id' AND status_agen = '2' AND tanggal LIKE '$tahun%'";
			            	$laporan = mysqli_query($conn, $laporansql);
			            	while ($ceklaporan = mysqli_fetch_array($laporan)) 
			            	{
			            	$html .='
			                <tr>
			                    <td>'.$no++.'</td>
			                    <th>'.$ceklaporan['tanggal'].'</th>
			                    <td>'.$ceklaporan['judul'].'</td>
			                    <td>'.$ceklaporan['lokasi'].'</td>
			                    <td>'.$ceklaporan['nama'].'</td>
			                    <td><img src="assets/img/upload/bukti/'.$ceklaporan['buktipembayaran'].'" style="width:100%;"></td>
			                    <td>Rp. '.$ceklaporan['harga'].'</td>
			                </tr>';
			            	}
			            	$totallaporansql = "
			            		SELECT SUM(harga) AS total_laporan 
			            		FROM tb_produk
			            		WHERE id_agen = '$id' AND status_agen = '2' AND tanggal LIKE '$tahun%'";
			            	$totallaporan = mysqli_query($conn, $totallaporansql);
			            	$datatotal = mysqli_fetch_array($totallaporan);
			             	$html .='
			             	<tr>
			             		<td colspan="6">Jumlah Profit</td>
			             		<td>Rp. '.$datatotal['total_laporan'].'</td>
			             	</tr>
			            </tbody>
			        </table>
			    </section>
			</body>
			</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>

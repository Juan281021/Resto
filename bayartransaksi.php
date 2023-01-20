<?php
	include 'config/config.php';
	if (@$_GET[bayar]=='bayar')
	{
		$total 			= @$_GET[total];
		$bayar 			= @$_GET[bayar1];
		$kembali 		= @$_GET[kembali];

		$kode			= @$_GET[notransaksi];
		$q_pesanan		= $koneksi->query("SELECT * from transaksi a inner join menu b on a.id_menu=b.id_menu where no_transaksi = $kode");

		$bayarna		= $koneksi->query("UPDATE transaksi set ket_bayar = 1 where no_transaksi = $kode");
	}
?>
<body onload="window.print();">
<table border="0" width="80%" align="center">
	<tr>
		<td width="10%">
			<a href="index.php"><img class="img img-rounded img-responsive" width="100px" src="assets/img/logo3.png"></a>
		</td>
		<td>
			<font align='center' color="blue"><h1>Restoran Sederhana Junjun Junaedin</h1></font>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			Tasikmalaya, _______2019<br><br>
			Kepada Yth : Konsumen<br>
			Pembayaran No Transaksi : <?php echo"$kode";?>
		</td>
	</tr>
</table>
<br><br>
<table border="1" width="80%" align="center">
	<tr>
		<th>NO</th>
		<th>Menu</th>
		<th>QTY</th>
		<th>Harga Satuan</th>
		<th>Jumlah</th>
	</tr>
		<?php  
			$no=1;
			while ($row=$q_pesanan->fetch_array())
			{
				@$jumlah = $row[harga_satuan] * $row[jumlah];
		?>
	<tr>
		<td><?php echo"$no";?></td>
		<td><?php echo"$row[nama_menu]";?></td>
		<td><?php echo"$row[jumlah]";?></td>
		<td><?php echo"$row[harga_satuan]";?></td>
		<td><?php echo"$jumlah";?></td>
	</tr>
		<?php
			$no++;
			@$total = $total;
			}
		?>
	<tr>
		<td colspan="4"><h3>Total</h3></td>
		<td colspan="4"><font color="red"><h3>Rp.<?php echo"".number_format($total)."";?></h3></font></td>
	</tr>
	<tr>
		<td colspan="5" align="right">
			Bayar : <?php echo"$bayar";?>
		</td>
	</tr>
	<tr>
		<td colspan="5" align="right">
			Kembali : <?php echo"$kembali";?>
		</td>
	</tr>
</table>
<br>
<table>
	<tr>
		<td>
			Terima Kasih Telah Berkunjung
		</td>
	</tr>
	<tr>
		<td>
			Kasir
		</td>
	</tr>
</table>
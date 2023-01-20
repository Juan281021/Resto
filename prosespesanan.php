<?php
	include 'config/config.php';

	if ($_POST[pesan]=='pesan')
	{
		$tahun		= date("Y");
		$bulan		= date("m");
		$hari		= date("d");

		$tgl		= "$tahun-$bulan-$hari"; //tanggal transaksi

		$trx		= $_POST[kdtr];			// No transaksi

		$pesanan	= $koneksi->query("select * from pesanan");
		while ($ps = $pesanan->fetch_array())
		{
			$menu		= $ps[id_menu];
			$pelanggan	= $ps[id_pelanggan];
			$jumlah		= $ps[jumlah];
			$user		= $ps[id_user];
			$meja		= $ps[id_meja];

			$q_harga	= $koneksi->query("select harga from menu where id_menu=$menu");
			$hr 		= $q_harga->fetch_assoc();
			$harga 		= $hr[harga];

			$simpan		= $koneksi->query("insert into transaksi set
											tgl_transaksi	= '$tgl',
											id_menu			= '$menu',
											jumlah			= '$jumlah',
											id_pelanggan	= '$pelanggan',
											no_transaksi	= '$trx',
											harga_satuan	= '$harga'
										");
			//cek stok yang ada di dapur
			$q_stok			= $koneksi->query("select stok from menu where id_menu=$menu");

			$st 			= $q_stok->fetch_assoc();
			$stokawal 		= $st[stok];
			$stokkurang 	= $jumlah;
			$stokakhir 		= $stokawal - $stokkurang;

			$updatestok		= $koneksi->query("update menu set stok = $stokakhir where id_menu = $menu");
		}
			$hapuspesanan 	= $koneksi->query("delete  from pesanan");
			echo "<meta http-equiv='refresh' content='0;URL=index.php?page=home'>";
	}
?>
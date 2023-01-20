<?php
	if (@$_GET[page]=='datamenu')
	{
		include 'page/datamenu.php';
	}
	elseif (@$_GET[page]=='editmenu')
	{
		include 'page/editmenu.php';
	}
	elseif (@$_GET[page]=='tambahstok')
	{
		include 'page/tambahstok.php';
	}
	elseif (@$_GET[page]=='detail')
	{
		include 'page/detail.php';
	}
	elseif (@$_GET[page]=='keranjang')
	{
		include 'page/keranjang.php';
	}
	elseif (@$_GET[page]=='datapelanggan')
	{
		include 'page/datapelanggan.php';
	}
	elseif (@$_GET[page]=='editpelanggan')
	{
		include 'page/editpelanggan.php';
	}
	elseif (@$_GET[page]=='datatransaksi')
	{
		include 'page/datatransaksi.php';
	}
	elseif (@$_GET[page]=='edittransaksi')
	{
		include 'page/edittransaksi.php';
	}
	elseif (@$_GET[page]=='datapesanan')
	{
		include 'page/datapesanan.php';
	}
	elseif (@$_GET[page]=='editpesanan')
	{
		include 'page/editpesanan.php';
	}
	elseif (@$_GET[page]=='datauser')
	{
		include 'page/user.php';
	}
	elseif (@$_GET[page]=='edituser')
	{
		include 'page/edituser.php';
	}
	elseif (@$_GET[page]=='upload')
	{
		include 'page/uploadgambar.php';
	}
	elseif (@$_GET[page]=='uploaduser')
	{
		include 'page/uploadgambaruser.php';
	}
	elseif (@$_GET[page]=='trxbayar')
	{
		include 'page/pembayaran.php';
	}
	elseif (@$_GET[page]=='datalaporan')
	{
		include 'page/datalaporan.php';
	}
	elseif (@$_GET[page]=='datalabarugi')
	{
		include 'page/labarugi.php';
	}
	else
	{
		if (@$_SESSION[hakakses]=='waiter')
		{
			include 'page/home.php';
		}
		elseif (@$_SESSION[hakakses]=='kasir')
		{
			include 'page/datatransaksi.php';
		}
		elseif (@$_SESSION[hakakses]=='admin')
		{
			include 'page/home.php';
		}
	}
?>
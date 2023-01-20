                <li class="panel active">
                    <a href="?page=home" >
                        <i class="icon-table"></i> Dashboard
                    </a>                   
                </li>
                <?php
                    if (@$_SESSION[hakakses]=='admin')
                    {
                ?>
                <li><a href="?page=datauser"><i class="icon-user"></i> User </a></li>
                <?php
                    }
                ?>
                <?php
                    if((@$_SESSION[hakakses]=='admin') or (@$_SESSION[hakakses]=='waiter'))
                    {
                ?>
                <li><a href="?page=datamenu"><i class="icon-user"></i> Menu </a></li>
                <?php
                    }
                ?>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Data    
       
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="?page=datapelanggan"><i class="icon-angle-right"></i> Pelanggan</a></li>
                         <?php
                            if (@$_SESSION[hakakses]=='waiter')
                            {
                         ?>
                         <li class=""><a href="?page=datapesanan"><i class="icon-angle-right"></i> Pesanan </a></li>
                         <?php
                            }
                        ?>
                         <?php
                            if (@$_SESSION[hakakses]=='admin')
                            {
                         ?>
                         <li class=""><a href="?page=datameja"><i class="icon-angle-right"></i> Meja </a></li>
                         <?php
                            }
                        ?>
                    </ul>
                </li>
                <?php
                    if (@$_SESSION[hakakses]=='kasir')
                    {
                ?>
                <li><a href="?page=datatransaksi"><i class="icon-film"></i> Transaksi </a></li>
                <?php
                    }
                ?>
                <li><a href="?page=datalaporan"><i class="icon-film"></i> Laporan </a></li>
                <?php
                    if (@$_SESSION[hakakses]=='owner')
                    {
                ?>
                <li><a href="?page=datalabarugi"><i class="icon-film"></i> Laba Rugi </a></li>
                <?php
                    }
                ?>
                <li><a href="logout.php"><i class="icon-table"></i> Logout </a></li>
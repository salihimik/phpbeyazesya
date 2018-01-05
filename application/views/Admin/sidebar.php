<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Ara...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>Admin"><i class="fa fa-home"></i> Anasayfa</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> Üyelik İşlemleri<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Admin/users_new_list">Yeni Üye Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/Admin/users_select">Üyeleri Listele</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/Admin/message_select"><imessage_select class="fa fa-envelope"></i> Mesajlar</a>
                        </li>
						<li>
                            <a href="<?php echo base_url()?>index.php/Admin/about"><i class="fa fa-university"></i> Hakkımızda</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Haberler<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>index.php/admin/newscast_insert_list">Haber Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/admin/newscast_select">Haberler Listesi </a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Ürün İşlemleri<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>index.php/admin/product_insert_list">Yeni Ürün Ekle</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/admin/product_select">Ürünleri Listele </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/admin/product_image_update">Ürün Resmi Güncelle</a>
                                </li>  
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
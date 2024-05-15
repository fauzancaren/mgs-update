<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!--
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet" />  
    -->
    
	<link href="<?= base_url("assets/fonts/material-icon-sharp/material-icon-sharp.css") ?>" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/icon.png') ?>">
     
	<link href="<?= base_url("assets/fontawesome5/css/all.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/bootstrap-5.2.3/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">  
	<link href="<?= base_url("assets/datatable/datatables.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/sweetalert/dist/sweetalert2.min.css") ?>" rel="stylesheet" type="text/css"> 
	<link href="<?= base_url("assets/select2/css/select2.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("assets/datepicker/daterangepicker.css") ?>" rel="stylesheet" type="text/css">
    



    <script src="<?= base_url("assets/bootstrap-5.2.3/js/bootstrap.bundle.min.js") ?>"></script>
	<script src="<?= base_url("assets/js/jquery.js") ?>"></script>
	<script src="<?= base_url("assets/datatable/datatables.min.js") ?>"></script>
	<script src="<?= base_url("assets/datatable/rowgroup.js") ?>"></script>
	<script src="<?= base_url("assets/cleave/cleave.min.js") ?>"></script>
	<script src="<?= base_url("assets/cleave/cleave-phone.id.js") ?>"></script>
    <script src="<?= base_url("assets/sweetalert/dist/sweetalert2.all.min.js") ?>"></script> 
	<script src="<?= base_url("assets/select2/js/select2.full.min.js") ?>"></script> 
	<script src="<?= base_url("assets/jquery/jquery.moment.min.js") ?>"></script>
	<script src="<?= base_url("assets/datepicker/daterangepicker.js") ?>"></script>

    <!--
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.js"></script>
    -->
	<link href="<?= base_url("assets/fonts/poppins/poppins.css") ?>" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="<?= base_url("assets/css/mainmenu.css")?>">
    <title><?= $_title ?></title>
</head>

<body class="<?= ($_sessionuser["dark_mode"] == "true" ? "dark-mode-variables" : "") ?>"> 
    <div class="home-body">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="<?= base_url("assets/images/icon.png")?>">
                    <h2>MGS <span class="primary">ERP</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="<?= base_url("admin/dashboard")?>" class="<?= $_menu == "Dashboard" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>

                <!-- Master Data -->
                <span class="head-menu"> 
                    <h3>Master Data</h3>
                </span>
                <a href="<?= base_url("admin/toko")?>" class="<?= $_menu == "Toko" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                        store
                    </span>
                    <h3>Toko</h3>
                </a>
                <a href="<?= base_url("admin/karyawan")?>" class="<?= $_menu == "Karyawan" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                    group
                    </span>
                    <h3>Karyawan</h3> 
                <a href="<?= base_url("admin/vendor")?>" class="<?= $_menu == "Vendor" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                    storefront
                    </span>
                    <h3>Vendor</h3>
                </a>
                <a href="<?= base_url("admin/produk")?>" class="<?= $_menu == "Petugas" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                    category
                    </span>
                    <h3>Produk</h3>
                </a>
                <a href="<?= base_url("admin/pelanggan")?>" class="<?= $_menu == "Pelanggan" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                    contacts
                    </span> 
                    <h3>Pelanggan</h3>
                </a> 

                <!-- Pemakaian -->
                <span class="head-menu"> 
                    <h3>Penjualan</h3>
                </span>
                <a href="<?= base_url("admin/pemakaian")?>" class="<?= $_menu == "Pemakaian" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                    shopping_cart
                    </span>
                    <h3>Penjualan</h3>
                </a>  
 
                <!-- Pemakaian -->
                <span class="head-menu"> 
                    <h3>Pembelian</h3>
                </span>
                <a href="<?= base_url("admin/pemakaian")?>" class="<?= $_menu == "Pemakaian" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                    shopping_bag
                    </span>
                    <h3>Pembelian</h3>
                </a> 


                <a href="<?= base_url("logout")?>">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <?= $_content ?>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp <?= ($_sessionuser["dark_mode"] == "true" ? "" : "active") ?>">
                        light_mode
                    </span>
                    <span class="material-icons-sharp <?= ($_sessionuser["dark_mode"] == "true" ? "active" : "") ?>">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hello, <b><?= $_sessionuser["user_name"] ?></b></p>
                        <small class="text-muted"><?= $_sessionuser["user_email"] ?></small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?= base_url("assets/images/users.png")?>">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->
 

            <div class="reminders">
                <div class="header">
                    <h2>Info Terbaru</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Tidak Ada Info Terbaru</h3> 
                        </div> 
                    </div>
                </div>

                <div class="notification deactive d-none">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder  d-none">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>
 
    <script> 
        const sideMenu = document.querySelector('aside');
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');

        const darkMode = document.querySelector('.dark-mode');

        menuBtn.addEventListener('click', () => {
            sideMenu.style.display = 'block';
        });

        closeBtn.addEventListener('click', () => {
            sideMenu.style.display = 'none';
        });

        darkMode.addEventListener('click', () => {
            var toggle = document.body.classList.toggle('dark-mode-variables'); 
            $.get("<?= base_url("darkmode/")?>" + toggle, function (result) {
                console.log(result);
            })
            darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
            darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
        })
    </script>
</body>

</html>
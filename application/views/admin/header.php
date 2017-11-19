<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Admin</title>
    <link href="<?php echo base_url('ada/html/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/plugins/bower_components/toast-master/css/jquery.toast.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/plugins/bower_components/morrisjs/morris.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/plugins/bower_components/chartist-js/dist/chartist.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/html/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/html/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('ada/html/css/colors/default.css') ?>" id="theme" rel="stylesheet">

</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url('ada/plugins/images/admin-logo.png') ?>" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url('ada/plugins/images/admin-logo-dark.png') ?>" alt="home" class="light-logo" />
                     </b>
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo base_url('ada/plugins/images/users/varun.jpg') ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">jackson</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo site_url('halaman_admin/index') ?>" class="waves-effect"><i class="fa fa-money fa-fw" aria-hidden="true"></i>Penjualan</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('halaman_admin/halaman_insert') ?>" class="waves-effect"><i class="fa fa-briefcase fa-fw" aria-hidden="true"></i>Tambah Produk</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('halaman_admin/halaman_penjualan') ?>" class="waves-effect"><i class="fa fa-spin fa-cog fa-fw" aria-hidden="true"></i>Edit Produk</a>
                    </li>
                 <div class="center p-20">
                     <button  onclick="keluar()"  class="btn btn-danger btn-block waves-effect waves-light">LOGOUT</button>
                 </div>

                </ul>
            
            </div>
            
        </div>
        <script type="text/javascript">
    
   function keluar()
    {
        var url;
       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('login_admin/logout') ?>',
            type: "POST",
            data: $('#checkout1').serialize(),
            success: function(data)
            {
           
            console.log(data);
            location.reload();
            
         
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('silahkan login terlebih dahulu');
            }
        });
    }

 </script>
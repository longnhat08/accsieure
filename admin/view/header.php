
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png">
    <title>Admin Control</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/assets/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="/admin/assets/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/admin/assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/admin/assets/dist/css/style.min.css?i=<?php echo rand(0,564564);?>" rel="stylesheet">
    <link href="/admin/assets/assets/libs/switch-checkbox/style.css" rel="stylesheet">
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/admin/assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/admin/assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/admin/assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="/admin/assets/dist/js/app-style-switcher.js"></script>
    <script src="/admin/assets/dist/js/feather.min.js"></script>
    <script src="/admin/assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/admin/assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/admin/assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="/admin/assets/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/admin/assets/assets/extra-libs/c3/c3.min.js"></script>
    <script src="/admin/assets/assets/libs/chartist/dist/chartist.min.js"></script>
<!--    <script src="/admin/assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->
    <script src="/admin/assets/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/admin/assets/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<!--        <script src="/admin/assets/dist/js/pages/dashboards/dashboard1.min.js"></script> -->

<style type="text/css">
    body, a, input, li, div, button, span, h1,h2,h3,h4,h5, nav, ul {
        font-family: 'Josefin Sans', sans-serif;
        cursor: url('/admin/assets/custom/arrow.cur'), auto;
    }
</style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="/admin">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="/admin/assets/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="/admin/assets/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="/admin/assets/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="/admin/assets/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="https://i.imgur.com/kcNPCS1.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="text-dark"><?php echo $user['name'];?></span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/signout.html"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    ????ng Xu???t</a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">V??? L???i Shop</span></a></li>
                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">C??i ?????t D???ch V???</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/?modun=vongquay_kimcuong&act=index"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">V??ng quay may m???n
                                </span></a>
                        </li>


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">D???ch V??? FreeFire</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item"><a href="/admin/?modun=sieucap&act=index" class="sidebar-link"><span
                                            class="hide-menu">V??ng Quay Gi???i C???u</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=bingo&act=index" class="sidebar-link"><span
                                            class="hide-menu">V???n May Bingo</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=homthinhbian&act=index" class="sidebar-link"><span
                                            class="hide-menu">Ho??m Ti????p T????</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=latthe&act=index" class="sidebar-link"><span
                                            class="hide-menu">L???t H??nh May M???n</span></a>
                                </li>


                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">V??ng Quay S??ng</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="/admin/?modun=vongquaycodesung&act=index" class="sidebar-link"><span
                                                    class="hide-menu">C??i ?????t T??? L???</span></a></li>
                                        <li class="sidebar-item"><a href="/admin/?modun=vongquaycodesung&act=update_code" class="sidebar-link"><span
                                                    class="hide-menu">Danh S??ch Code</span></a></li>
                                    </ul>
                                </li>




                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">B??n Nick Freefire</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="/admin/?modun=accff&act=index" class="sidebar-link"><span
                                                    class="hide-menu">????ng B??n Nick</span></a></li>
                                        <li class="sidebar-item"><a href="/admin/?modun=accff&act=list" class="sidebar-link"><span
                                                    class="hide-menu">Danh S??ch Nick</span></a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>





                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">Random FreeFire</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item"><a href="/admin/?modun=random_freefire&act=add_nick" class="sidebar-link"><span
                                            class="hide-menu">????ng B??n Random</span></a>
                                </li>

                                <li class="sidebar-item"><a href="/admin/?modun=random_freefire&act=index" class="sidebar-link"><span
                                            class="hide-menu">Danh S??ch G??i Random</span></a>
                                </li>


                                    <?php 
                                    $quas = mysqli_query($kun->connect_db(), "SELECT * FROM `random_freefire`");
                                    while ($rose = mysqli_fetch_array($quas)) {
                                            ?>
                                        <li class="sidebar-item"><a href="/admin/list_acc_random/<?php echo $rose['cname'];?>" class="sidebar-link"><span
                                            class="hide-menu"><?php echo $rose['name'];?></span></a>
                                </li>
                                    <?php
                                        }
                                    ?>


                            </ul>
                        </li>



                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/?modun=giftcode&act=index"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">GiftCode Gi???m Gi??
                                </span></a>
                        </li>

<?php if(mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'")) > 0) $new = '<span class="btn btn-danger btn-sm">'.mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'")).'</span>'; ?>
                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/?modun=rut_kim_cuong&act=index"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Duy???t Kim C????ng <?=$new;?>
                                </span></a>
                        </li>



<?php if(mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `status`='2'")) > 0) $new2 = '<span class="btn btn-danger btn-sm">'.mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `status`='2'")).'</span>'; ?>
                        <li class="sidebar-item"> <a class="sidebar-link" href="/admin/thenap"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Th??? N???p <?=$new2;?>
                                </span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin/users"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Th??nh Vi??n</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">C??i ?????t</span></li>



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Thi???t l???p trang WEB</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=chung" class="sidebar-link"><span
                                            class="hide-menu">C??i ?????t Chung</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=danh_muc" class="sidebar-link"><span
                                            class="hide-menu">Hi???n Th??? Danh M???c</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=game_status" class="sidebar-link"><span
                                            class="hide-menu">Hi???n Th??? Game</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=web_setting&act=game_images" class="sidebar-link"><span
                                            class="hide-menu">C??i ?????t ???nh Game</span></a>
                                </li>
                                <li class="sidebar-item"><a href="/admin/?modun=update&act=update" class="sidebar-link"><span
                                            class="hide-menu">B??o c??o l???i</span></a>
                                </li>                                
                                <li class="sidebar-item"><a href="javascript:void(cc())" class="sidebar-link"><span
                                            class="hide-menu">RESET TOP N???P</span></a>
                                </li>
                            <script type="text/javascript">
                            function cc() {
                                if(confirm('B???n C?? Mu???n Reset Top N???p Kh??ng?') == true){
                                    if(confirm('B???n C?? Mu???n Reset Top N???p Kh??ng? H???i l???n th??? 2') == true){
                                        if(confirm('B???n C?? Mu???n Reset Top N???p Kh??ng? L???n cu???i?') == true){
                                            window.location.href = "/admin/reset_topnap.php";
                                        }
                                    }
                                }
                            }
                            </script>


                            </ul>
                        </li>





                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <!-- ============================================================== -->
<div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->    
            <div id="main-kunkey">
<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

 <html lang="en">
 
<?php
 $getProv = "https://api.kawalcorona.com/indonesia/provinsi";
 $jsonProv = file_get_contents($getProv);
 $dataIndo = json_decode($jsonProv, true);

 $getTotalIndo = "https://api.kawalcorona.com/indonesia/";
 $jsonTotalIndo = file_get_contents($getTotalIndo);
 $dataTotalIndo = json_decode($jsonTotalIndo, true);
?>

 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>INA COVID-19 Live Data</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
     <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="../assets/css/demo.css" rel="stylesheet" />
 </head>
 
 <body>
     <div class="wrapper">
        <div class="sidebar" data-color="blue">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        INA COVID-19 LIVE DATA
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/pages/dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/pages/global-data.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Global Data</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
         <div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">
                     <a class="navbar-brand"> Dashboard </a>
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                     </button>
                 </div>
             </nav>
             <!-- End Navbar -->
             <div class="content">
                    <div class="row justify-content-center">
                            <div class="col-12 col-lg-4 py-3">
                                <div class="card img-card shadow-sm">
                                    <div class="card-body positif">
                                        <h5 class="card-title">
                                            <span class="card-title-text">Positif</span>
                                        </h5>
                                        <div class="d-flex">
                                            <div class="card-text">
                                                <span style="font-size: 60px;">
                                                <?php 
                                                    foreach ($dataTotalIndo as $datas) {?>
                                                    <?php echo $datas['positif']; ?>
                                                <?php  } ?>
                                                </span>
                                                Orang
                                                <br>
                                            </div>
                                            <div class="ml-auto">
                                                <img src="/assets/img/sad.png" width="50" height="50" alt="Positif">
                                            </div>
                                         </div>
                                    </div><!--//card-body-->
                                </div><!--//card-->
                            </div><!--//col-->
                            <div class="col-12 col-lg-4 py-3">
                                <div class="card img-card shadow-sm">
                                    <div class="card-body sembuh">
                                        <h5 class="card-title">
                                            <span class="card-title-text">Sembuh</span>
                                        </h5>
                                        <div class="d-flex">
                                            <div class="card-text">
                                                <span style="font-size: 60px;">
                                                <?php 
                                                    foreach ($dataTotalIndo as $datas) {?>
                                                    <?php echo $datas['sembuh']; ?>
                                                <?php  } ?>
                                                </span>
                                                Orang
                                                <br>
                                            </div>
                                            <div class="ml-auto">
                                                <img src="/assets/img/happy.png" width="50" height="50" alt="Sembuh">
                                            </div>
                                         </div>
                                    </div><!--//card-body-->
                                </div><!--//card-->
                            </div><!--//col-->
                            <div class="col-12 col-lg-4 py-3">
                                <div class="card img-card shadow-sm">
                                    <div class="card-body meninggal">
                                        <h5 class="card-title">
                                            <span class="card-title-text">Meninggal</span>
                                        </h5>
                                         <div class="d-flex">
                                            <div class="card-text">
                                                <span style="font-size: 60px;">
                                                <?php 
                                                    foreach ($dataTotalIndo as $datas) {?>
                                                    <?php echo $datas['meninggal']; ?>
                                                <?php  } ?>
                                                </span>
                                                Orang
                                                <br>
                                            </div>
                                            <div class="ml-auto">
                                                <img src="/assets/img/cry.png" width="50" height="50" alt="Meninggal">
                                            </div>
                                         </div>
                                    </div><!--//card-body-->
                            </div><!--//col-->
            
                        </div><!--//row-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Data Kasus Coronavirus Indonesia</h4>
                                    <p class="card-category">Berdasarkan Provinsi</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>No</th>
                                            <th>Provinsi</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $number=1;
                                            foreach ($dataIndo as $datas) {?>
                                                <tr>
                                                <th scope="row"><?php echo $number; ?></th>
                                                    <td><?php echo $datas['attributes']['Provinsi']?></td>
                                                    <td><?php echo $datas['attributes']['Kasus_Posi']?></td>
                                                    <td><?php echo $datas['attributes']['Kasus_Semb']?></td>
                                                    <td><?php echo $datas['attributes']['Kasus_Meni']?></td>
                                                </tr>
                                        <?php $number++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
             <footer class="footer">
                 <div class="container-fluid">
                     <nav>
                         <ul class="footer-menu">
                             <li>
                                 <a href="https://www.instagram.com/anandagalang/" target="_blank">
                                     About
                                 </a>
                             </li>
                         </ul>
                         <p class="copyright text-center">
                             ©
                             <script>
                                 document.write(new Date().getFullYear())
                             </script>
                             <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                         </p>
                     </nav>
                 </div>
             </footer>
         </div>
     </div>
 </body>
 <!--   Core JS Files   -->
 <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
 <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
 <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="../assets/js/plugins/bootstrap-switch.js"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src="../assets/js/plugins/chartist.min.js"></script>
 <!--  Notifications Plugin    -->
 <script src="../assets/js/plugins/bootstrap-notify.js"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="../assets/js/demo.js"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         // Javascript method's body can be found in assets/js/demos.js
         demo.initDashboardPageCharts();
 
        //  demo.showNotification();
 
     });
 </script>
 
 </html>
 
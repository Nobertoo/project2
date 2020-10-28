<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Admin Meramput Shop</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong><i class="icon fa fa-user"></i> Meramput Shop</strong></a>
        
    <div id="sideNav" href="">
    <i class="fa fa-bars icon"></i> 
    </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"></a> 
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="./register_adm"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="./beranda"><i class="fa fa-dashboard"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="./produk"><i class="fa fa-desktop"></i>Produk</a>
                    </li> 
           
           <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Kategori<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="./kategorilokal">Brand Lokal</a>
                            </li>
                            <li>
                                <a href="./kategoriluar">Brand Luar</a>
                            </li>
              </ul>
            </li> 
              
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode"></i>Promo</a>
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i>Suplier</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
    <div id="page-wrapper">
      <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small>Welcome To Meramput Admin</small>
                        </h1>
            <ol class="breadcrumb">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Dashboard</a></li>
          </ol> 
                  
    </div>
            <div id="page-inner">

                <!-- /. ROW  -->
  
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="board">
                        <div class="panel panel-primary">
            <div class="number">
              <h3>
                <h3>44,023</h3>
                <small>Daily Visits</small>
              </h3> 
            </div>
            <div class="icon">
               <i class="fa fa-eye fa-5x red"></i>
            </div>
     
                        </div>
            </div>
                    </div>
          
                 <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="board">
                        <div class="panel panel-primary">
            <div class="number">
              <h3>
                <h3>32,850</h3>
                <small>Sales</small>
              </h3> 
            </div>
            <div class="icon">
               <i class="fa fa-shopping-cart fa-5x blue"></i>
            </div>
     
                        </div>
            </div>
                    </div>
          
                 <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="board">
                        <div class="panel panel-primary">
            <div class="number">
              <h3>
                <h3>56,150</h3>
                <small>Comments</small>
              </h3> 
            </div>
            <div class="icon">
               <i class="fa fa-comments fa-5x green"></i>
            </div>
     
                        </div>
            </div>
                    </div>
          
                 <div class="col-md-3 col-sm-12 col-xs-12">
          <div class="board">
                        <div class="panel panel-primary">
            <div class="number">
              <h3>
                <h3>89,645</h3>
                <small>Daily Profits</small>
              </h3> 
            </div>
            <div class="icon">
               <i class="fa fa-user fa-5x yellow"></i>
            </div>
     
                        </div>
            </div>
                    </div>
           
                </div>
  
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Profit</h4>
            <div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Sales</h4>
            <div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Customers</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>No. of Visits</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
      
    
        <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
            <div class="panel-heading">
              Line Chart
            </div>
            <div class="panel-body">
              <div id="morris-line-chart"></div>
            </div>            
          </div>   
          </div>    
          
            <div class="col-md-7">
          <div class="panel panel-default">
          <div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
            
          </div>  
          </div>
          
        </div> 
       
        
        
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">                            
              <div class="panel-heading">
              Area Chart
            </div>
            <div class="panel-body">
              <div id="morris-area-chart"></div>
            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donut Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
        <div class="row">
        <div class="col-md-12">
        
          </div>    
        </div>  
                <!-- /. ROW  -->

     
        
        
        
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">


                    </div>
                </div>
                <!-- /. ROW  -->
      
    
        <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p>
        
        
        </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
   
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
  
  
  <script src="assets/js/easypiechart.js"></script>
  <script src="assets/js/easypiechart-data.js"></script>
  
   <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
  
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>
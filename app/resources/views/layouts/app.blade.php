<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Emotion Recognition System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

        <!-- jvectormap -->
        <link href="plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <script defer src="{{asset('/emotion/face-api.min.js')}}"></script>
        <script defer src="{{asset('/emotion/screen.js')}}"></script>
        <script defer src="{{asset('/emotion/script.js')}}"></script>
        <style>
        .miky {
      margin: 0;
      padding: 0;
      width: 50vw;
      height: 70vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    canvas {
      position: absolute;
    }
  </style>
    </head>
    <body class="">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.php" class="logo">
                    <span>
                   <h1 class="btn btn-outline-primary" style="font-weight:bolder"> Emotion Detection System</h1> 
                    </span>
                    
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar style="background:#0c213a">
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                    </li>
                    <li>
                        <a href="../../logout.php"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Logout</span><span class="menu-arrow"></span></a> 
                    </li> 
                    <hr class="hr-dashed hr-menu">        
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">  
                        <li class="dropdown">
                            
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm"> </span>
                                <img src="{{asset('/assets/images/users/user-1.jpg')}}" alt="profile-user" class="rounded-circle thumb-xs" />                                 
                            </a>
                        </li>
                    </ul><!--end topbar-nav-->
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button">Yabatech HND3 Project</a>
                            </div>                                
                        </li>                           
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->



            @yield('content')




<footer class="footer text-center text-sm-start">
  All Rights Reserved.  &copy; <script>
       document.write(new Date().getFullYear())
   </script>  <span class="text-muted d-none d-sm-inline-block float-end"> <i
           class="mdi mdi-heart text-danger"></i> Yabatech HND3 Students Project</span>
</footer><!--end footer-->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->




<!-- jQuery  -->
<script src="{{asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/metismenu.min.js')}}"></script>
<script src="{{asset('/assets/js/waves.js')}}"></script>
<script src="{{asset('/assets/js/feather.min.js')}}"></script>
<script src=".{{asset('/assets/js/simplebar.min.js')}}"></script>
<script src="{{asset('/assets/js/moment.js')}}"></script>
<script src="{{asset('/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
<script src="{{asset('/assets/pages/jquery.analytics_dashboard.init.js')}}"></script>
<script src=".{{asset('/assets/js/app.js')}}"></script>

</body>
</html>
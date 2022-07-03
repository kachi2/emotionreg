<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Emotion Recognition App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="account-body accountbg">
        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                    
                                    <h1 class="btn btn-outline-primary" style="font-weight:bolder; color:#fff"> Emotion Detection System</h1> 
                   
                                        <p class="text-muted  mb-0">Sign in</p>  
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                        </li>
                                    </ul>
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form"  method="post" action="{{route('login')}}">
                                                @csrf
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="username" placeholder="Enter Email">
                                                    </div>      
                                                    @error('email')
                                                    <span class="alert invalid-feedback" role="alert">
                                                        {{$message}}
                                                    </span>
                                                    @enderror
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userpassword" placeholder="Enter password">
                                                    </div>  
                                                    @error('password')
                                                    <span class="alert invalid-feedback" role="alert">
                                                        {{$message}}
                                                    </span>
                                                    @enderror                             
                                                </div><!--end form-group--> 
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                        <br>
                                                        <input type="hidden" name="login" value="login">
                                                        <a href="{{route('register')}}" class="p-2 btn"> Create new Account</a>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>

        
    </body>
</html>

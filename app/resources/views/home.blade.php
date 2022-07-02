@extends('layouts.app')
@section('content')

<div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                    <ol class="breadcrumb">
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                   
                    <!-- end page title end breadcrumb -->
                    <div class="row" >
                        <div class="col-lg-9" >
                            <div class="card"  >
                                <div class="card-header">
                                    <h4 class="card-title">Live Streaming</h4>
                                    <p class="text-muted mb-0">Emotion Recognition System.</p>
                                </div><!--end card-header-->
                                <div class="miky" id="canvaz">      
                                    <video id="video" width="620px" height="500px" autoplay muted></video>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
    
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Make a snapshot</h4>
                                    <p class="text-muted mb-0">This application allows you to view in real time the facial expression of students in the classroom.
                                    You can record the video, save and replay any time. 
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <!-- 21:9 aspect ratio -->
                                                    <button class="btn btn-gradient-danger"  type="button" id="recordvideo">  Start Video Record</button>    <button class="btn btn-primary" id="stopvideo"> Save Video</button>              
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->    
                    </div> <!-- end row -->
    
                     

           
@endsection
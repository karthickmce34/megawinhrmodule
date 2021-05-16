<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Home') - Megawin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <?php
    $base_material_path = "/material_admin_v-1.5-2/Template/jquery";
    ?>

    @section('css')
        <link rel="shortcut icon" href="{{asset("")}}favicon.ico" />
        <!-- Vendor CSS -->

        <link rel="stylesheet" type="text/css" href="{{asset('/')}}jquery-ui-1.11.4.custom/jquery-ui.min.css" />

        <link rel="stylesheet" href="{{asset('/')}}Bootstrap-Admin/dist/assets/lib/bootstrap/dist/css/bootstrap.min.css" />
        
        <link rel="stylesheet" type="text/css" href="{{asset('/')}}bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" />
        
        <link rel="stylesheet" href="{{asset('/')}}static/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="{{asset('/')}}static/css/dataTables.bootstrap.css" />
        <link rel="stylesheet" href="{{asset('/')}}static/css/buttons.dataTables.min.css" />
        
        <link rel="stylesheet" type="text/css" href="{{asset('/')}}font-awesome-4.5.0/css/font-awesome.min.css" />        

        <link rel="stylesheet" href="{{asset('/')}}Bootstrap-Admin/dist/assets/css/main.css">
        
        <!-- Vendor CSS -->
        <link href="{{asset($base_material_path)}}/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">        
        
        <link href="{{asset($base_material_path)}}/vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
        
        
        <link href="{{asset($base_material_path)}}/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/farbtastic/farbtastic.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/bower_components/chosen/chosen.min.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/vendors/summernote/dist/summernote.css" rel="stylesheet">

        <!-- CSS 
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
        -->
        
        <!-- Material CSS -->
        <link href="{{asset($base_material_path)}}/css/app.min.1.css" rel="stylesheet">
        <link href="{{asset($base_material_path)}}/css/app.min.2.css" rel="stylesheet">
        
        
        @show
        
        <!-- OUR CSS -->
        

        @section('style')
        <style>
            .Footer, #footer {
                border-top: 0px;
            }
            /*input[required],select[required] {
                background-image: url('../static/images/required.png');
                background-repeat: no-repeat;
            }*/
            
            form label.required:after
            {
                    color: red;
                    content: " *";
            }
            
            table.dataTable.no-footer {
                border-bottom: 1px solid #ccc;
            }
            
            #blankModal .card {
                /* position: relative; */
                /* background: #fff; */
                box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.15);
                /* margin-bottom: 30px; */
            }
            select.form-control{
                appearance: menulist !important;
                -webkit-appearance: menulist !important;
                -moz-appearance: menulist !important;
            }
            .form-control:not(.fc-alt){
                padding:5px 7px 5px 7px;
            }
            .bootstrap-select.btn-group .dropdown-menu li a:hover {
                color: whitesmoke !important;
                background: #bf5279 !important;
            }
            
            

            
            /*.watermark {
                position: absolute;
                color: lightgray;
                opacity: 0.25;
                font-size: 3em;
                width: 100%;
                top: 8%;    
                text-align: center;
                z-index: 0;
            }*/
        </style>      

        @show
</head>
<body>
        <header id="header" class="clearfix" data-current-skin="blue">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="logo hidden-xs">
                    <a href="{{ route('home.index') }}"><!--img width="30px" height="30px" src="{{url('static/images/logo.jpg')}}" alt=""--> 
                        Megawin Switchgear Pvt Ltd</a>
                </li>

                <li class="pull-right">
                    <ul class="top-menu">
                        <li id="toggle-width">
                            <div class="toggle-switch">
                                <input id="tw-switch" type="checkbox" hidden="hidden">
                                
                                <label for="tw-switch" class="ts-helper" style="background-color:#5b5b69" title="Left Menu Toggle"></label>
                            </div>
                        </li>
                        <li class="dropdown" >
                            <a href="" data-model-name="Register" data-target="#blankModal" data-toggle="modal" title="Register" data-placement="bottom"  data-backdrop="static" data-keyboard="false">
                               
                                <i class="tm-icon zmdi zmdi-account-box-phone"></i>
                            </a>
                        </li>
                        

                        <li id="top-search">
                            <a href=""><i class="tm-icon zmdi zmdi-search"></i></a>
                        </li>

                        <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-email"></i>
                                <i class="tmn-counts">6</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview">
                                    <div class="lv-header">
                                        Messages
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-notifications"></i>
                                <i class="tmn-counts">9</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview" id="notifications">
                                    <div class="lv-header">
                                        Notification

                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-clear="notification">
                                                    <i class="zmdi zmdi-check-all"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lv-body">
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">David Belle</div>
                                                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Jonathan Morris</div>
                                                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Glenn Jecobs</div>
                                                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="lv-item" href="">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="lv-title">Bill Phillips</div>
                                                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a class="lv-footer" href="">View Previous</a>
                                </div>

                            </div>
                        </li>
                        <!--li class="dropdown hidden-xs">
                            <a data-toggle="dropdown" href="">
                                <i class="tm-icon zmdi zmdi-view-list-alt"></i>
                                <i class="tmn-counts">2</i>
                            </a>
                            <div class="dropdown-menu pull-right dropdown-menu-lg">
                                <div class="listview">
                                    <div class="lv-header">
                                        Tasks
                                    </div>
                                    <div class="lv-body">
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                    <span class="sr-only">95% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Google Chrome Extension</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Social Intranet Projects</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Youtube Client App</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <li class="skin-switch hidden-xs">
                                    <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                    <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                    <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                    <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                    <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                    <span class="ss-skin bgm-blue" data-skin="blue"></span>
                                </li>
                                <li class="divider hidden-xs"></li>
                                <li class="hidden-xs">
                                    <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                                </li>
                                <li>
                                    <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                                </li>
                                <li>
                                    <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                            <a href=""><i class="tm-icon zmdi zmdi-comment-alt-text"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <div class="tsw-inner">
                    <i id="top-search-close" class="zmdi zmdi-arrow-left"></i>
                    <input type="text" id="mwsearch">
                    
                    
                        
                </div>
                
            </div>
        </header>
        
        <section id="main" data-layout="layout-1">
            <aside id="sidebar" class="sidebar c-overflow">
                <div class="profile-menu">
                    <a href="">
                        <div class="profile-pic">
                            
                            <img src="{{asset($base_material_path)}}/img/profile-pics/1.jpg" alt="">
                            <!--img src="{{url('static/images/home.jpg')}}" alt=""-->
                            
                        </div>
                        <div class="profile-info">
                            {{ strtoupper(session()->get('name')) }}
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                        
                    </a>

                    <ul class="main-menu">
                        <!--li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li-->
                        <li>
                            <a href="#" id='logout'><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                @include('_layouts._partials.left_menu')
            </aside>
            
            <aside id="chat" class="sidebar c-overflow">
            
                <div class="chat-search">
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Search People">
                    </div>
                </div>

                <div class="listview">
                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Jonathan Morris</div>
                                <small class="lv-small">Available</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">David Belle</div>
                                <small class="lv-small">Last seen 3 hours ago</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/3.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/4.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Glenn Jecobs</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Bill Phillips</div>
                                <small class="lv-small">Last seen 3 days ago</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/6.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Wendy Mitchell</div>
                                <small class="lv-small">Last seen 2 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="{{asset($base_material_path)}}/img/profile-pics/7.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Teena Bell Ann</div>
                                <small class="lv-small">Busy</small>
                            </div>
                        </div>
                    </a>
                </div>
            </aside>
            
            
            <section id="content">
                <div class="container">
                    @yield('content')

                </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2020 Megawin
            
            <!--ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul-->
        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <div class="sales-loader" style="display: none;">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <div id="blankModal" class="modal fade">
            
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                        <h2 class="modal-title">Add New Complaint</h2>
                    </div>
                    <div class="modal-body">
                        
                        <div class="card-body card-padding">
                            <div class="row">
                                <?php $currentdate =date('Y-m-d'); 
                                       $timestamp = date('Y-m-d H:i:s');?>
                                
                                <form>
                                    <div class="row">    

                                        <div class="form-group col-sm-6">
                                            <label for="mode_of_complaint" class="control-label col-sm-3 required">Mode of Complaint</label>
                                            <div class="col-sm-9">
                                                <div class="fg-line">
                                                    <select class="form-control input-sm" placeholder="Status" aria-describedby="basic-addon1"  data-validation="required" id="mode_of_complaint" name="mode_of_complaint">
                                                        <option value="0">Phone</option>
                                                        <option value="1">Email</option>
                                                    </select>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <!--div class="form-group col-sm-6">
                                            <label for="complaint_type" class="control-label col-sm-3 required">Complaint Type</label>
                                            <div class="col-sm-9">
                                                <div class="fg-line">
                                                    <select class="form-control input-sm" placeholder="Status" aria-describedby="basic-addon1"   id="complaint_type" name="complaint_type">
                                                        <option value="0">Service</option>
                                                        <option value="1">Spares</option>
                                                        <option value="2">Service & Spares</option>
                                                    </select>                                        
                                                </div>
                                            </div>
                                        </div-->
                                        <input type='hidden' class="form-control input-sm" id="complaint_date" name="complaint_date" value="{{$currentdate}}">

                                        <div class="form-group col-sm-6">
                                            <label for="salesorder_no" class="control-label col-sm-4">Sales Order No</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm salno1" placeholder="Sales Order No" name="salesorder_no" type="text" id="salesorder_no">                                        
                                                    </div>
                                                    <span class="input-group-addon last salno"><i class="btn zmdi zmdi-search"></i></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="salesload"  class="col-sm-12 text-center">
                                            <div class="preloader pls-blue ">
                                                <svg class="pl-circular" viewBox="25 25 50 50">
                                                    <circle class="plc-path" cx="50" cy="50" r="20" />
                                                </svg>
                                            </div>
                                        </div>
                                            
                                        <div class="saldata">
                                            <div class="form-group col-sm-6">
                                                <label for="serial_no" class="control-label col-sm-4">VCB Serial No</label>
                                                <div class="col-sm-8">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Serial No" name="serial_no" type="text" id="serial_no">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="customer_name" class="control-label col-sm-3 required">Customer</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Customer" name="customer_name" type="text" id="customer_name"  >                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group col-sm-6">
                                                <label for="address1" class="control-label col-sm-3">Address1</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <textarea class="form-control input-sm" cols="20" rows="3" placeholder="Address1" name="address1" id="address1"  ></textarea>                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="address2" class="control-label col-sm-3 ">Address2</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <textarea class="form-control input-sm" cols="20" rows="3" placeholder="Address2" name="address2" id="address2"  ></textarea>                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="city" class="control-label col-sm-3">City</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="City" name="city" type="text" id="city"  >                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="pincode" class="control-label col-sm-3">Pincode</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Pincode" name="pincode" type="text" id="pincode"  >                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="state" class="control-label col-sm-3">State</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="State" name="state" type="text" id="state"  >                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="gstin" class="control-label col-sm-3">GSTin</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="GStin"  name="gstin" type="text" id="gstin">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="panno" class="control-label col-sm-3">PAN No</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="PAN No"  name="panno" type="text" id="panno">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="mobileno" class="control-label col-sm-3 required">Mobile no</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Mobile Number" name="mobileno" type="text" id="mobileno"  >                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="phoneno" class="control-label col-sm-3">Phone no</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Phone Number" name="phoneno" type="text" id="phoneno">                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="emailid" class="control-label col-sm-3 required">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Eg: example@gmail.com" name="emailid" type="text" id="emailid"  >                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="contact_person" class="control-label col-sm-3 required">Contact Person</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Contact Person" name="contact_person" type="text" id="contact_person"  >                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="panel_descrption" class="control-label col-sm-3">Product Description</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Panel Description" name="panel_descrption" type="text" id="panel_descrption">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="commissioned_date" class="control-label col-sm-3">Commissioned Date</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input type='text' class="form-control input-sm" id="commissioned_date" name="commissioned_date" value="{{$currentdate}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="complaint_nature" class="control-label col-sm-3 required">Customer Complaint</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <textarea class="form-control input-sm" cols="20" rows="3" placeholder="Complaint Nature" name="complaint_nature" id="complaint_nature"  ></textarea>                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="outgoing_load" class="control-label col-sm-3">Outgoing Load</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Outgoing Load" name="outgoing_load" type="text" id="outgoing_load">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="relay_make_type" class="control-label col-sm-3">Relay Make&Type</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Relay Make&Type" name="relay_make_type" type="text" id="relay_make_type">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="cable_length" class="control-label col-sm-3">Cable Length (load)</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Cable Length (load)" name="cable_length" type="text" id="cable_length">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="fault_current" class="control-label col-sm-3">Fault Current</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Fault Current" name="fault_current" type="text" id="fault_current">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="vcb_interlock" class="control-label col-sm-3">VCB Interlock Condition</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="VCB Interlock" name="vcb_interlock" type="text" id="vcb_interlock">                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="after_commissioned" class="control-label col-sm-3">Modification After Commissioned</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="After Commissioned" name="after_commissioned" type="text" id="after_commissioned">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="event_before_failure" class="control-label col-sm-3">Event Before Failure</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input class="form-control input-sm" placeholder="Event Before Failure" name="event_before_failure" type="text" id="event_before_failure">                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="warrenty" class="control-label col-sm-3 required">Warranty</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <select class="form-control input-sm" placeholder="Warranty" aria-describedby="basic-addon1"   id="warranty" name="warranty">
                                                            <option value="">=== Select Warranty ===</option>
                                                            <option value="0">With Warranty</option>
                                                            <option value="1">Out of Warranty</option>
                                                        </select>   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="date_supply" class="control-label col-sm-3">Date of Supply</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <input type='text' class="form-control input-sm" id="date_supply" name="date_supply" value="{{$currentdate}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="status" class="control-label col-sm-3 required">Status</label>
                                                <div class="col-sm-9">
                                                    <div class="fg-line">
                                                        <select class="form-control input-sm " placeholder="Status" aria-describedby="basic-addon1"   id="status" name="status">
                                                            <option value="">=== Select Status ===</option>
                                                            <option value="0">InActive</option>
                                                            <option value="1" selected="selected">Active</option>
                                                        </select>                                                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary app_save">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        
        <div id="searchmodal" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="row m-20" id="testrow">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bgm-cyan">
                                    <h2>Cyan <small>You can type anything here...</small></h2>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body card-padding">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. 
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bgm-red">
                                    <h2>Red <small>You can type anything here...</small></h2>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body card-padding">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. 
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bgm-orange">
                                    <h2>Orange <small>You can type anything here...</small></h2>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body card-padding">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. 
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bgm-green">
                                    <h2>Green <small>You can type anything here...</small></h2>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body card-padding">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. 
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bgm-purple">
                                    <h2>Purple <small>You can type anything here...</small></h2>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body card-padding">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. 
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header bgm-bluegray">
                                    <h2>Blue Gray <small>You can type anything here...</small></h2>

                                    <ul class="actions actions-alt">
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown" aria-expanded="false">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Refresh</a>
                                                </li>
                                                <li>
                                                    <a href="">Manage Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="">Widgets Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body card-padding">
                                    Cras leo sem, egestas a accumsan eget, euismod at nunc. Praesent vel mi blandit, tempus ex gravida, accumsan dui. Sed sed aliquam augue. Nullam vel suscipit purus, eu facilisis ante. Mauris nec commodo felis. 
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div><!-- /.modal-dialog -->
        </div>
 
@section('js')

         <script type="text/javascript" src="{{asset('/')}}static/js/jquery-1.12.0.js"></script>
        <!--jQuery UI-->
        <script type="text/javascript" src="{{asset('/')}}jquery-ui-1.11.4/jquery-ui.js" ></script>
        
        <script type="text/javascript" src="{{asset('/')}}static/js/jquery.dataTables.min.js"></script>
<!--        <script type="text/javascript" src="{{asset('/')}}static/js/dataTables.editor.min.js"></script>-->
        <script type="text/javascript" src="{{asset('/')}}static/js/dataTables.keyTable.min.js"></script>
        <script type="text/javascript" src="{{asset('/')}}bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="{{asset('/')}}static/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="{{asset('/')}}static/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="{{asset('/')}}static/js/jszip.min.js"></script>
        <script type="text/javascript" src="{{asset('/')}}static/js/vfs_fonts.js"></script>
        <script type="text/javascript" src="{{asset('/')}}static/js/buttons.html5.min.js"></script>
     
        <!--
        <script src="{{asset($base_material_path)}}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        -->
        <script src="{{asset($base_material_path)}}/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        
        <script src="{{asset($base_material_path)}}/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <script src="{{asset($base_material_path)}}/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>    
        
        
        <script src="{{asset($base_material_path)}}/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/summernote/dist/summernote-updated.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        
        
        <script src="{{asset($base_material_path)}}/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/fileinput/fileinput.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/input-mask/input-mask.min.js"></script>
        <script src="{{asset($base_material_path)}}/vendors/farbtastic/farbtastic.min.js"></script>

        
        <script src="{{asset($base_material_path)}}/js/flot-charts/curved-line-chart.js"></script>
        <script src="{{asset($base_material_path)}}/js/flot-charts/line-chart.js"></script>
        <script src="{{asset($base_material_path)}}/js/charts.js"></script>
        
        <script src="{{asset($base_material_path)}}/js/charts.js"></script>
        <script src="{{asset($base_material_path)}}/js/functions.js"></script>
        <!--<script src="{{asset($base_material_path)}}/js/demo.js">-->
        
         

        
        <!--<script type="text/javascript" src="{{asset('static/js/jquery.sgbz.mvrck232.js')}}"></script>-->
        <!--<script type="text/javascript" src="{{asset('static/js/jquery.sgbz.pqpg.dc232.js')}}"></script>-->
        
        <!-- Metis core scripts -->
        <!-- -->
        <script type="text/javascript" src="{{asset('static/js/metisMenu.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('static/js/screenfull.min.js')}}"></script>
        
        <script src="{{asset('/')}}Bootstrap-Admin/dist/assets/js/core.min.js"></script>
        
        <script src="{{asset('/')}}Bootstrap-Admin/dist/assets/js/app.min.js"></script>
        
        
        
        <script type="text/javascript" src="{{asset('static/js/jquery.form-validator.js')}}"></script>
        <script type="text/javascript" src="{{asset('/')}}jquery-form/jquery.form.min.js"></script>        
                
           

        
        
        
        
        
        
        @show
        
        <script>
            $(window).load(function(){
                
                        //$(this).find('form').trigger('reset');
                        $("#blankModal").on('hidden.bs.modal',function(){
                            
                            //$(this).find('#address1').trigger('reset');
                            $(this).find('form').trigger('reset');
                            //$(this).find('form textarea').val("");
                        });
                        var _site_url = "{{url('/')}}/";
                        $("#salesload").hide();
                        
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $("#logout").click(function(){
                                swal({   
                                 title: "Are you sure logout?",   
                                 text: "",   
                                 type: "warning",   
                                 showCancelButton: true,   
                                 confirmButtonText: "Yes, Loggout me!",
                                 cancelButtonText: "Cancel!",  
                                 closeOnConfirm: false
                             },function(){ 
                                        var controller = 'login/';
                                        $.ajax({
                                            method: "GET",
                                            url: _site_url + controller + "logout",
                                        }).done(function (data, textStatus, jqXHR) {
                                                window.location.reload();
                                        }).fail(function (jqXHR, textStatus, errorThrown) {
                                            console.log(" ajax fail ");
                                            //console.log(jqXHR, textStatus, errorThrown);
                                        }).always(function (data_jqXHR, textStatus, jqXHR_errorThrown) {
                                            console.log(" ajax always ");
                                            //console.log(data_jqXHR, textStatus, jqXHR_errorThrown);
                                        });
                             });
                        });
                        $('form').on("keypress",function(e){
                            return e.which !==13;
                        })
                        
                        $(".app_save").click(function()
                        {
                            
                            var mode = $("#mode_of_complaint option:selected").val();
                            //var complaint_type = $("#complaint_type option:selected").val();
                            var complaint_type = 0;
                            var customer_name = $("#customer_name").val();
                            var address1 = $("#address1").val();
                            var address2 = $("#address2").val();
                            var city = $("#city").val();
                            var pincode = $("#pincode").val();
                            var state = $("#state").val();
                            var gstin = $("#gstin").val();
                            var panno = $("#panno").val();
                            var mobileno = $("#mobileno").val();
                            var emailid = $("#emailid").val();
                            var complaint_nature = $("#complaint_nature").val();
                            var contact_person = $("#contact_person").val();
                            
                            var form_data = $("#blankModal").find('form').serializeArray();
                            var formarray={};

                            $.map(form_data, function(n, i){
                                formarray[n['name']] = n['value'];
                            });
                            swal({   
                                 title: "Are you sure all Entries are correct?",   
                                 text: "",   
                                 type: "warning",   
                                 showCancelButton: true, 
                                 confirmButtonText: "Confirm!",
                                 cancelButtonText: "Cancel!",  
                                 closeOnConfirm: true
                             },function(){ 
                                        var controller = 'home/';
                                        var dataConfig = formarray;
                                        $.ajax({
                                            method: "GET",
                                            url: _site_url + controller + "appdata",
                                            data: dataConfig,
                                            }).done(function (data, textStatus, jqXHR) {
                                                if(data.status == 1)
                                                {
                                                    swal("Added","Your Complaint is registered","success");
                                                    $("#blankModal").modal('hide');
                                                }
                                                else
                                                {
                                                    swal("Error","Your Complaint is not registered","error");
                                                }
                                                
                                            }).fail(function (jqXHR, textStatus, errorThrown) {
                                                console.log(" ajax fail ");
                                                //console.log(jqXHR, textStatus, errorThrown);
                                            }).always(function (data_jqXHR, textStatus, jqXHR_errorThrown) {
                                                console.log(" ajax always ");
                                                //console.log(data_jqXHR, textStatus, jqXHR_errorThrown);
                                            });
                                        });
                                   });               
                    

					//Welcome Message (not for login page)
                    /*
					function notify(message, type){
						$.growl({
							message: message
						},{
							type: type,
							allow_dismiss: false,
							label: 'Cancel',
							className: 'btn-xs btn-inverse',
							placement: {
								from: 'top',
								align: 'right'
							},
							delay: 2500,
							animate: {
									enter: 'animated fadeIn',
									exit: 'animated fadeOut'
							},
							offset: {
								x: 20,
								y: 85
							}
						});
					};
					*/		
			
                        $("#top-search-close").on('click',function(){
                            $("#mwsearch").val("");
                            $("#top-search-wrap").css("height","");
                        });
                        $("#mwsearch").keyup(function(){
                           var wrd = $(this).val(); 
                           var controller = 'home/';
                           $.ajax({
                                method: "GET",
                                url: _site_url + controller + "cusdata",
                                data: {wrd:wrd},
                                }).done(function (data, textStatus, jqXHR) {
                                    $("#top-search-wrap").css("height","480px");
                                    var test = $("#testrow").clone();
                                    $("#top-search-wrap").append(test);
                                   // $("#searchmodal").modal();

                                }).fail(function (jqXHR, textStatus, errorThrown) {
                                    console.log(" ajax fail ");
                                    //console.log(jqXHR, textStatus, errorThrown);
                                }).always(function (data_jqXHR, textStatus, jqXHR_errorThrown) {
                                    console.log(" ajax always ");
                                    //console.log(data_jqXHR, textStatus, jqXHR_errorThrown);
                                });
                        });
                        
                        $(".salno").click(function(){
                            var salno = $(".salno1").val();
                            var len = salno.length;
                            if(len >4)
                            {
                                $("#salesload").show();
                                $(".saldata").hide();
                                cusdetails(salno);
                            }
                        });

                        $(".salno1").keyup(function(){
                            var salno = $(this).val();
                            var len = salno.length;
                            if(len >4)
                            {
                                $("#salesload").show();
                                $(".saldata").hide();
                                cusdetails(salno);
                            }

                        });

                        function cusdetails(salno){
                            $("#customer_name").val("");
                            $("#address1").val("");
                            $("#address2").val("");
                            $("#city").val("");
                            $("#state").val("");
                            $("#pincode").val("");
                            $("#emailid").val("");
                            $("#gstin").val("");
                            $("#phoneno").val("");

                            var controller = 'home/';
                            $.ajax({
                                method: "GET",
                                url: _site_url + controller + "cusdetail",
                                data: {wrd:salno},
                                }).done(function (data, textStatus, jqXHR) {
                                    //$("#searchmodal").modal();
                                    $("#customer_name").val(data[0].bpname);
                                    $("#address1").val(data[0].address1);
                                    $("#address2").val(data[0].address2);
                                    $("#city").val(data[0].city);
                                    $("#state").val(data[0].regionid);
                                    $("#pincode").val(data[0].pincode);
                                    $("#emailid").val(data[0].em_ms_email);
                                    $("#gstin").val(data[0].em_ms_customergstin);
                                    $("#phoneno").val(data[0].phoneno);
                                    $('#mobileno').focus();

                                }).fail(function (jqXHR, textStatus, errorThrown) {
                                    console.log(" ajax fail ");
                                    //console.log(jqXHR, textStatus, errorThrown);
                                }).always(function (data_jqXHR, textStatus, jqXHR_errorThrown) {
                                    console.log(" ajax always ");
                                    $(".saldata").show();
                                    $("#salesload").hide();
                                    $('#mobileno').focus();
                                    //console.log(data_jqXHR, textStatus, jqXHR_errorThrown);
                                });
                        }
                    
                    });
        </script>
</body>
</html>
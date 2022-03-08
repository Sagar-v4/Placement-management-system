<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $userInfo['name'];?></title>
    
    <link rel="stylesheet" href="<?= base_url("public/admin/");?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url("public/admin/");?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= base_url("public/admin/");?>dist/css/adminlte.min.css">
    <link rel="icon" type="image/png" href="<?= base_url().'uploads/system/logo.svg';?>">
    <link rel="icon" href="<?= base_url("public/stu-com/");?>assets/img/brand/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="<?= base_url("public/stu-com/");?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("public/stu-com/");?>assets/css/argon.css?v=1.2.0" type="text/css">

    <style type="text/css">
    .active{
        color: #172b4d;
        background-color: #f6f9fc;
    }
    
    /* Hide scrollbar for Chrome, Safari and Opera */
    .example::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .example {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
    </style>

</head>

<body class="control-sidebar-slide-open layout-fixed g-sidenav-show g-sidenav-pinned">

<div class="wrapper">
    <nav class="main-header navbar navbar-top fixed-top navbar-expand navbar-dark bg-default border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars push-lg"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-md-auto ">

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="ni ni-bell-55"></i><span class="badge"><?= count($quickNotifications);?></span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                            <div class="px-3 py-3">
                                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary"><?= count($quickNotifications);?></strong> notifications.</h6>
                            </div>
                            <div class="list-group list-group-flush">
                                
                                <?php if ( !empty($quickNotifications) ) { rsort($quickNotifications); $i = 0; foreach ($quickNotifications as $notification) { ?>

                                    <a class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <i class="<?= $notification['company_notification_class']; ?> px-1 " style="transform: scale(1.5, 1.5);"></i>
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="text-right text-muted">
                                                        <small><?= $notification['time']?></small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0"><?= $notification['company_notification_detail']?></p>
                                            </div>
                                        </div>
                                    </a>

                                <?php $i++; if ( $i >= 3) break; } } else { ?>
                                    <div class="text-center"><h4>You Have No Notifications.</h4></div>
                                <?php } ?>

                                <a href="<?= base_url().'company/notifications/index';?>" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="<?= base_url().$userInfo['profile_thumb'] ;?>">
                                </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?= $userInfo['name'] ;?></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0"><?= $userInfo['name'];?></h6>
                            </div>
                            <a href="<?= base_url().'home/home/index'; ?>" class="dropdown-item">
                                <i class="ni ni-world"></i>
                                <span>Home</span>
                            </a>
                            <a href="<?= base_url().'company/profile/index';?>" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="<?= base_url().'company/changepassword/index';?>" class="dropdown-item">
                                <i class="ni ni-lock-circle-open"></i>
                                <span>Change Password</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url().'login/login/logout/company';?>" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
  <nav class="main-sidebar sidenav  sidebar-light-primary navbar-vertical  " id="sidenav-main">

    <div class="scrollbar-inner">
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="<?= base_url().'home/home/index'; ?>">
                    <img src="<?= base_url().'uploads/system/logo.svg';?>" class="navbar-brand-img">
                </a>
            </div>
            <div class="navbar-inner  align-items-center ">
                <ul class="navbar-nav flex-column ml-2 mr-2 pt-1">

                    <li class="nav-item mt-3 mb-1" >
                        <a href="<?= base_url().'company/analytics/index';?>" class="nav-link pt-2 pb-2 rounded ">
                            <i class="nav-icon ni ni-chart-bar-32 text-yellow"></i>
                            <span class="nav-link-text">Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/profile/index';?>" class="nav-link pt-2 pb-2 rounded active">
                            <i class="nav-icon fas fa-building text-default "></i>
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/home/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li> 
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/notifications/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon ni ni-bell-55 text-orange"></i>
                            <span class="nav-link-text">Notifications</span>
                        </a>
                    </li> 

                    <li class="nav-header m-2" >REQUIREMENTS</li>

                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/view/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-tasks text-info"></i>
                            <span class="nav-link-text">View All</span>
                        </a>
                    </li> 
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/exams/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-edit text-info"></i>
                            <span class="nav-link-text">Exams</span>
                        </a>
                    </li> 
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/interviews/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-podcast text-info"></i>
                            <span class="nav-link-text">Interviews</span>
                        </a>
                    </li> 
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/new_requirement/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon ni ni-fat-add text-info"></i>
                            <span class="nav-link-text">New</span>
                        </a>
                    </li>

                    <li class="nav-header m-2" >OTHERS</li>
                    
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'company/changepassword/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-fingerprint text-success"></i>
                            <span class="nav-link-text">Change Password</span>
                        </a>
                    </li> 
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'login/login/logout/company';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                            <span class="nav-link-text">SIGN OUT</span>
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
  </nav>

    <div class="content-wrapper mt-5" >
        <span class=" position-fixed pb-6 bg-default " style="top:0px ; height:55%; width: 100%;">
            
        </span>
        <div class="row col-12 pt-2" style="margin-left:0px; margin-top: 90px;">
            <div class="col-xl-4 order-xl-2">
                        <?php
                            if ( !empty($this->session->flashdata('updatePPFMsg')) ) {
                            echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'>Profile Picture</span>
                                <span class='alert-text'>".$this->session->flashdata('updatePPFMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            } 
                            if ( !empty($this->session->flashdata('updateCPFMsg')) ) {
                            echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'>Cover Picture</span>
                                <span class='alert-text'>".$this->session->flashdata('updateCPFMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            } 
                            if ( !empty($this->session->flashdata('updatePPSMsg')) ) {
                            echo "
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'>Profile Picture</span>
                                <span class='alert-text'>".$this->session->flashdata('updatePPSMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            } 
                            if ( !empty($this->session->flashdata('updateCPSMsg')) ) {
                            echo "
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'>Cover Picture</span>
                                <span class='alert-text'>".$this->session->flashdata('updateCPSMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            }         
                        ?>
                <div class="card card-profile">
                    <img src="<?= base_url().$userInfo['cover'];?>" data-toggle="modal" data-target="#modal-form-cover-pic" alt="Image placeholder" class="card-img-top">
                        <div class="col-md-4">
                            <div class="modal fade" id="modal-form-profile-pic" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card bg-secondary border-0 mb-0">
                                                <div class="card-body px-lg-5 py-lg-5">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    
                                                    <?= form_open_multipart(base_url().'company/profile/proUpdate'); ?>

                                                        <img src="<?= base_url().$userInfo['profile'] ;?>" width="300" style="z-index:1;" class="img-center">

                                                        <div class="custom-file m-3 text-default">
                                                            <label for="proPic" class=" text-default"><h3>Profile Picture :(Square Recommend)</h3></label>
                                                            <input type="file" name="proPic" accept=".gif, .jpg, .jpeg, .png" class="custom-file-input" id="proPic">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6 text-left text-default">
                                                                <input type="submit" id="submit" name="pictureUpdate" class="btn btn-primary w-20 mb-2 text-white">
                                                            </div>    
                                                            <div class="col-6 text-right text-default">
                                                                <a href="<?= base_url().'company/profile/proRemove'?>" name="pictureUpdate" class="btn btn-default w-20 mb-2 text-white">Remove</a>
                                                            </div>      
                                                        </div>                                                      

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal-form-cover-pic" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card bg-secondary border-0 mb-0">
                                                <div class="card-body px-lg-5 py-lg-5">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    
                                                    <?= form_open_multipart(base_url().'company/profile/covUpdate'); ?>

                                                        <img src="<?= base_url().$userInfo['cover'] ;?>" width="300" style="z-index:1;" class="img-center">

                                                        <div class="custom-file m-3 text-default">
                                                            <label for="coverPic" class=" text-default"><h3>Cover Picture :</h3></label>
                                                            <input type="file" name="coverPic" accept=".gif, .jpg, .jpeg, .png" class="custom-file-input" id="coverPic">
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6 text-left text-default">
                                                                <input type="submit" id="submit" name="pictureUpdate" class="btn btn-primary w-20 mb-2 text-white">
                                                            </div>    
                                                            <div class="col-6 text-right text-default">
                                                                <a href="<?= base_url().'company/profile/covRemove'?>" name="pictureUpdate" class="btn btn-default w-20 mb-2 text-white">Remove</a>
                                                            </div>      
                                                        </div>                                                    

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                    <div class="row justify-content-center">
                        <div class="col-lg-4 order-lg-2">
                            <div class="card-profile-image">
                                <img src="<?= base_url().$userInfo['profile'] ;?>" data-toggle="modal" data-target="#modal-form-profile-pic" height="100" width="100" style="z-index:1;" class="rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-6 pt-md-6 pb-0 pb-md-0 ">
                        <div class="d-flex justify-content-center">
                            <h2><?= $userInfo['name'] ;?></h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats  justify-content-center">
                                    <div>
                                        <span class="heading">E-mail</span>
                                        <span class="description"><?= $userInfo['email'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats  justify-content-center">
                                    <div>
                                        <span class="heading">Link</span>
                                        <a href="<?= $userInfo['link'] ?>" target="_blank" class="description"><?= $userInfo['link'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center col">
                                <div class="card-profile-stats ">
                                    <div>
                                        <span class="heading">description</span>
                                        <span class="description"><?= $userInfo['description'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 order-xl-1 " >
                <div class="card ">
                    <div class="card-header rounded">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">Profile </h3>
                            </div>                            
                        </div>
                    </div>

                    <div class="card-body" >

                        <?php
                            if ( !empty($this->session->flashdata('updatePFMsg')) ) {
                            echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'><i class='fas fa-ban'></i></span>
                                <span class='alert-text'>".$this->session->flashdata('updatePFMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            }

                            if ( !empty($this->session->flashdata('updatePSMsg')) ) {
                                echo "
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'><i class='fas fa-check'></i></span>
                                <span class='alert-text'>".$this->session->flashdata('updatePSMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            }           
                        ?>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h6 class="heading-small text-muted mb-3">Company information</h6>
                            </div>
                            <div class="col-4 text-right">
                                <button type="button" class="btn btn-sm btn-default mb-4" data-toggle="modal" data-target="#modal-form-user">Edit</button>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                              <label >Company Name</label>
                              <div class="mb-3">
                                  <div class="form-control"><?= $userInfo['name'] ?></div>
                              </div>
                        </div>
                        <div class="pl-lg-4">
                              <label >Company Email</label>
                              <div class="mb-3">
                                  <div class="form-control"><?= $userInfo['email'] ?></div>
                              </div>
                        </div>
                        <div class="pl-lg-4">
                              <label >Company Link</label>
                              <div class="mb-3">
                                  <div class="form-control"><?= $userInfo['link'] ?></div>
                              </div>
                        </div>
                        <hr class="my-4" />

                        <?php
                            if ( !empty($this->session->flashdata('updateCFMsg')) ) {
                            echo "
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'><i class='fas fa-ban'></i></span>
                                <span class='alert-text'>".$this->session->flashdata('updateCFMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            }

                            if ( !empty($this->session->flashdata('updateCSMsg')) ) {
                                echo "
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <span class='alert-icon'><i class='fas fa-check'></i></span>
                                <span class='alert-text'>".$this->session->flashdata('updateCSMsg')."</span>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                </div>";
                            }           
                        ?>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h6 class="heading-small text-muted mb-3">About</h6>
                            </div>
                            <div class="col-4 text-right">
                                <button type="button" class="btn btn-sm btn-default mb-4" data-toggle="modal" data-target="#modal-form-description">Edit</button>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <label >Description</label>
                            <div class="mb-3">
                                <div class="form-control pb-9" style="overflow: hidden;" ><?= $userInfo['description'];?></div>
                            </div>
                        </div> 
                        
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-form-user" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content ">
                        
                        <div class="modal-body p-0">
                        
                            <div class="card bg-secondary border-0 mb-0">
                                <div class="card-body px-lg-10 py-lg-10">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h6 class="heading-small text-muted mb-4">User information</h6>
                                    <form action="<?= base_url().'company/profile/personalUpdate'; ?>" name="registrationForm" id="registrationForm" method="POST" role="form text-left" autocomplete="off">
                                        <div class="pl-lg-4">

                                                <label for="name" class="form-control-label">Company Name <span class="text-danger">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" value="<?= $userInfo['name'] ; ?>" name="name" id="name" class="form-control " placeholder="Company name">
                                                </div>

                                                <label for="email" class="form-control-label">Company Email <span class="text-danger">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" value="<?= $userInfo['email'] ; ?>" name="email" id="email" class="form-control " disabled placeholder="Company email">
                                                </div>

                                                <label for="link" class="form-control-label">Company Link <span class="text-danger">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" value="<?= $userInfo['link'] ; ?>" name="link" id="link" class="form-control " placeholder="Company link">
                                                </div>
                                                
                                                <div class="text-left">
                                                    <input type="submit" id="submit" name="Sign up" class="btn bg-default w-20 mb-2 text-white">
                                                </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="modal-form-description" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content ">
                        
                        <div class="modal-body p-0">
                        
                            <div class="card bg-secondary border-0 mb-0">
                                <div class="card-body px-lg-10 py-lg-10">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h6 class="heading-small text-muted mb-4">Description Updation</h6>
                                    <form action="<?= base_url().'company/profile/descriptionUpdate'; ?>" name="registrationForm" id="registrationForm" method="POST" role="form text-left" autocomplete="off">
                                        <div class="pl-lg-4">

                                            <div class="form-group">
                                                <label for="description" class="form-control-label">Description <span class="text-danger">*</span></label>
                                                <div class="mb-3">
                                                    <textarea class="form-control " rows="5" name="description"type="text" name="description"  id="description" Placeholder="description" ><?= $userInfo['description'] ; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="text-left">
                                                <input type="submit" id="submit" name="Sign up" class="btn bg-default w-20 mb-2 text-white">
                                            </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2021-2022 <a href="#">Sagar Variya Production</a>.</strong> All rights reserved.
  </footer>

</div>

<script src="<?= base_url("public/admin/");?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url("public/admin/");?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url("public/admin/");?>dist/js/adminlte.minSC.js"></script>
<script src="<?= base_url("public/stu-com/");?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url("public/stu-com/");?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url("public/stu-com/");?>assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url("public/stu-com/");?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url("public/stu-com/");?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<script src="<?= base_url("public/stu-com/");?>assets/js/argon.js?v=1.2.0"></script>


</body>
</html>
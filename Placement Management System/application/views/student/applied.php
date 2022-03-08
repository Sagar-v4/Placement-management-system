<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sagar Variya">
    <title>Dashboard</title>
     <link rel="stylesheet" href="<?= base_url("public/admin/");?>plugins/fontawesome-free/css/all.min.css"> 

    <link rel="stylesheet" href="<?= base_url("public/admin/");?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= base_url("public/admin/");?>dist/css/adminlte.min.css">

    
    <link rel="icon" type="image/png" href="<?= base_url().'uploads/system/logo.svg';?>">

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
    <nav class="main-header navbar navbar-top fixed-top navbar-expand navbar-dark bg-info border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars push-lg"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center ml-md-auto ">

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
                                                <i class="<?= $notification['student_notification_class']; ?> px-1 " style="transform: scale(1.5, 1.5);"></i>
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="text-right text-muted">
                                                        <small><?= $notification['time']?></small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0"><?= $notification['student_notification_detail']?></p>
                                            </div>
                                        </div>
                                    </a>

                                <?php $i++; if ( $i >= 3) break; } } else { ?>
                                    <div class="text-center"><h4>You Have No Notifications.</h4></div>
                                <?php } ?>

                                <a href="<?= base_url().'student/notifications/index';?>" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="<?= base_url().$userInfo['profile_thumb'] ;?>">
                                </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold"><?= $userInfo['fname']." ".$userInfo['lname'] ;?></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0"><?= $userInfo['fname']." ".$userInfo['lname'] ;?></h6>
                            </div>
                            <a href="<?= base_url().'home/home/index'; ?>" class="dropdown-item">
                                <i class="ni ni-world"></i>
                                <span>Home</span>
                            </a>
                            <a href="<?= base_url().'student/profile/index';?>" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="<?= base_url().'student/changepassword/index';?>" class="dropdown-item">
                                <i class="ni ni-lock-circle-open"></i>
                                <span>Change Password</span>
                            </a>
                                <div class="dropdown-divider"></div>
                            <a href="<?= base_url().'login/login/logout/student';?>" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
  <nav class="main-sidebar sidenav sidebar-light-info navbar-vertical " id="sidenav-main">

    <div class="scrollbar-inner">
    
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="<?= base_url().'home/home/index'; ?>">
                    <img src="<?= base_url().'uploads/system/logo.svg';?>" class="navbar-brand-img">
                </a>
            </div>
            <div class="navbar-inner  align-items-center ">
                <ul class="navbar-nav flex-column ml-2 mr-2 pt-1">

                <li class="nav-item mt-3 mb-1" >
                        <a href="<?= base_url().'student/home/index';?>" class="nav-link pt-2 pb-2 rounded ">
                            <i class="nav-icon ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'student/profile/index';?>" class="nav-link pt-2 pb-2 rounded ">
                            <i class="nav-icon fas fa-user-graduate text-default "></i>
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'student/notifications/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-bell text-orange"></i>
                            <span class="nav-link-text">Notifications</span>
                        </a>
                    </li> 
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'student/applied/index';?>" class="nav-link pt-2 pb-2 rounded active">
                            <i class="nav-icon fas fa-tasks text-info"></i>
                            <span class="nav-link-text">Applied</span>
                        </a>
                    </li> 

                    <li class="nav-header m-2" >OTHERS</li>
                    
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'student/changepassword/index';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-fingerprint text-success"></i>
                            <span class="nav-link-text">Change Password</span>
                        </a>
                    </li> 
                    <li class="nav-item mt-1 mb-1">
                        <a href="<?= base_url().'login/login/logout/student';?>" class="nav-link pt-2 pb-2 rounded">
                            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                            <span class="nav-link-text">SIGN OUT</span>
                        </a>
                    </li> 
                </ul>
            </div>
    </div>
  </nav>

    <div class="content-wrapper mt-5" >
        <div class=" position-fixed pb-6 bg-info " style="top:0px ; height:55%; width: 100%;">
        </div>
        <div class="row col-12 pt-2" style="margin-left:0px; margin-top: 90px;">

        <?php
            if ( !empty($this->session->flashdata('updateRSMsg')) ) {
            echo "
                <div class='alert alert-info col-12 alert-dismissible fade show' role='alert'>
                <span class='alert-icon'><i class='fas fa-info'></i></span>
                <span class='alert-text'>".$this->session->flashdata('updateRSMsg')."</span>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
            }

            if ( !empty($this->session->flashdata('updateRIMsg')) ) {
                echo "
                <div class='alert alert-success col-12 alert-dismissible fade show' role='alert'>
                <span class='alert-icon'><i class='fas fa-check'></i></span>
                <span class='alert-text'>".$this->session->flashdata('updateRIMsg')."</span>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
            }           
        ?>

                
        <?php if ( !empty($requirements) ) { $j = 0; rsort($requirements); foreach ($requirements as $requirement) { if ( $requirement['status'] == 1 ) { ?>

            <div class="modal fade" id="modal-requirement<?= $j;?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-xl " role="document">
                    <div class="modal-content ">
                        
                        <div class="modal-body p-0">
                        
                            <div class="card bg-secondary border-0 mb-0">
                                <div class="card-body px-lg-10 py-lg-10">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h6 class="heading-small text-muted mb-4"><?= $requirement['company_name'] ; ?></h6>
                                        <div class="pl-lg-4">

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="requirement_name" class="form-control-label">Requirement Name</label>
                                                    <div class="mb-3">
                                                        <div name="requirement_name" id="requirement_name" class="form-control "><?= $requirement['company_requirement_name'] ; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="post" class="form-control-label">Requirement Post</label>
                                                    <div class="mb-3">
                                                        <div name="post" id="post" class="form-control "><?= $requirement['company_requirement_post'] ; ?></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <label for="description" class="form-control-label">Requirement Description</label>
                                            <div class="mb-3">
                                                <div name="description " style="overflow:auto;" id="description" class="form-control pb-6 example"><?= $requirement['company_requirement_description'] ; ?></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="percentage" class="form-control-label">Percentage</label>
                                                    <div class="input-group mb-3">
                                                        <div class="form-control " name="percentage" id="percentage"><?= $requirement['company_requirement_min_percentage'] ; ?></div>
                                                        <span class="input-group-text ">%</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="cgpa" class="form-control-label">CGPA</label>
                                                    <div class="input-group mb-3">
                                                        <div class="form-control " name="cgpa" id="cgpa"><?= $requirement['company_requirement_min_cgpa'] ; ?></div>
                                                        <span class="input-group-text ">%</span>
                                                    </div>                                                
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="percentage_12" class="form-control-label">12<sup>th</sup> Percentage</label>
                                                    <div class="input-group mb-3">
                                                        <div class="form-control" name="percentage_12" id="percentage_12"><?= $requirement['company_requirement_min_percentage_12th'] ; ?></div>
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <label for="salary" class="form-control-label">Min Salary</label>
                                                    <div class="input-group">
                                                        <div name="salary" id="salary" class="form-control "><?= $requirement['company_requirement_min_salary'] ; ?></div>
                                                        <span class="input-group-text">/-</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label for="vacancy" class="form-control-label">Vacancy</label>
                                                    <div class="form-control mb-3" name="vacancy" id="vacancy"><?= $requirement['company_requirement_vacancy'] ;?></div>
                                                </div>

                                                <div class="col-sm-5">
                                                    <label for="date_last" class="form-control-label">Last Date</label>
                                                    <div class="form-control mb-3" name="date_last" id="date_last<?= $j;?>"><?= date('d-m-Y h:i A', strtotime($requirement['company_requirement_last_date'])) ;?></div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="date_exam" class="form-control-label">Exam Date-Time</label>
                                                        <div class="form-control" name="date_exam" id="date_exam<?= $j;?>"><?= date('d-m-Y h:i A', strtotime($requirement['company_requirement_exam_date'])) ;?></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="date_exam" class="form-control-label">Exam End</label>
                                                        <div class="form-control" name="date_exam" id="date_exam<?= $j;?>"><?= date('d-m-Y h:i A', strtotime($requirement['company_requirement_exam_date_end'])) ;?></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="date_interview" class="form-control-label">Interview Date-Time</label>
                                                        <div class="form-control" name="date_interview" id="date_interview<?= $j;?>"><?= date('d-m-Y h:i A', strtotime($requirement['company_requirement_interview_date'])) ;?></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="date_interview" class="form-control-label">Interview End</label>
                                                        <div class="form-control" name="date_interview" id="date_interview<?= $j;?>"><?= date('d-m-Y h:i A', strtotime($requirement['company_requirement_interview_date_end'])) ;?></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php $j++; } } } ?>

        <?php if ( !empty($requirements) ) { $i = 0;  foreach ($requirements as $requirement) { if ( $requirement['status'] == 1 ) { ?>

            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 ">
                <div class="card" style="min-width:260px;">
                    <div class="card-header example" style="max-height: 100px; overflow:auto;">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h4 class="mb-0"><?= $requirement['company_requirement_name'] ;?></h4>
                            </div>
                            <div class="col-12">
                                <h5 class="mb-0"><?= $requirement['company_requirement_post'] ;?> - <span class="card-text"><?= $requirement['company_requirement_vacancy'] ;?></span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body example" style="max-height:150px; overflow:auto; text-overflow: ellipsis; ">
                        <p class=" card-text mb-0"><strong>Last Date : </strong><?= date('d-m-Y' ,strtotime($requirement['company_requirement_last_date'])) ;?></p>
                        <p class=" card-text mb-0"><strong>Exam Date : </strong><?= date('d-m-Y' ,strtotime($requirement['company_requirement_exam_date']));?> - <?= date('h:i A' ,strtotime($requirement['company_requirement_exam_date'])) ;?></p>
                        <?= date('h:i A' ,strtotime($requirement['company_requirement_exam_date'])) ;?> to <?= date('h:i A' ,strtotime($requirement['company_requirement_exam_date_end'])) ;?></p>-->
                        <p class=" card-text mb-0"><strong>Interview Start : </strong><?= date('d-m-Y' ,strtotime($requirement['company_requirement_interview_date'])) ;?> to <?= date('h:i A' ,strtotime($requirement['company_requirement_interview_date'])) ;?></p>
                        <?= date('d-m-Y' ,strtotime($requirement['company_requirement_interview_date_end'])) ;?> to <?= date('h:i A' ,strtotime($requirement['company_requirement_interview_date_end'])) ;?></p>-->
                    </div>
                    <div class="row card-body">

                        <div class="col-6 text-left">

                            <?php if ( $requirement['company_requirement_min_percentage_12th'] <= $userInfo['r12'] and ( $requirement['company_requirement_min_percentage'] <= $userInfo['percentage_h'] or $requirement['company_requirement_min_cgpa'] <= $userInfo['cgpa_h'] ) ) { ?>

                                <a id="applied<?= $requirement['company_requirement_id'];?>" href="<?= base_url().'student/applied/apply/'.$requirement['company_id'].'/'.$requirement['company_requirement_id'].'/'.$userInfo['sid'] ;?>" type="button" class="<?= ( $requirement['status'] == 1 ) ? 'col-12 btn btn-sm btn-default' : 'col-11 btn btn-sm btn-primary' ; ?>"><?= ( $requirement['status'] == 1 ) ? 'Revoke' : 'Apply' ; ?></a>
                                
                            <?php } else { ?>

                                <button type="button" disabled class="col-12 btn btn-sm btn-primary "><a href="#"  style="pointer-events: none" class="text-white">Apply</a></button=>

                            <?php } ?>

                        </div>

                        <div class="col-6 text-right">
                            <button type="button" class="col-12 btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modal-requirement<?= $i;?>">Details</button>
                        </div>
                        
                    </div>
                    <div class="row pt-1 card-body">

                        <div class="col-6 text-left">
                            <a id="exam<?= $requirement['company_requirement_id'];?>" href="<?= base_url().'student/examination/index/'.$requirement['company_requirement_id'].'/'.$requirement['company_id'] ; ?>" target="_blank" type="button" class="col-12 btn btn-sm btn-success">Exam</a>
                        </div>

                        <div class="col-6 text-center">
                            <a id="interview<?= $requirement['company_requirement_id'];?>" href="<?= $requirement['link'] ; ?>" style="white-space: nowrap;" target="_blank" type="button" class="col-12 btn btn-sm btn-success">Interview</a>
                        </div>

                    </div>
                </div>
            </div>

        <?php $i++; } } } ?>

        <?php if ( !empty($requirements) ) { $k = 0;  foreach ($requirements as $requirement) { if ( $requirement['status'] == 1 ) { ?>

            <script type="text/javascript" >
                var countDownDateApplied = new Date('<?= date($requirement['company_requirement_last_date']);?>').getTime();

                var now = new Date().getTime();
                    
                var distanceApplied =  countDownDateApplied - now;
                                                                                                        
                if (distanceApplied < 0) {
                    
                    document.getElementById("applied<?= $requirement['company_requirement_id'];?>").style.pointerEvents = "none";
                    document.getElementById("applied<?= $requirement['company_requirement_id'];?>").style.backgroundColor = "#f5365c";
                    document.getElementById("applied<?= $requirement['company_requirement_id'];?>").style.borderColor = "#f5365c";
                }
                    
            </script>

            <script type="text/javascript" >
                var countDownDateExam = new Date('<?= date($requirement['company_requirement_exam_date']);?>').getTime();

                var now = new Date().getTime();
                    
                var distanceExam =  countDownDateExam - now;
                                                            
                if (distanceExam > 0) {

                        document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.pointerEvents = "none";
                        document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.backgroundColor = "#f5365c";
                        document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.borderColor = "#f5365c";
                    
                }
                    
            </script>

            <script type="text/javascript" >
                var countDownDateExamEnd = new Date('<?= date($requirement['company_requirement_exam_date_end']);?>').getTime();

                var now = new Date().getTime();
                    
                var distanceExamEnd =  countDownDateExamEnd - now;
                                                            
                if (distanceExamEnd < 0) {

                        document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.pointerEvents = "none";
                        document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.backgroundColor = "#f4f5f7";
                        document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.borderColor = "#f4f5f7";
                        document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.color = "#172b4d";
                    
                }
                    
            </script>

            <script type="text/javascript" >
                var countDownDateInterview = new Date('<?= date($requirement['company_requirement_interview_date']);?>').getTime();

                var now = new Date().getTime();
                    
                var distanceInterview =  countDownDateInterview - now;
                                                            
                if (distanceInterview > 0) {

                        document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.pointerEvents = "none";
                        document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.backgroundColor = "#f5365c";
                        document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.borderColor = "#f5365c";
                    
                }
                    
            </script>
            
            <script type="text/javascript" >
                var countDownDateInterviewEnd = new Date('<?= date($requirement['company_requirement_interview_date_end']);?>').getTime();

                var now = new Date().getTime();
                    
                var distanceInterviewEnd =  countDownDateInterviewEnd - now;
                                                            
                if (distanceInterviewEnd < 0) {

                        document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.pointerEvents = "none";
                        document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.backgroundColor = "#f4f5f7";
                        document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.borderColor = "#f4f5f7";
                        document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.color = "#172b4d";
                    
                }
                    
            </script>

            <script type="text/javascript" >
            
                <?php foreach ( $reqStatuses as $reqStatus) { if ( $reqStatus['company_requirement_id'] == $requirement['company_requirement_id'] && $reqStatus['company_id'] == $requirement['company_id'] ) {?>
                    <?php  if ( $reqStatus['company_requirement_exam_status'] != 1 or $requirement['company_requirement_exam_status'] != 1 ) { ?>

                            document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.pointerEvents = "none";
                            document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.backgroundColor = "#f4f5f7";
                            document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.borderColor = "#f4f5f7";
                            document.getElementById("exam<?= $requirement['company_requirement_id'];?>").style.color = "#172b4d";

                    <?php } ?>
                
                    <?php if ( $reqStatus['company_requirement_interview_status'] != 1 or $requirement['company_requirement_interview_status'] != 1 ) { ?>

                            document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.pointerEvents = "none";
                            document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.backgroundColor = "#f4f5f7";
                            document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.borderColor = "#f4f5f7";
                            document.getElementById("interview<?= $requirement['company_requirement_id'];?>").style.color = "#172b4d";

                    <?php } ?>
                <?php } }?>
                
                
            </script>


        <?php $k++; } } } ?>

        </div>
    </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
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

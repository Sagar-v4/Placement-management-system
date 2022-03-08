<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="icon" type="image/png" href="<?= base_url().'uploads/system/logo.svg';?>">
  <title>Forgot Password | OTP</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?= base_url("public/login/");?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url("public/login/");?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url("public/login/");?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="<?= base_url("public/login/");?>assets/css/soft-ui-dashboard.css?v=1.0.1" rel="stylesheet" />

  <style type="text/css">

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

    
    <script type="text/javascript">
        var countDownDateE = new Date(new Date("<?= date($time);?>").getTime() + 10*60000);

        var xE = setInterval(function() {

            var now = new Date();
                
            var distanceE = countDownDateE - now;

            console.log(countDownDateE);
            console.log(now);
            console.log(distanceE);

            var minutes = Math.floor((distanceE % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distanceE % (1000 * 60)) / 1000);
                
            document.getElementById("timer").innerHTML = minutes + " : " + seconds;
            document.getElementById("timer").style.fontSize = "15px";

            if (distanceE < 60000 || <?= ($status == 1) ? 0 : 1;?>) {
                document.getElementById("timer").style.color = "#f5365c";
            }else {
                document.getElementById("timer").style.color = "#82d616";
            }
            
            if (distanceE < 0 || <?= ($status == 1) ? 0 : 1;?>) {
                clearInterval(xE);
                document.getElementById("timer").innerHTML = "EXPIRED";
                document.getElementById("timer").style.fontSize = "15px";
                document.getElementById("timer").style.color = "#ea0606";

            }
            
        }, 1000);
    </script>
</head>

<body class="g-sidenav-show bg-white">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder col-xl-1 col-lg-1 col-md-2 col-sm-4 col-4  " href="<?= base_url().'home/home/index'; ?>">
              <img src="<?= base_url().'uploads/system/logo.svg';?>" class=" w-35">
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <div>
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </div>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2"  id="home" aria-current="page" href="<?= base_url().'home/home/index'; ?>">
                    <i class="fa fa-home opacity-6 text-info text-gradient me-1"></i>
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2" id="signUp" href="<?= base_url().'registration/register/index'; ?>">
                    <i class="fas fa-user-plus opacity-6 text-dark text-gradient me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" id="signIn" href="<?= base_url().'login/login/index'; ?>">
                    <i class="fas fa-key opacity-6 text-primary text-gradient me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="<?= base_url().'login/login/index'; ?>" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-primary">Sign In</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <section>
    <div class="page-header section-height-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-8 col-sm-10 d-flex flex-column mx-auto">
            <div class="card card-plain mt-4">

            <?php
              if ( !empty($this->session->flashdata('msgF')) ) {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <span class='alert-text'><strong class='text-white text-bold'>".$this->session->flashdata('msgF')."</strong></>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button></div>";
              }
              if ( !empty($this->session->flashdata('msgS')) ) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <span class='alert-text'><strong class='text-white text-bold'>".$this->session->flashdata('msgS')."</strong></>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button></div>";
              }
         
            ?>

              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Forgot Password</h3>
                <p class="mb-0">Enter Received OTP on email</p>
              </div>

              <div class="card-body">

                <form action="<?= base_url().'forgot/confirm_otp/otp_confirm/'.$id; ?>" name="loginForm" id="loginForm" method="POST" role="form text-left" autocomplete="off">
                                    
                  <label for="token" class="form-control-label">OTP</label>
                  <div class="mb-3">
                    <input  type="number" onKeyPress="if(this.value.length==6) return false;" value="<?= set_value('token');?>" name="token" id="token" class="form-control <?= form_error('token') ? 'is-invalid' : '';?>" placeholder="OTP" aria-label="OTP" aria-describedby="otp-addon" />
                  </div>

                  <div class="row">

                    <div class="col-4 text-left">
                      <p id="timer" class="btn col-12 px-0 btn-sm"></p>
                    </div>
                  
                    <div class="col-8 text-right">
                      <a href="<?= base_url().'forgot/confirm_otp/otp_resend/'.$id; ?>" class="btn px-4 btn-secondary btn-sm">Resend OTP</a>
                    </div>

                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 mt-2 mb-0">Confirm</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url("public/login/");?>assets/img/curved-images/curved6.jpg')"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?= base_url("public/login/");?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url("public/login/");?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url("public/login/");?>assets/js/plugins/smooth-scrollbar.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
  <script type="text/javascript" >
  
  Mousetrap.bind('ctrl+alt+h', home);
  Mousetrap.bind('ctrl+alt+u', signUp);
  Mousetrap.bind('ctrl+alt+i', signIn);
  Mousetrap.bind('ctrl+alt+e', email);
  Mousetrap.bind('ctrl+alt+p', password);
  
  function home() {
  document.getElementById("home").click();
  }
  
  function signUp() {
  document.getElementById("signUp").click();
  }
  
  function signIn() {
  document.getElementById("signIn").click();
  }
  
  function email() {
  var email = $('#email');
  email.val('');
  email.focus();
  }
  
  function password() {
  var password = $('#password');
  password.val('');
  password.focus();
  }
  </script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
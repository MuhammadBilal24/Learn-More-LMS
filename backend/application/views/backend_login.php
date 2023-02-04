<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SignIn | LMS Backend</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?=base_url()?>assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>SignIn | LMS Services</h4>
              </div>
              <div class="card-body">
              <form method="POST" id="formcheck" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email" ;" >Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <!-- <div class="invalid-feedback">
                      Please fill in your email
                    </div> -->
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" ;" class="control-label">Password</label>
                      <!-- <div class="float-right">
                        <a href="auth-forgot-password.html" style="color: green;" class="text-small">
                          Forgot Password?
                        </a>
                      </div> -->
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <!-- <div class="invalid-feedback" style="color: green;">
                      please fill in your password
                    </div> -->
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me" style="color: green;">Remember Me</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <button type="button"  id="loginbtn" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      SignIn
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Developed By</div>
                </div>
                <div class="row sm-gutters">
                   <div class="col-12">
                    <a class="btn btn-block" style="background-color:silver;color:black; font-size:bolder">
                      <span class=""></span> LMS SERVICES
                    </a>
                  </div>  
                <!-- <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div> -->
                </div>
              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?=base_url()?>assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?=base_url()?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?=base_url()?>assets/js/custom.js"></script>
  <!-- Sweet Alert  -->
  <script src="<?=base_url()?>assets/js/sweetalert.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>
<script>
  // check functions
  $('#loginbtn').on('click',function(){
    var email=$('#email').val();
    var password=$('#password').val();
    //var form=$('#formcheck').serialize();
    if(email=="")
    {
      swal({
        icon:"error",
        title:"Enter Email Username",
        timer:1500
      })
    }
    else if (password=="")
    {
      swal({
        icon:"error",
        title:"Enter Password",
        timer:1500
      })
    }
    else{
      $.ajax({
      type:'post',
      url:'<?=base_url()?>Backend_login/check',
      data:{email:email, password:password},
      success:(function(data)
      {
        if(data=="Correct")
        {
          swal({
          icon:"success",
          title:"Login Success",
          text:"Welcome Learning Management System Backend",
          timer:1500
          }).then(()=>{
            window.location='<?=base_url()?>Dashboard';
          })
        }
        else if(data=="Email")
        {
          swal({
            icon:"error",
            title:" Try Again",
            text:'Email is Correct, Password is invalid',
            showConfirmButton: true,
          })
        }
        else if(data=="Wrong")
        {
          swal({
            icon:"error",
            title:" Opps",
            text:'Email & Password is Invalid',
            showConfirmButton: true,
          })
        }
        else
        {
          swal({
            icon:"error",
            title:" Try Again",
            showConfirmButton: true,
          })
        }
        
      })
    })
    }
    

  })
</script>
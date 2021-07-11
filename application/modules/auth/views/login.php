<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/colorlibLogin/images/icons/favicon.ico') ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/vendor/animate/animate.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/vendor/css-hamburgers/hamburgers.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/vendor/animsition/css/animsition.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/vendor/select2/select2.min.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/vendor/daterangepicker/daterangepicker.css') ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/colorlibLogin/css/main.css') ?>">
    <!--===============================================================================================-->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!--===============================================================================================-->

<body>
    <div class="limiter">


        <div class="container-login100" style="background-image: url(<?= base_url('assets/colorlibLogin/images/bg_login_pcr2.jpg') ?>);">

            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form action="<?php base_url('Login/login()') ?>" id="quickForm" class="login100-form validate-form flex-sb flex-w" method="POST" role="form" id="quickForm" method="post">
                    <span class="login100-form-title p-b-53">
                        Sistem WBS
                        <h2></h2>
                        <img class="kiri" src="<?= base_url('assets/colorlibLogin/images/small_logo_pcr.png') ?>">

                    </span>
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Username
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>

                      
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn" id='login'>
                            Login
                        </button>
                    </div>

                   
                </form>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url('assets/colorlibLogin/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/colorlibLogin/vendor/animsition/js/animsition.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/colorlibLogin/vendor/bootstrap/js/popper.js') ?>"></script>
    <script src="<?= base_url('assets/colorlibLogin/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/colorlibLogin/vendor/select2/select2.min.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/colorlibLogin/vendor/daterangepicker/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets/colorlibLogin/vendor/daterangepicker/daterangepicker.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/colorlibLogin/vendor/countdowntime/countdowntime.js') ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/colorlibLogin/js/main.js') ?>"></script>
    <!-- jQuery -->
    <script src="<?= base_url('assets/dashboard/plugins/jquery/jquery.min.js') ?>"></script>

</body>



<script>
  $("#login").on('click',function() {
      $.ajax({
        url : '<?php echo base_url('login/login') ?>',
        type : 'POST',
        data : $('#quickForm').serialize(),
        dataType : 'JSON',
        success : function(data) {
          if (data.status) {
            toastr.success('Login Berhasil!');
            var url = '<?php echo base_url('dashboard') ?>';
            window.location = url;
          }else if (data.error) {
            toastr.error(
              data.pesan
            );
          }else{
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').addClass('is-invalid');
                    $('[name="'+data.inputerror[i]+'"]').closest('.kosong').append('<span></span>');
                    $('[name="'+data.inputerror[i]+'"]').next().next().text(data.error_string[i]).addClass('invalid-feedback');
                }
          }
        }
      });
      
  });

</script>
</html>
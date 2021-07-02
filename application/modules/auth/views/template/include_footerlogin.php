<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="<?= base_url('assets/colorlibLogin/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/colorlibLogin/vendor/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/colorlibLogin/vendor/bootstrap/js/popper.js') ?>X"></script>
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

</body>

<script>
   $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    

    $(".login").click(function() {
      $.ajax({
        url : '<?php echo base_url('auth/login') ?>',
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

});
    
</script>

</html>
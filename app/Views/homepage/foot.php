<!-- Javascript files-->
      <script src="<?= base_url() ?>js/jquery.min.js"></script>
      <script src="<?= base_url() ?>js/popper.min.js"></script>
      <script src="<?= base_url() ?>js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url() ?>js/jquery-3.0.0.min.js"></script>
      <script src="<?= base_url() ?>js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?= base_url() ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?= base_url() ?>js/custom.js"></script>
      <!-- javascript --> 
      <script src="<?= base_url() ?>js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
</script> 
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  </div>
  <p class="" style="text-align: center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
<!--  <script src="--><?php //echo base_url(); ?><!--assets/js/crewjob.js"></script>-->
<script>
  var base_url = "<?php echo base_url(); ?>";
</script>
  <script src="<?php echo base_url(); ?>assets/js/petar.js"></script>
</body>
</html>


<footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


<?php

if (isset($this->session->userdata['logged_in'])) {
  $user_id = ($this->session->userdata['logged_in']['user_id']);
}else{
  echo "ERROR";
}
?>

    <!-- jQuery -->
    <script src="<?php echo base_url(''); ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(''); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(''); ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(''); ?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(''); ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(''); ?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(''); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(''); ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(''); ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(''); ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(''); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(''); ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(''); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(''); ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
    <!-- <script src="<?php echo base_url(''); ?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script> -->
    
    <!-- Datatables -->
    <script src="<?php echo base_url(''); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/pdfmake/build/vfs_fonts.js"></script>

    <script src="<?php echo base_url(''); ?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/google-code-prettify/src/prettify.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(''); ?>vendors/ckfinder/ckfinder.js"></script>
    
    <script src="<?php echo base_url(''); ?>vendors/ckeditor/config.js"></script>
    <!-- Custom Theme Scripts -->
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url(''); ?>vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Dropzone.js -->
    <script src="<?php echo base_url(''); ?>vendors/dropzone/dist/min/dropzone.min.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url(''); ?>vendors/validator/validator.js"></script>
    <script src="<?php echo base_url(''); ?>build/js/custom.min.js"></script>




<script>
  
$(document).ready(function(){
   function load_unseen_notification(view=''){
      $.ajax({
        url: "<?php echo base_url(); ?>/index.php/control_solutions/show_notification/<?php echo $user_id; ?>",
        method:"POST",
        data:{view:view},
        dataType:"json",
        //error: function(xhr, status, error) { alert(error); },
        success:function(data)
       
        {
       
        //console.log(data[0].unseen_notification);
       
         if(data.unseen_notification > 0)
         {
          $('.badge').html(data.unseen_notification);
         }
       
        }
      });
   }
   load_unseen_notification();
   function load_unsolved_problem(view=''){
      $.ajax({
        url: "<?php echo base_url(); ?>/index.php/control_problem_post/count_unsolved_problem/",
        method:"POST",
        data:{view:view},
        dataType:"json",
        //error: function(xhr, status, error) { alert(error); },
        success:function(data)
       
        {
       
        //console.log(data[0].unseen_notification);
       
         if(data.unsolved_problem > 0)
         {
          $('.ticker').html(data.unsolved_problem);
         }else{
            $('.ticker').html(0);
         }
       
        }
      });
   }

   load_unsolved_problem();
});
</script>


  </body>
</html>
 
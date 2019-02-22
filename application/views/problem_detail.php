<?php

if (isset($this->session->userdata['logged_in'])) {
      $user_id = ($this->session->userdata['logged_in']['user_id']);
      $usertype = ($this->session->userdata['logged_in']['usertype']);
    }
?>




        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="page-title">
              <div class="title_left">
                <h3>সমস্যা ও সমাধান </h3>
              </div>
              <div class="title_right">
                
              </div>
            </div>

                
            <div class="row"> <!-- row start -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <div class="row">

                    <!-- start project-detail sidebar -->
                     <div class="col-md-6 col-sm-6 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                          <h2>সমস্যা সম্পর্কিত তথ্য</h2>
                          <div class="clearfix"></div>
                        </div>

                        <?php
                          if ($fetch_problem_details->num_rows()>0) {
                           foreach ($fetch_problem_details->result() as $row) {
                            $id = $row->id;
                           
                        ?>
                        <div class="panel-body">
                          <div class="project_detail">

                            <p class="title">মাছের নাম</p>
                            <p><?php echo $row->fish_name; ?></p>
                            <p class="title">পোনা ছাড়ার পর থেকে অতিবাহিত সময়</p>
                            <p><?php echo $row->fish_age_month;echo "\n"; echo $row->fish_age_day; ?></p>
                            <p class="title">পুকুরের ধরন</p>
                            <p><?php echo $row->pond_type; ?></p>
                            <img class="problem_image img-responsive avatar-view" src="<?php echo base_url(''); ?>images/<?php echo $row->problem_image?>" alt="Avatar" title="Change the avatar">
                          </div>
                          <h3 class="green"><i class="fa fa-paint-brush"></i> বিস্তারিত বর্ণনা </h3>

                          <p><?php echo $row->problem_details; ?></p>
                          <br />
                        </div>
                        <?php } }?>
                      </section>

                    </div>

                    
                    <!-- end project-detail sidebar -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form action="" id="solution_form" method="post" class="form-horizontal form-label-left" accept-charset="utf-8" novalidate>
                      
                      
                             <?php

                              if ($fetch_solution->num_rows()>0){
                                   foreach ($fetch_solution->result() as $row) {
                                        if ($row->specialist_id == $user_id) {
                            ?>
                              <div class="x_title">
                                <h2><small>সমস্যার সমাধান এখানে লিখুন </small></h2>
                              
                                <div class="clearfix"></div>
                             </div>
                                 
                              <div class="x_content">
                                    <div id="alert-success" style="display: none;" class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong>ধন্যবাদ </strong>এডিট সম্পন্ন হয়েছে   
                                  </div>
                                  <div id="alert-danger" style="display: none;" class="alert alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong>সার্ভার সম্পর্কিত সমস্যা !! </strong> দয়া করে আবার চেষ্টা করুন 
                                  </div>
                                    <?php
                                      //if ($row->status == 1) {
                                    ?>
                                    <textarea id="editor1" required="required" class="ckeditor" name="details_solution" rows="10" cols="80">
                                      <?php echo $row->solution_details; ?>
                                    </textarea>
                                    <?php// }else{ ?>
                                    <!-- <p>Nothing To show</p> -->
                                    <?php //} ?>
                                    <br />
                                </div>
                                <br />
                                
                    
                                  <input type="button" class="btn btn-primary submit" name="edit" id="edit" value="এডিট">
                                 <?php }else{   ?> 

                                  <div class="x_title">
                                    <h2><small>সমস্যার সমাধান </small></h2>
                                   
                                    
                                  <div class="clearfix"></div>
                                  </div>
                            
                                  <div class="x_content">
                                     <p><?php echo $row->solution_details; ?></p>
                                    <br />
                                  </div>
                                  <br />
                                   <!-- <div class="mtop20"> -->
                                <?php } } }else{ ?>
                                
                                 <div class="x_title">
                                     <h2><small>সমস্যার সমাধান </small></h2>
                        
                                  <div class="clearfix"></div>
                                  </div>

                                  <?php 
                                    if ($usertype == "মৎস চাষি") { ?>
                                      <p>Nothing to Show</p>
                                  <?php   }else{
                                  ?>
                                  <div id="alert-danger" style="display: none;" class="alert alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong>সার্ভার সম্পর্কিত সমস্যা !! </strong> দয়া করে আবার চেষ্টা করুন 
                                  </div>
                                  <div id="alert-success" style="display: none;" class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong>ধন্যবাদ </strong>এডিট সম্পন্ন হয়েছে   
                                  </div>



                                  <div class="x_content">
                                    <label for="problem_title">সমস্যার টাইটেল দিন </label>
                                    <input type="text" name="problem_title" id="problem_title">
                                    <label for="problem_title">সমাধান </label>
                                   <textarea id="editor1" required="required" class="ckeditor" name="details_solution" rows="10" cols="80"></textarea>
                                   <br />

                                    <input type="button" class="btn btn-success submit" name="insert" id="insert" value="submit">
                                    <input style="display: none;" type="submit" class="btn btn-primary submit" name="edit" id="edit" value="এডিট">
                                    <br />
                                  </div>
                                  <?php } ?>
                                  <br />
                                    
                                  <!-- </div> -->
                                  <?php } ?>

                        </form>
                      </div>
                    </div>

                  </div>
                  <!-- x-content end -->
                </div>
                <!-- x-panel end -->
              </div>
              <!-- clo-md-12 end -->
            </div>
            <!-- row end -->
        </div>
        <!-- /page content -->






<script>
  
      $(document).ready(function(){
         $("#insert").click(function(){
          var problem_id = <?php echo $id ?>;
          var user_id = <?php echo $user_id ?>;
          // var solution_details = $("textarea.ckeditor").val();
          var problem_title = $('#problem_title').val();
          var solution_details = CKEDITOR.instances.editor1.getData();
          if (solution_details !='' && problem_title !='') {
            $.ajax({
              url: "<?php echo base_url('/index.php/control_solutions/insert_solution/') ?>",
              type: 'post',
              data: { "problem_id": problem_id, "user_id": user_id, "solution_details" : solution_details,"problem_title" : problem_title},
              success: function(data){
                $('#insert').hide();
                $('#edit').show();
                setTimeout(function(){
                  $('#alert-success').show();
                  $("#alert-success").fadeOut();
                },5000);
              }
            });
          }else{
            $('#alert-danger').show();
            setTimeout(function(){
                  $("#alert-danger").fadeOut();
                },5000);
            
          }

          
         });


         $('#edit').click(function(){
            var problem_id = <?php echo $id ?>;
            var solution_details = CKEDITOR.instances.editor1.getData()
            if (solution_details !='') {
            $.ajax({
                url  : "<?php echo base_url('/index.php/control_solutions/edit_solution') ?>",
                type : 'post',
                
                data : { "problem_id": problem_id, "solution_details" : solution_details},
                success: function(data){
                    $('#alert-success').show();
                    setTimeout(function(){
                  $("#alert-success").fadeOut();
                },3500);
                }
            });
            }else{
              $('#alert-danger').show();
            setTimeout(function(){
                  $("#alert-danger").fadeOut();
                },3500);
            }
            //return false;
        });

      });
</script>
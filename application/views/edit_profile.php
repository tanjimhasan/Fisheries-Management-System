
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="page-title">
              <div class="title_left">
              </div>
              <div class="title_right">
                
              </div>
            </div>

            <!-- /page content -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>সংযোজন পেজ <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <div id="alert-success" style="display: none;" class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <strong>ধন্যবাদ </strong>এডিট সম্পন্ন হয়েছে   
                    </div>
                    <div id="wizard" class="form_wizard wizard_horizontal">

                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">১</span>
                            <span class="step_descr">
                                              প্রোফাইল ডাটা <br />
                                              <small></small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">২</span>
                            <span class="step_descr">
                                              প্রোফাইল পিকচার<br />
                                              <small></small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">৩</span>
                            <span class="step_descr">
                                              পাসওয়ার্ড পরিবর্তন <br />
                                              <small></small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <?php
                          if ($fetch_user_details->num_rows()>0) {
                           foreach ($fetch_user_details->result() as $row) {
                            $user_id = $row->user_id;
                           
                        ?>
                        <form action="" class="form-horizontal form-label-left" enctype="multipart/form-data" accept-charset="utf-8">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">নামের প্রথম অংশ <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->firstname; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">নামের শেষ অংশ<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->lastname; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">ই-মেইল</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="email" class="form-control col-md-7 col-xs-12" type="email" name="email" value="<?php echo $row->email; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="mobile" class="control-label col-md-3 col-sm-3 col-xs-12">মোবাইল নাম্বার</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="mobile" class="form-control col-md-7 col-xs-12" type="text" name="mobile" value="<?php echo $row->mobile; ?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">ঠিকানা</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address" value="<?php echo $row->address; ?>">
                            </div>
                          </div>
                          <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 col-xs-12">
                              <a id="edit_info" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>সেভ </a>
                          </div>
                          

                        </form>
                        <?php } }?>
                      </div>
                      <div id="step-2">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>এখানে আপনার প্রোফাইলের ছবি পরিবর্তন করুন  </h2>
                                
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <p>আপনার ছবি সিলেক্ট করে সেভ করুন </p>
                                <div id="step-1">
                                <?php
                                  if ($fetch_user_details->num_rows()>0) {
                                   foreach ($fetch_user_details->result() as $row) {
                                    
                                   
                                ?>
                                <form method="post" action="<?php echo base_url('/index.php/user/edit_profile_image/'.$user_id); ?>" enctype="multipart/form-data">
                                   
                                    <div class="row">
                                      <div class="col-md-4 col-md-offset-4">
                                        <div class="edit-image">
                                             <img style="height: 200px;width: 200px;" class="img-responsive avatar-view text-center" src="<?php echo base_url(''); ?>images/<?php echo $row->profileImage; ?>" alt="Avatar" title="Change the avatar">
                                             <!-- <input type="hidden" name="pre_profileImage" id="pre_profileImage"> -->
                                             <input type="file" name="profileImage" id="profileImage">
                                             
                                             <input type="submit" class="btn btn-success submit" name="insert" value="সেভ ইমেজ">
                                        </div>
                                      </div>
                                    </div>
                                </form>
                                <?php } }?>
                                <br />
                                <br />
                                <br />
                                <br />
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div id="step-3">
                        <h2 class="StepTitle">আপনার পাসওয়ার্ড পরিবর্তন করুন</h2>
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">পুরাতন পাসওয়ার্ড<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="old_password" name="old_password" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">নতুন  পাসওয়ার্ড<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="password" name="passworde" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 col-xs-12">
                              <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>সেভ পাসওয়ার্ড</a>
                          </div>
                        </form>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
          </div>
        </div>

<script>
  
      $(document).ready(function(){
         


         $('#edit_info').click(function(){
          var id = <?php echo $user_id ?>;
          var firstname = $("#first-name").val();
          var lastname = $("#last-name").val();
          var mobile = $("#mobile").val();
          var address = $("#address").val();
          var email = $("#email").val();
            if (firstname !=''&& lastname !=''&& mobile !=''&& address !=''&& email !='') {
            $.ajax({
                url  : "<?php echo base_url('/index.php/user/edit_profile_info') ?>",
                type : 'post',
                
                data : { "user_id": id, "firstname": firstname, "lastname" : lastname, "mobile" : mobile, "address" : address, "email" : email},
                success: function(data){
                  if ($.trim(data) == "no_edit") {
                    $('#alert-danger').show();
                  setTimeout(function(){
                  $("#alert-danger").fadeOut();
                },3500);
                  }
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
            
        });

      });
</script>
        <!-- footer content -->

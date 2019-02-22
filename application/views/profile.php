

        <!-- /top navigation -->

       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <?php
                  if ($this->session->flashdata('success')) {
                ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>স্বাগতম!! </strong>আপনি আপনার প্রোফাইল এ প্রবেশ করেছেন  
                </div>
                <?php }?>
              </div>
<?php

if (isset($this->session->userdata['logged_in'])) {
  $user_id = ($this->session->userdata['logged_in']['user_id']);
  $firstname = ($this->session->userdata['logged_in']['firstname']);
  $usertype = ($this->session->userdata['logged_in']['usertype']);
  $profileImage = ($this->session->userdata['logged_in']['profileImage']);
  $email = ($this->session->userdata['logged_in']['email']);
  $mobile = ($this->session->userdata['logged_in']['mobile']);
  $address = ($this->session->userdata['logged_in']['address']);
}else{
  echo "ERROR";
}
?>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>ইউজার প্রোফাইল <small></small></h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url(''); ?>images/<?php echo $profileImage?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $firstname; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $address; ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $usertype; ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank"><?php echo $email; ?></a>
                        </li>
                      </ul>

                      <a href="<?php echo base_url(); ?>/index.php/user/edit_user_profile/<?php echo $user_id; ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>সংযোজন</a>
                      <br />
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <!-- <div class="profile_title">
                        <div class="col-md-6">
                          <h2>ইউজার একটিভিটি রিপোর্ট</h2>
                        </div>
                      </div> -->

                      <!-- <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">সাম্প্রতিক কার্যাবলী </a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">জীবন বৃত্তান্ত</a>
                          </li>
                        </ul> -->
                        <!-- <div id="myTabContent" class="tab-content"> -->
                          <!-- <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            

                          </div> -->
                          <!-- <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <textarea class="ckeditor" name="fish_culi_info" id="editor1" rows="10" cols="80">
                              

                              <p>তখন মেঠো ইঁদুর চলল শহুরে ইঁদুরের কাছে। রাতের জন্য তারা মেঝের নিচে অপেক্ষা করল। লোকেরা এসে খেয়ে চলে গেল। তখন শহুরে ইঁদুর তার অতিথিকে খাবার ঘরে নিয়ে চলল এক গর্ত দিয়ে। তারা দুজনেই চড়ে বসল টেবিলের উপর। সাধারণ মেঠো ইঁদুর জীবনে কখনও এমন ভালো খাবার চোখেও দেখেনি।</p>
                            </textarea>
                            
                          </div> -->
                        <!-- </div> -->
                      <!-- </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->

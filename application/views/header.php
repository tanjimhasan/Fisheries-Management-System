

<?php

if (isset($this->session->userdata['logged_in'])) {
  $user_id = ($this->session->userdata['logged_in']['user_id']);
  $firstname = ($this->session->userdata['logged_in']['firstname']);
  $usertype = ($this->session->userdata['logged_in']['usertype']);
  $profileImage = ($this->session->userdata['logged_in']['profileImage']);
  $mobile = ($this->session->userdata['logged_in']['mobile']);
  $address = ($this->session->userdata['logged_in']['address']);
}else{
  echo "ERROR";
}
?>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <?php
                if (isset($this->session->userdata['logged_in'])) {

              ?>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(''); ?>images/<?php echo $profileImage?>" alt=""><?php echo $firstname; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url('index.php/user/user_profile_show'); ?>"> প্রোফাইল</a></li>
                    <!-- <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">৪০%</span>
                        <span>সেটিং </span>
                      </a>
                    </li> -->
                    <li><a href="<?php echo base_url('index.php/user/log_out'); ?>"><i class="fa fa-sign-out pull-right"></i> লগ আউট </a></li>
                  </ul>
                </li>
                <?php 
                  if ($usertype =="মৎস চাষি") { ?>
                    <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bullhorn"></i>
                    
                    <span class="my-bg badge bg-green"></span>
                    
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a  href="<?php echo base_url(); ?>/index.php/control_problem_post/problem_list/<?php echo $user_id; ?>">
                        
                        <span>
                          <span>সমাধান </span>
                        </span>
                        <span class="message">
                          
                        </span>
                      </a>
                    </li>
                    <!-- <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li> -->
                  </ul>
                </li>
              <?php    }
                  
                ?>
                
              </ul>

            
            </nav>
          </div>
        </div>
  <?php }else{ ?>

  <ul class="nav navbar-nav navbar-right">
            </nav>
          </div>
        </div>
  </ul>
        <?php }?>


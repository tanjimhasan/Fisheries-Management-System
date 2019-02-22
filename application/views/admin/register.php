<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// if (isset($this->session->userdata['logged_in'])) {

// header("location: http://localhost/f_m_s/index.php/user/user_login");
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fisheries Management System</title>

    <!-- Bootstrap -->
    <link href="http://localhost:/f_m_s/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost:/f_m_s/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost:/f_m_s/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="http://localhost:/f_m_s/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost:/f_m_s/build/css/custom.min.css" rel="stylesheet">
    <link href="http://localhost:/f_m_s/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
    <div class="container" style="width: 1170px !important">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <?php
                  if ($this->session->flashdata('success')) {
                ?>
               <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>ধন্যবাদ!! </strong>আপনার রেজিস্ট্রেশন সম্পন্ন হয়েছে 
                </div>
                <?php
                  }else if($this->session->flashdata('error')){
                ?>
               <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>সার্ভার সম্পর্কিত সমস্যা !! </strong> দয়া করে আবার চেষ্টা করুন 
                </div>
                <?php
                  }else if($this->session->flashdata('email_error')){
                ?>
               <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>দুঃখিত !!</strong> আপনার ইমেইল এড্রেসটি পূর্বে একবার ব্যাবহার করা হয়েছে  
                </div>
                <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="post" action="<?php echo base_url('/index.php/admin/account/register'); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left" accept-charset="utf-8" novalidate>
              <div class="register card">
                  <div class="card-block text-center">
                      <div class="user-icon">
                          <i class="fa fa-user"></i>
                      </div>

                      <h4 class="text-light">এডমিন রেজিস্ট্রেশন ফরম</h4>

                      <div class="user-details">

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group item">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                                  <i class="fa fa-user-md"></i>
                                          </span>
                                          <input id="firstname" class="form-control col-md-7 col-xs-12" data-validate-length-range="18" name="firstname" placeholder="নামের প্রথম অংশ" required="required" type="text">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group item">
                                  <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">
                                                  <i class="fa fa-user-md"></i>
                                              </span>

                                      <input id="lastname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="lastname" placeholder="নামের শেষ অংশ" required="required" type="text">
                                  </div>
                                </div>
                              </div>
                          </div>

                          
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group item">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                                  <i class="fa fa-envelope-o"></i>
                                              </span>

                                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="ই-মেইল">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-md-6">
                                    <div class="form-group item">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                                  <i class="fa fa-envelope-o"></i>
                                              </span>

                                          <input type="email" id="Retype_email" name="Retype_email" required="required" class="form-control col-md-7 col-xs-12" placeholder="retype ই-মেইল">
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="form-group item">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                                  <i class="fa fa-key"></i>
                                              </span>

                                             <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" placeholder="পাসওয়ার্ড">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                                  <i class="fa fa-key"></i>
                                              </span>

                                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required" placeholder="পাসওয়ার্ডটি আবার লিখুন">
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group item">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">
                                                 আপনার ছবি
                                              </span>

                                           <input id="pro_image" class="form-control col-md-7 col-xs-12" name="pro_image"  type="file">
                                      </div>
                                  </div>
                              </div>
                          </div>

                          
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group item">
                                  <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1">
                                              <i class="fa fa-envelope-o"></i>
                                          </span>

                                         <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12 required" placeholder="মোবাইল নাম্বার">
                                  </div>
                                </div>
                              </div>
                          </div>
                          

                          <div class="form-group item">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">
                                          <i class="fa fa-address-book-o"></i>
                                      </span>
                                  <textarea id="address" required="required" name="address" class="form-control col-md-7 col-xs-12" placeholder="ঠিকানা"></textarea>
                              </div>
                          </div>

                          <div class="row">
                            
                            <div class="col-md-6 pull-left">
                              <input type="hidden" name="action" value="add">
                              <input class="btn btn-primary btn-lg btn-block register-btn" type="submit" value="রেজিস্টার" name="register">
                            </div>
                          </div>
                           <a href="<?php echo base_url('/index.php/user/user_login_show'); ?>" class="pull-left">Back To Login</a>
                      </div>
                  </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    <!-- jQuery -->
    <script src="http://localhost:/f_m_s/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost:/f_m_s/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- validator -->
    <script src="http://localhost:/f_m_s/vendors/validator/validator.js"></script>
    <script src="http://localhost:/f_m_s/build/js/custom.min.js"></script>
  </body>
</html>

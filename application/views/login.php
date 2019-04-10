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
  
      

      <div class="container" style="width: 1170px">
        <div class="row">
          <div class="col-md-offset-4 col-md-4">
            <div class="page-title">
              <?php
                  if ($this->session->flashdata('invalid_error')) {
                ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>দুঃখিত!! </strong> আপনি ভুল ইমেইল অথবা পাসওয়ার্ড দিয়েছেন 
                </div>
                <?php }elseif($this->session->flashdata('status_error')){?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>দুঃখিত!! </strong> আপনার অ্যাকাউন্টটি অকার্যকর  
                </div>
              <?php } ?>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
                    <div class="login card auth-box mx-auto my-auto">
                        <div class="card-block text-center">
                            <div class="user-icon">
                                <i class="fa fa-user"></i>
                            </div>

                           

                            <form method="post" action="<?php echo base_url('/index.php/user/user_login'); ?>" accept-charset="utf-8" novalidate>
                                  <h2>লগইন ফরম</h2>
                                  <div>
                                    <input name="email" type="email" class="form-control" placeholder="ই-মেইল" required="required" />
                                  </div>
                                      
                                      <div style="margin: 20px 0;">
                                        <select name="usertype" class="form-control">
                                          <option value="none">ইউজার টাইপ</option>
                                          <option value="মৎস চাষি">মৎস চাষি</option>
                                          <option value="বিশেষজ্ঞ">বিশেষজ্ঞ </option>
                                        </select>
                                      </div>
                                    
                                  <div>
                                    <input name="password" type="password" class="form-control" placeholder="Password" required="required" />
                                  </div>
                                  <div style="margin-top: 10px;">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block submit" name="register" value="লগ ইন">
                                    
                                    <!-- <div class="user-links">
                               
                                
                            </div> -->
                                    <a class="pull-right" href="#">পাসওয়ার্ড হারিয়ে ফেলেছেন?</a>
                                    <a class="pull-left" href="<?php echo base_url('/index.php'); ?>">হোম পেজে যান </a>
                                  </div>

                                  <div class="clearfix"></div>

                                  <div class="separator">
                                    <p class="change_link">আপনি কি সাইট টিতে নতুন ??
                                      <a href="<?php echo base_url('/index.php/user'); ?>" class="to_register">নতুন একাউন্ট তৈরী করুন </a>
                                    </p>

                                    <div class="clearfix"></div>
                                    <br />
                                  </div>
                                </form>

                           

                            

                        </div>
                    </div>
                </div>
        </div>
      
      
    </div>
    <!-- jQuery -->
    <script src="http://localhost:/f_m_s/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost:/f_m_s/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- validator -->
    <script src="http://localhost:/f_m_s/vendors/validator/validator.js"></script>
  </body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="page-title">
              <div class="title_left">
                <?php
                  if ($this->session->flashdata('success')) {
                ?>
               <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>স্বাগতম!! </strong>আপনার রেজিস্ট্রেশন সম্পন্ন হয়েছে 
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
              <div class="title_right">
              </div>
            </div>
            <!-- /page content -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>রেজিস্ট্রেশন ফরম</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="post" action="<?php echo base_url('/index.php/user/user_registration'); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left" accept-charset="utf-8" novalidate>
                      <span class="section">ফরমে প্রয়োজনীয় তথ্য দিয়ে রেজিস্ট্রেশন সম্পন্ন করুন </span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">নামের প্রথম অংশ<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="firstname" class="form-control col-md-7 col-xs-12" data-validate-length-range="18" name="firstname" placeholder="নামের প্রথম অংশ" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">নামের শেষ অংশ <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lastname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="lastname" placeholder="নামের শেষ অংশ" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_image">আপনার ছবি<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pro_image" class="form-control col-md-7 col-xs-12" name="pro_image" required="required" type="file">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">ই-মেইল <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">ই-মেইল টি আবার লিখুন <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usertype">ইউজার ধরন<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="usertype" id="usertype" class="form-control">
                            <option value="">ইউজার টাইপ</option>
                            <option value="মৎস চাষি">মৎস চাষি</option>
                            <option value="বিশেষজ্ঞ">বিশেষজ্ঞ</option>
                            <option value="নিয়ন্ত্রক">নিয়ন্ত্রক</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">পাসওয়ার্ড</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">পাসওয়ার্ডটি আবার লিখুন </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">মোবাইল নাম্বার <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">ঠিকানা <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" required="required" name="address" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">রিসেট করুন</button>
                          <input name="register" type="submit" class="btn btn-success" value="রেজিস্টার">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
        </div>


        <!-- footer content -->

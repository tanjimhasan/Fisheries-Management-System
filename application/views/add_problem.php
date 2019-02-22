<?php
if (isset($this->session->userdata['logged_in'])) {
  $user_id = ($this->session->userdata['logged_in']['user_id']);
}
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
                  আপনার সমস্যাটি আমাদের বিশেষজ্ঞদের কাছে পাঠান হয়েছে । <strong>ধন্যবাদ!! </strong>  
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


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>আপনার সমস্যাটি বিস্তারিত লিখে সাবমিট করুন</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <!--  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                    <form method="post" action="<?php echo base_url('index.php/control_problem_post/post_problem/'.$user_id); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left" accept-charset="utf-8" novalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fish_name">মাছের নাম<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="fish_name" type="text" id="fish_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">সমস্যার ক্যাটাগরি </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="problem_category" class="form-control">
                            <option value="1">মাছ চাষ সংক্রান্ত </option>
                            <option value="2">মাছের রোগ সংক্রান্ত </option>
                            <option value="3">মাছের খাবার সংক্রান্ত </option>
                            <option value="4">পুকুর সংক্রান্ত </option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="problem_img">সমস্যার ছবি <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="problem_img" class="form-control col-md-7 col-xs-12" name="problem_img"  type="file">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">পোনা ছাড়ার পর থেকে অতিবাহিত সময় </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select name="fish_age_day" class="form-control">
                            <option value="০ দিন">০ দিন </option>
                            <option value="১-৫ দিন">১-৫ দিন </option>
                            <option value="৫-১০ দিন">৫-১০ দিন </option>
                            <option value="১০-১৫ দিন">১০-১৫ দিন </option>
                            <option value="১৫-২০ দিন">১৫-২০ দিন </option>
                            <option value="২০-২৫ দিন">২০-২৫ দিন </option>
                            <option value="২৫-৩০ দিন">২৫-৩০ দিন </option>
                          </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <select name="fish_age_month" class="form-control">
                            <option value="০ মাস">০ মাস</option>
                            <option value="১ মাস">১ মাস</option>
                            <option value="২ মাস">২ মাস</option>
                            <option value="৩ মাস">৩ মাস</option>
                            <option value="৪ মাস">৪ মাস</option>
                            <option value="৫ মাস">৫ মাস</option>
                            <option value="৬ মাস">৬ মাস</option>
                            <option value="৭ মাস">৭ মাস</option>
                            <option value="৮ মাস">৮ মাস</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">পুকুরের ধরন</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="pond_type" class="form-control">
                            <option value="ছোট">ছোট</option>
                            <option value="মাঝারি">মাঝারি </option>
                            <option value="বড়">বড় </option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <div class="x_panel">
                            <div class="x_title">
                              <h2><small>সমস্যাটি বিস্তারিত লিখুন </small></h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            
                              <textarea class="ckeditor" name="problem_details" id="editor1" rows="10" cols="80"></textarea>
                           
                            
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
                          <button class="btn btn-primary" type="reset">রিসেট করুন</button>
                          <input type="submit" class="btn btn-success submit" name="insert" value="সাবমিট">
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->

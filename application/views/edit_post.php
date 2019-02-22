
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
                  <strong>স্বাগতম!! </strong>আপনার এডিট সম্পন্ন হয়েছে  
                </div>
                <?php }?>
              </div>

              
            </div>
            

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>নিচের তথ্যগুলো সঠিকভাবে দিয়ে সাবমিট করুন</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <?php
                      if ($fetch_post_details->num_rows()>0) {
                       foreach ($fetch_post_details->result() as $row) {
                        $id = $row->id;
                    ?>
                    <form method="post" action="<?php echo base_url('/index.php/Welcome/edit_post/'.$id); ?>" enctype="multipart/form-data" class="form-horizontal form-label-left" accept-charset="utf-8" novalidate>
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post_title">পোস্ট টাইটেল<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="post_title" type="text" id="post_title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->post_title;?>">
                        </div>
                      </div>

                      <div class="item form-group fish_img">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fish_image">মাছের ছবি <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fish_image" class="form-control col-md-7 col-xs-12" name="fish_image" type="file">
                          <img id="img_fish" src="<?php echo base_url(''); ?>images/<?php echo $row->fish_image?>" alt="">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fish_name">মাছের নাম<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="fish_name" type="text" id="fish_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row->fish_name;?>">
                        </div>
                      </div>
                      <?php } } ?>

                      <?php
                        if ($fetch_post_details->num_rows()>0) {
                         foreach ($fetch_post_details->result() as $row) {
                         
                      ?>
                      <div class="item form-group">
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>খাদ্য তালিকা<small></small></h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    
                                    <th style="width: 200px">খাদ্য উপাদান</th>
                                    <th>পরিমাণ (শতকরা)</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    
                                    <td style="width: 200px">ফিশমিল</td>
                                    <th><input id="fish_meal" class="form-control" type="number" name="fish_meal" value="<?php echo $row->fish_meal;?>"></th>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td style="width: 200px">সয়াবিন চূর্ণ</td>
                                    <th><input id="food_soyabin" class="form-control" type="number" name="food_soyabin" value="<?php echo $row->food_soyabin;?>"></th>
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td style="width: 200px">গমের ভুসি</td>
                                    <th><input id="food_gom" class="form-control" type="number" name="food_gom" value="<?php echo $row->food_gom;?>"></th>
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td style="width: 200px">ভুট্টা চূর্ণ</td>
                                    <th><input id="food_vutta" class="form-control" type="number" name="food_vutta" value="<?php echo $row->food_vutta;?>"></th>
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td style="width: 200px">ধানের কুঁড়া</td>
                                    <th><input id="food_dhan" class="form-control" type="number" name="food_dhan" value="<?php echo $row->food_dhan;?>"></th>
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td style="width: 200px">সরিষার খৈল</td>
                                    <th><input id="food_sorisa" class="form-control" type="number" name="food_sorisa" value="<?php echo $row->food_sorisa;?>"></th>
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td style="width: 200px">চিটাগুড়</td>
                                    <th><input id="food_gur" class="form-control" type="number" name="food_gur" value="<?php echo $row->food_gur;?>"></th>
                                    
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                         </div>
                        </div>
                      </div>
                      <?php } } ?>
                    
                      <?php
                        if ($fetch_post_details->num_rows()>0) {
                         foreach ($fetch_post_details->result() as $row) {
                         
                      ?>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <div class="x_panel">
                            <div class="x_title">
                              <h2><small>নিচের তথ্যগুলো সঠিকভাবে দিয়ে সাবমিট করুন</small></h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            
                              <textarea class="ckeditor" name="fish_culi_info" id="editor1" rows="10" cols="80"><?php echo $row->fish_culi_info;?></textarea>
                           
                            
                          </div>
                          </div>
                        </div>
                      </div>
                      <?php } } ?>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
                          
                          <input type="submit" class="btn btn-success submit" name="insert" value="এডিট">
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


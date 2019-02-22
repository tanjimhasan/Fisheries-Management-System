
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
           <div class="page-title">
              <div class="title_left">
                <h4>চাষাবাদ সম্পর্কিত সমস্যা </h4>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <?php
                if ($fetch_all_problem->num_rows()>0) {
                   foreach ($fetch_all_problem->result() as $row) {
                        if ($row->status == 0) { 
              ?>
                          <div class="col-md-3 col-xs-12 widget widget_tally_box problem_box">
                                <div class="x_panel ui-ribbon-container">
                                  <div class="ui-ribbon-wrapper">
                                      <div class="ui-ribbon red-ribbon">
                                        নতুন
                                      </div>
                                  </div>
                                  <div class="x_title">
                                    <h3>From <small><i class="fa fa-user"></i><?php echo $row->firstname; ?></small></h3>
                                    <div class="clearfix"></div>
                                  </div>

                                  <?php
                                    $remove_tag = strip_tags($row->problem_details);
                                    $text = substr($remove_tag, 0,250);
                                  ?>
                                  <div class="x_content">
                                    <h4 class="name_title">মাছের নাম: <?php echo $row->fish_name; ?></h4>
                                    <p><?php echo $text; ?></p>
                                    <a href="<?php echo base_url(); ?>index.php/control_problem_post/solition_form_show/<?php echo $row->id; ?>" class="btn btn-success btn-block" role="button">বিস্তারিত </a>
              <!-- <div class="divider"></div> -->
                                  </div>
                                </div>
                        </div>
                        <?php 
                          
                        } }
                        ?>

                      <?php } ?>

                        
                        <?php
                          if ($fetch_all_problem->num_rows()>0) {
                        
                                 foreach ($fetch_all_problem->result() as $row) {
                                      if ($row->status == 1) { 

                          ?>
                        <div class="col-md-3 col-xs-12 widget widget_tally_box problem_box">
                                <div class="x_panel ui-ribbon-container">
                                  <div class="ui-ribbon-wrapper">
                                      <div class="ui-ribbon green-ribbon">
                                        সমাধান
                                      </div>
                                  </div>
                                  <div class="x_title">
                                    <h3>From <small><i class="fa fa-user"></i><?php echo $row->firstname; ?></small></h3>
                                    <div class="clearfix"></div>
                                  </div>

                                  <?php
                                    $remove_tag = strip_tags($row->problem_details);
                                    $text = substr($remove_tag, 0,250);
                                  ?>
                                  <div class="x_content">
                                    <h4 class="name_title">মাছের নাম: <?php echo $row->fish_name; ?></h4>
                                    <p><?php echo $text; ?></p>
                                    <a href="<?php echo base_url(); ?>index.php/control_problem_post/solition_form_show/<?php echo $row->id; ?>" class="btn btn-success btn-block" role="button">বিস্তারিত </a>
              <!-- <div class="divider"></div> -->
                                  </div>
                                </div>
                        </div>
                        <?php
                          } }
                        ?>
              

<?php }else{  ?>

              <div class="page-title">
              <div class="title_left">
                <h4>সমস্যা সম্পর্কিত পোস্ট নেই </h4>
              </div>
              </div>  
       <?php  } ?>
        </div>
 </div>       




            

          

        <!-- /page content -->


        <!-- footer content -->

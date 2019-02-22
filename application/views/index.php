<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row">
            <div class="col-md-12">
              </div>
               <div class="page-title">
                  <div class="title_left">
                    <h3>মাছের চাষাবাদ সংক্রান্ত বিভিন্ন প্রয়োজনীয় পোস্ট</h3>
                  </div>
                </div>
            </div>
          

            <!-- /page content -->
        <div class="row">
                <?php
                  if ($fetch_all_posts->num_rows()>0) {
                   foreach ($fetch_all_posts->result() as $row) {
                   
                ?>
          <div class="col-md-4">
            <div class="single-post-item fixed_height_390">
              <div class="post-box-bg">
                <img src="<?php echo base_url(''); ?>images/<?php echo $row->fish_image;?>" alt="">
              </div>
              <div class="post-box-content">
                <p class="post-meta">
                  <span><a href=""><i class="fa fa-user"></i> <?php echo $row->firstname; ?></a></span>
                  <span><i class="fa fa-calender"></i><?php echo $row->date; ?></span>
                </p>
                <h3><?php echo $row->post_title; ?></h3>
                
                <a href="<?php echo base_url(); ?>index.php/Welcome/post_details/<?php echo $row->id; ?>" target="_blank" class="btn btn-info">বিস্তারিত </a>
              </div> 
            </div>
          </div>
          <?php  } }?>
          
          
          </div>
        </div>


        <!-- footer content -->

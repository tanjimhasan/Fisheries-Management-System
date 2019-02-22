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
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-responsive" class="table table-bordered">
                      <thead>
                        <tr>
                          <!-- <th>#</th> -->
                          <th>পোস্ট টাইটেল </th>
                          <th>পোস্টটি করেছেন </th>
                          <th>তারিখ</th>
                          <th style="text-align: center;">একশন</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php
                        if ($fetch_all_posts->num_rows()>0) {
                           foreach ($fetch_all_posts->result() as $row) {

                        //$i = 0;
                        ?>
                        <tr>
                          <!-- <th scope="row"><?php echo $i++;?></th> -->
                          <td style="width: 30%"><?php echo $row->post_title;?></td>
                          <td><?php echo $row->firstname;?></td>
                          <td><?php echo $row->date;?></td>
                          <td style="text-align: center;">
                            <a href="<?php echo base_url(); ?>index.php/Welcome/post_details/<?php echo $row->id; ?>" target="_blank" class="btn btn-info">বিস্তারিত </a>
                            <a href="<?php echo base_url(); ?>index.php/Welcome/show_edit_post/<?php echo $row->id; ?>" class="btn btn-primary">এডিট</a>
                            <a href="" target="_blank" class="btn btn-danger">ডিলিট </a>
                          </td>
                        </tr>
                      <?php   }  }?>
                      </tbody>
                      
                      
                    </table>

                  </div>
                </div>
              </div>
          
          
          </div>
        </div>


        <!-- footer content -->

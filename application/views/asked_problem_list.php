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
                    <h3>আপনার করা প্রশ্নগুলোর তালিকা </h3>
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
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                         <!--  <th>#</th> -->
                          <th>টাইটেল </th>
                          <th>স্ট্যাটাস </th>
                          <th style="text-align: center;">একশন</th>
                        </tr>
                      </thead>
                      
                      <tbody>

                        <?php
                           if ($fetch_problem_list->num_rows()>0) {
                           foreach ($fetch_problem_list->result() as $row) {
                           $i = 1;
                           $i++;
                        ?>
                        <tr class="problem_list" >
                          <?php if ($row->status == 1) { ?>
                          <!-- <th scope="row"></th> -->
                          <td style="width: 20%"><?php 
                              if ($row->problem_category == 1) {
                                echo "মাছ চাষ সংক্রান্ত";
                              }else if($row->problem_category == 2){
                                echo "মাছের রোগ সংক্রান্ত";
                              }else if($row->problem_category == 3){
                                echo "মাছের খাবার সংক্রান্ত";
                              }else if($row->problem_category == 4){
                                echo "মাছের পুকুর সংক্রান্ত";
                              }
                          ?></td>
                          
                          <td style="width: 55%">
                              <p class="solved_status">আপনার প্রশ্নের সমাধান এসেছে </p>
                            
                          </td>
                          <td style="text-align: center;">
                            <a href="<?php echo base_url(); ?>index.php/control_solutions/show_solution/<?php echo $row->id; ?>" class="btn btn-success">সমাধান দেখুন</a>
                          </td>    
                            <?php  } ?>
                        </tr>
                            <?php  }?>

                          <?php 

                          foreach ($fetch_problem_list->result() as $row) {
                           //$i = $i+1;
                          ?>
                        <tr class="problem_list" >
                          <?php if ($row->status == 0) { ?>
                         <!--  <th scope="row"></th> -->
                          <td style="width: 20%"><?php 
                              if ($row->problem_category == 1) {
                                echo "মাছ চাষ সংক্রান্ত";
                              }else if($row->problem_category == 2){
                                echo "মাছের রোগ সংক্রান্ত";
                              }else if($row->problem_category == 3){
                                echo "মাছের খাবার সংক্রান্ত";
                              }else if($row->problem_category == 4){
                                echo "মাছের পুকুর সংক্রান্ত";
                              }
                          ?></td>
                          
                          <td style="width: 55%">
                              <p class="pending_status">আপনার প্রশ্নটি সমাধানের জন্য পাঠান হয়েছে</p>
                            </td>
                            <td style="text-align: center;">
                            <a  class="btn btn-success" disabled>সমাধান দেখুন</a>
                          </td>    
                            <?php  } ?>
                        </tr>
                            <?php }?>

                        


















                         <!--    <td style="width: 55%">
                            <p class="pending_status">আপনার প্রশ্নটি সমাধানের জন্য পাঠান হয়েছে</p>
                            </td>
                            <td style="text-align: center;">
                            <a href="" target="_blank" class="btn btn-success" disabled>সমাধান দেখুন</a>
                          </td> -->
                            <?php//}?>

                          
                      
                        <!-- </tr> -->
                        <?php //} }else{?>
  

                        <?php }?>
                      </tbody>

                      <?php  //}  }?>
                    </table>

                  </div>
                </div>
              </div>
          
          
          </div>
        </div>


        <!-- footer content -->

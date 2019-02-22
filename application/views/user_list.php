
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="page-title">
              <div class="title_left">
                <?php
                  if ($this->session->flashdata('enabled_message')) {
                ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong></strong>অ্যাকাউন্ট এনাবল করা হয়েছে   
                </div>
                <?php }elseif($this->session->flashdata('disabled_message')){?>

                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong></strong>অ্যাকাউন্ট ডিজেবল করা হয়েছে 
                </div>
                <?php
                  }
                ?>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

            <!-- /page content -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">মৎস্য বিশেষজ্ঞ </a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">মৎস্য চাষি </a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <?php
                        
                         
                         
                      ?>
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>ইউজার লিস্ট </h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                  <p></p>

                                  <!-- start project list -->
                                  <table id="datatable-responsive" class="table table-striped projects">
                                    <thead>
                                      <tr>
                                        <th style="width: 1%">#</th>
                                        <th>নাম</th>
                                        <th>ইমেইল </th>
                                        <th>মোবাইল </th>
                                        <th>একশন</th>
                                      </tr>
                                    </thead>
                                    <?php
                                    if ($fetch_all_user->num_rows()>0) {
                                      foreach ($fetch_all_user->result() as $row) {
                                          if ($row->usertype == 'বিশেষজ্ঞ') {
                                    ?>
                                    <tbody>
                                      <?php
                                        if ($row->status == 1) {
                                         
                                      ?>
                                      <tr>
                                        <td>#</td>
                                        <td>
                                          <?php echo $row->firstname;?>
                                        </td>
                                        <td>
                                          <?php echo $row->email;?>
                                        </td>
                                        <td>
                                          <?php echo $row->mobile;?>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/enable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs" disabled><i class="fa fa-pencil"></i> এনাবল </a>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/disable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> ডিজেবল </a>
                                          <a href=<?php echo base_url(); ?>index.php/admin/user_list/delete_user/<?php echo $row->user_id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> ডিলিট  </a>
                                        </td>
                                      </tr>
                                      <?php

                                        }elseif ($row->status == 0) {
                                          
                                      ?>
                                      <tr class="disabled">
                                        <td>#</td>
                                        <td>
                                          <?php echo $row->firstname;?>
                                        </td>
                                        <td>
                                          <?php echo $row->email;?>
                                        </td>
                                        <td>
                                          <?php echo $row->mobile;?>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/enable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> এনাবল </a>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/disable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs" disabled><i class="fa fa-pencil"></i> ডিজেবল </a>
                                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> ডিলিট  </a>
                                        </td>
                                      </tr>

                                      <?php
                                        }
                                      ?>
                                    </tbody>
                                    <?php
                                      } } }
                                    ?>
                                  </table>
                                  <!-- end project list -->

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                         //  }
                         // }
                           
                        ?>
                        
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <div class="row">
                              <div class="col-md-12">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <h2>ইউজার টেবিল </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                      </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="x_content">

                                    <p></p>

                                    <!-- start project list -->
                                    <table id="datatable" class="table table-striped projects">
                                        <thead>
                                      <tr>
                                        <th style="width: 1%">#</th>
                                        <th>নাম</th>
                                        <th>ইমেইল </th>
                                        <th>মোবাইল </th>
                                        <th>একশন</th>
                                      </tr>
                                    </thead>
                                    <?php
                                      if ($fetch_all_user->num_rows()>0) {
                                          foreach ($fetch_all_user->result() as $row) {
                                                if ($row->usertype == 'মৎস চাষি') {
                                    ?>
                                    <tbody>
                                      <?php
                                        if ($row->status == 1) {
                                         
                                      ?>
                                      <tr>
                                        <td>#</td>
                                        <td>
                                          <?php echo $row->firstname;?>
                                        </td>
                                        <td>
                                          <?php echo $row->email;?>
                                        </td>
                                        <td>
                                         <?php echo $row->mobile;?>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/enable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs" disabled><i class="fa fa-pencil"></i> এনাবল </a>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/disable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> ডিজেবল </a>
                                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> ডিলিট  </a>
                                        </td>
                                      </tr>

                                      <?php

                                        }elseif ($row->status == 0) {
                                          
                                      ?>
                                      <tr class="disabled">
                                        <td>#</td>
                                        <td>
                                          <?php echo $row->firstname;?>
                                        </td>
                                        <td>
                                          <?php echo $row->email;?>
                                        </td>
                                        <td>
                                         <?php echo $row->mobile;?>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/enable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> এনাবল </a>
                                          <a href="<?php echo base_url(); ?>index.php/admin/user_list/disable_user/<?php echo $row->user_id; ?>" class="btn btn-info btn-xs" disabled><i class="fa fa-pencil"></i>ডিজেবল </a>
                                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> ডিলিট  </a>
                                        </td>
                                      </tr>
                                      <?php
                                        }
                                      ?>
                                    </tbody>
                                    <?php 
                                      } } }
                                    ?>
                               </table>
                             <!-- end project list -->

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                         // }
                        ?>
                      </div>
                      <?php
                        //} }
                      ?>



                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>


        <!-- footer content -->


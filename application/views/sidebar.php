<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Content-Type: text/html; charset=utf-8');
?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url(''); ?>images/favicon.ico" type="image/ico" />

    <title>Fisheries Management System | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(''); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(''); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(''); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(''); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(''); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(''); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- Data Table -->
    <link href="<?php echo base_url(''); ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(''); ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- Dropzone.js -->
    <link href="<?php echo base_url(''); ?>vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    
    
    <link href="<?php echo base_url(''); ?>build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>build/css/custom.css" rel="stylesheet">
<!-- jQuery -->
    <script src="<?php echo base_url(''); ?>vendors/jquery/dist/jquery.min.js"></script>


    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>FMS!</span></a>
            </div>
            <?php

                if (isset($this->session->userdata['logged_in'])) {
                  $user_id = ($this->session->userdata['logged_in']['user_id']);
                  $firstname = ($this->session->userdata['logged_in']['firstname']);
                  $lastname = ($this->session->userdata['logged_in']['lastname']);
                  $usertype = ($this->session->userdata['logged_in']['usertype']);
                  $profileImage = ($this->session->userdata['logged_in']['profileImage']);
                  $mobile = ($this->session->userdata['logged_in']['mobile']);
                  $address = ($this->session->userdata['logged_in']['address']);
               }else{

               }
            ?>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php
                  if (isset($this->session->userdata['logged_in'])) {
                ?>
                <img src="<?php echo base_url(''); ?>images/<?php echo $profileImage?>" alt="..." class="img-circle profile_img">
                <?php }?>
              </div>
              <div class="profile_info">
                <?php
                  if (isset($this->session->userdata['logged_in'])) {
                ?>
                <span>স্বাগতম,</span>
                
                <h2><?php echo $firstname; ?> <span> <?php echo $lastname; ?></span> </h2>
                <?php }?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <?php 
                  if (isset($this->session->userdata['logged_in'])) {
                ?>
                 
                  
                  
                   <?php 
                    if ($usertype=='বিশেষজ্ঞ') {?>
                       
                      <li><a><i class="fa fa-edit"></i>পোস্ট <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li>

                            <a href="<?php echo base_url('index.php/Welcome/process_post'); ?>"><i class="fa fa-database"></i> পোস্ট তৈরি করুন</a>
                          </li>
                            <li>

                            <a href="<?php echo base_url('index.php/Welcome/show_post_list'); ?>"><i class="fa fa-database"></i> পোস্ট</a>
                          </li>
                          </ul>
                    </li>
                      <li>
                        <a><i class="fa fa-edit"></i>সমস্যা <span class="fa fa-chevron-down"></span>
                          <span class="ticker"></span>
                        </a>
                        <ul class="nav child_menu">
                         
                      <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/1'); ?>"><i class="fa fa-bug"></i>মাছ চাষ সংক্রান্ত</a>
                            
                          </li>
                          <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/2'); ?>"><i class="fa fa-bug"></i>মাছের রোগ সংক্রান্ত</a>
                            
                          </li>
                          <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/3'); ?>"><i class="fa fa-bug"></i>মাছের খাবার সংক্রান্ত</a>
                            
                          </li>
                          <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/4'); ?>"><i class="fa fa-bug"></i>পুকুর সংক্রান্ত</a>
                            
                          </li>
                          </ul>
                    </li>
                      
                      

                      
                   <?php } ?> 
                  
                  <?php 
                    if ($usertype=='মৎস চাষি') {?>
                  
                  <li><a><i class="fa fa-edit"></i>নতুন প্রশ্ন <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                           
                          <li>

                            <a href="<?php echo base_url(); ?>index.php/control_problem_post/post_problem_form/"><i class="fa fa-database"></i>প্রশ্ন পোস্ট করুন  </a>
                            
                          </li> 
                          <li>

                            <a href="<?php echo base_url(); ?>index.php/control_problem_post/problem_list/<?php echo $user_id; ?>"><i class="fa fa-database"></i>প্রশ্নের তালিকা</a>
                            
                          </li>
                          </ul>
                    </li>
                  <li><a><i class="fa fa-edit"></i>সমস্যা সমাধান  <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                           
                          <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/1'); ?>"><i class="fa fa-bug"></i>মাছ চাষ সংক্রান্ত</a>
                            
                          </li>
                          <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/2'); ?>"><i class="fa fa-bug"></i>মাছের রোগ সংক্রান্ত</a>
                            
                          </li>
                          <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/মাছের খাবার সংক্রান্ত'); ?>"><i class="fa fa-bug"></i>মাছের খাবার সংক্রান্ত</a>
                            
                          </li>
                          <li>

                            <a href="<?php echo base_url('index.php/control_problem_post/show_problem/পুকুর সংক্রান্ত'); ?>"><i class="fa fa-bug"></i>পুকুর সংক্রান্ত</a>
                            
                          </li>
                          </ul>
                    </li>
                    <!-- <li><a><i class="fa fa-edit"></i>মাছের হাট <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">
                           
                          <li>
                            <a href="<?php //echo base_url('index.php/fish_selling/show_selling_fish_details'); ?>"><i class="fa fa-bug"></i>পুকুর সংক্রান্ত</a>
                            
                            
                          </li>
                          </ul>

                    </li> -->

                  <?php } ?>
                  
                  <?php 
                    if ($usertype=='নিয়ন্ত্রক') {?>
                  <li>

                    <a href="<?php echo base_url('index.php/admin/user_list'); ?>"><i class="fa fa-users"></i>ইউজার তালিকা </a>
                    
                  </li>
                  <li>

                    <a href="<?php echo base_url('index.php/Welcome/show_post_list'); ?>"><i class="fa fa-database"></i> পোস্ট</a>
                  </li>
                  <?php } ?>


                  <?php }else{?>
                  <li>

                    <a href="<?php echo base_url('index.php'); ?>"><i class="fa fa-home"></i> হোম</a>
                    
                  </li>
                  <li>

                    <a href="<?php echo base_url('index.php/user/user_login_show'); ?>"><i class="fa fa-unlock"></i>লগইন</a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i>মাছের হাট <span class="fa fa-chevron-down"></span></a>
                  <?php }?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php 
                if (isset($this->session->userdata['logged_in'])) {
            ?>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('index.php/user/log_out'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>

            <?php }else{}?>
            <!-- /menu footer buttons -->
          </div>
        </div>



       
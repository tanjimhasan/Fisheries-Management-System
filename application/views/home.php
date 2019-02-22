<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fisheries</title>
  
  
  
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/responsive.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i|Raleway:400,500i,600i,700,700i,800,800i,900,900i|Sacramento&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
  <script src="http://localhost:/f_m_s/assets/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
</head>
<body>
  <div id="home"></div>
  <header class="site-header">
    <nav id="example" class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="logo">
          <a class="navbar-brand" href="#">
            <img src="http://localhost:/f_m_s/assets/images/fish-logo.png" alt="">
          </a>
        </div>
        
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
          #navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item smooth-menu">
                <a class="nav-link active" href="#home">হোম </a>
              </li>
              <li class="nav-item smooth-menu">
                <a class="nav-link" href="#cultivation_post">চাষাবাদ পোস্ট</a>
              </li>
              <li class="nav-item smooth-menu">
                <a class="nav-link" href="#problem_solution">সমস্যা ও সমাধান </a>
              </li>

              <li class="nav-item smooth-menu">
                <a class="nav-link" href="<?php echo base_url('index.php/search/'); ?>">তথ্য খুঁজুন </a>
              </li>
              <li class="nav-item smooth-menu">
                <a class="nav-link" href="<?php echo base_url('index.php/user/user_login_show'); ?>">লগইন</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="hero-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="hero-logo">
            
          </div>
          <h2></h2>
          <p></p>
          <a href="#cultivation_post" class="btn">চাষাবাদ পোস্ট</a>
        </div>
      </div>
    </div>
  </section>
  

  <section class="post-area section-padding" id="cultivation_post">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h2>
              চাষাবাদ সম্পর্কিত পোস্ট 
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
          if ($fetch_all_posts->num_rows()>0) {
           foreach ($fetch_all_posts->result() as $row) {
           
        ?>
        <div class="col-lg-3">
          <div class="single-post-item">
            <div class="post-box-bg">
                <img src="<?php echo base_url(''); ?>images/cultivation_post_image/<?php echo $row->fish_image;?>" alt="">
               <!--  <img src="http://localhost:/f_m_s/assets/images/doctor1.jpg" alt=""> -->
              </div>
              <div class="post-box-content">
                <p class="post-meta">
                  <span><a href=""><i class="fa fa-user"></i><?php echo $row->firstname; ?></a></span>
                  <span><i class="fa fa-calendar"></i><?php echo $row->date; ?></span>
                </p>
                <h3><?php echo $row->post_title; ?></h3>
                
                <a href="<?php echo base_url(); ?>index.php/Welcome/post_details/<?php echo $row->id; ?>" target="_blank" class="btn btn-info">বিস্তারিত </a>
              </div>
          </div>
        </div>
        <?php
          } }
        ?>
      </div>
    </div>
  </section>

  <section class="post-area section-padding" id="problem_solution">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h2>
              সমস্যা ও সমাধান 
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
          if ($fetch_all_solved_problem->num_rows()>0) {
           foreach ($fetch_all_solved_problem->result() as $row) {
            if ($row->status == 1) {  ?>
             
           
        
        <div class="col-lg-3">
          <div class="single-post-item">
            <div class="post-box-bg">
                <img src="<?php echo base_url(''); ?>images/<?php echo $row->problem_image;?>" alt="">
               <!--  <img src="http://localhost:/f_m_s/assets/images/doctor1.jpg" alt=""> -->
              </div>
              <div class="post-box-content">
                <p class="post-meta">
                  <span><a href=""><i class="fa fa-user"></i><?php echo $row->firstname; ?></a></span>
                </p>
                <h6><?php echo $row->problem_title; ?></h6>
                <a href="<?php echo base_url(); ?>index.php/Welcome/solution_details/<?php echo $row->id; ?>" target="_blank" class="btn btn-info">সমাধান </a>
              </div>
          </div>
        </div>
      <?php } ?>
        <?php
          } }
        ?>
      </div>
    </div>
  </section>



  <section class="copyright-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="copyright-text">
            <p>© Copyright 2018. All Rights Reserved</p>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://localhost:/f_m_s/assets/js/main.js" type="text/javascript"></script>
  <script src="http://localhost:/f_m_s/assets/js/popper-1.1.0.min.js" type="text/javascript"></script>
  <script src="http://localhost:/f_m_s/assets/js/owl.carousel.min.js" type="text/javascript"></script>
  <script src="http://localhost:/f_m_s/assets/js/jquery.easing.js" type="text/javascript"></script>
  <script src="http://localhost:/f_m_s/assets/js/jquery.sticky.js" type="text/javascript"></script>
  <script src="http://localhost:/f_m_s/assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow2.js"></script>
  <noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

  
</body>
</html>
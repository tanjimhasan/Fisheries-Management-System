<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fisheries</title>
  
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  
  
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="http://localhost:/f_m_s/assets/css/responsive.css">

  <script src="assets/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
</head>
<body>
  <section class="post_details section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="solution-title">
            <h2>সমস্যা সম্পর্কিত তথ্য</h2>
          </div>
          <?php
              if ($fetch_problem_details->num_rows()>0) {
               foreach ($fetch_problem_details->result() as $row) {
               
          ?>
          <div class="info-detals">
            <h4>মাছের নাম</h4>
            <p><?php echo $row->fish_name; ?></p>
            <h4>পোনা ছাড়ার পর থেকে অতিবাহিত সময়</h4>
            <p><?php echo $row->fish_age_month;echo "\n"; echo $row->fish_age_day; ?></p>
            <h4>পুকুরের ধরন</h4>
            <p><?php echo $row->pond_type; ?></p>
            <h4>বিস্তারিত বর্ণনা</h4>
            <p><?php echo $row->problem_details; ?></p>
          </div>
          <?php 
            } }
          ?>
        </div>
        <div class="col-md-6">
          <?php

            if ($fetch_solution->num_rows()>0){
                 foreach ($fetch_solution->result() as $row) {
          ?>
          <div class="solution-details">
            <h2>সমস্যার সমাধান</h2>
            <p><?php echo $row->solution_details; ?></p>
          </div>
          <?php 
        } }
          ?>
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
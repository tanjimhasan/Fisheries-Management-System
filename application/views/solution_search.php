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
  

<section class="solution-search section-padding">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <div class="section-title">
          <h2>মৎস্য তথ্য ভাণ্ডার </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="solution-from">
          <form method="" action="" id="search_from" accept-charset="utf-8">
            <input type="text" name="search" placeholder="এখানে সমস্যা লিখুন " required="true">
            <input type="submit" value="খুঁজুন">
          </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="solution-text">
          <p>সমাধান না পেলে আপনার অ্যাকাউন্টটিতে লগইন করে বিশেষজ্ঞের কাছ থেকে সমাধান জানুন </p>
          <a class="pull-right" href="<?php echo base_url('index.php/user/user_login_show'); ?>"> লগইন করুন </a>
          <a class="pull-left" href="<?php echo base_url('/index.php'); ?>">হোম পেজে যান </a>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="solution-table">
          <table class="table table-striped projects">
            
            <tbody>
              
            </tbody>
          </table>
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

  <script type="text/javascript">

  $(document).ready(function (e) {  
    $("#search_from").on("submit",function(e){
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
              url: "<?php echo base_url('/index.php/search/search_info'); ?>",
              method:"POST",
              data:formData,
              contentType:false,
              async: true,
              cache:false,
              processData:false,
              success: function(data) {
                  //$('#add_batch')[0].reset();
                  //$('#addBatch').modal('hide');

                  $('tbody').html(data);
                  //view_batch();
                 // viewData();
              //  $("#message").html(data);
              //alert("err");
              }
              // error: function(err) {
              // alert(err);
              // }
           });
      })
    })
  </script>
</body>
</html>
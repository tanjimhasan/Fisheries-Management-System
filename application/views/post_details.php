
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fisheries Management System</title>
	<!-- Bootstrap -->
    <link href="http://localhost:/f_m_s/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost:/f_m_s/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Custom Theme Style -->
    <link href="http://localhost:/f_m_s/build/css/custom.css" rel="stylesheet">
</head>


<body class="nav-md" style="background: #F7F7F7;">


<div class="container body" style="width: 1170px">
	<div class="post-details-area section-padding text-center">
	


		 		<?php
                  if ($fetch_post_details->num_rows()>0) {
                   foreach ($fetch_post_details->result() as $row) {
                   
                ?>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="post-title-view"><?php echo $row->post_title;?></h2>
				<h2 class="text-center">খাদ্য তালিকা </h2>
				<table class="food-list">
					<thead>
						<tr>
							<th>খাদ্য উপাদান</th>
							<th>পরিমাণ (শতকরা)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>ফিশমিল</td>
							<td><?php echo $row->fish_meal;?></td>
						</tr>
						<tr>
							<td>সয়াবিন চূর্ণ</td>
							<td><?php echo $row->food_soyabin;?></td>
						</tr>
						<tr>
							<td>গমের ভুসি</td>
							<td><?php echo $row->food_gom;?></td>
						</tr>
						<tr>
							<td>ভুট্টা চূর্ণ</td>
							<td><?php echo $row->food_vutta;?></td>
						</tr>
						<tr>
							<td>ধানের কুঁড়া</td>
							<td><?php echo $row->food_dhan;?></td>
						</tr>
						<tr>
							<td>সরিষার খৈল</td>
							<td><?php echo $row->food_sorisa;?></td>
						</tr>
						<tr>
							<td>চিটাগুড়</td>
							<td><?php echo $row->food_gur;?></td>
						</tr>
					</tbody>


				</table>

				<div class="cultivation_details">
					
					<?php echo $row->fish_culi_info;?>
				</div>
			</div>
		</div>

		<?php  }  }?>
	</div>
</div>

		<!-- jQuery -->
    <script src="http://localhost:/f_m_s/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost:/f_m_s/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	

</body>
</html>
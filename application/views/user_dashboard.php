<?php

 include('header.php');
$fname = $this->session->fname;
$email = $this->session->email;
$batch = $this->session->batch;
$university = $this->session->university;
$phone = $this->session->phone;
$department = $this->session->department; ?>
<style>
	:target {
		border: 2px solid #D4D4D4;
		background-color: #e5eecc;
	}
</style>

<?php
if ($department == "Computer Science") {
?>
   
<!--// Main Content \\-->
<div class="wm-main-content">

	<!--// Main Section \\-->
	<div class="wm-main-section">
		<div class="container">
			<div class="row" style="margin-top:0px ;">
				<aside class="col-md-4">
					<div class="wm-student-dashboard-nav">
						<div class="wm-student-nav">
							<figure>
								<a href="#"><img src="<?= base_url() ?>assets/images/userlogo2.png " style="width:65px;margin-left:10px;margin-top:0px " alt=""></a>
							</figure>
							<div class="wm-student-nav-text">
								<h6><?= $fname ?></h6>
								<a style="margin-left:-20px;" href="<?=base_url()?>Settings">update Profile</a> 
								<!-- <a href="#">update image</a> -->
							</div>
							<ul><li class="active">
									<a href="<?= base_url() ?>User_dashboard">
										<i class="wmicon-book"></i>
										Dashboard
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Profile">
										<i class="wmicon-avatar"></i>
										Profile Details
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Logout_home">
										<i class="wmicon-favorite"></i>
										Favorites
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Logout_home">
										<i class="wmicon-paper"></i>
										Statement
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Settings">
										<i class="wmicon-three"></i>
										Settings
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Logout_home/logout">
										<i class="wmicon-arrow"></i>
										Logout
									</a>
								</li>
							</ul>
						</div>
					</div>
				</aside>
				<div class="col-md-8">
					<div class="wm-student-dashboard-courses wm-dashboard-courses">
						<div class="wm-plane-title">
							<h2><?=$department?> </h2>
						</div>
						<div class="wm-article">
							<ul>
								<li class="wm-courses-start wm-student">
									<span>Subjects</span>
								</li>
								<li class="wm-student">
									<span>Status</span>
								</li>
								<li class="wm-student">
									<span>Files</span>
								</li>
							</ul>
						</div>
						<?php
                            foreach ($bcs_table as $value)
                            echo '
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
													<h6><a href="#">' . $value->subject . ' | ' . $value->bookname . ' | ' . $value->teacher . '</a></h6>
												<!--<span><a href="#" class="wmicon-time2"></a></span>-->
												<span><a href="#" class="wmicon-tag"></a>' . $value->details . '</span>
											</div>
										</li>
										<li>
											<small>8/10</small>
										</li>
										<li>
											<a class="wm-status-courses wm-paid" href="#">Downloads</a>
										</li>
									</ul>
								</div>
							'; 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Main Section \\-->

	<!--// Main Section \\-->
</div>
<!--// Main Content \\-->




<?php
} else if ($department == "Business Administration") {
?>
<!--// Main Content \\-->
<div class="wm-main-content">

	<!--// Main Section \\-->
	<div class="wm-main-section">
		<div class="container">
			<div class="row" style="margin-top:-60px ;">
				<aside class="col-md-4">
					<div class="wm-student-dashboard-nav">
						<div class="wm-student-nav">
							<figure>
								<a href="#"><img src="<?= base_url() ?>assets/images/userlogo2.png " style="width:65px;margin-left:10px;margin-top:-10px " alt=""></a>
							</figure>
							<div class="wm-student-nav-text">
								<h6><?= $fname ?></h6>
								<!-- <a href="#">update image</a> -->
							</div>
							<ul>
							<li class="active">
									<a href="<?= base_url() ?>User_dashboard">
										<i class="wmicon-book"></i>
										Dashboard
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Profile">
										<i class="wmicon-avatar"></i>
										Profile Details
									</a>
								</li>
								
								<li>
									<a href="<?= base_url() ?>Logout_home">
										<i class="wmicon-favorite"></i>
										Favorites
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Logout_home">
										<i class="wmicon-paper"></i>
										Statement
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Settings">
										<i class="wmicon-three"></i>
										Settings
									</a>
								</li>
								<li>
									<a href="<?= base_url() ?>Logout_home/logout">
										<i class="wmicon-arrow"></i>
										Logout
									</a>
								</li>
							</ul>
						</div>
					</div>
				</aside>
				<div class="col-md-8">
					<div class="wm-student-dashboard-courses wm-dashboard-courses">
						<div class="wm-plane-title">
							<h2><?=$department?> </h2>
						</div>
						<div class="wm-article">
							<ul>
								<li class="wm-courses-start wm-student">
									<span>Subjects</span>
								</li>
								<li class="wm-student">
									<span>Status</span>
								</li>
								<li class="wm-student">
									<span>Files</span>
								</li>
							</ul>
						</div>
						<?php
                            foreach ($bba_table as $value)
                            echo '
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start">
											<div class="wm-statement-started-text">
													<h6><a href="#">' . $value->subject . ' | ' . $value->bookname . ' | ' . $value->teacher . '</a></h6>
												<!--<span><a href="#" class="wmicon-time2"></a></span>-->
												<span><a href="#" class="wmicon-tag"></a>' . $value->details . '</span>
											</div>
										</li>
										<li>
											<small>8/10</small>
										</li>
										<li>
											<a class="wm-status-courses wm-paid" href="#">Downloads</a>
										</li>
									</ul>
								</div>
							'; 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Main Section \\-->

	<!--// Main Section \\-->
</div>
<!--// Main Content \\-->



<?php
}
?>

<?php
include('footer.php'); ?>
<script>
    $(document).ready(function() {
        $("#onsbj").hide();
        $(document).on('click', '#gvdet', function() {
            $("#onsbj").show('');

        });
    });
</script>
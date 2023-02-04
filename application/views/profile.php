
<?php
include('header.php');?>
<?php
//$usertype = $this->session->usertype; 
//$fname=$this->db->get('lms_user')->result()[0];
$fname = $this->session->fname; 
$email = $this->session->email;
$batch = $this->session->batch; 
$university = $this->session->university;
$phone = $this->session->phone; 
$description = $this->session->description; 
$department = $this->session->department; 
?>


		<!--// Mini Header \\-->
		<!-- <div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>Student Dashboard</h1> 
				        </div>
				        <div class="wm-breadcrumb">
				          	<ul>
				          	 	<li><a href="index-2.html">Home</a></li>
				          	 	<li><a href="#">Student Dashboard</a></li>
				           		<li>Profile</li>
				          	</ul>
				        </div>      
				    </div>
			    </div>
			</div>    
		</div> -->
  		<!--// Mini Header \\-->

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
										<a href="#"><img src="<?=base_url()?>assets/images/userlogo2.png " style="width:65px;margin-left:10px;margin-top:0px " alt=""></a>
									</figure>
									<div class="wm-student-nav-text">
										<h6><?= $fname?></h6>
								 <a style="margin-left:-20px;" href="<?=base_url()?>Settings">update Profile</a> 
										<!-- <a href="#">update image</a> -->
									</div>
									<ul><li class="">
									<a href="<?= base_url() ?>User_dashboard">
										<i class="wmicon-book"></i>
										Dashboard
									</a>
								</li>
										<li class="active">
											<a href="<?=base_url()?>Profile">
												<i class="wmicon-avatar"></i>
												Profile Details
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>Logout_home">
												<i class="wmicon-favorite"></i>
												Favorites
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>Logout_home">
												<i class="wmicon-paper"></i>
												Statement
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>Settings">
												<i class="wmicon-three"></i>
												Settings
											</a>
										</li>
										<li>
											<a href="<?=base_url()?>Logout_home/logout">
												<i class="wmicon-arrow"></i>
												Logout
											</a>
										</li>
									</ul>
								</div>
							</div>							
						</aside>
						<div class="col-md-8">
							<div class="wm-student-profile-info">
								<div class="wm-student-dashboard-profile">
									<div class="wm-plane-title">
										<h2>About Me</h2>									
									</div>
									<ul class="row">
										<li class="col-md-4">
											<div class="wm-student-profile">
												<a class=wm-circle-icon href="#"><i class="fa fa-graduation-cap"></i></a>
												<div class="wm-student-profile-text">
													<span>Profession</span>
													<a href="#"><?= $usertype?> Portal</a>
												</div>
											</div>
										</li>
										<li class="col-md-4">
											<div class="wm-student-profile">
												<a class=wm-circle-icon href="#"><i class="wmicon-web2"></i></a>
												<div class="wm-student-profile-text">
													<span>Email:</span>
													<a href="#"><?= $email?></a>
												</div>
											</div>
										</li>
										<li class="col-md-4">
											<div class="wm-student-profile">
												<a class=wm-circle-icon href="#"><i class="wmicon-technology4"></i></a>
												<div class="wm-student-profile-text">
													<span>Phone:</span>
													<a href="#"><?=$phone?></a>
												</div>
											</div>
										</li>
									</ul>
																	
								</div>
								<div class="wm-profile-info">
									<div class="wm-title-full">
										<h5>More Detail Information</h5>
									</div>
									<div class="wm-article">
										<!-- <ul>
											<li class="wm-profile-info-right">
												<span>Public on campus</span>
											</li>
										</ul> -->
									</div>
									<div class="wm-article">
										<ul>
											<li class="wm-profile-start">
												<div class="wm-profile-detail-info">
													<h6><a href="#">Department</a></h6>
													<span><?=$department?></span>
												</div>
											</li>
											<li><a href="#" class="wm-edit-icon"><i class="wmicon-tool3"></i>Edit</a></li>
											<!-- <li>
												<div class="wm-select-checkbox">
													<input id="c22" type="checkbox" name="ca">
													<label for="c22">
														<span></span>
													</label>
												</div>
											</li> -->
										</ul>
										<!-- <form class="wm-profile-info-search">
											<input type="text">
										</form> -->
									</div>
									<div class="wm-article">
										<ul>
											<li class="wm-profile-start">
												<div class="wm-profile-detail-info">
													<h6><a href="#">University</a></h6>
													<span><?=$university?></span>
												</div>
											</li>
											<li><a href="#" class="wm-edit-icon"><i class="wmicon-tool3"></i>Edit</a></li>
											<!-- <li>
												<div class="wm-select-checkbox">
													<input id="c23" type="checkbox" name="ca">
													<label for="c23">
														<span></span>
													</label>
												</div>
											</li> -->
										</ul>
									</div>
									<div class="wm-article">
										<ul>
											<li class="wm-profile-start">
												<div class="wm-profile-detail-info">
													<h6><a href="#">Description</a></h6>
													<span><?=$description?></span>
												</div>
											</li>
											<li><a href="#" class="wm-edit-icon"><i class="wmicon-tool3"></i>Edit</a></li>
											<!-- <li>
												<div class="wm-select-checkbox">
													<input id="c24" type="checkbox" name="ca">
													<label for="c24">
														<span></span>
													</label>
												</div>
											</li> -->
										</ul>
									</div>
								</div>
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
include('footer.php');?>

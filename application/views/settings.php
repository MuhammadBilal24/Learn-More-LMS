<!-- Header Starts -->
<?php
$fname = $this->session->fname;
$lname = $this->session->lname;
$email = $this->session->email;
$birth = $this->session->birth;
$month = $this->session->month;
$year = $this->session->year;
$city = $this->session->city;
$province = $this->session->province;
$pcode = $this->session->pcode;
$phone = $this->session->phone;
$department = $this->session->department;
$batch = $this->session->batch;
$university = $this->session->university;
$description = $this->session->description;
include('header.php');?>
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
										<a href="#"><img src="<?=base_url()?>assets/images/userlogo2.png " style="width:65px;margin-left:10px;margin-top:0px" alt=""></a>
									</figure>
									<div class="wm-student-nav-text">
										<h6><?=$fname?></h6>
								 <a style="margin-left:-20px;" href="<?=base_url()?>Settings">update Profile</a> 
											<!-- <a href="#"></a> -->
											</div>
									<ul>
									<li class="">
									<a href="<?= base_url() ?>User_dashboard">
										<i class="wmicon-book"></i>
										Dashboard
									</a>
								</li>
										<li>
											<a href="<?=base_url()?>Profile">
												<i class="wmicon-avatar"></i>
												Profile Details
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-favorite"></i>
												Favorites
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-paper"></i>
												Statement
											</a>
										</li>
										<li class="active">
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
							<div class="wm-student-settings-info">							
								<div class="wm-student-dashboard-settings">
									<div class="wm-plane-title">
										<h2>Profile Settings</h2>
										<button type="button" style="color:white; background-color:skyblue ;  border-color:#b99663;
										width:100px; font-size:20px; " id="editbtn" data-id=' . $value->id . '><i class="fa fa-edit"></i> Edit</button>
									</div>
									<form id="insertform">
										<ul>
											<!-- Hidden Id For Edit -->
											<input type="hidden" id="id" name="id" placeholder="id" hidden>
            								<!-- Hidden Id For Edit -->
											<li><label style="color: black ;" for="fname">First Name</label>
											<input type="text" style="color: black ;" name="fname" id="fname" value="<?=$fname?>"></li>
											<li><label style="color: black ;" for="lname">Last Name</label>
											<input type="text" style="color: black ;" name="lname" id="lname" value="<?=$lname?>"></li>
											<li><label style="color: black ;" for="email">Email Address</label>
											<input type="text" style="color: black ;" name="email" id="email" value="<?=$email?>" ></li>
											<!-- <li><label style="color: black ;" for="password">Password</label>
											<input type="text" style="color: black ;" name="password" id="password" value="*******" ></li> -->
											<li><label style="color: black ;" for="birth">Birth Day</label>
											<input type="text" class="form-control" id="birth" style="color: black ;" name="birth" value="<?=$birth?>"></li>
											<li><label style="color: black ;" for="month">Birth Month</label>
											<input type="text" id="month" style="color: black ;" name="month" value="<?=$month?>"></li>
											<li><label style="color: black ;" for="year"> Birth Year</label>
											<input type="text" id="year" style="color: black ;" name="year" value="<?=$year?>"></li>
											<li><label style="color: black ;" for="department">Department</label>
											<input type="text" id="department" style="color: black ;" name="department" value="<?=$department?>"></li>
											<li><label style="color: black ;" for="batch">Batch Year</label>
											<input type="text" id="batch" style="color: black ;" name="batch" value="<?=$batch?>"></li>
											<li><label style="color: black ;" for="university">University</label>
											<input type="text" id="university" style="color: black ;" name="university" value="<?=$university?>"></li>
											<li><label style="color: black ;" for="City">City</label>
											<input type="text" id="city" style="color: black ;" name="city" value="<?=$city?>"></li>
											<li><label style="color: black ;" for="province">Province</label>
											<input type="text" id="province" style="color: black ;" name="province" value="<?=$province?>"></li>
											<li><label style="color: black ;" for="pcode">Postal-Code</label>
											<input type="text" id="pcode" style="color: black ;" name="pcode" value="<?=$pcode?>"></li>
											<li><label style="color: black ;" for="phone">Phone</label>
											<input type="text" style="color: black ;" name="phone" id="phone" value="<?=$phone?>" ></li>
											<li><label style="color: black ;" for="description">Description</label>
											<input type="text" id="description" style="color: black ;" name="description" value="<?=$description?>"></li>
											<li></li>
											<!-- <li class="wm-student-select">
												<div class="wm-select-two">
													<select>
														<option>Day of Birth </option>
														<option>Day of Birth 1 </option>
														<option>Day of Birth 2 </option>
														<option>Day of Birth 3 </option>
													</select>
												</div>
											</li> -->
											<li style="text-align:right; margin-top:30px"><input  id="btnupdate"
											   value="Save Changes" type="button"  style="color:white; font-size:20px; 
											   background-color:skyblue; width:180px; border:none; height:40px">
										</li>																			 
		                                </ul>
										<div class="wm-student-dashboard-form">
										<div class="wm-full-title ">
										<h2>Update Password</h2>
										<button type="button" style="color:white; background-color:skyblue ;  border-color:#b99663; margin-top:8px;
										width:100px; font-size:18px;" id="editbtn2" data-id=' . $value->id . '><i class="fa fa-edit"></i> Edit</button>
										</div>
										<ul>
										<form id="insertform">
										<li><label style="color: black ;" for="password">New Password</label>
											<input type="text" style="color: black ;" name="password" id="password" placeholder="******" ></li>
											<li style="text-align:right; margin-top:42px"><input  id="btnupdate2"
											   value="Update Password" type="button"  style="color:white; font-size:20px; 
											   background-color:skyblue; width:180px; border:none; height:40px">
										</li>
										</form>
										</ul>
										</div>
									</form>
								</div>
								<!-- <div class="wm-student-dashboard-form wm-student-dashboard">
									<div class="wm-full-title ">
										<h2>Social Media</h2>
									</div>
									<form>
										<ul>
											<li class="wm-form-icon"><a class="fa fa-facebook wm-icon" href="#"></a><input type="text" value="kevinnikols" onblur="if(this.value == '') { this.value ='kevinnikols'; }" onfocus="if(this.value =='kevinnikols') { this.value = ''; }"></li>
											<li class="wm-form-icon"><a class="fa fa-twitter wm-icon" href="#"></a><input type="text" value="@kevinnikols" onblur="if(this.value == '') { this.value ='@kevinnikols'; }" onfocus="if(this.value =='@kevinnikols') { this.value = ''; }"></li>
											<li class="wm-form-icon"><a class="fa fa-youtube wm-icon" href="#"></a><input type="text" value="kevinnikols" onblur="if(this.value == '') { this.value ='kevinnikols'; }" onfocus="if(this.value =='kevinnikols') { this.value = ''; }"></li>
											<li><input type="submit" value="update changes"></li>
		                                </ul>
									</form>
								</div> -->
							</div>
						</div>					
					</div>
				</div>
			</div>
			<!--// Main Section \\-->
		</div>
		<!--// Main Content \\-->
<?php
include('footer.php');?>
<script>
	$("#inserform").ready(function(){
	    $("#btnupdate").hide();
     });
	$("#inserform").ready(function(){
	    $("#btnupdate2").hide();
     });


	// Edit profile Function
    $(document).on('click','#editbtn',function(){
      var id=$(this).data('id');
      $("#editbtn").hide();
      $("#btnupdate").show();
      $("#fname").val("");
	  $("#lname").val("");
      $("#email").val("");
      $("#birth").val("");
      $("#month").val("");
      $("#year").val("");
      $("#city").val("");
      $("#pcode").val("");
      $("#phone").val("");
      $("#province").val("");
      $("#department").val("");
      $("#batch").val("");
      $("#university").val("");
      $("#description").val("");
      
      $.ajax({
        type:'post',
        url:'<?= base_url()?>Settings/edit',
        data:{id:id},
        dataType:'json',
        before:function(){
          
        },
        success:function(result){
          $("#id").val(result.id);
          $("#fname").val(result.fname);
          $("#lname").val(result.lname);
          $("#email").val(result.email);
          $("#birth").val(result.birth);
          $("#month").val(result.month);
          $("#year").val(result.year);
          $("#city").val(result.city);
          $("#pcode").val(result.pcode);
          $("#phone").val(result.phone);
          $("#province").val(result.province);
          $("#department").val(result.department);
          $("#batch").val(result.batch);
          $("#university").val(result.university);
          $("#description").val(result.description);
          
        }
      })
    });
	// Edit Password
	$(document).on('click','#editbtn2',function(){
      var id=$(this).data('id');
      $("#editbtn2").hide();
      $("#btnupdate2").show();
      $("#password").val("");
      $.ajax({
        type:'post',
        url:'<?= base_url()?>Settings/editpassword',
        data:{id:id},
        dataType:'json',
        before:function(){
          
        },
        success:function(result){
          $("#id").val(result.id);
          $("#password").val(result.password);
        }
      })
    });
	// -- Update profile Function --//
    $("#btnupdate").click(function(){
      var form = $('#insertform').serialize();
      event.preventDefault();
   

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Settings/update',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Profile Updated",
                text: "Added Profile Data",
                timer: 1500,
              }).then(() => {
                location.reload();
              })
            }
            else {
              swal({
                icon: "Error",
                title: "Try Again",
                text: "Any Issue Occured",
              }).then(() => {
                location.reload();
              })
            }
          }
        })
      })
    // });
	// update Password
	$("#btnupdate2").click(function(){
      var form = $('#insertform').serialize();
      event.preventDefault();
   

        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Settings/updatepassword',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "New Password Updated",
                text: "Login Your Account Use New Password",
                timer: 1500,
              }).then(() => {
                location.reload();
              })
            }
            else {
              swal({
                icon: "Error",
                title: "Try Again",
                text: "Any Issue Occured",
              }).then(() => {
                location.reload();
              })
            }
          }
        })
      })
   
</script>
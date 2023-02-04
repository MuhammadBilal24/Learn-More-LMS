
<!-- Header Starts -->
<?php
include('header.php');?>
<!-- Header Ends -->
    <!--// Mini Header \\-->
        <!-- <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                            <h1>Contact Us</h1> 
                        </div>
                        <div class="wm-breadcrumb">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li>Contact Us</li>
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
            <div class="wm-main-section wm-contact-full wm-contact-full-inner">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="wm-contact-tab">

                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact Us</a></li>
                                <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information Details</a></li>
                              </ul>

                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-4"> <div class="wm-map"> <div id="map"></div> </div> </div>
                                        <div class="col-md-8">
                                            <div class="wm-contact-form">
                                                <span style="color: black;">Talk To Us Today</span>
                                                <form id="insertform">
                                                    <ul>
                                                        <li>
                                                            <i style="color:black;" class="wmicon-black"></i>
                                                            <input type="text" style="color: black;" name="contact_name" id="contact_name" placeholder="Name" required >
                                                        </li>
                                                        <li>
                                                            <i style="color:black;" class="wmicon-symbol3"></i>
                                                            <input type="text" style="color: black;" name="contact_email" id="contact_email" placeholder="Email Address or Username" required>
                                                        </li>
                                                        <li>
                                                            <i style="color:black;" class="wmicon-technology4"></i>
                                                            <input type="text" style="color: black;" name="phone" id="phone" placeholder="Phone Number" required>
                                                        </li>
                                                        <li>
                                                            <i style="color:black;" class="wmicon-web2"></i>
                                                            <textarea name="message" style="color: black;" id="message" placeholder="Message" required></textarea>
                                                        </li>
                                                        <li> <input type="submit" value="Send Message"></li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile">
                                    <span class="wm-contact-title">Contact Info</span>
                                    <div class="wm-contact-service">
                                        <ul class="row">
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                                <h5 class="wm-color">Address</h5>
                                                <p>B-14 Hamdard Sukkur, 65200, Sukkur Sindh Pakistan</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                                <h5 class="wm-color">Phone & Fax</h5>
                                                <p> +92 331-2482096 <br> 071-567782</p>
                                            </li>
                                            <li class="col-md-4">
                                                <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                                <h5 class="wm-color">E-mail</h5>
                                                <p><a href="mailto:name@email.com">lms@edu.pk.com</a> <a href="mailto:name@email.com">support@lms@edu.pk.com</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="contact-social-icon">
                                        <li><a href="#"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                                    </ul>
                                </div>
                              </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
<!-- footer Starts -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
      <div class="wm-modallogin-form wm-login-popup">
                <span class="wm-color">Login to Your Account Or Signup</span>
            </div>
      </div>
      
    </div>
  </div>
</div>
<?php
include('footer.php');?>
<!-- footer Ends -->
<script>
    $('#insertform').submit(function(){
        var form =$('#insertform').serialize();
        event.preventDefault();
        $.ajax({
            type:'post',
            url:'<?=base_url()?>Contacts/insert',
            data: form,
            success: function(data)
            {
                if( data == 'Correct')
                {
                    swal({
                        icon:'',
                        title:'Sending',
                        timer:500
                    })
                    .then(()=>{
                        swal({
                        icon:'success',
                        title:'Message Sent',
                        timer:1500
                        })
                    })
                    .then(()=>{
                        location.reload();
                    })
                }
            else{
                swal({
                        icon:'error',
                        title:'Not Sent',
                    })
            }}
        })
    })
    // signup form ( from contact page you can sinup new account)
    $('#signupform').submit(function(){
        var form =$('#signupform').serialize();
        event.preventDefault();
        $.ajax({
            type:'post',
            url:'<?=base_url()?>Contacts/signup',
            data: form,
            
            success: function(data)
            {
                if( data == 'Correct')
                {
                    swal({
                        title:'Wait a Second',
                        text:'Request Sending',
                        timer:3500
                    })
                    .then(()=>{
                        swal({
                        icon:'success',
                        title:'Successfully Registered',
                        text:'Welcome Learning Management System',
                        timer:2500
                    })
                    .then(()=>{
                        location.reload();
                    })
                    })
                }
            else{
                swal({
                        icon:'error',
                        title:'Try Again',
                    })
            }}
        })
     })
    //  Signup Ends
</script>
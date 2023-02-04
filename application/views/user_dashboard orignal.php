<?php
$fname = $this->session->fname;
$email = $this->session->email;
$batch = $this->session->batch;
$university = $this->session->university;
$department = $this->session->department;
?>
<style>
    :target {
        border: 2px solid #D4D4D4;
        background-color: #e5eecc;
    }
</style>

<?php
if ($department == "Computer Science") {
?>
    <?php
    include('header.php'); ?>
    <div class="wm-main-banner">
        <div class="wm-main-section">
            <br>
            <div class="container">
                <h1 style="color: #474d6b; font-weight:bolder ">Hello, <?= $fname ?></h1>
                <h4 style="color: #474d6b; margin-top:-5px ;"><?= $usertype ?> Portal</h4>
                <h5 style="color: #474d6b; margin-top:-8px ;"><?= $batch ?>, <?= $department ?>, <br> <?= $university ?> </h5>
            </div>
        </div>
    </div>
    <div class="wm-main-section wm-plain-service-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="wm-service wm-plain-service">
                        <ul class="row">
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-medical2"></i>  -->
                                    <small class="word-count">100</small>
                                </span>
                                <h5><a href="#">ATTENDENCE</a></h5>
                                <!-- <p>100% coverage for diagnostic and preventive care.</p> -->
                            </li>
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-glasses"></i> -->
                                    <small class="word-count">12</small>
                                </span>
                                <h5><a href="#">ABSENTS</a></h5>
                                <!-- <p>Our healthcare group insurance purchase the vision insurance.</p> -->
                            </li>
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-technology2"></i> -->
                                    <small class="word-count">34</small>
                                </span>
                                <h5><a href="#">DAYS LEFT</a></h5>
                                <!-- <p>Allows the employee to establish a Flexible Spending account</p> -->
                            </li>
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-medical"></i> -->
                                    <small class="word-count">56</small>
                                </span>
                                <h5><a href="#">PERFORMENCE</a></h5>
                                <!-- <p>A tax-free savings account that works with a qualified health.</p> -->
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="wm-main-content">
        <!--// Main Banner \\-->
        <div class="wm-fancy-title">
            <h2 style="margin-top: -50px;"><?= $department ?> <span></span></h2>
        </div>


        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <div class="widget widget_check-box widget_scroll-box">
                            <h5 style="font-weight: bolder; color:white; background-color:#003c5a; text-align:center">Select a Subject</h5>

                            <ul id="ondet">
                                <?php
                                $sr = 1;
                                $count = 1;
                                foreach ($bcs_table as $value)
                                    echo '
                                    <li>
                                        <label id="gvdet">
                                            ' . $sr++ . ') <a  href="#news' . $count++ . '" >' . $value->subject . ' | ' . $value->teacher . '</a>
                                        </label>
                                    </li>
                                    '; ?>
                                <!-- <li>
                                        
                                        <label >
                                            <span>2</span>
                                            <a href="#news2">DAA</a>
                                        </label>
                                    </li> -->

                            </ul>
                        </div>
                    </aside>
                    <div class="col-md-9">
                        <div class="wm-filter-box" style="background-color:white ;">
                            <h4 style="font-weight: bolder; color:white; background-color:#003c5a; text-align:center;margin-top:-13px"> Subject Details</h4>
                        </div>
                        <div class="wm-courses wm-courses-popular wm-courses-mediumsec" id="onsbj">
                            <ul class="row">
                                <?php
                                $count = 1;
                                foreach ($bcs_table as $value)
                                    echo '
                            
                                <li class="col-md-12" id="news' . $count++ . '" >
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="">
                                        <img src="' . base_url() . 'backend/assets/product/' . $value->img . '" style="height:200px" alt="">
                                         </a>
                                            <figcaption>
                                                <img src="' . base_url() . 'assets/images/sirlogo.png" style="width:60px" alt="">
                                                <h6><a href="#">' . $value->subject . '</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6 style="font-weight:bolder"><a href="#" >' . $value->subject . ' by ' . $value->teacher . '</a></h6>
                                            <p style="font-weight:bolder">Book: ' . $value->bookname . '</p>   

                                            <p>' . $value->details . '</p>
                                            <p1> <a style="color:purple" href="">' . $value->files . '</a></p1>
                                            <div class="wm-courses-price"> <span>Download</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>Videos</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                '; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

    <?php
    include('footer.php'); ?>




<?php
} else if ($department == "Business Administration") {
?>
    <?php
    include('header.php'); ?>
    <!--// Main Banner \\-->
    <div class="wm-main-banner">
        <div class="wm-main-section">
            <br>
            <div class="container">
                <h1 style="color: #474d6b; font-weight:bolder ">Hello, <?= $fname ?></h1>
                <h4 style="color: #474d6b; margin-top:-5px ;"><?= $usertype ?> Portal</h4>
                <h5 style="color: #474d6b; margin-top:-8px ;"><?= $batch ?>, <?= $department ?>, <br> <?= $university ?> </h5>
            </div>
        </div>
    </div>
    <div class="wm-main-section wm-plain-service-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="wm-service wm-plain-service">
                        <ul class="row">
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-medical2"></i>  -->
                                    <small class="word-count">100</small>
                                </span>
                                <h5><a href="#">ATTENDENCE</a></h5>
                                <!-- <p>100% coverage for diagnostic and preventive care.</p> -->
                            </li>
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-glasses"></i> -->
                                    <small class="word-count">12</small>
                                </span>
                                <h5><a href="#">ABSENTS</a></h5>
                                <!-- <p>Our healthcare group insurance purchase the vision insurance.</p> -->
                            </li>
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-technology2"></i> -->
                                    <small class="word-count">34</small>
                                </span>
                                <h5><a href="#">DAYS LEFT</a></h5>
                                <!-- <p>Allows the employee to establish a Flexible Spending account</p> -->
                            </li>
                            <li class="col-md-3">
                                <span class="wm-color-two" style="color: #003c5a;">
                                    <!-- <i class="wmicon-medical"></i> -->
                                    <small class="word-count">56</small>
                                </span>
                                <h5><a href="#">PERFORMENCE</a></h5>
                                <!-- <p>A tax-free savings account that works with a qualified health.</p> -->
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="wm-main-content">
        <div class="wm-fancy-title">
            <h2 style="margin-top: -50px;"><?= $department ?> <span></span></h2>
        </div>

        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <div class="widget widget_check-box widget_scroll-box">
                            <h5 style="font-weight: bolder; color:white; background-color:#003c5a; text-align:center">Select a Subject</h5>

                            <ul id="ondet">
                                <?php
                                $sr = 1;
                                $bbacount = 1;
                                foreach ($bba_table as $value)
                                    echo '
                                    <li>
                                        <label id="gvdet" >
                                            ' . $sr++ . ') <a href="#bbanews' . $bbacount++ . '">' . $value->subject . ' | ' . $value->teacher . '</a>
                                        </label>
                                    </li>
                                    '; ?>
                            </ul>
                        </div>
                    </aside>
                    <div class="col-md-9">
                        <div class="wm-filter-box" style="background-color:white ;">
                            <h4 style="font-weight: bolder; color:white; background-color:#003c5a; text-align:center;margin-top:-13px"> Subject Details</h4>
                        </div>
                        <div class="wm-courses wm-courses-popular wm-courses-mediumsec" id="onsbj">
                            <ul class="row">
                                <?php
                                $bbacount = 1;
                                foreach ($bba_table as $value)
                                    echo '
                            
                                <li class="col-md-12" id="bbanews' . $bbacount++ . '">
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="">
                                        <img src="' . base_url() . 'backend/assets/product/' . $value->img . '" style="height:200px" alt=""> </a>
                                            <figcaption>
                                                <img src="' . base_url() . 'assets/images/sirlogo.png" style="width:60px" alt="">
                                                <h6><a href="#">' . $value->subject . '</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6 style="font-weight:bolder"><a href="#" >' . $value->subject . ' by ' . $value->teacher . '</a></h6>
                                            <p style="font-weight:bolder">Book: ' . $value->bookname . '</p>   

                                            <p>' . $value->details . '</p>
                                            <p1> <a style="color:purple" href="">' . $value->files . '</a></p1>
                                            <div class="wm-courses-price"> <span>Download</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i>Videos</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                '; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

    <?php
    include('footer.php'); ?>



<?php
}
?>

<script>
    $(document).ready(function() {
        $("#onsbj").hide();
        $(document).on('click', '#gvdet', function() {
            $("#onsbj").show('');

        });
    });
</script>
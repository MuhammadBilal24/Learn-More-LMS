<?php
$subject = $this->session->subject;
include('header.php'); ?>
<style>
                    :target {
  border: 2px solid #D4D4D4;
  background-color: #e5eecc;
}
</style>
<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                <div class="widget widget_check-box " >
                                <h5 style="font-weight: bolder; color:white; background-color:#003c5a; text-align:center">Select a Subject</h5>
                                <ul>
                                    <?php
                                    $sr=1;
                                    $count = 1;
                                    foreach ($bcs_table as $value)
                                echo '

                                    <li>
                                        
                                        <label >
                                            '.$sr++.') <a href="#news' . $count++ . '">' . $value->subject . ' | '.$value->teacher.'</a>
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
                <div class="col-md-9" style="margin-top: -15px;">
                    <div class="wm-filter-box">
                        <h4 style="font-weight: bolder; color:white; background-color:#003c5a; text-align:center"> Subject Details</h4>
                    </div>
                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                        <ul class="row">
                        <?php
                                    $count=1;
                                    foreach($bcs_table as $value)
                                    echo'
                            
                                <li class="col-md-12" id="news'.$count++.'">
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="">
                                        <img src="' . base_url() . 'backend/assets/product/' . $value->img . '" style="height:200px" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                            <figcaption>
                                                <img src="extra-images/papular-courses-thumb-1.jpg" alt="">
                                                <h6><a href="#">'. $value->subject.'</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6 style="font-weight:bolder"><a href="#" >'. $value->subject.' by '. $value->teacher.'</a></h6>
                                            <p style="font-weight:bolder">Book: '. $value->bookname.'</p>   

                                            <p>'. $value->details.'</p>
                                            <p1> <a style="color:purple" href="">'. $value->files.'</a></p1>
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
                                ';?>
                            
                                <!-- <li class="col-md-12" id="news2">
                                    <div class="wm-courses-popular-wrap">
                                        <figure> <a href="" id="dsa"><img src="<?= base_url() ?>assets/extra-images/papular-courses-1.jpg" alt=""> <span class="wm-popular-hover"> <small>see course</small> </span> </a>
                                            <figcaption>
                                                <img src="extra-images/papular-courses-thumb-1.jpg" alt="">
                                                <h6><a href="#">Daa</a></h6>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-popular-courses-text">
                                            <h6><a href="#">Advanced Architectural Research</a></h6>
                                            <p >The course combines study of the history, archaeology and art of all these classical world. It looks at the societies and cultures of the ancient Greel Mediterranean world through their written texts.</p>
                                            <div class="wm-courses-price"> <span>$32</span> </div>
                                            <ul>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social7"></i> 342</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-social6"></i> 10</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-time2"></i> 1 year</a></li>
                                                <li><a href="#" class="wm-color"><i class="wmicon-location"></i> Campus L2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li> -->




                        </ul>
                    </div>
                    


                    <!-- <div class="wm-pagination">
                                <ul>
                                    <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>...</li>
                                    <li><a href="#">18</a></li>
                                    <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                                </ul>
                            </div> -->
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->

</div>
<!--// Main Content \\-->

<?php
include('footer.php') ?>
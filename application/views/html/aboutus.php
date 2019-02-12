<?php include('header.php'); ?>


<!--==========================
About Us
============================-->
<?php if(isset($aboutus_details) && count($aboutus_details)>0){ ?>
<section id="about">
    <div class="container">

        <header class="section-header">
            <h3>About Us</h3>
            <p>
                <?php echo isset($aboutus_details['parahraph'])?$aboutus_details['parahraph']:''; ?>
            </p>
        </header>
        <input type="hidden" name="about_us_a_id" id="about_us_a_id" value="<?php echo isset($aboutus_details['a_id'])?$aboutus_details['a_id']:''; ?>">

        <div class="row about-cols">
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                        <img src="<?php echo base_url('assets/aboutus/'.$aboutus_details['image1']); ?>" alt="<?php echo isset($aboutus_details['image1'])?$aboutus_details['image1']:''; ?>" class="img-fluid">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Our Mission</a></h2>
                    <p>
                        <?php echo isset($aboutus_details['paragraph1'])?$aboutus_details['paragraph1']:''; ?>.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col">
                    <div class="img">
                        <img src="<?php echo base_url('assets/aboutus/'.$aboutus_details['image2']); ?>" alt="<?php echo isset($aboutus_details['image2'])?$aboutus_details['image2']:''; ?>" class="img-fluid">
                        <div class="icon"><i class="ion-ios-list-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Our Plan</a></h2>
                    <p>
                        <?php echo isset($aboutus_details['paragraph2'])?$aboutus_details['paragraph2']:''; ?>.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col">
                    <div class="img">
                        <img src="<?php echo base_url('assets/aboutus/'.$aboutus_details['image3']); ?>" alt="<?php echo isset($aboutus_details['image3'])?$aboutus_details['image3']:''; ?>" class="img-fluid">
                        <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Our Vision</a></h2>
                    <p>
                        <?php echo isset($aboutus_details['paragraph3'])?$aboutus_details['paragraph3']:''; ?>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- #about -->
<?php } ?>


<?php include('footer.php'); ?>
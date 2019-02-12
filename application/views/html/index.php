<?php include('header.php'); ?>

<!--==========================
Intro Section
============================-->

<?php if(isset($slider_details) && count($slider_details)>0){ ?>
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <?php $cnt=1;foreach($slider_details as $list){ ?>
                <input type="hidden" name="slider_id[]" id="slider_id" value="<?php echo isset($list['s_id'])?$list['s_id']:''; ?>">
                <?php if($cnt==1){ ?>
                <div class="carousel-item active">
                    <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>
                                <?php echo isset($list['text'])?$list['text']:''; ?>
                            </h2>

                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>
                                <?php echo isset($list['text'])?$list['text']:''; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php $cnt++;} ?>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section><!-- #intro -->
<?php } ?>

<main id="main">

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


    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#contact">Call To Action</a>
        </div>
    </section><!-- #call-to-action -->

    
    <!--==========================
    Our Services
    ============================-->
    <?php if(isset($gallery_details) && count($gallery_details)>0){ ?>
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Our Gallery</h3>
            </header>
            <div class="row portfolio-container">
                <?php foreach($gallery_details as $list){ ?>
                <input type="hidden" name="gallery_id[]" id="gallery_id" value="<?php echo isset($list['g_id'])?$list['g_id']:''; ?>">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="<?php echo base_url('assets/gallery/'.$list['image']); ?>" class="img-fluid" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                            <a href="<?php echo base_url('assets/gallery/'.$list['image']); ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">
                                    <?php echo isset($list['text'])?$list['text']:''; ?></a></h4>


                        </div>
                    </div>
                </div>
                <?php } ?>


            </div>

        </div>
    </section><!-- #portfolio -->
    <?php } ?>

    
    <!--==========================
    Our Team
    ============================-->
    <?php if(isset($testimonials_details) && count($testimonials_details)>0){ ?>
    <section id="testimonials" class="">
        <div class="container">
            <header class="section-header">
                <h3>Testimonials</h3>
            </header>
            <div class="owl-carousel testimonials-carousel">
                <?php foreach($testimonials_details as $list){ ?>
                <input type="hidden" name="testimonials_id[]" id="testimonials_id" value="<?php echo isset($list['t_id'])?$list['t_id']:''; ?>">

                <div class="testimonial-item">
                    <img src="<?php echo base_url('assets/testimonial/'.$list['image']); ?>" class="testimonial-img" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                    <h3>
                        <?php echo isset($list['name'])?$list['name']:''; ?>
                    </h3>
                    <h4>
                        <?php echo isset($list['designation'])?$list['designation']:''; ?>
                    </h4>
                    <p>
                        <img src="<?php echo base_url(); ?>assets/vendor/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        <?php echo isset($list['paragraph'])?$list['paragraph']:''; ?>.
                        <img src="<?php echo base_url(); ?>assets/vendor/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- #testimonials -->
    <?php } ?>
    
    
    <!--==========================
    Contact Us
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>
                            <?php echo isset($contactus_details['address'])?$contactus_details['address']:''; ?></address>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">
                                <?php echo isset($contactus_details['phone'])?$contactus_details['phone']:''; ?></a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">
                                <?php echo isset($contactus_details['email'])?$contactus_details['email']:''; ?></a></p>
                    </div>
                </div>
            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="<?php echo base_url('preview/contactpost'); ?>" method="post" role="form" class="">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

</main>

<?php include('footer.php'); ?>
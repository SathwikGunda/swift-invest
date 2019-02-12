<?php include('header.php'); ?>


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


<?php include('footer.php'); ?>
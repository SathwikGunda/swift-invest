<?php include('header.php'); ?>

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

<?php include('footer.php'); ?>
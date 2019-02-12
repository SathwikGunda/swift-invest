<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi Templete'; ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo isset($logo_details['keywords'])?$logo_details['keywords']:'Prachatech'; ?>" name="keywords">
    <meta content="<?php echo isset($logo_details['description'])?$logo_details['description']:'Prachatech'; ?>" name="description">
    <?php if(isset($logo_details['favicon']) && $logo_details['favicon']!=''){ ?>
    <link href="<?php echo base_url('assets/logo/'.$logo_details['favicon']); ?>" rel="icon">
    <?php }else{ ?>
    <link href="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" rel="icon">
    <?php } ?>
    <!-- Favicons -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">

</head>

<body>

    <!--==========================
    Header
    ============================-->
    <header id="header" class="header-scrolled">
        <div class="container-fluid">

            <div id="logo" class="pull-left logo-header">
                <?php if(isset($logo_details['image']) && $logo_details['image']!=''){ ?>
                <img class="" src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="<?php echo isset($logo_details['org_image'])?$logo_details['org_image']:''; ?>">
                <?php }else{ ?>
                <img class="" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" alt="Logo">
                <?php } ?>
            </div>
            
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->
<html lang="en">

<head>
    <title>SPIPS Sanjauli Shimla</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Saraswati Paradise International Public School Sanjauli Shimla">
    <meta name="keywords" content="Best school in shimla, top school in shimla, top school, best school, schools in shimla">

    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/footer.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/icons/css/line-awesome.min.css'); ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/icons/favicon.png'); ?>">
    <link href="<?= base_url('assets/css/modal.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

</head>

<body>

<!--================================    HEADER MENU  ============================================-->

    <?php
    $this->load->view('website/header_menu');
    ?>

<!---------------------------------------------------------------------------------------------------->

    <div class="col-sm-12 col-md-12 col-lg-12 content-main">
        <div class="custom-container">

            <!-- <div class="floating">
                <a href="#" class="floating-link">Admission Enquiry</a>
            </div>-->

<!--================================    SLIDER IMAGES ============================================-->

            <?php
            $this->load->view('website/slider');
            ?>

<!--------------------------------------------------------------------------------------------------->
            <div class="row">
                <div class="col-8 secondcolumnn">

<!--====================================    OUR AIMS  ======================================================-->

                    <div class="col-md-12 col-xs-12 col-sm-12 feature">
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <i class="las la-bullseye feature-icon"></i>
                        </div>
                        <div class="col-md-9 col-xs-12 col-sm-12">
                            <?php
                            if (!empty($our_aim)) : ?>
                                <p class="feature-heading">
                                    <?= $our_aim->title ?>
                                </p>
                                <p class="feature-description">
                                    <?= $our_aim->description ?>
                                </p>
                            <?php else : ?>
                                <p>No data available</p>
                            <?php endif; ?>
                        </div>
                    </div>

<!--======================================    WHY CHOOSE US  ==================================================-->        
                     <?php
                     if (!empty($why_chose_us)) : 
                     ?>

                    <div class="col-md-12 col-xs-12 col-sm-12 feature">
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <i class="las la-certificate feature-icon"></i>
                        </div>
                        <div class="col-md-9 col-xs-12 col-sm-12">
                                <p class="feature-heading">
                                    <?= $why_chose_us->title ?>
                                </p>

                                <p class="feature-description">
                                    <?= $why_chose_us->description ?>
                                </p>
                            <?php else : ?>
                                <p>No data available</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

<!--=======================================   RECENY NOTIFICATIONS SECTION    ==================================-->
                <?php
                    if (!empty($recent_notification)) :
                ?>

                <div class="col-4 colum44">
                    <div class="col-md- col-xs-12 col-sm-12 secondcolum" align="center">
                        <div class="content-about">
                            <div class="content-about-logo">
                                <img src="<?= $recent_notification->image ?>" class="content-about-logo-image" alt="" />
                            </div>
                            <p class="notification-bar-title">
                                <?= $recent_notification->title ?>
                                </p>
                            <marquee direction="up" scrollamount="4" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
                                <ul>
                                    <li>
                                        <a class="notification-item" href="">
                                            <?= $recent_notification->notification ?>
                                            </a>
                                            <?php else : ?>
                                                <a>No data available</a>
                                                <?php endif; ?>
                                        </li>
                                    </ul>
                                </marquee>
                            <button class="theme-btn">View All</button> <!--onclick="location.href='#'"-->
                        </div>
                    </div>
                </div>
            </div>

<!--===========================================    Our Achievements    ========================================================-->

            <?php
            if(!empty($achievement)) :
            ?>

            <div class="row OurAcademicAchieversrow d-flex">
                <div class="col-8 secondcolumnn">
                    <div class="col-md-12 col-xs-12 imgs1">
                        <p class="feature-heading"><?= $achievement->title; ?></p> 
                        <img src="<?= $achievement->img1; ?>" alt="achievements" class="tribute-img" />
                        
                    </div>
                </div>
                <div class="col-4  newspaperimage1">
                <img src="<?= $achievement->img2; ?>" alt="paper cutting " class="tribute-img" />
                </div>
            </div>
            <!------>

            <?php else : ?>
            <a>No data available</a>
            <?php endif; ?>

                        <!-------->
<!--===================================   Recent Activities   ============================================-->

                <?php
                if(!empty($activities)):
                ?>

            <div class="row  recentactivitiesrow">

                <div class="col-4 secondcolumnn">
                    <p class="feature-heading"><?= $activities->title; ?></p>
                    <img src="<?= $activities->img1; ?>" alt="" class="tribute-img2" />
                </div>

                <div class="col-4 secondcolumnn mt-4">
                    <div class="row spps">
                        <div class="col-12 spips ">
                            <img src="<?= $activities->img2; ?>" alt="" class="tribute-img" />
                        </div>

                        <div class="col-6 ">
                            <img src="<?= $activities->img3; ?>" alt="" class="tribute-img4" />
                        </div>
                        <div class="col-6 ">
                            <img src="<?= $activities->img4; ?>" alt="" class="tribute-img5" />
                        </div>

                    </div>
                </div>

                <div class="col-4 colum44">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= $activities->img5; ?>" alt="" class="tribute-img" />
                        </div>
                        <div class="col-12">
                            <img src="<?= $activities->img6; ?>" alt="" class="tribute-img3" />
                        </div>
                    </div>
                </div>

            </div>


            <?php else : ?>
            <a>No data available</a>
            <?php endif; ?>


<!--=============================================================================================================-->

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <i class="las la-times close"></i>
                    <img src="<?= base_url('assets/images/gallery/Notice.jpeg'); ?>" alt="" class="modal-image" />
                </div>

            </div>

            <!--
            <div class="col-12">
                <p class="feature-heading">Our Guiding Spirits</p>
                <img class="guidingspirits" src="<?php #base_url('assets/images/gallery/tribute.jpg'); 
                                                    ?>" alt="" class="tribute-imgss" />
            </div>

        </div>
    </div>
 -->

            <!-------------------FOOTER----------------------------->



            <?php $this->load->view('website/footer'); ?>



            <script>
                /* Open when someone clicks on the span element */
                function openNav() {
                    document.getElementById("myNav").style.width = "100%";
                }

                /* Close when someone clicks on the "x" symbol inside the overlay */
                function closeNav() {
                    document.getElementById("myNav").style.width = "0%";
                }
            </script>
</body>

</html>
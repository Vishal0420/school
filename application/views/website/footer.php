<div class="footer1">
        <div class="row footerrow">

            <div class="col-3 footercolum1">
                <p class="footer-heading"><i class="las la-clock footer-heading-icon"></i> <?= $working_hr->title ?></p>
                <p class="footer-description">
                <?= isset($working_hr->content) ? nl2br(htmlspecialchars($working_hr->content)) : '' ?>
            </div>
            
            <div class="col-3 footercolum1">
                <div class="row">
                    <div class="col-12">
                        <p class="footer-heading"><i class="las la-map-marker footer-heading-icon"></i> <?= $address->title ?></p>
                        <p class="footer-description">
                        <?= isset($address->content) ? nl2br(htmlspecialchars($address->content)) : '' ?>
                    </div>
                    
                    <div class="col-12 logocolum"></div>
                </div>



            </div>

            <div class="col-6 footercolum1">
                <div class="row">
                    <div class="col-6 footercolum1">
                        <p class="footer-heading"><i class="las la-phone-square footer-heading-icon"></i><?= $contactUs->title ?></p>
                        <p class="footer-description">
                        <?= isset($contactUs->content) ? nl2br(htmlspecialchars($contactUs->content)) : '' ?>
                        </p>
                    </div>

                    <div class="col-6 footercolum1">
                        <p class="footer-heading"><i class="las la-plus-square footer-heading-icon"></i> Follow Us</p>
                        <div class="social-icon-box">
                            <a href="#">
                                <img src="<?= base_url('assets/images/logo/social_icons/twitter-square.svg'); ?>" alt="" class="footer-heading-icon-social">
                            </a>
                            <a href="#">
                                <img src="<?= base_url('assets/images/logo/social_icons/facebook-square.svg'); ?>" alt="" class="footer-heading-icon-social">
                            </a>
                            <a href="#">
                                <img src="<?= base_url('assets/images/logo/social_icons/instagram.svg'); ?>" alt="" class="footer-heading-icon-social">
                            </a>
                            <a href="#">
                                <img src="<?= base_url('assets/images/logo/social_icons/youtube-square.svg'); ?>" alt="" class="footer-heading-icon-social">
                            </a>
                        </div>
                    </div>

                </div>


                <div class="row photos">
                <div class="footer-section">
    <h3>Inquiry</h3>
    <form id="queryForm" method="post" action="<?= base_url('admin_controller/submit_form'); ?>">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="name" placeholder="Enter your full name">
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="msg" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" >Submit</button>
    </form>
</div>
     </div>
            </div>

        </div>
    </div>


    </div>

    <div class="col-md-12 col-xs-12 col-sm-12 footer-copyright-box1" align="center">
        <p class="copyright">Copyright © 2024 All Rights Reserved</p>
    </div>
   


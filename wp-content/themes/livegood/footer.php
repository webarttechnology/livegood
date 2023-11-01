<!-- footer section start -->
<footer class="footer_section position-relative">
    <div class="footer_section_wrap sec_top_space_50"
    style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/footer.png)">
    <div class="container">
        <div
            class="footer_top_content d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <div class="footer_top_logo">
                <a href="index.html" class="logos2"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/logo.jpg" alt="image_not_found"></a>
            </div>
            <!-- <div class="footer_top_social">
                <ul class="list-unstyled d-flex justify-content-end">
                <li class="me-3"><a href="#!"><i class="fab fa-twitter"></i></a></li>
                <li class="me-3"><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                <li class="me-3"><a href="#!"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div> -->
        </div>
        <div class="footer_inner_content sec_space_xs_70">
            <div class="footer_inner_content_wrap">
                <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer_inner_choose_content">
                        <div class="footer_inner_choose_title">
                            <h4>
                            <a href="#!" class="text-white">Why People Like us</a>
                            </h4>
                        </div>
                        <div class="footer_inner_choose_desc pt-2">
                            <p><?php echo get_field('footer_short_content',109); ?> </p>
                        </div>
                        <!-- <div class="footer_inner_choose">
                            <a href="#!"><button type="button"
                                class="btn custom_btn rounded-pill px-4 text-white">View More <i
                                    class="fas fa-long-arrow-alt-right"></i></button></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_inner_info_content">
                        <div class="footer_inner_info_title">
                            <h4>
                            <a href="#!" class="text-white">Contact Us</a>
                            </h4>
                        </div>
                        <div class="footer_inner_ctc_info pt-2 text-white">
                            <p>Address: <font><?php echo get_field('address',109); ?></font>
                            </p>
                            <p>Email: <font><?php echo get_field('email',109); ?></font>
                            </p>
                            <p>Phone: <font><?php echo get_field('phone_number',109); ?></font>
                            </p>
                            <!-- <div class="footer_inner_payment_ctc">
                            <div class="footer_inner_payment_title">
                                <h5 class="text-white">Payment Accepted</h5>
                            </div>
                            <div class="footer_inner_payment_thumb pt-3">
                                <a href="#!"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/payment/payment.png"
                                        alt="image_not_found"></a>
                            </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_inner_acct_content">
                        <div class="footer_inner_acct_title">
                            <h4>
                            <a href="#!" class="text-white">My Account</a>
                            </h4>
                        </div>
                        <div class="footer_inner_acct_item pt-2">

                        <?php
wp_nav_menu(
    array(
        'theme_location'  => 'footer',
        // 'menu_class'      => 'menu-wrapper',
        'container' => '',
        'items_wrap'      => '<ul id="primary-menu-list" class="list-unstyled"> <li> %3$s </li></ul>', // Complete the ul tag
        'fallback_cb'     => false,
    )
);

?>

                            <!-- <ul class="list-unstyled">
                            <li><a href="#!">Home</a></li>
                            <li><a href="#!">About us</a></li>
                            <li><a href="#!">Products</a></li>
                            <li><a href="#!">Oour team</a></li>
                            <li><a href="#!">Membership</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_inner_cotc_content">
                        <div class="footer_inner_ctc_title">  
                            <h4>
                            <a href="#!" class="text-white">Information</a>
                            </h4>
                        </div>
                        
                        <div class="footer_inner_info_item pt-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14736.20868280687!2d88.4341931!3d22.577152!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1697530711729!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="footer_bootom_content">
            <div class="footer_bootom_wrap">
                <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer_bootom_copyright">
                            <p>Copyright © <?php echo get_the_date('Y'); ?> <font class="text-orange">ORGANI</font> Inc. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer_bootom_privicy_cont d-flex justify-content-center align-items-center">
                            <div class="footer_bootom_privicy pe-5">
                            <a href="#!">
                                <p class="priv position-relative">Privacy Policy</p>
                            </a>
                            </div>
                            <div class="footer_bootom_terms pe-5">
                            <p class="position-relative">Terms of Use</p>
                            </div>
                            <div class="footer_bootom_refunds">
                            <p>Sales and Refunds</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<!-- footer section end -->

<!-- back-to-top start -->
<div class="backtotop">
    <a href="#!" class="scroll">
    <i class="fas fa-arrow-up fw-bold"></i>
    </a>
</div>
<!-- back-to-top end -->

</div>
   <!-- body wrap end -->

   <!-- Include jquery js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.min.js"></script>

   <!-- Include bootstrap-bundle js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.bundle.min.js"></script>

   <!-- Include aos js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/aos.js"></script>

   <!-- Include jquery-magnific-popup js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/magnific-popup.min.js"></script>

   <!-- Include nice-select js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/nice-select.min.js"></script>

   <!-- Include jquery-countdown js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/countdown.min.js"></script>

   <!-- Include slick js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/slick.min.js"></script>

   <!-- Include custom js -->
   <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/custom.js"></script>

   <?php wp_footer(); ?>
</body>


<!-- Mirrored from jthemes.net/themes/html/organic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 05:01:40 GMT -->
</html>

<?php /* Template Name: Contact-us */ ?>
        
        <!-- header -->
        <?php get_header(); ?>

        <!-- main body start -->
        <main>
            <!-- Breadcrumb section start -->
            <section class="breadcrumb_sec_1 position-relative  header_border">
                <div class="breadcrumb_wrap sec_space_mid_small"
                    style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/breadcrumb/breadcrumb1.png);">
                    <div class="breadcrumb_cont text-center">
                        <div class="breadcrumb_title">
                            <h2 class="text-white">Contact Us</h2>
                        </div>
                        <ul
                            class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                            <li><i class="fas fa-chevron-right"></i>Contact</li>
                            
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb section end -->

            

            <!-- address-section start -->
            <section class="address_sec sec_space_small" data-aos="fade-up" data-aos-duration="2000">
                <div class="address_sec_wrap">
                    <div class="container-sm">
                        <div class="row g-5 justify-content-center align-items-center">
                            <div class="col-md-6 col-lg-4 text-center">
                                <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-right" data-aos-duration="2000">
                                    <div class="address_author bg-white position-absolute">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <span class="text-uppercase px-3">GET TO KNOW</span>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <h4 class="address_title"><?php echo get_field('about_organi_heading'); ?></h4>
                                    <p class="address_desc"><?php echo get_field('about_organi_description'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center">
                                <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="address_author bg-white position-absolute">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <span class="text-uppercase px-3">visit us</span>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <h4 class="address_title">Our Address</h4>
                                    <p class="address_desc"><?php echo get_field('address',109); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center">
                                <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-left" data-aos-duration="2000">
                                    <div class="address_author2 bg-white position-absolute">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="address_author3 bg-white position-absolute">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <span class="text-uppercase px-3">Call or write</span>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                    </div>
                                    <h4 class="address_title">Phone & Email</h4>
                                    <p class="address_desc"><?php echo get_field('phone_number',109); ?><br> <?php echo get_field('email',109); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- address-section end -->

            <!-- contact-info section start -->

            <section class="contact_us_info position-relative" data-aos="fade-up" data-aos-duration="2000">
                <div class="comment_area_wrap" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/backgrounds/bg15.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 sec_space_small position-relative">
                                <div class="trend_sub_title d-flex align-items-center pb-3">
                                    <i class="far fa-circle"></i>
                                    <i class="far fa-circle"></i>
                                    <i class="far fa-circle"></i>
                                    <span class="text-uppercase px-3 text-dark">we love to here from you</span>
                                </div>
                                <h3 class="comment_area_title mb-5">Leave a Comment</h3>
                                <div class="comment_form_area">
                                    <?php echo do_shortcode('[contact-form-7 id="5830ad0" title="Contact form 1"]'); ?>
                                    <!-- <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form_item">
                                                    <input class="rounded-pill" type="text" name="name"
                                                        placeholder="Your Name*" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form_item">
                                                    <input class="rounded-pill" type="text" name="name"
                                                        placeholder="Your Name*" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form_item">
                                                    <input class="rounded-pill" type="email" name="email"
                                                        placeholder="Email Address*" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form_item">
                                                    <input class="rounded-pill" type="text" name="name"
                                                        placeholder="Website*" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_item">
                                            <textarea name="comment" placeholder="your Comment*"></textarea>
                                        </div>
                                        <button type="submit"
                                            class="btn custom_btn rounded-pill py-3 text-white text-uppercase">Post
                                            Comments <i class="fas fa-long-arrow-alt-right"></i></button>
                                    </form> -->
                                </div>
                                <!-- contact-info-right side thumb -->
                                <img class="contact_info_thumb_right position-absolute"
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product36.png" alt="product36.png"/>
                            </div>
                            <div class="col-lg-6">
                                <div class="map_section clearfix">
                                    <div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12"
                                        data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                                        data-mlat="40.701083" data-mlon="-74.1522848">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact-info-left side thumb -->
                <img class="contact_info_thumb_left position-absolute" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shapes/shape22.png"
                    alt="shape22.png"/>

            </section>
            <!-- contact-info section end -->

        </main>
        <!-- main body end -->

        <!-- footer -->
        <?php get_footer(); ?>
   

<?php /* Template Name: About-us */ ?>
  
      <?php get_header(); ?>

      <!-- main body start -->
      <main>
            <!-- sidebar section start -->
            <section class="sidebar_section">
                <div class="sidebar_content_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header align-items-center">
                                    <h5 class="mb-0">Organic Products</h5>
                                    <button type="button" class="btn-close text-reset text-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category/cat6.png" alt="cat6.png"/>
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$50.00</span>
                                                <del>$70.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category/cat7.png" alt="cat7.png"/>
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$40.00</span>
                                                <del>$60.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prdc_ctg_product_content mt-1 d-flex align-items-center">
                                        <div class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category/cat8.png" alt="cat8.png"/>
                                        </div>
                                        <div class="prdc_ctg_product_text">
                                            <div class="prdc_ctg_product_title my-2">
                                                <h5>Organic Cabbage</h5>
                                            </div>
                                            <div class="prdc_ctg_product_price mt-1 product_price">
                                                <span class="sale_price pe-1">$70.00</span>
                                                <del>$90.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total_price">
                                        <ul class="ul_li_block mb_30 clearfix">
                                            <li>
                                                <span>Subtotal:</span>
                                                <span>$215</span>
                                            </li>
                                            <li>
                                                <span>Vat 5%:</span>
                                                <span>$10.75</span>
                                            </li>
                                            <li>
                                                <span>Discount 15%:</span>
                                                <span>- $32.25</span>
                                            </li>
                                            <li>
                                                <span>Total:</span>
                                                <span>$191.8875</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sidebar_btns">
                                        <ul class="btns_group ul_li_block clearfix">
                                            <li><a href="cart.html">View Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sidebar section end -->
            
            <!-- Breadcrumb section start -->
            <section class="breadcrumb_sec_1 position-relative  header_border">
                <div class="breadcrumb_wrap sec_space_mid_small" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/breadcrumb/breadcrumb1.png);">
                    <div class="breadcrumb_cont text-center">
                        <div class="breadcrumb_title">
                            <h2 class="text-white">About</h2>
                        </div>
                        <ul class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                            <li><i class="fas fa-chevron-right"></i>About</li>
                            <!-- <li><i class="fas fa-chevron-right"></i>Dried</li> -->
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb section end -->
            
            <!-- product section-2 start -->
            <section class="product_section_2 sec_space_small" data-aos="fade-up" data-aos-duration="2000">
                <div class="product_section_2_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product_gallery d-flex justify-content-center align-items-center">
                                    <img src="<?php echo get_field('about_image'); ?>" alt="sale9.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product_section_content">
                                    <div class="product_sec_sub_title d-flex align-items-center pb-2">
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <i class="far fa-circle"></i>
                                        <span class="ps-1 text-uppercase organi">welcome to organi</span>
                                    </div>
                                    <div class="product_section_title py-2">
                                        <h2><?php echo get_field('about_heading'); ?></h2>
                                    </div>
                                    <?php echo get_field('about_description'); ?>
                                    <!-- <div class="product_section_desc product_about_desc">
                                        <p>We are a strong community of 100,000+ customers and 600+ sellers who aspire to be good, do good, and spread goodness. We are a democratic, self-sustaining, two-sided marketplace which thrives on trust and is built on community and quality content.</p>
                                    </div>
                                    <div class="product_services_cont d-flex flex-column my-5">
                                        <span>Superfast and ultra-reliable.</span>
                                        <span>Browse and download around the clock.</span>
                                        <span>Our fastest ever router.</span>
                                    </div> -->
                                    <!-- <div class="product_section_btn">
                                        <a href="#"><button type="button" class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white">Subscribe <i class="fas fa-long-arrow-alt-right"></i></button></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product section-2 end -->
            
            <!-- testimonial-3 section start  -->
            <section class="testimonial3_sec sec_space_xs_70 pt-0" data-aos="fade-up" data-aos-duration="2000">
                <div class="testimonial3_sec_wrap">
                    <div class="container-sm">
                        <div class="testimonial3_content position-relative">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="testimonial3_text w-auto">
                                        <p class="testimonial_desc text-center"><?php echo get_field('about_us_second_section_content_'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-3 section end  -->
                
                
            <!-- instagram section start -->
            
            <section class="instagram_section instagram_style_1 instagram_2 position-relative sec_space_xs_70 d-none" data-aos="fade-up" data-aos-duration="2000">
                <div class="container">
                    <div class="product_sec_sub_title d-flex justify-content-center align-items-center pb-2">
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <span class="px-2 text-uppercase">fresh from our farm</span>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                    </div>
                    <h2 class="instagram_title pb-5 text-center">Follow On Instagram</h2>
                    <ul class="zoom-gallery instagram_image_content ul_li slideshow4_slider" data-slick='{"dots": false}'>
                        <li>
                            <a class="popup_image" href="assets/images/instagram/instagram1.png">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram1.png" alt="instagram1.png"/>
                                <i class="fab fa-instagram"></i>
                                <span>@_Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a class="popup_image" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram4.png">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram4.png" alt="instagram4.png"/>
                                <i class="fab fa-instagram"></i>
                                <span>@_Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a class="popup_image" href="assets/images/instagram/instagram3.png">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram3.png" alt="instagram3.png"/>
                                <i class="fab fa-instagram"></i>
                                <span>@_Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a class="popup_image" href="assets/images/instagram/instagram4.png">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram4.png" alt="instagram4.png"/>
                                <i class="fab fa-instagram"></i>
                                <span>@_Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a class="popup_image" href="assets/images/instagram/instagram5.png">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram5.png" alt="instagram5.png"/>
                                <i class="fab fa-instagram"></i>
                                <span>@_Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a class="popup_image" href="assets/images/instagram/instagram3.png">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram3.png" alt="instagram3.png"/>
                                <i class="fab fa-instagram"></i>
                                <span>@_Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a class="popup_image" href="assets/images/instagram/instagram4.png">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram/instagram4.png" alt="instagram4.png"/>
                                <i class="fab fa-instagram"></i>
                                <span>@_Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section> 
            <!-- instagram section end -->
            
        </main>

      <!-- footer -->
      <?php get_footer(); ?>
   
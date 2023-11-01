 
 <?php /* Template Name: Product */ ?>
 
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
                           <h2 class="text-white">Products</h2>
                     </div>
                     <ul
                           class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                           <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                           <li><i class="fas fa-chevron-right"></i>Products</li>
                           
                     </ul>
                  </div>
               </div>
         </section>
         <!-- Breadcrumb section end -->

         <!-- product section start -->
         <section class="product_section sec_space_xxs_50" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="product_sec_content">
                        <div class="product_sec_sub_title d-flex align-items-center pb-2">
                           <i class="far fa-circle"></i>
                           <i class="far fa-circle"></i>
                           <i class="far fa-circle"></i>
                           <span class="ps-2">FRESH FROM OUR FARM</span>
                        </div>
                        <!-- <h2 class="product_sec_title pb-3">Our Organic Products</h2> -->
                     </div>
                  </div>
               </div>
<?php
               $args = array(
        'post_type' => 'products',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'id',
        'order' => 'ASC',
      );

      $loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
        $image = wp_get_attachment_url(get_post_thumbnail_id($post->ID) );
      ?>

               <div class="tab-content" id="pills-tabContent">
               <h2 class="product_sec_title pb-3"><?php the_title(); ?></h2>
                  <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                     <div class="row g-4">
                        
      

<?php 
$fields = CFS()->get( 'product_loop' );
if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {


?>
                        <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="<?php echo $field['product_sec_button_link']; ?>" target="_blank">
                                       <img class="pic-1" src="<?php echo $field['product_sec_image']; ?>" alt="product1.png"/>
                                       <!-- <img class="pic-2" src="assets/images/product/product1.png" alt="image_not_found"> -->
                                    </a>
                                    <?php echo $field['product_sec_content']; ?>
                                    

                                 </div>

                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href=" <?php echo $field['product_sec_button_link']; ?>" target="_blank"> <?php echo $field['product_sec_title']; ?></a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href=" <?php echo $field['product_sec_button_link']; ?>" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class> <?php echo $field['product_sec_button_text']; ?></a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php }}
                       else{
                        echo"<p>No Products to show</p>";
                     } ?>
                       <!--  <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="shop-list.html" target="_blank">
                                       <img class="pic-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product1.png" alt="product1.png"/>
                                      
                                    </a>
                                    <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
                                       <li>
                                            <div class="d-flex">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">24 Vitamins and Minerals</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Immune and Cardiovascular Support</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Promotes Healthy Aging</div>
                                            </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="shop-list.html" target="_blank">Bio-Active Complete Multi-Vitamin For Men</a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="#" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class>Learn More</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="shop-list.html" target="_blank">
                                       <img class="pic-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product1.png" alt="product1.png"/>
                                       
                                    </a>
                                    <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
                                       <li>
                                            <div class="d-flex">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">24 Vitamins and Minerals</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Immune and Cardiovascular Support</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Promotes Healthy Aging</div>
                                            </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="shop-list.html" target="_blank">Bio-Active Complete Multi-Vitamin For Men</a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="#" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class>Learn More</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="shop-list.html" target="_blank">
                                       <img class="pic-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product1.png" alt="product1.png"/>
                                       
                                    </a>
                                    <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
                                       <li>
                                            <div class="d-flex">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">24 Vitamins and Minerals</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Immune and Cardiovascular Support</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Promotes Healthy Aging</div>
                                            </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="shop-list.html" target="_blank">Bio-Active Complete Multi-Vitamin For Men</a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="#" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class>Learn More</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="shop-list.html" target="_blank">
                                       <img class="pic-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product1.png" alt="product1.png"/>
                                       
                                    </a>
                                    <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
                                       <li>
                                            <div class="d-flex">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">24 Vitamins and Minerals</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Immune and Cardiovascular Support</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Promotes Healthy Aging</div>
                                            </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="shop-list.html" target="_blank">Bio-Active Complete Multi-Vitamin For Men</a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="#" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class>Learn More</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="shop-list.html" target="_blank">
                                       <img class="pic-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product1.png" alt="product1.png"/>
                                       
                                    </a>
                                    <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
                                       <li>
                                            <div class="d-flex">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">24 Vitamins and Minerals</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Immune and Cardiovascular Support</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Promotes Healthy Aging</div>
                                            </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="shop-list.html" target="_blank">Bio-Active Complete Multi-Vitamin For Men</a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="#" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class>Learn More</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="shop-list.html" target="_blank">
                                       <img class="pic-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product1.png" alt="product1.png"/>
                                       
                                    </a>
                                    <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
                                       <li>
                                            <div class="d-flex">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">24 Vitamins and Minerals</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Immune and Cardiovascular Support</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Promotes Healthy Aging</div>
                                            </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="shop-list.html" target="_blank">Bio-Active Complete Multi-Vitamin For Men</a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="#" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class>Learn More</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xl-3">
                           <div class="product_layout_1 overflow-hidden position-relative">
                              <div class="product_layout_content bg-white position-relative">
                                 <div class="product_image_wrap">
                                    <a class="product_image d-flex justify-content-center align-items-center"
                                       href="shop-list.html" target="_blank">
                                       <img class="pic-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product/product1.png" alt="product1.png"/>
                                       
                                    </a>
                                    <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
                                       <li>
                                            <div class="d-flex">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">24 Vitamins and Minerals</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Immune and Cardiovascular Support</div>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="d-flex mt-3">
                                                <i class="fas fa-check-circle me-2 mt-1 text-orange"></i>
                                                <div class="media-body">Promotes Healthy Aging</div>
                                            </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="shop-list.html" target="_blank">Bio-Active Complete Multi-Vitamin For Men</a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="#" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class>Learn More</a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
         <?php   endwhile;
                     wp_reset_postdata(); ?>
            </div>
         </section>
         <!-- product section start -->
      </main>
      <!-- main body end -->

      <!-- footer -->
      <?php get_footer(); ?>
  
<?php /* Template Name: home */ ?>
      <!-- header -->
      <?php get_header(); ?>

      <!-- main body start -->
      <main>
         <!-- banner section start -->
         <section class="banner_section_main position-relative">
            <div class="slider_item_content slideshow3_slider" data-slick='{"dots": false}'>
               <?php 

               $banner = CFS()->get('banner_image');

               // if(is_array($banner) || is_object($banner)) {

               //    foreach($banner as $banneritem){

                ?>
                <div class="slider_item">
                  <a href="#">
                    <img src="<?php echo $banner; ?>" alt="highest-quality-banner_1.jpg"/>
                    </a>
                </div>
             <?php 
            // } } 
            ?>
                
            </div>
         </section>
         <!-- banner section end -->


         <!-- sale section start -->
         <section class="sale_section position-relative mt-md-5 mt-3" data-aos="fade-up" data-aos-duration="2000">
            <div class="sale_content">
               <div class="container">
                  <div class="row align-items-center text-center mb-4">
                     <div class="col-lg-9 mx-auto">
                        <div class="product_sec_content">
                           <div class="quality_sub_title d-flex justify-content-center align-items-center pb-2">
                              <i class="far fa-circle"></i>
                              <i class="far fa-circle"></i>
                              <i class="far fa-circle"></i>
                              <span class="px-2">Member</span>
                              <i class="far fa-circle"></i>
                              <i class="far fa-circle"></i>
                              <i class="far fa-circle"></i>
                           </div>
                           <h2 class="product_sec_title pb-3 col-lg-8 mx-auto"><?php echo get_field('home_banner'); ?></h2>
                        </div>
                     </div>
                  </div>

                  <?php 
                  $memberblock = get_field('member_section_group');

                  if($memberblock){

                   ?>
                  <div class="row">
                    <div class="col-lg-5 overflow-hidden">
                        <a href="<?php echo $memberblock['first_member_block_link']; ?>" class="d-block">
                            <div class="sale_item_content position-relative" data-aos="fade-up"
                            data-aos-duration="1500">
                            <div class="sale_item overlays position-relative">
                                <img src="<?php echo $memberblock['first_member_block_image']; ?>" alt="img1.jpg"/>
                                <div class="sale_sm_title position-absolute">
                                    <h3>
                                    <?php echo $memberblock['first_member_block_title']; ?>
                                    </h3>
                                </div>
                            </div>
                            </div>
                        </a>
                    </div>
                     <div class="col-lg-7">
                        <div class="row">
                           <div class="col-sm-6 overflow-hidden">
                              <a href="<?php echo $memberblock['second_member_block_link']; ?>" class="d-block">
                                 <div class="sale_item_content position-relative" data-aos="fade-up"
                                    data-aos-duration="1500">
                                    <div class="sale_item overlays position-relative">
                                    <img src="<?php echo $memberblock['second_member_block_image']; ?>" alt="img2.jpg"/>
                                       <div class="sale_sm_title position-absolute">
                                          <h3>
                                          <?php echo $memberblock['second_member_block_title']; ?>
                                          </h3>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="col-sm-6 overflow-hidden">
                              <a href="<?php echo $memberblock['third_member_block_link']; ?>" class="d-block">
                                 <div class="sale_item_content position-relative" data-aos="fade-up"
                                    data-aos-duration="2000">
                                    <div class="sale_item overlays position-relative">
                                       <img src="<?php echo $memberblock['third_member_block_image']; ?>" class="w-100" alt="img3.jpg"/>
                                       <div class="sale_sm_title position-absolute">
                                          <h3>
                                            <?php echo $memberblock['third_member_block_title']; ?>
                                          </h3>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
               </div>
            </div>
            <!-- banner side image start -->
            <img class="sale_right_thumb position-absolute" src="assets/images/shapes/shape4.png" alt="shape4.png"/>
            <!-- banner side image end -->
         </section>
         <!-- sale section start -->

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
                        <!-- <h2 class="product_sec_title pb-3"><?php //echo get_field('home_page_third_section_main_heading'); ?></h2> -->
                     </div>
                  </div>
               </div>

               <?php
               $args = array(
        'post_type' => 'products',
        'post_status' => 'publish',
        'posts_per_page' => 1,
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
$i =1;
$fields = CFS()->get( 'product_loop' );
if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {
   if($i==5){
      break;
   }


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
                                    <!-- <ul class="product_action_btns ul_li_block d-flex flex-column px-0">
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
                                    </ul> -->
                                 </div>
                                 <div class="product_content pt-0">
                                    <h3 class="product_title">
                                       <a href="<?php echo $field['product_sec_button_link']; ?>" target="_blank"><?php echo $field['product_sec_title']; ?></a>
                                    </h3>
                                    <div class="product_price">
                                       <span><a href="<?php echo $field['product_sec_button_link']; ?>>" class="btn btn-warning btn-sm px-2 mt-2 btns pe-1" class><?php echo $field['product_sec_button_text']; ?></a></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php $i++; } }
                        else{
                           echo"<p>No Products to show</p>";
                        }

                        ?>
                     
                        
                     </div>
                  </div>
               </div>
               <?php   endwhile;
                     wp_reset_postdata(); ?>
            </div>
         </section>
         <!-- product section start -->


          <!-- category section start -->
          <section class="category_section py-5 sec_ptb_100 position-relative overflow-hidden clearfix" data-aos="fade-up"
          data-aos-duration="2000">
          <div class="container">
             <div class="row text-lg-start text-center">
                <div class="category_top_content">
                   <div class="category_top_content_text">
                      <div class="category_sub_title d-flex justify-content-lg-start justify-content-center align-items-center">
                         <i class="far fa-circle"></i>
                         <i class="far fa-circle"></i>
                         <i class="far fa-circle"></i>
                         <span class="ps-2">FRESH FROM OUR FARM</span>
                      </div>
                      <div class="category_title pb-3">
                         <h2><?php echo get_field('home_page_forth_section_main_heading'); ?></h2>
                      </div>
                   </div>
                </div>
                <div class="clearfix text-center row px-0">
                  <?php 
                  $i=1;
               $forthsection = CFS()->get('home_page_forth_section_loop');

               if(is_array($forthsection) || is_object($forthsection)) {

                  foreach($forthsection as $forthsectionitem){
                     if($i == 4){
                        break;
                     }

                ?>
                   <div class="col-lg-4 col-md-6 mt-4">
                      <!-- <a href="<?php //echo $forthsectionitem['forth_section_loop_link']; ?>" target="_blank"> -->
                         <div class="item_image_content overflow-hidden position-relative">
                            <img src="<?php echo $forthsectionitem['forth_section_loop_image']; ?>" alt="cat1.png"/>
                            <h6 class="item_title position-absolute rounded-pill">
                              <?php echo $forthsectionitem['forth_section_loop_yellow_content']; ?>
                              </h6>
                         </div>
                         <h5 class="mt-4 fw-normal">
                           <?php echo $forthsectionitem['forth_section_loop_title']; ?>
                        </h5>
                         
                      <!-- </a> -->
                   </div>
                <?php $i++; } } ?>
                   <!-- <div class="col-lg-4 col-md-6 mt-4">
                      <a href="shop-list.html" target="_blank">
                         <div class="item_image_content overflow-hidden position-relative">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category/cat2.png" alt="cat2.png"/>
                            <h6 class="item_title position-absolute rounded-pill">HIGHEST
                              QUALITY</h6>
                         </div>
                         <h5 class="mt-4 fw-normal">
                           <strong class="h4 text-orange">HIGHEST
                              QUALITY</strong><br/>
                              Ingredients on
                              the Planet!
                        </h5>
                      </a>
                   </div>
                   <div class="col-lg-4 col-md-12 mt-4">
                      <a href="shop-list.html" target="_blank">
                         <div class="item_image_content overflow-hidden position-relative">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/category/cat3.png" alt="cat3.png"/>
                            <h6 class="item_title position-absolute rounded-pill">BEST
                              PRODUCTS</h6>
                         </div>
                         <h5 class="mt-4 fw-normal">
                           <strong class="h4 text-orange">BEST
                              PRODUCTS</strong><br/>
                              Less than HALF
                              the Price!<br/>
                              <h5>How does it work?</h5>
                        </h5>
                      </a>
                   </div> -->
                </div>

             </div>
          </div>
          <!-- banner side image start -->
          <img class="category_left_thumb position-absolute" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shapes/shape3.png"
             alt="shape3.png"/>
          <!-- banner side image end -->
       </section>
       <!-- category section end -->


         <!-- deal section start -->
         <section class="deal_section sec_space_xs_70 pt-md-5 pt-4" data-aos="fade-up" data-aos-duration="2000">
            <div class="container-fluid">
               <div class="row justify-content-center align-items-center">
                  <?php 

                  $var = 1;

               $fifthsection = CFS()->get('fifth_section_loop');

               if(is_array($fifthsection) || is_object($fifthsection)) {

                  foreach($fifthsection as $fifthsectionitem){

                     if($var == 4){
                        break;
                     }

                ?>
                  <div class="col-md-6 col-lg-4">
                     <div class="deal_item_content_wrap">
                        <div class="deal_item_content overlays position-relative"
                        style="background-image: url(<?php echo $fifthsectionitem['fifth_section_image']; ?>);"  data-aos="flip-right" data-aos-duration="1000">
                        <div class="deal_item_txt position-absolute">
                           <div class="deal_title" data-aos="flip-left" data-aos-duration="1000">
                              <h3><?php echo $fifthsectionitem['fifth_section_title']; ?></h3>
                           </div>
                           <!-- <div class="deal_btn">
                              <a href="shop-list.html" target="_blank"><button type="button" class="btn">SHOP NOW <span><i class="fas fa-long-arrow-alt-right"></i></span></button></a>
                           </div> -->
                        </div>
                       </div>
                     </div>
                  </div>
               <?php $var++; } } ?>
                  <!-- <div class="col-md-6 col-lg-4">
                     <div class="deal_item_content_wrap">
                        <div class="deal_item_content overlays position-relative"
                        style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/img5.jpg);"  data-aos="flip-right" data-aos-duration="1500">
                        <div class="deal_item_txt position-absolute">
                           <div class="deal_title" data-aos="flip-left" data-aos-duration="1500">
                              <h3>Get a Head Start in Building Your Team</h3>
                           </div>
                           <div class="deal_btn">
                              <a href="shop-list.html" target="_blank"><button type="button" class="btn">SHOP NOW <span><i class="fas fa-long-arrow-alt-right"></i></span></button></a>
                           </div>
                        </div>
                       </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <div class="deal_item_content_wrap">
                        <div class="deal_item_content overlays position-relative"
                        style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/img6.jpg);"  data-aos="flip-right" data-aos-duration="2000">
                        <div class="deal_item_txt position-absolute">
                           <div class="deal_title" data-aos="flip-left" data-aos-duration="2000">
                              <h3>Products that Sell Themselves</h3>
                           </div>
                           <div class="deal_btn">
                              <a href="shop-list.html" target="_blank"><button type="button" class="btn">SHOP NOW <span><i class="fas fa-long-arrow-alt-right"></i></span></button></a>
                           </div>
                        </div>
                       </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </section>
         <!-- deal section end -->


         <!-- INTRODUCING -->
         <section class="product_section mb-4 sec_space_xxs_50" data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
               <div class="row align-items-center text-center">
                  <div class="col-lg-9 mx-auto">
                     <div class="product_sec_content">
                        <div class="quality_sub_title d-flex justify-content-center align-items-center pb-2">
                           <i class="far fa-circle"></i>
                           <i class="far fa-circle"></i>
                           <i class="far fa-circle"></i>
                           <span class="px-2">INTRODUCING</span>
                           <i class="far fa-circle"></i>
                           <i class="far fa-circle"></i>
                           <i class="far fa-circle"></i>
                        </div>
                        <h2 class="product_sec_title pb-3 col-lg-8 mx-auto"><?php echo get_field('introducing_section_main_heading'); ?></h2>

                        <div class="mt-4">
                           <?php echo get_field('introducing_section_subheading'); ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>



         <!-- quality section start -->
         <section class="quality_section position-relative py-1" data-aos="fade-up" data-aos-duration="2000">
            <div class="quality_section_wrap sec_ptb_100"
               style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quality/qlty1.png)">
               <div class="container">
                  <div class="quality_top_content text-center">
                     <div class="quality_sub_title d-flex justify-content-center align-items-center pb-2">
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <span class="px-2">Member</span>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="far fa-circle"></i>
                     </div>
                     <div class="quality_top_title">
                        <h2><?php echo get_field('last_section_main_heading'); ?></h2>
                     </div>
                  </div>
                  <div class="quality_inner_content">
                     <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4">
                           <?php 

               $leftside = CFS()->get('last_section_left_side_loop');

               if(is_array($leftside) || is_object($leftside)) {

                  foreach($leftside as $leftsideitem){

                ?>
                           <div class="quality_content d-flex justify-content-center align-items-start text-end pe-4" data-aos="fade-right" data-aos-duration="800">
                              <div class="quality_text">
                                 <div class="quality_title">
                                    <h4>
                                       <?php echo $leftsideitem['last_section_title']; ?>
                                    </h4>
                                 </div>
                                 <div class="quality_desc">
                                    <p><?php echo $leftsideitem['last_section_content']; ?></p>
                                 </div>
                              </div>
                              <div class="quality_img bg-white ms-4">
                                 <img src="<?php echo $leftsideitem['last_section_image']; ?>" alt="qlty5.png"/>
                              </div>
                           </div>
                        <?php } } ?>
                           
                        </div>
                        <div class="col-lg-4">
                           <div class="quality_middle_gallery img_moving_anim1">
                              <img src="<?php echo get_field('last_section_middle_image'); ?>" alt="product1.png"/>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <?php 

               $rightside = CFS()->get('last_section_right_side_loop');

               if(is_array($rightside) || is_object($rightside)) {

                  foreach($rightside as $rightsideitem){

                ?>
                           <div class="quality_content d-flex justify-content-center align-items-start ps-4" data-aos="fade-left" data-aos-duration="800">
                              <div class="quality_img bg-white me-4">
                                 <img src="<?php echo $rightsideitem['last_section_right_image']; ?>" alt="qlty8.png"/>
                              </div>
                              <div class="quality_text">
                                 <div class="quality_title">
                                  <h4><?php echo $rightsideitem['last_section_right_title']; ?>
                                    </h4>
                                 </div>
                                 <div class="quality_desc">
                                 <p>   <?php echo $rightsideitem['last_section_right_description']; ?></p>
                                 </div>
                              </div>
                           </div>
                        <?php } } ?>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- quality section end -->


         <!-- offer section start -->
         <section class="offer_section sec_space_xxs_50 pt-0 pb-0">
            <div class="container">
               <div class="row g-4">
                  <div class="offer_delivery_wrap sec_space_xs_70">
                     <div
                        class="offer_delivery_content inner_p_all_70 d-flex align-items-center justify-content-between overlays"
                        style="background-image: url(<?php echo get_field('home_contact_section_background_image'); ?>); ; background-position: bottom;">
                        <div class="offer_delivery_title text-white">
                           <?php echo get_field('home_contact_section_content'); ?>
                        </div>
                        <div class="offer_delivery_btn">
                           <a href="<?php echo get_field('contact_button_link'); ?>" target="_blank" class="custom_btn rounded-pill">
                              <button type="button" class="btn text-white">Contact Now <span><i
                                       class="fas fa-long-arrow-alt-right"></i></span></button>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- offer section end -->
      </main>
      <!-- main body end -->

      <!-- footer -->
      <?php get_footer(); ?>
   
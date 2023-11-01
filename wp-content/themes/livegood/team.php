

<?php /* Template Name: Teams */ ?>


<!-- Mirrored from jthemes.net/themes/html/organic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 05:01:12 GMT -->


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
                           <h2 class="text-white">Our Team</h2>
                     </div>
                     <ul
                           class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                           <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                           <li><i class="fas fa-chevron-right"></i>Team</li>
                           
                     </ul>
                  </div>
               </div>
         </section>
         <!-- Breadcrumb section end -->

         <!-- team section start -->
         <section class="team_section sec_space_xxs_50 position-relative" data-aos="fade-up" data-aos-duration="2000">
            <div class="team_section_content">
               <div class="team_top_content">
                  <div class="offer_sub_title d-flex align-items-center justify-content-center pb-1">
                     <i class="far fa-circle"></i>
                     <i class="far fa-circle"></i>
                     <i class="far fa-circle"></i>
                     <span class="text-uppercase px-2">Team</span>
                     <i class="far fa-circle"></i>
                     <i class="far fa-circle"></i>
                     <i class="far fa-circle"></i>
                  </div>
                  <div class="team_top_title text-center pb-4">
                     <h2><?php echo get_field('team_page_main_heading'); ?></h2>
                  </div>
               </div>
               <div class="team_inner_content">
                  <div class="container">
                     <div class="card-group justify-content-center align-items-center">
                        <div class="team_content_wrap position-relative col-md-10 col-lg-8 col-xl-12 m-auto">
                           <div class="row g-4">
                              <?php 

                              $teams = CFS()->get('our_team_loop');

                              if(is_array($teams) || is_object($teams)){

                                 foreach($teams as $teamitem){


                               ?>
                              <div class="col-sm-6 col-md-6 col-xl-3">
                                 <div class="card team_content text-center" data-aos="fade-right" data-aos-duration="2000">
                                    <img class="rounded-pill" src="<?php echo $teamitem['our_team_image']; ?>" class="card-img-top"
                                       alt="team3.png"/>
                                    <div class="card-body team_author_content">
                                       <h5 class="card-title team_author_title"><?php echo $teamitem['our_team_name']; ?></h5>
                                       <div class="card-text team_author_post mb-2"><?php echo $teamitem['our_team_designation']; ?></div>
                                       <!-- <div
                                          class="team_author_social_link d-flex justify-content-center justify-content-around align-items-center">
                                          <a class="social_twitt" href="#">
                                             <i class="fab fa-twitter"></i>
                                          </a>
                                          <a class="social_face" href="#">
                                             <i class="fab fa-facebook-square"></i>
                                          </a>
                                          <a class="social_linked" href="#">
                                             <i class="fab fa-linkedin"></i>
                                          </a>
                                       </div> -->
                                    </div>
                                 </div>
                              </div>
                           <?php } } ?>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- product category side image -->
            <img class="team_left_thumb position-absolute" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shapes/shape11.png" alt="shape11.png"/>
            <img class="team_right_thumb position-absolute" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shapes/shape12.png"
               alt="shape12.png"/>
         </section>
         <!-- team section start -->
      </main>
      <!-- main body end -->

      <!-- footer -->
      <?php get_footer(); ?>
   
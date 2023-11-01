
<?php
//   $current_page = 'team';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" Content="">
   <title>Team</title>
   <!-- favicon icon -->
   <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/logo.jpg" type="image/x-icon">

   <!-- Include fontawesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- Include google fonts CDN -->
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
      rel="stylesheet">

   <!-- Include bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/css/bootstrap.min.css">

   <!-- Include aos CSS -->
   <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/css/aos.css">

   <!-- Include magnific-popup CSS -->
   <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/css/magnific-popup.css">

   <!-- Include nice-select CSS -->
   <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/css/nice-select.css">

   <!-- Include slick-theme CSS -->
   <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/css/slick-theme.css">

   <!-- Include slick CSS -->
   <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/css/slick.css">

   <!-- Include stylesheet CSS -->
   <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/css/style.css">

   <?php wp_head(); ?>
</head>

<style>
   .tab-content{
    margin-bottom: 40px;
}

.product_layout_content .product_action_btns{
   top:54%;
}
</style>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
   <!-- body wrap start -->
   <div class="body-wrap overflow-hidden">

<!-- header -->
      <!-- header section start -->
      <header class="header_section header_1 about_header position-relative">
         <!-- top header start -->
         <div class="top_header_main d-none d-sm-block">
            <div class="container">
               <div class="header_top d-flex align-items-center justify-content-between">
                  <div class="header_top_content d-flex pt-2">
                     <div class="mail_text_content d-flex">
                        <p class="mail_icon"><span><i class="far fa-envelope text-white pe-2"></i></span></p>
                        <p class="mail_text"><?php echo get_field('email',109); ?></p>
                     </div>
                     <div class="address_text_content d-flex">
                        <p class="mail_icon"><span><i class="fas fa-map-marker-alt text-white pe-2"></i></span></p>
                        <p class="address_text"><?php echo get_field('address',109); ?></p>
                     </div>
                  </div>f9a819
                  <div class="header_top_socials pt-2">
                     <ul class="list-unstyled d-flex">
                        <?php 

                        $socials = CFS()->get('social_media_loop',109);

                        if(is_array($socials) || is_object($socials)){

                           foreach($socials as $socialitem){

                         ?>
                        <li><a href="<?php echo $socialitem['social_media_add_link']; ?>"><?php echo $socialitem['social_media_add_icon']; ?></a></li>
                     <?php } } ?>
                        <!-- <li><a href="#!"><i class="fab fa-twitter text-white pe-3"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram text-white pe-3"></i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedin-in text-white"></i></a></li> -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- top header end -->

         <!-- bottom header start -->
         <div class="header_bottom_main">
            <div class="container">
               <!-- web menubar start-->
               <div class="webMenu d-none d-lg-block position-relative">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand position-relative logos" href="index.php">
                        <!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/logo.jpg"
                           alt="image_not_found"> -->

                           <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
<?php endif; ?>

                        
                        
                        </a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">


                     <?php
wp_nav_menu(
    array(
        'theme_location'  => 'primary',
        // 'menu_class'      => 'menu-wrapper',
        'container' => '',
        'items_wrap'      => '<ul id="primary-menu-list" class="navbar-nav main_menu_list ms-auto after_navbar"> <li class="nav-item nav_item_has_child px-2"> %3$s </li></ul>', // Complete the ul tag
        'fallback_cb'     => false,
    )
);

?>
                        <!-- <ul class="navbar-nav main_menu_list ms-auto after_navbar">
                            <li class="nav-item nav_item_has_child px-2">
                              <a class="nav-link <?php if ($current_page=="home") {echo "active"; }?>" aria-current="page" href="index.php">Home</a>
                           </li>
                           <li class="nav-item nav_item_has_child px-2">
                              <a class="nav-link <?php if ($current_page=="about") {echo "active"; }?>" href="about.php">About Us</a>
                           </li>
                           <li class="nav-item nav_item_has_child px-2">
                              <a class="nav-link <?php if ($current_page=="products") {echo "active"; }?>" href="products.php">Products</a>
                           </li>
                           <li class="nav-item nav_item_has_child px-2">
                              <a class="nav-link <?php if ($current_page=="team") {echo "active"; }?>" href="team.php">Our team</a>
                           </li>
                           <li class="nav-item nav_item_has_child px-2">
                              <a class="nav-link <?php if ($current_page=="membership") {echo "active"; }?>" href="membership.php">Membership</a>
                           </li>
                           <li class="nav-item nav_item_has_child px-2">
                              <a class="nav-link <?php if ($current_page=="contact-us") {echo "active"; }?>" href="contact-us.php">Contact us</a>
                           </li>
                        </ul> -->
                     </div>
                  </nav>
                  <!-- webmenu bottom shape -->
                  <div class="webmenu_bottom_shape_left position-absolute">
                     <img src="assets/images/shapes/shape1.png" alt="image_not_found">
                  </div>
               </div>
               <!-- mobile menubar start -->
               <div class="mobileMenu d-block d-lg-none">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand logos" href="<?php echo get_site_url(); ?>">
                        <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
<?php endif; ?>
                     <!-- <img src="assets/images/logo/logo.jpg"
                           alt="image_not_found"> --></a>
                     <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                           <button type="button" class="btn-close mobile_menu_close text-reset"
                              data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                           <ul class="navbar-nav main_menu_list m-auto">
                              <li class="nav-item nav_item_has_child px-2">
                                 <a class="nav-link <?php if ($current_page=="home") {echo "active"; }?>" aria-current="page" href="index.php">Home</a>
                              </li>
                              <li class="nav-item nav_item_has_child px-2">
                                 <a class="nav-link <?php if ($current_page=="about") {echo "active"; }?>" href="about.php">About Us</a>
                              </li>
                              <li class="nav-item nav_item_has_child px-2">
                                 <a class="nav-link <?php if ($current_page=="products") {echo "active"; }?>" href="products.php">Products</a>
                              </li>
                              <li class="nav-item nav_item_has_child px-2">
                                 <a class="nav-link <?php if ($current_page=="team") {echo "active"; }?>" href="team.php">Our team</a>
                              </li>
                              <li class="nav-item nav_item_has_child px-2">
                                 <a class="nav-link <?php if ($current_page=="membership") {echo "active"; }?>" href="membership.php">Membership</a>
                              </li>
                              <li class="nav-item nav_item_has_child px-2">
                                 <a class="nav-link <?php if ($current_page=="contact-us") {echo "active"; }?>" href="contact-us.php">Contact us</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- main body start -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="robots" content="noindex,nofollow">
      <meta name="description" content="">
      <meta name="keywords" content="HTML,CSS,JavaScript">
      <meta name="author" content="">
      <?php wp_head(); ?> 
   </head>

<body <?php body_class(); ?> >


               <div id="header-logo-div">
                  <?php echo get_custom_logo(); ?> 
               </div>

           
                      <?php
                         if (is_active_sidebar('custom-header-widget')) {
                               dynamic_sidebar('custom-header-widget');
                            }
                      ?>
             

                      <?php
                         wp_nav_menu( array(
                             'theme_location'  => 'primary_menu',
                             'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                             'container'       => 'div',
                             'container_class' => 'collapse navbar-collapse nav-div',
                             'container_id'    => 'navbarSupportedContent',
                             'menu_class'      => 'navbar-nav mr-auto top_menu',
                             'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                             'walker'          => new WP_Bootstrap_Navwalker(),
                         ) );
                      ?>
           
<footer class="site-footer">

   <?php wp_nav_menu(array('theme_location' => 'footer_menu1')); ?>

   <div class="copyright_txt">
      <p>sample site © 2015-<?php
                              echo date("Y")
                              ?> All rights reserved</p>



</footer>

<!-- .site-footer -->
<?php wp_footer(); ?>



</body>

</html>
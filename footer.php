<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Casano
 * @since 1.0
 * @version 1.0
 */

?>
  <div class="container-fluid footer-top">
   <div class="row text-center">
    <div class="col-sm-3">
     <?php  dynamic_sidebar('first-page-widget'); ?>
    </div>
    <div class="col-sm-3">
      <?php  dynamic_sidebar('second-page-widget'); ?>
    </div>
    <div class="col-sm-3">
       <?php  dynamic_sidebar('third-page-widget'); ?>
    </div> 
    <div class="col-sm-3">
      <?php  dynamic_sidebar('fourth-page-widget'); ?>
    </div> 
  </div>
</div>
         
<?php casano_get_footer(); ?>
<?php casano_get_popup_newsletter(); ?>
<a href="#" class="backtotop">
    <i class="fa fa-angle-up"></i>
</a>
</div>
</div> <!-- End .page-wrapper -->
<?php wp_footer(); ?>
 <div class="row text-center credits">
    <div class="col-lg-12">
  <p>© <a href="https://www.vorteasy.com">Vorteasy</a> Built By <a href="https://www.xhostcom.com">Xhostcom</a></p>
<div>
</div>
</body>
</html>

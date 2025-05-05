<?php
/* Template Name: Custom Cart Page */
get_header();
?>

<div class="container">
    <h1>Your Cart - page-cart.php</h1>
    <h1>hello</h1>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
</div>

<?php get_footer(); ?>
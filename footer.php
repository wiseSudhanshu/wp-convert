<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-convert
 */

?>

	<footer>
        <div class="brand-and-logo">
            <img class="footer-logo" src="<?php echo (get_template_directory_uri().'/assets/images/money.png'); ?>" alt="money">
            <a class="navbar-brand-footer" href="#">CONVERT</a>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/" target="_blank" alt="facebook-logo"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" alt="instagram-logo"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.twitter.com/" target="_blank" alt="twitter-logo"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </footer>

    <!-- <script src="<?php //echo (get_template_directory_uri().'/assets/JS/script.js'); ?>"></script> -->
</body>
</html>

<?php wp_footer(); ?>

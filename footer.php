</div>
<?php
$footer_logo = get_field('footer_logo', 'option');
$footer_scripts = get_field('footer_scripts', 'option');
$footer_cta = get_field('footer_cta', 'option');
?>
<footer>
    <div class="footer-wrapper">
        <?php if (!empty($footer_cta)) : ?>
            <div class="top-footer">
                <a href="<?php echo $footer_cta['url'] ?>" class="btn btn-black" <?php echo ($footer_cta['target']) ? 'target="_blank"' : ""; ?>><?php echo $footer_cta['title'] ?></a>
            </div>
        <?php endif; ?>
        <?php if (!empty($footer_logo)) : ?>
            <div class="footer-logo">
                <img src="<?php echo $footer_logo['url'] ?>" alt="<?php echo $footer_logo['alt'] ?>">
            </div>
        <?php endif; ?>
        <div class="row-wrapper">
            <div class="contact col-1">
                <p class="footer-heading"></p>
            </div>
            <div class="legal col-2">
                <p class="footer-heading"></p>
            </div>
            <div class="accredation col-3">
                <p class="footer-heading"></p>
                <img src="" alt="">
            </div>
        </div>
        <div class="social-media">
            <ul class="social-links">
                <li></li>
            </ul>
            <img src="" class="university-image" alt="">
            <div class="copyright"></div>
        </div>
    </div>
</footer>
<?php
echo $footer_scripts;
wp_footer(); ?>

</body>

</html>
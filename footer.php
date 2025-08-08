<footer class="footer">
  <p class="copylight">Copyright 2019 saigomadeganbatta.</p>
</footer>

<?php
if (is_home()) {
  wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
  wp_enqueue_script('food-science-home', get_template_directory_uri() . '/assets/js/home.js');
}
?>

<?php wp_footer(); ?>
</body>

</html>
<footer class="footer">
  <div class="footer__content">
    <div class="footerListBlock">
      <p class="footer__title">犬は利口なもので、</p>
      <ul class="footerList__group">
        <li class="footerList__item"> 昼席、夜席へ行くときの服装 </li>
        <li class="footerList__item"> 魚釣りの服装ででかけるとき </li>
        <li class="footerList__item"> また、鉄砲を持って犬を連れてゆ </li>
        <li class="footerList__item"> 獲物がいると犬はすぐにポイントをする </li>
        <li class="footerList__item"> 銃の仕度をして </li>
      </ul>
    </div>
    <div class="footerListBlock">
      <p class="footer__title">犬は利口なもので、</p>
      <ul class="footerList__group">
        <li class="footerList__item"> 昼席、夜席へ行くときの服装 </li>
        <li class="footerList__item"> 魚釣りの服装ででかけるとき </li>
        <li class="footerList__item"> また、鉄砲を持って犬を連れてゆ </li>
        <li class="footerList__item"> 獲物がいると犬はすぐにポイントをする </li>
        <li class="footerList__item"> 銃の仕度をして </li>
      </ul>
    </div>
    <div class="footerListBlock">
      <p class="footer__title">犬は利口なもので、</p>
      <ul class="footerList__group">
        <li class="footerList__item"> 昼席、夜席へ行くときの服装 </li>
        <li class="footerList__item"> 魚釣りの服装ででかけるとき </li>
        <li class="footerList__item"> また、鉄砲を持って犬を連れてゆ </li>
        <li class="footerList__item"> 獲物がいると犬はすぐにポイントをする </li>
        <li class="footerList__item"> 銃の仕度をして </li>
      </ul>
    </div>
  </div>
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
<?php
/*
  Template Name: not-found
*/
?>

<?php get_header(); ?>
<section class="notfound">
  <div class="container">
    <div class="notfound__inner">
      <div class="notfound__left">
        <h2 class="notfound__title"><?= CFS()->get('not-found-title'); ?></h2>
        <p class="notfound__subtitle"><?= CFS()->get('not-found-text'); ?></p>
        <a class="info__btn btn btn-primary" href="<?= get_home_url(); ?>">На главную</a>
      </div>
      <div class="notfound__right">
        <img src="<?= CFS()->get('not-found-img'); ?>" alt="">
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
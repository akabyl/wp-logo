<?php
/*
  Template Name: blog
*/
?>

<?php get_header(); ?>

<section class="blog">
  <div class="container">
    <div class="breadcrubs">
      <p class="breadcrubs__link">Главная > Блог > “Название статьи”</p>
    </div>
    <div class="blog__inner">
      <div class="blog__info">
        <div class="blog__left">
          <h2 class="blog__title title"><?= CFS()->get('blog-page-title'); ?></h2>
          <p class="blog__subtitle subtitle">
            <?= CFS()->get('blog-page-text'); ?>
          </p>
          <img class="blog__mobile-img" src="./img/blog-iimg.png" alt="" />
          <p class="blog__text">
            <?= CFS()->get('blog-page-text-2'); ?>
          </p>
        </div>
        <div class="blog__right">
          <img src="<?= CFS()->get('blog-page-img'); ?>" alt="" />
        </div>
      </div>
      <p class="blog__text">
        <?= CFS()->get('blog-page-text-3'); ?>
      </p>
      <div class="blog__links">
        <a class="blog__btn btn-white" href="<?= get_home_url(); ?>">На главную</a>
        <a class="blog__btn btn-border" href="<?php the_permalink(199); ?>">Похожие статьи</a>
      </div>
    </div>
  </div>
</section>

<section class="similar">
  <div class="container">
    <div class="similar__inner">
      <h2 class="similar__title title">Похожие стаьи</h2>
      <div class="similar__items">

        <?php
        $loop = CFS()->get('card');
        foreach ($loop as $row) {
          ?>

        <div class="similar__item" data-tab-value="<?= $row['art-attr']; ?>">
          <div class="manager__item">
            <img class="manager__item-img" src="<?= $row['manager-item-img']; ?>" alt="" />
            <div class="manager__item-info">
              <h3 class="manager__item-title"><?= $row['manager-item-title']; ?></h3>
              <p class="manager__item-text">
                <?= $row['manager-item-descr']; ?>
              </p>
              <a href="<?php the_permalink(199); ?>" class="manager__item-link">
                <span>Подробнее</span>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-more.svg" alt="" />
              </a>
            </div>
          </div>
        </div>
        <?php
          }
          ?>

      </div>
    </div>
  </div>
</section>

<section class="services-form">
  <div class="container">
    <div class="services-form__inner">
      <div class="services-form__left">
        <h2 class="form-title">Остались вопросы?</h2>
        <div action="" class="form-services">
          <div class="form-services__left">
            <h3 class="form-services__title">
              <span>Заполните</span> форму <br />
              и мы с Вами свяжемся в ближайшее время
            </h3>
          </div>
          <div class="form-services__right">
          <?php echo do_shortcode('[contact-form-7 id="9cef1cd" title="Форма 3"]') ?>
          </div>
        </div>
      </div>
      <div class="services-form__right">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/imgform.png" alt="" />
      </div>
    </div>
  </div>
</section>

<div class="map-container">
  <div id="map" class="map">
    <div class="container">
      <div class="map__contacts" id="contacts">
        <h2 class="map__title"><?php the_field('map-title'); ?></h2>
        <p class="map__text">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/geo.png" alt="" />
          <span><?php the_field('address'); ?></span>
        </p>
        <a class="map__phone" href="tel:<?php the_field('phone-number'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/phone-foot.png" alt="" />
          <span><?php the_field('phone'); ?></span>
        </a>
        <a class="map__social" href="<?php the_field('telegram-link'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/telegram.png" alt="" />
          <span><?php the_field('telegram-link'); ?></span>
        </a>
        <a class="map__contact" href="<?php the_field('email-link'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/contact.png" alt="" />
          <span><?php the_field('email-link'); ?></span>
        </a>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
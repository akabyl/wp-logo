<?php
/*
  Template Name: manager-page
*/
?>

<?php get_header(); ?>

<section class="manager-page">
  <div class="container">
    <div class="breadcrubs">
      <p class="breadcrubs__link">Главная > Услуги > Блог</p>
    </div>
    <div class="manager-page__inner">
      <div class="manager-page__left">
        <h2 class="title manager-page__title"><?= CFS()->get('yourself-title'); ?></h2>
        <a class="info__btn btn btn-primary" href="#!">Читать статьи</a>
      </div>
      <div class="manager-page__right">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/manager-page.png" alt="">
      </div>
    </div>
  </div>
</section>

<section class="articles">
  <div class="container">
    <div class="articles__inner">
      <h2 class="title articles__title"><?= CFS()->get('articles-title'); ?></h2>
      <div class="cases__btns cases__tabs">
        <button class="cases__btn tab-controls__btn tab-controls__btn--active" data-tab="all">
          Все
        </button>
        <button class="cases__btn tab-controls__btn" data-tab="couch">
          Коучинг
        </button>
        <button class="cases__btn tab-controls__btn" data-tab="consalting">
          Консалтинг
        </button>
      </div>
      <div class="articles__items">

        <?php
        $loop = CFS()->get('card');
        foreach ($loop as $row) {
          ?>

        <div class="articles__item" data-tab-value="<?= $row['art-attr']; ?>">
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
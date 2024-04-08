<?php
/*
  Template Name: about
*/
?>

<?php get_header(); ?>

<section class="about">
  <div class="container">
    <div class="breadcrubs">
      <p class="breadcrubs__link">Главная > Услуги > Об экспертах</p>
    </div>
    <div class="about__inner">
      <div class="about__left">
        <h2 class="about__title"><?php the_field('about-page-title'); ?></h2>
        <p class="about__subtitle">
          <?php the_field('about-page-descr'); ?>
        </p>
      </div>
      <div class="about__right">
        <div class="about__items">
          <div class="swiper about__swiper">
            <div class="swiper-wrapper">
              <?php
              $loop = CFS()->get('team_card');
              foreach ($loop as $row) {
                ?>
              <div class="swiper-slide">
                <div class="about__item">
                  <div class="about__item-left">
                    <img class="quot" src="<?php bloginfo('template_url'); ?>/assets/img/icons/quot.png" alt="" />
                    <h3 class="about__item-title">
                      <?= $row['team_title']; ?>
                    </h3>
                    <p class="about__item-text">
                      <?= $row['team_text']; ?>
                    </p>
                  </div>
                  <div class="about__item-right">
                    <div class="about__item-images">
                      <div class="avatar">
                        <img src="<?= $row['team_link']; ?>" alt="">
                      </div>
                      <button class="video-play">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/video.png" alt="" />
                      </button>
                    </div>
                    <h4 class="avatar-title"><?= $row['team_author']; ?></h4>
                    <p class="avatar-subtitle"><?= $row['team_job']; ?></p>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="about-button-prev">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-left.png" alt="">
          </div>
          <div class="about-button-next">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-right.png" alt="">
          </div>
        </div>
      </div>
      <div class="about-pagination" id="about-pagination"></div>
    </div>
  </div>
</section>

<section class="cases" id="cases">
  <div class="container">
    <div class="cases__inner">
      <div class="cases__top">
        <h2 class="cases__title"><?php the_field('title-case'); ?></h2>
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
      </div>
      <div class="swiper cases-swiper">
        <div class="swiper-wrapper">
          <?php
              $loop = CFS()->get('cases_card');
              foreach ($loop as $row) {
                ?>
          <div data-tab-value="<?= $row['card_attr']; ?>" class="swiper-slide">
            <div class="cases__bottom">
              <div class="cases__left">
                <h3 class="cases__left-title"><?= $row['cases_title']; ?></h3>
                <p class="cases__left-text">
                  <?= $row['cases_text']; ?>
                </p>
                <p class="cases__left-text">
                  <?= $row['cases_text-2']; ?>
                </p>
                <div class="border"></div>
                <p class="cases__left-text">
                  <?= $row['cases_text-3']; ?>
                </p>
              </div>
              <div class="cases-line">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/line-cases.png" alt="" />
              </div>
              <div class="cases__right">
                <button class="video">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/video.png" alt="" />
                </button>
              </div>
            </div>
          </div>
          <?php
              }
              ?>
        </div>
      </div>

      <div class="cases-btns">
        <button class="cases-button-prev">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-left.png" alt="" />
        </button>
        <div class="cases-pagination"></div>
        <button class="cases-button-next">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-right.png" alt="" />
        </button>
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
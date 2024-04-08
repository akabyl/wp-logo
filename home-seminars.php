<?php
/*
  Template Name: seminars-page
*/
?>

<?php get_header(); ?>

<section class="seminars-slider">
  <div class="container">
    <div class="breadcrubs">
      <p class="breadcrubs__link">Главная > Услуги > Семинары</p>
    </div>
    <div class="seminars-slider__inner">
      <div class="seminars-slider__left">
        <h2 class="seminars-slider__title"><?= CFS()->get('seminars-title'); ?></h2>
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
        <div class="seminars-slider__pagination"></div>
      </div>
      <div class="seminars-slider__right">
        <div class="swiper seminars-swiper">
          <div class="swiper-wrapper">
            <?php
              $loop = CFS()->get('seminars_card_slide');
              foreach ($loop as $row) {
                ?>
            <div class="swiper-slide" data-tab-value="<?= $row['data-attr']; ?>">
              <div class="seminars__card">
                <div class="seminars__card-img">
                  <img src="<?= $row['seminar_slide-img']; ?>" alt="Картинка семинара" />
                </div>
                <h4 class="seminars__card-title"><?= $row['seminar_slide-title']; ?></h4>
                <div class="seminars__card-rating">
                  <span class="star">
                    <img src="<?= $row['seminar_slide-rate-1']; ?>" alt="star" />
                    <img src="<?= $row['seminar_slide-rate-2']; ?>" alt="star" />
                    <img src="<?= $row['seminar_slide-rate-3']; ?>" alt="star" />
                    <img src="<?= $row['seminar_slide-rate-4']; ?>" alt="star" />
                    <img src="<?= $row['seminar_slide-rate-5']; ?>" alt="star" />
                  </span>
                  <span class="count"><?= $row['seminar_slide-grade']; ?></span>
                  <span class="star-count"><?= $row['seminar_slide-quantity']; ?></span>
                </div>
                <p class="seminars__card-text">
                  <?= $row['seminar_slide-descr']; ?>
                </p>
                <a href="#!" class="seminars__card-btn">Записаться</a>
              </div>
            </div>
            <?php
              }
              ?>
          </div>
        </div>
        <div class="seminars-slider-prev">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-left.png" alt="" />
        </div>
        <div class="seminars-slider-next">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-right.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="rewiews-slider">
  <div class="container">
    <div class="rewiews-slider__inner">
      <div class="rewiews-slider__left">
        <h2 class="rewiews-slider__title">Отзывы о семинарах</h2>
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
        <div class="rewiews-slider__pagination"></div>
      </div>
      <div class="rewiews-slider__right">
        <div class="swiper rewiews-swiper">
          <div class="swiper-wrapper">
            <?php
              $loop = CFS()->get('rewiews-cards');
              foreach ($loop as $row) {
                ?>
            <div class="swiper-slide" data-tab-value="<?= $row['rew-attr']; ?>">
              <div class="about__item">
                <div class="about__item-left">
                  <div class="quot">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/quot.png" alt="" />
                  </div>
                  <h3 class="about__item-title">
                    <?= $row['rewiews-slider_title']; ?>
                  </h3>
                  <p class="about__item-text">
                    <?= $row['rewiews-slider_text']; ?>
                  </p>
                </div>
                <div class="about__item-right">
                  <div class="about__item-images">
                    <div class="avatar">
                      <img src="<?= $row['rewiews-slider_img']; ?>" alt="" />
                    </div>
                    <button class="video-play">
                      <img src="<?php bloginfo('template_url'); ?>/assets/img/video.png" alt="" />
                    </button>
                  </div>
                  <h4 class="avatar-title"><?= $row['rewiews-slider_author']; ?></h4>
                  <p class="avatar-subtitle"><?= $row['rewiews-slider_job']; ?></p>
                </div>
              </div>
            </div>
            <?php
              }
              ?>

          </div>
        </div>
        <div class="rewiews-footer">
          <div class="rew-btns">
            <button class="rewiews-slider-prev">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-left.png" alt="" />
            </button>
            <button class="rewiews-slider-next">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-right.png" alt="" />
            </button>
          </div>
          <div class="pagination-rew"></div>
        </div>
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
<?php
/*
Template Name: Home

*/
?>

<?php get_header(); ?>
<div class="modal" id="myModal">
  <button class="modal__close" id="closeModalBtn">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="">
  </button>
  <p class="modal__title">Оставить заявку на семинар</p>
  <form action="" class="modal__form">
    <?php echo do_shortcode('[contact-form-7 id="176c0be" title="Контактная форма"]') ?>
    <label class="modal__label">
      <input type="checkbox" class="modal__checkbox" require />
      <p class="modal__text">Нажимая на кнопку я соглашаюсь с <a href="#!" class="modal__span">политикой
          конфиденциальности</a></p>
    </label>
  </form>
</div>

<section class="info">
  <div class="container">
    <div class="info__row">
      <div class="info__left">
        <h1 class="title info__title">
          <?php the_field('title-main'); ?>
        </h1>
        <p class="info__subtitle subtitle">
          <?php the_field('description-main'); ?>
        </p>
        <div class="info__check">
          <p class="info__check-text">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/check.svg" alt="check" />
            <?php the_field('check_one'); ?>
          </p>
          <p class="info__check-text">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/check.svg" alt="check" />
            <?php the_field('check_two'); ?>
          </p>
          <p class="info__check-text">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/check.svg" alt="check" />
            <?php the_field('check_three'); ?>
          </p>
        </div>
        <button id="openModalBtn" class="info__btn btn btn-primary">Связаться с нами</button>
      </div>
      <div class="info__right">
        <div class="info__right-top">
          <p class="info__right-text">
            <img class="info__right-decor decor-1"
              src="<?php bloginfo('template_url'); ?>/assets/img/mainImg/line01.png" alt="">
            <span class="count">26+</span>
            экспертов <br> в команде
          </p>
          <p class="info__right-text">
            <img class="info__right-decor decor-2"
              src="<?php bloginfo('template_url'); ?>/assets/img/mainImg/line02.png" alt="">
            <span class="count">10+</span>
            лет опыта
          </p>
          <p class="info__right-text">
            <img class="info__right-decor decor-3"
              src="<?php bloginfo('template_url'); ?>/assets/img/mainImg/line03.png" alt="">
            <span class="count">912+</span>
            отзывов от <br> клиентов
          </p>
        </div>
        <div class="info__right-image">
          <img src="<?php the_field('image-main'); ?>" alt="hero">

        </div>
      </div>
    </div>
  </div>
</section>

<section class="services">
  <div class="container">
    <div class="services__row">
      <div class="services__top">
        <h2 class="services__title title">
          <?php the_field('title-two'); ?>
        </h2>
        <p class="services__subtitle subtitle">
          <?php the_field('subtitle-two'); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="services__bottom">
    <div class="services__cards">
      <div class="services__card radius-1">
        <img class="services__decor services__decor-1"
          src="<?php bloginfo('template_url'); ?>/assets/img/icons/serv01.svg" alt="" />
        <div class="services__card-info services__card-first">
          <h3 class="services__card-title">
            <?php the_field('item-one'); ?>
          </h3>
          <p class="services__card-desc">
            <?php the_field('descr-one'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('list-two'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('list-three'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('list-four'); ?>
            </li>
          </ul>
        </div>
      </div>

      <div class="services__card services__card-even radius-2 order-3">
        <img class="services__decor services__decor-two"
          src="<?php bloginfo('template_url'); ?>/assets/img/icons/serv02.svg" alt="" />
        <div class="services__card-info">
          <h3 class="services__card-title">
            <?php the_field('item-two'); ?>
          </h3>
          <p class="services__card-desc">
            <?php the_field('descr-two'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('second-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('second-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('second-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('second-list-one'); ?>
            </li>
          </ul>
        </div>
      </div>

      <div class="services__card services__card-even radius-1 order-1">
        <img class="services__decor services__decor-three"
          src="<?php bloginfo('template_url'); ?>/assets/img/icons/serv03.svg" alt="" />
        <div class="services__card-info services__card-first">
          <h3 class="services__card-title">
            <?php the_field('item-three'); ?>
          </h3>
          <p class="services__card-desc">
            <?php the_field('descr-three'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('third-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('third-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('third-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('third-list-one'); ?>
            </li>
          </ul>
        </div>
      </div>

      <div class="services__card radius-2 order-2">
        <img class="services__decor services__decor-four"
          src="<?php bloginfo('template_url'); ?>/assets/img/icons/serv04.svg" alt="" />
        <div class="services__card-info">
          <h3 class="services__card-title">
            <?php the_field('item-four'); ?>
          </h3>
          <p class="services__card-desc">
            <?php the_field('descr-four'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('four-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('four-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('four-list-one'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('four-list-one'); ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="seminars">

  <div class="container">
    <div class="seminars__row">
      <div class="seminars__left">
        <h2 class="seminars__title title"><?php the_field('title-seminars'); ?></h2>
        <p class="seminars__subtitle subtitle">
          <?php the_field('descr-seminars'); ?>
        </p>
      </div>
      <div class="seminars__right">
        <div class="seminars__slider swiper">
          <div class="swiper-wrapper">

            <?php
              global $post;

                $myposts = get_posts([
	                'numberposts' => 5,
                  'category'    => 2
            ]);

            if( $myposts ){
            	foreach( $myposts as $post ){
            		setup_postdata( $post );
            		?>
            <!-- Вывод постов, функции цикла: the_title() и т.д. -->
            <div class="swiper-slide">
              <div class="seminars__card">
                <div class="seminars__card-img">
                  <?php the_post_thumbnail() ?>
                </div>
                <h4 class="seminars__card-title"><?php the_title(); ?></h4>
                <div class="seminars__card-rating">
                  <span class="star">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/star.svg" alt="star" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/starNo.svg" alt="star" />
                  </span>
                  <span class="count">4.0</span>
                  <span class="star-count">888 оценок</span>
                </div>
                <div class="seminars__card-text"><?php the_content(); ?></div>
                <a href="#!" class="seminars__card-btn">Записаться</a>
              </div>
            </div>
            <?php
            	}
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

          </div>
        </div>
        <a class="seminars__btn btn btn-radius" href="#!">
          <span>Смотреть все</span>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/refresh.png" alt="refresh" />
        </a>
        <div class="swiper-btn button-prev">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-left.png" alt="" />
        </div>
        <div class="swiper-btn button-next">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-right.png" alt="" />
        </div>
      </div>
      <div class="swiper-pagination seminars-swiper-pagination"></div>
    </div>
  </div>
</section>

<div class="experts">
  <img class="seminars-img" src="<?php bloginfo('template_url'); ?>/assets/img/spec-bg.png" alt="Spec">
  <img class="seminars-bottom-img" src="<?php bloginfo('template_url'); ?>/assets/img/spec2.png" alt="Spec">
  <div class="container">
    <div class="experts__inner">
      <h3 class="experts__title">
        <?php the_field('experts-title'); ?>
      </h3>
      <div class="experts__info">
        <div class="experts__phone">
          <p><span>Зво</span>ните</p>
          <p class="flex">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/mini-phone.png" alt="" />
            <a href="tel:<?php the_field('phone-number'); ?>" class="phone-number"><?php the_field('phone'); ?></a>
          </p>
        </div>
        <div class="experts__form">
          <p class="experts__form-text"><span>или</span> заполните форму</p>
          <form action="" class="experts-form">
            <?php echo do_shortcode('[contact-form-7 id="7ad7365" title="Форма 2"]') ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="specialists">
  <div class="container">
    <div class="specialists__row">
      <div class="specialists__left">
        <h2 class="specialists__title">
          <?php the_field('specialists-title'); ?>
        </h2>
        <div class="specialists__list">
          <div class="specialists__item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/cheched.png" alt="Check" />
            <p class="specialists__text">
              <?php the_field('spec-item-1'); ?>
            </p>
          </div>
          <div class="specialists__item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/cheched.png" alt="Check" />
            <p class="specialists__text">
              <?php the_field('spec-item-2'); ?>
            </p>
          </div>
          <div class="specialists__item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/cheched.png" alt="Check" />
            <p class="specialists__text">
              <?php the_field('spec-item-3'); ?>
            </p>
          </div>
          <div class="specialists__item">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/cheched.png" alt="Check" />
            <p class="specialists__text">
              <?php the_field('spec-item-4'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="line"></div>
      <div class="specialists__right">
        <h2 class="specialists__title"><?php the_field('our-specialists-title'); ?></h2>
        <div class="specialist__inner">
          <div class="specialists__slider swiper">
            <div class="swiper-wrapper">



              <?php
              global $post;

                $myposts = get_posts([
	                'numberposts' => 5,
                  'category'    => 4
            ]);

            if( $myposts ){
            	foreach( $myposts as $post ){
            		setup_postdata( $post );
            		?>
              <!-- Вывод постов, функции цикла: the_title() и т.д. -->
              <div class="swiper-slide swiper-slide-specialist">
                <div class="specialists__card">
                  <div class="specialists__card-img">
                    <?php the_post_thumbnail() ?>
                  </div>
                  <h4 class="specialists__card-title"><?php the_title(); ?></h4>
                  <?php the_content(); ?>
                </div>
              </div>

              <?php
            	}
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

            </div>
          </div>
          <div class="specialists__btns">
            <button class="specialists__btn specialists-btn-prev">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-left.png" alt="" />
            </button>
            <button class="specialists__btn specialists-btn-next">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/swiper/arrow-right.png" alt="" />
            </button>
          </div>
          <div id="specialists-pagination" class="specialists__pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="manager">
  <div class="container">
    <div class="manager__inner">
      <h2 class="manager__title title"><?php the_field('manager-title'); ?></h2>
      <div class="manager__items">
        <?php 
        $loop = CFS()->get('card');
        foreach ($loop as $row) {
          ?>
        <div class="manager__item">
          <img class="manager__item-img" src="<?= $row['manager-item-img']; ?>" alt="" />
          <div class="manager__item-info">
            <h3 class="manager__item-title">
              <?= $row['manager-item-title']; ?>
            </h3>
            <p class="manager__item-text">
              <?= $row['manager-item-descr']; ?>
            </p>
            <a href="<?php the_permalink(199); ?>" class="manager__item-link">
              <span>Подробнее</span>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-more.svg" alt="" />
            </a>
          </div>
        </div>
        <?php
        }
        ?>

      </div>
      <a class="seminars__btn btn btn-radius" href="#!">
        <span>Смотреть все</span>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/refresh.png" alt="refresh" />
      </a>
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
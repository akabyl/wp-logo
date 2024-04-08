<?php
/*
  Template Name: services
*/
?>

<?php get_header(); ?>

<section class="info">
  <div class="container">
    <div class="info__row">
      <div class="info__left">
        <div class="breadcrubs">
          <p class="breadcrubs__link">Главная > Услуги</p>
        </div>
        <h1 class="title info__title">
          <?php the_field('serv-page-title'); ?>
        </h1>
        <p class="info__subtitle subtitle">
          <?php the_field('serv-page-desc'); ?>
        </p>
        <a class="info__btn btn btn-primary" href="<?php echo get_page_link(192); ?>#cases">Смотреть кейсы</a>
      </div>
      <div class="info__right">
        <div class="info__right-image">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/service/main.png" alt="hero" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="services">
  <div class="container">
    <div class="services__row">
      <div class="services__top">
        <h2 class="services__title title"><?php the_field('our-serv-title'); ?></h2>
      </div>
    </div>
  </div>
  <div class="services__bottom">
    <div class="services__cards">
      <div class="services__card radius-1">
        <img class="services__decor services__decor-1" src="../../img/icons/serv01.svg" alt="" />
        <div class="services__card-info services__card-first">
          <h3 class="services__card-title"><?php the_field('serv-card'); ?></h3>
          <p class="services__card-desc">
            <?php the_field('serc-card-desc'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('serv-card-item-1'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-item-2'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-item-3'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-item-4'); ?>
            </li>
          </ul>
        </div>
        <a class="serv-decor" href="#!">
          <span>Заказать</span>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/button-servis.png" alt="" />
        </a>
      </div>

      <div class="services__card services__card-even radius-2 order-3">
        <img class="services__decor services__decor-two" src="../../img/icons/serv02.svg" alt="" />
        <div class="services__card-info">
          <h3 class="services__card-title"><?php the_field('serv-card-2'); ?></h3>
          <p class="services__card-desc">
            <?php the_field('serc-card-desc-2'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('serv-card-2-item'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-2-item-2'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-2-item-3'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-2-item-4'); ?>
            </li>
          </ul>
        </div>
        <a class="serv-decor" href="#!">
          <span>Заказать</span>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/button-servis.png" alt="" />
        </a>
      </div>

      <div class="services__card services__card-even radius-1 order-1">
        <img class="services__decor services__decor-three" src="../../img/icons/serv03.svg" alt="" />
        <div class="services__card-info services__card-first">
          <h3 class="services__card-title"><?php the_field('serv-card-3'); ?></h3>
          <p class="services__card-desc">
            <?php the_field('serc-card-desc-3'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('serv-card-3-item'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-3-item-2'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-3-item-3'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-3-item-4'); ?>
            </li>
          </ul>
        </div>
        <a class="serv-decor" href="#!">
          <span>Заказать</span>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/button-servis.png" alt="" />
        </a>
      </div>

      <div class="services__card radius-2 order-2">
        <img class="services__decor services__decor-four" src="../../img/icons/serv04.svg" alt="" />
        <div class="services__card-info">
          <h3 class="services__card-title"><?php the_field('serv-card-4'); ?></h3>
          <p class="services__card-desc">
            <?php the_field('serc-card-desc-4'); ?>
          </p>
          <ul class="services__card-list">
            <li class="services__card-item">
              <?php the_field('serv-card-4-item'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-4-item-2'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-4-item-3'); ?>
            </li>
            <li class="services__card-item">
              <?php the_field('serv-card-4-item-4'); ?>
            </li>
          </ul>
        </div>
        <a class="serv-decor" href="#!">
          <span>Заказать</span>
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/button-servis.png" alt="" />
        </a>
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
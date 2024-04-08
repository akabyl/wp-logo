<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php the_title(); ?></title>

  <?php wp_head(); ?>
</head>

<body>
  <div class="background-decor" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/mainbg.png)">
  </div>
  <div class="menu">
    <header class="menu__header">
      <?php the_custom_logo(); ?>
      <div class="menu__social">
        <a href="<?php the_field('telegram-link'); ?>"><img
            src="<?php bloginfo('template_url'); ?>/assets/img/icons/header-icon 2.png" alt="" /></a>
        <a href="<?php the_field('email-link'); ?>"><img
            src="<?php bloginfo('template_url'); ?>/assets/img/icons/header-icon.png" alt="" /></a>
      </div>
      <button class="menu-close">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="" />
      </button>
    </header>
    <main class="menu__main">
      <ul class="menu__main-list">
        <li class="menu__main-item">
          <a href="<?= get_home_url(); ?>" class="menu__main-link">Главная</a>
        </li>
        <li class="menu__main-item">
          <a href="<?php echo get_page_link(192); ?>" class="menu__main-link">Об экспертах</a>
        </li>
        <li class="menu__main-item">
          <a href="<?php echo get_page_link(194); ?>" class="menu__main-link">Семинары</a>
        </li>
        <li class="menu__main-item">
          <a href="<?php echo get_page_link(187); ?>" class="menu__main-link">Услуги</a>
        </li>
        <li class="menu__main-item">
          <a href="<?php echo get_page_link(196); ?>" class="menu__main-link">Блог</a>
        </li>
        <li class="menu__main-item">
          <a href="#contacts" class="menu__main-link">Контакты</a>
        </li>
      </ul>
    </main>
    <footer class="menu__footer">
      <div class="menu__footer-phone">
        <a href="tel:<?php the_field('phone-number'); ?>"><?php the_field('phone'); ?></a>
      </div>
      <div class="menu__footer-feedback">
        <a href="<?php the_field('telegram-link'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/menu-tg.png" alt="" />
        </a>
        <a href="<?php the_field('email-whatsup'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/menu-wh.png" alt="" />
        </a>
        <button class="btn-outline">Заказать звонок</button>
      </div>
    </footer>
  </div>

  <header class="header">
    <div class="container">
      <div class="header__row">
        <?php the_custom_logo(); ?>
        <div class="header__right">
          <div class="header__links">
            <a href="<?php the_field('telegram-link'); ?>" class="header__link">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/telegram.svg" alt="company_support_bot" />
              <span><?php the_field('telegram-link'); ?></span>
            </a>
            <a href="<?php the_field('email-link'); ?>" class="header__link">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/mail.svg" alt="info@mail.ru" />
              <span><?php the_field('email-link'); ?></span>
            </a>
            <a href="#!" class="header__link header__link-phone">
              <div>
                <p class="header__link-text">
                  <span></span>
                  Звоните, мы сейчас работаем
                </p>
                <div class="header__link">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/phone.svg" alt="company_support_bot" />
                  <a class="header__phone" href="tel:<?php the_field('phone-number'); ?>">
                    <?php the_field('phone'); ?>
                  </a>
                </div>
                <p class="header__link-text">Перезвоните мне</p>
              </div>
            </a>
          </div>
          <button class="header__menu">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/menu.svg" alt="menu" />
          </button>
        </div>
      </div>
    </div>
  </header>
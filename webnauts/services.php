<?php
  $title = "Услуги";

  include("header.php");
 ?>

    <main class="page-main">
      <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
          <ul class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="/" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Главная</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Услуги</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>
      <section class="servis servis--services">
        <div class="servis__wrapper">
          <header class="servis__header">
            <h1 class="title title--page">
              Услуги
            </h1>

            <p class="servis__text servis__text--services">
              Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом, стратегом, аналитиком.
            </p>
          </header>

          <ul class="servis__list">
            <?php $i = 1; ?>
            <?php while ($i < 15) : ?>
            <li class="servis__item servis__item--services">

              <div class="servis__link-wrapper">
                <a class="servis__link servis__link--services" href="service.php">
                  <picture class="servis__picture">
                    <source srcset="img/service-<?= rand(1, 3); ?>.webp" type="image/webp">
                    <img width="287" height="287" src="img/service-<?= rand(1, 3); ?>.jpg" alt="services">
                  </picture>
                </a>
                <div class="servis__buttons servis__buttons--mobile">
                  <a class="servis__button" href="#">Портфолио</a>
                  <a class="servis__button" href="#">Кейсы</a>
                </div>
              </div>

              <div class="servis__content">
                <a class="servis__link servis__link--title servis__link--services" href="service.php">
                  <h3 class="servis__title">
                    Сайты
                  </h3>
                </a>

                <p class="servis__description">
                  С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн интернет-магазина и было решено «прокачать» сайт. С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта
                </p>

                <a class="servis__link servis__link--arrows servis__link--services" href="service.php">
                  <svg class="servis__item-icon" width="64" height="64">
                    <use xlink:href="#icon-arrow"></use>
                  </svg>
                </a>

                <div class="servis__buttons servis__buttons--desktop">
                  <a class="servis__button" href="#">Портфолио</a>
                  <a class="servis__button" href="#">Кейсы</a>
                </div>
              </div>

              <span class="servis__count">01</span>
            </li>

            <?php $i++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

    </main>

<?php
  include("footer.php");
 ?>

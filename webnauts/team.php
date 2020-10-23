<?php
  $title = "Команда";

  include("header.php");
 ?>

    <main class="page-main">
      <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
          <ul class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="/" itemid="/" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Главная</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Команда</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>

      <section class="team">
        <div class="team__wrapper">
          <header class="team__header">
            <h1 class="team__s-title">
              Команда
            </h1>

            <p class="team__text">
              Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом, стратегом, аналитиком.
            </p>
          </header>

          <ul class="team__list">
            <li class="team__item team__item--chefs">

              <a class="team__link team__link--chefs" href="one.php">
                <picture class="team__picture team__picture--chefs">
                  <source srcset="img/chef-1.webp" type="image/webp">
                  <img width="270" height="270" src="img/chef-1.jpg" alt="team">
                </picture>

                <div class="mask mask--team">
                  <svg class="mask__icon" width="64" height="64">
                    <use xlink:href="#icon-arrow"></use>
                  </svg>
                </div>
              </a>
              <a class="team__link" href="#">
                <h3 class="team__name">Олег Фролов</h3>
              </a>
              <p class="team__status">Сооснователь «Webnauts»</p>
            </li>
            <li class="team__item team__item--chefs">

              <a class="team__link team__link--chefs" href="one.php">
                <picture class="team__picture team__picture--chefs">
                  <source srcset="img/chef-2.webp" type="image/webp">
                  <img width="270" height="270" src="img/chef-2.jpg" alt="team">
                </picture>

                <div class="mask mask--team">
                  <svg class="mask__icon" width="64" height="64">
                    <use xlink:href="#icon-arrow"></use>
                  </svg>
                </div>
              </a>
              <a class="team__link" href="#">
                <h3 class="team__name">Алексей Шептура</h3>
              </a>
              <p class="team__status">Сооснователь «Webnauts»</p>
            </li>
            <li class="team__line"></li>
            <?php $i = 1; ?>
            <?php while ($i < 15) : ?>
            <li class="team__item">

              <a class="team__link team__link--picture" href="one.php">
                <picture class="team__picture">
                  <source srcset="img/team-<?= rand(1, 3); ?>.webp" type="image/webp">
                  <img width="200" height="200" src="img/team-<?= rand(1, 3); ?>.jpg" alt="team">
                </picture>

                <div class="mask mask--team">
                  <svg class="mask__icon" width="64" height="64">
                    <use xlink:href="#icon-arrow"></use>
                  </svg>
                </div>
              </a>

              <a class="team__link" href="#">
                <h3 class="team__name">Олег Фролов</h3>
              </a>
              <p class="team__status">Сооснователь «Webnauts»</p>
            </li>
            <?php if (($i % 4) == 0 && $z < 14): ?>
              <li class="team__line"></li>
            <?php endif; ?>

            <?php $i++; ?>
            <?php endwhile; ?>
          </ul>

          <button class="download download--team" type="button" name="more">Загрузить еще</button>
        </div>
      </section>

    </main>

<?php
  include("footer.php");
 ?>

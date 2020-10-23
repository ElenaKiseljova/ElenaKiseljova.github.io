<?php
  $title = "Поиск";

  include("header.php");
 ?>

    <main class="page-main page-main--search">
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
                <span itemprop="name">Поиск</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>


      <div class="ask">
        <p class="ask__text">
          <span>
            Вы искали:
          </span>
          <b>
            «Поисковый запрос»
          </b>
        </p>

        <h1 class="ask__title">
          <span>
            Результатов поиска:
          </span>
          <span class="ask__red">
            13
          </span>
        </h1>
      </div>


      <section class="portfolio portfolio--search">
        <div class="portfolio__wrapper">
          <h2 class="title">Проекты</h2>

          <ul class="portfolio__list portfolio__list--search">
            <?php $z = 1; ?>
            <?php while ($z < 5) : ?>
              <li class="portfolio__item portfolio__item--search">
                <a class="portfolio__link" href="project.php">
                  <picture class="portfolio__picture">
                    <source srcset="img/poster-1.webp" type="image/webp">
                    <img width="570" height="321" src="img/poster-1.jpg" alt="Постер">
                  </picture>
                  <div class="portfolio__mask mask">
                    <svg class="mask__icon" width="64" height="64">
                      <use xlink:href="#icon-arrow"></use>
                    </svg>
                  </div>
                </a>

                <ul class="tags">
                  <li class="tags__item">#SEO</li>
                  <li class="tags__item">#SMM</li>
                </ul>

                <a class="portfolio__title-link" href="#">
                  <h4 class="portfolio__item-title">Разработка сайта православного издательства</h4>
                </a>

                <ul class="inform">
                  <li class="inform__item">
                    <svg class="inform__icon" width="12" height="12">
                      <use xlink:href="#icon-team"></use>
                    </svg>

                    <p class="inform__title">Команда:</p>

                    <p class="inform__count">4</p>
                  </li>
                  <li class="inform__item">
                    <svg class="inform__icon" width="12" height="12">
                      <use xlink:href="#icon-case"></use>
                    </svg>

                    <p class="inform__title">Кейсы:</p>

                    <p class="inform__count">3</p>
                  </li>
                  <li class="inform__item">
                    <svg class="inform__icon" width="12" height="12">
                      <use xlink:href="#icon-comments"></use>
                    </svg>

                    <p class="inform__title">Отзывы:</p>

                    <p class="inform__count">1</p>
                  </li>
                </ul>
              </li>
              <?php if (($z % 2) == 0 && $z < 4): ?>
                <li class="portfolio__line"></li>
              <?php endif; ?>
            <?php $z++; ?>

            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section class="cases cases--search">
        <div class="cases__wrapper">
          <h2 class="cases__title title">Кейсы</h2>

          <ul class="cases__list">
            <?php
              $i = 1;
             ?>
             <?php while ($i < 7) : ?>
            <li class="cases__item cases__item--search">
              <a class="cases__link" href="case.php">
                <picture class="cases__picture">
                  <source srcset="img/cases-<?= rand(1, 3); ?>.webp" type="image/webp">
                  <img width="770" height="313" src="img/cases-<?= rand(1, 3); ?>.jpg" alt="Case">
                </picture>
              </a>

              <ul class="tags">
                <li class="tags__item">#Кейс</li>
                <li class="tags__item">#SMM</li>
              </ul>

              <a class="cases__title-link" href="case.php">
                <h4 class="cases__item-title">
                  Кейс: Как повысить CTR и переходы на сайт с помощью микроразметки Schema.org FAQ?
                </h4>
              </a>

              <ul class="inform inform--cases">
                <li class="inform__item inform__item--cases">
                  <p class="inform__title inform__title--cases">19.06.2020</p>
                </li>
                <li class="inform__item inform__item--cases">
                  <p class="inform__count">0</p>

                  <p class="inform__title inform__title--cases">Комментариев</p>
                </li>
              </ul>
            </li>
            <?php $i++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section class="cases cases--search">
        <div class="cases__wrapper">
          <h2 class="cases__title title">Статьи</h2>

          <ul class="cases__list">
            <?php
              $i = 1;
             ?>
             <?php while ($i < 7) : ?>
            <li class="cases__item cases__item--search">
              <a class="cases__link" href="case.php">
                <picture class="cases__picture">
                  <source srcset="img/cases-<?= rand(1, 3); ?>.webp" type="image/webp">
                  <img width="770" height="313" src="img/cases-<?= rand(1, 3); ?>.jpg" alt="Case">
                </picture>
              </a>

              <ul class="tags">
                <li class="tags__item">#Кейс</li>
                <li class="tags__item">#SMM</li>
              </ul>

              <a class="cases__title-link" href="case.php">
                <h4 class="cases__item-title">
                  Кейс: Как повысить CTR и переходы на сайт с помощью микроразметки Schema.org FAQ?
                </h4>
              </a>

              <ul class="inform inform--cases">
                <li class="inform__item inform__item--cases">
                  <p class="inform__title inform__title--cases">19.06.2020</p>
                </li>
                <li class="inform__item inform__item--cases">
                  <p class="inform__count">0</p>

                  <p class="inform__title inform__title--cases">Комментариев</p>
                </li>
              </ul>
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

<?php
  $title = "Алексей Шептура";

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
              <a class="breadcrumbs__link" href="team.php" itemid="team.php" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Команда</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Алексей Шептура</span>
              </a>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
      </section>

      <section class="one">
        <div class="one__wrapper">
          <header class="one__header">
            <picture class="one__picture">
              <source srcset="img/chef-2.webp" type="image/webp">
              <img width="200" height="200" src="img/chef-2.jpg" alt="one">
            </picture>

            <div class="one__content">
              <h1 class="one__s-title">
                Алексей Шептура
              </h1>

              <p class="one__status">
                Сооснователь «Webnauts»
              </p>
            </div>
          </header>

          <div class="one__text-wrapper one__text-wrapper--quote">
            <p class="one__text one__text--quote">
              Хорошо налаженная организация сама воспитывает хороших сотрудников, сама их направляет.
            </p>

            <p class="one__text one__text--quote">
              Хорошо налаженная организация сама воспитывает хороших сотрудников, сама их направляет.
            </p>
          </div>

          <div class="one__text-wrapper">
            <p class="one__text">
              Здесь будет короткий текст-описание, который будет что-то описывать. Алгебра трансформирует критерий интегрируемости. Теорема стремительно транслирует криволинейный интеграл. Теорема Ферма категорически развивает невероятный постулат. Более того, интеграл от функции, имеющий конечный разрыв отнюдь не очевиден.
            </p>

            <p class="one__text">
              Здесь будет короткий текст-описание, который будет что-то описывать. Алгебра трансформирует критерий интегрируемости. Теорема стремительно транслирует криволинейный интеграл. Теорема Ферма категорически развивает невероятный постулат. Более того, интеграл от функции, имеющий конечный разрыв отнюдь не очевиден.
            </p>
          </div>
        </div>
      </section>

      <section class="technology technology--one">
        <div class="technology__wrapper">
          <h2 class="technology__s-title technology__s-title--one">
            Технологии
          </h2>

          <ul class="technology__list technology__list--one">
            <?php $z =1; ?>
            <?php while ($z < 24) : ?>
            <li class="technology__item technology__item--one">
              <picture class="technology__picture">
                <source srcset="img/technology-<?= rand(1, 3); ?>.webp" type="image/webp">
                <img width="72" height="72" src="img/technology-<?= rand(1, 3); ?>.png" alt="technology">
              </picture>

              <h3 class="technology__name">HTML 5</h3>
            </li>

            <?php $z++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section class="certificates certificates--one">
        <div class="certificates__wrapper">
          <header class="certificates__header">
            <h2 class="certificates__s-title">Сертификаты</h2>

            <div class="arrows">
              <button class="arrows__prev arrows__prev--certificates" type="button" name="prev">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>

              <button class="arrows__next arrows__next--certificates" type="button" name="next">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </header>

          <div class="certificates__slider swiper-container">
            <ul class="certificates__list swiper-wrapper">
              <li class="certificates__item swiper-item">
                <a class="certificates__zoom" data-fancybox="certificate" href="img/certificate-big.jpg">
                  <picture class="certificates__picture">
                    <source srcset="img/certificate.webp" type="image/webp">
                    <img width="127" height="180" src="img/certificate.jpg" alt="Case">
                  </picture>

                  <div class="mask mask--certificates">
                    <svg class="mask__icon" width="56" height="56">
                      <use xlink:href="#icon-zoom"></use>
                    </svg>
                  </div>
                </a>

                <h3 class="certificates__item-title">Бизнес-партнер Битрикс24</h3>
              </li>

              <li class="certificates__item swiper-item">
                <a class="certificates__zoom" data-fancybox="certificate" href="img/certificate-big.jpg">
                  <picture class="certificates__picture">
                    <source srcset="img/certificate.webp" type="image/webp">
                    <img width="127" height="180" src="img/certificate.jpg" alt="Case">
                  </picture>

                  <div class="mask mask--certificates">
                    <svg class="mask__icon" width="56" height="56">
                      <use xlink:href="#icon-zoom"></use>
                    </svg>
                  </div>
                </a>

                <h3 class="certificates__item-title">Бизнес-партнер Битрикс24</h3>
              </li>

              <li class="certificates__item swiper-item">
                <a class="certificates__zoom" data-fancybox="certificate" href="img/certificate-big.jpg">
                  <picture class="certificates__picture">
                    <source srcset="img/certificate.webp" type="image/webp">
                    <img width="127" height="180" src="img/certificate.jpg" alt="certificate">
                  </picture>

                  <div class="mask mask--certificates">
                    <svg class="mask__icon" width="56" height="56">
                      <use xlink:href="#icon-zoom"></use>
                    </svg>
                  </div>
                </a>

                <h3 class="certificates__item-title">Бизнес-партнер Битрикс24</h3>
              </li>

              <li class="certificates__item swiper-item">
                <a class="certificates__zoom" data-fancybox="certificate" href="img/certificate-big.jpg">
                  <picture class="certificates__picture">
                    <source srcset="img/certificate.webp" type="image/webp">
                    <img width="127" height="180" src="img/certificate.jpg" alt="certificate">
                  </picture>

                  <div class="mask mask--certificates">
                    <svg class="mask__icon" width="56" height="56">
                      <use xlink:href="#icon-zoom"></use>
                    </svg>
                  </div>
                </a>

                <h3 class="certificates__item-title">Бизнес-партнер Битрикс24</h3>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="cases cases--one">
        <div class="cases__wrapper">
          <h2 class="cases__s-title">Задачи, которые решал</h2>

          <ul class="cases__list cases__list--mobile cases__list--one">
            <?php
              $i = 1;
             ?>
             <?php while ($i < 4) : ?>
            <li class="cases__item">
              <a class="cases__link" href="case.php">
                <picture class="cases__picture">
                  <source srcset="img/cases-1.webp" type="image/webp">
                  <img width="770" height="313" src="img/cases-1.jpg" alt="Case">
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

      <section class="portfolio portfolio--one">
        <div class="portfolio__wrapper portfolio__wrapper--one">
          <h2 class="portfolio__s-title portfolio__s-title--one">Проекты, в которых участвовал</h2>

          <ul class="portfolio__list portfolio__list--mobile portfolio__list--one">
            <?php $z = 1; ?>
            <?php while ($z < 7) : ?>
              <li class="portfolio__item">
                <a class="portfolio__link" href="project.php">
                  <picture class="portfolio__picture">
                    <source srcset="img/poster-1.webp" type="image/webp">
                    <img width="570" height="321" src="img/poster-1.jpg" alt="Постер">
                  </picture>
                  <div class="mask">
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
              <?php if (($z % 2) == 0 && $z < 6): ?>
                <li class="portfolio__line"></li>
              <?php endif; ?>
            <?php $z++; ?>

            <?php endwhile; ?>
          </ul>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>

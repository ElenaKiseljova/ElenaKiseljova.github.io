<?php
  $title = "«Google Corporation»";

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
              <a class="breadcrumbs__link" href="partners.php" itemid="partners.php" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Партнеры</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">«Google Corporation»</span>
              </a>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
      </section>

      <section class="one one--partner">
        <div class="one__wrapper">
          <header class="one__header one__header--partner">
            <picture class="one__picture one__picture--partner">
              <source srcset="img/partner.webp" type="image/webp">
              <img width="130" height="54" src="img/partner.jpg" alt="one">
            </picture>

            <div class="one__content one__content--partner">
              <h1 class="one__s-title">
                «Google Corporation»
              </h1>

              <p class="one__status">
                Интернет-корпорация
              </p>

              <p class="one__text one__text--header">
                Здесь будет короткий текст-описание, который будет что-то описывать. Алгебра трансформирует критерий интегрируемости. Теорема стремительно транслирует криволинейный интеграл. Теорема Ферма категорически развивает невероятный постулат. Более того, интеграл от функции, имеющий конечный разрыв отнюдь не очевиден.
              </p>
            </div>
          </header>
        </div>
      </section>

      <section class="portfolio portfolio--one portfolio--partner">
        <div class="portfolio__wrapper portfolio__wrapper--one">
          <h2 class="portfolio__s-title portfolio__s-title--one">Проекты клиента</h2>

          <ul class="portfolio__list portfolio__list--one portfolio__list--mobile">
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

      <section class="cases cases--one">
        <div class="cases__wrapper">
          <h2 class="cases__s-title">Кейсы</h2>

          <ul class="cases__list cases__list--mobile cases__list--one">
            <?php
              $i = 1;
             ?>
             <?php while ($i < 4) : ?>
            <li class="cases__item">
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

      <section class="reviews">
        <div class="reviews__wrapper">
          <h2 class="reviews__s-title reviews__s-title--one">Отзывы клиента</h2>

          <ul class="reviews__list reviews__list--one">
            <li class="reviews__item reviews__item--video">
              <div class="youtube youtube--one">
                <div class="youtube__content" data-id="I_kCvkJt4o8">
                  <svg class="youtube__play" width="113px" height="113px">
                    <use xlink:href="#icon-play"></use>
                  </svg>
                  <img class="youtube__thumb" src="img/poster-review-<?= rand(1, 2); ?>.jpg" alt="Poster">
                  <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="mask mask--youtube"></div>
              </div>
            </li>

            <li class="reviews__item reviews__item--text2">
              <header class="reviews__header">
                <picture class="reviews__picture reviews__picture--avatar">
                  <source srcset="img/avatar.webp" type="image/webp">
                  <img width="100" height="100" src="img/avatar.jpg" alt="avatar">
                </picture>

                <div class="reviews__content reviews__content--text">
                  <h4 class="reviews__name">Оксана Кукленко</h4>

                  <p class="reviews__status">Юрист</p>
                </div>
              </header>

              <p class="reviews__text">
                «Отличная компания. Замечательные ребята. Талантливые специалисты. Могут сделать, кажется, абсолютно все. Даже то, что ты не знаешь как объяснить. Они понимают и делают.

              </p>

              <p class="reviews__text">
                Спасибо за выполненную работу.
                Надеюсь на дальнейшее сотрудничество.»
              </p>
            </li>

            <li class="reviews__item reviews__item--one">
              <a class="reviews__zoom reviews__zoom--one" data-fancybox="reviews" href="img/blank.jpg">
                <picture class="reviews__picture reviews__picture--one">
                  <source srcset="img/blank.webp" type="image/webp">
                  <img width="240" height="316" src="img/blank.jpg" alt="blank">
                </picture>

                <div class="mask mask--reviews">
                  <svg class="mask__icon" width="56" height="56">
                    <use xlink:href="#icon-zoom"></use>
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>

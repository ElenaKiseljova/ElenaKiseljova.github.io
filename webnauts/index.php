<?php
  $title = "Главная";

  include("header.php");
 ?>

    <main class="page-main page-main--index">
      <h1 class="visually-hidden">Webnauts site</h1>
      <section class="promo">
        <div class="promo__wrapper">
          <div class="promo__content">
            <h2 class="promo__title">
              <span>Космические решения</span>
              <span class="promo__blue">для вашего бизнеса</span>
            </h2>

            <p class="promo__text">
              Разрабатываем на Битрикс24
            </p>

            <button class="promo__say" type="button" name="say">Обсудить проект</button>

            <button class="promo__down" type="button" name="down">
              <svg class="promo__down-icon" width="24" height="24">
                <use xlink:href="#icon-mouse"></use>
              </svg>
              <svg class="promo__down-icon" width="24" height="24">
                <use xlink:href="#icon-arrow-gray"></use>
              </svg>
            </button>
          </div>
          <picture class="promo__picture">
            <source media="(max-width: 767px)" srcset="img/promo-1-m.webp" type="image/webp">
            <source srcset="img/promo-1.webp" type="image/webp">

            <source media="(max-width: 767px)" srcset="img/promo-1-m.png" type="image/png">

            <img width="962" height="838" src="img/promo-1.png" alt="Баннер">
          </picture>
          <h3 class="letters letters--promo">Webnauts</h3>
        </div>
      </section>

      <section class="servis">
        <div class="servis__wrapper">
          <h2 class="title">Наши услуги</h2>

          <p class="servis__text">
            Стоит отметить, что высшая арифметика создает отрицательный вектор. Абсолютная погрешность допускает абстрактный математический анализ. Криволинейный интеграл осмысленно определяет вектор. Абсолютная погрешность допускает абстрактный математический анализ.
          </p>

          <ul class="servis__list">
            <li class="servis__item">
              <a class="servis__link" href="#">
                <span>Сайты</span>
                <svg class="servis__item-icon" width="64" height="64">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </a>
            </li>
            <li class="servis__item">
              <a class="servis__link" href="#">
                <span>Контент</span>
                <svg class="servis__item-icon" width="64" height="64">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </a>
            </li>
            <li class="servis__item">
              <a class="servis__link" href="#">
                <span>Интернет-маркетинг</span>
                <svg class="servis__item-icon" width="64" height="64">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </a>
            </li>
            <li class="servis__item">
              <a class="servis__link" href="#">
                <span>Битрикс24</span>
                <svg class="servis__item-icon" width="64" height="64">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </a>
            </li>
            <li class="servis__item">
              <a class="servis__link" href="#">
                <span>Дизайн</span>
                <svg class="servis__item-icon" width="64" height="64">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </a>
            </li>
          </ul>

          <a class="servis__all" href="services.php">Все услуги</a>
        </div>
      </section>

      <section class="portfolio">
        <div class="portfolio__wrapper">
          <h2 class="title title--portfolio">Портфолио</h2>

          <h3 class="letters letters--portfolio">Webnauts</h3>

          <ul class="portfolio__list portfolio__list--mobile">
            <?php $z = 1; ?>
            <?php while ($z < 7) : ?>
              <li class="portfolio__item">
                <a class="portfolio__link" href="project.php">
                  <picture class="portfolio__picture">
                    <source media="(max-width: 767px)" srcset="img/poster-1-m.webp" type="image/webp">
                    <source srcset="img/poster-1.webp" type="image/webp">

                    <source media="(max-width: 767px)" srcset="img/poster-1-m.jpg" type="image/jpg">

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

                <a class="portfolio__title-link" href="project.php">
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

          <a class="portfolio__more" href="portfolio.php">Еще работы</a>
        </div>
      </section>

      <section class="clients">
        <div class="clients__wrapper">
          <header class="clients__top">
            <h2 class="title title--header">К нам обращаются</h2>

            <a class="all all--desktop" href="partners.php">все клиенты</a>
          </header>

          <ul class="clients__list">
            <?php $u = 1; ?>
            <?php while ($u < 9) : ?>
            <li class="clients__item">
              <a class="clients__link" href="partner.php">
                <picture class="clients__picture">
                  <source srcset="img/partner.webp" type="image/webp">
                  <img width="130" height="54" src="img/partner.png" alt="clients">
                </picture>
              </a>
            </li>

            <?php $u++; ?>
            <?php endwhile; ?>
          </ul>

          <a class="all all--mobile" href="partners.php">все клиенты</a>
        </div>
      </section>

      <section class="cases">
        <div class="cases__wrapper">
          <header class="cases__top">
            <h2 class="title title--header">Наши кейсы</h2>

            <a class="all all--desktop" href="cases.php">все кейсы</a>
          </header>


          <div class="tumbs">
            <h3 class="tumbs__name"></h3>
            <ul class="tumbs__list">
              <li class="tumbs__item tumbs__item--cases active">
                Сайты
              </li>
              <li class="tumbs__item tumbs__item--cases">
                Контент
              </li>
              <li class="tumbs__item tumbs__item--cases">
                Интернет-маркетинг
              </li>
              <li class="tumbs__item tumbs__item--cases">
                Битрикс 24
              </li>
              <li class="tumbs__item tumbs__item--cases">
                Дизайн
              </li>
            </ul>
          </div>


          <div class="cases__slider-wrapper">
            <?php $n = 1; ?>
            <?php while ($n < 6) : ?>
            <div class="cases__slider swiper-container <?php if ($n === 1) echo "active"; ?>">
              <ul class="cases__list cases__list--slider swiper-wrapper">
                <?php $i = 1; ?>
                <?php while ($i < rand(4, 8)) : ?>
                <li class="cases__item cases__item--slider swiper-slide">
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

              <div class="cases__slider-nav">
                <div class="arrows">
                  <button class="cases__prev arrows__prev" type="button" name="prev">
                    <svg class="arrows__icon" width="73px" height="8px">
                      <use xlink:href="#icon-arrow-left"></use>
                    </svg>
                  </button>

                  <button class="cases__next arrows__next" type="button" name="next">
                    <svg class="arrows__icon" width="73px" height="8px">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                  </button>
                </div>

                <div class="cases__count">
                  <p class="cases__current">01</p>
                  <p class="cases__all">
                    / 10
                  </p>
                </div>
              </div>
            </div>

            <?php $n++; ?>
            <?php endwhile; ?>
          </div>

          <a class="all all--mobile" href="cases.php">все кейсы</a>
        </div>
      </section>

      <section class="certificates">
        <div class="certificates__wrapper">
          <header class="certificates__header">
            <h2 class="title title--header">Наши сертификаты</h2>

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

      <section class="reviews">
        <div class="reviews__wrapper">
          <header class="reviews__top">
            <h2 class="title title--header">Отзывы</h2>

            <a class="all" href="reviews.php">все отзывы</a>
          </header>

          <div class="reviews__slider swiper-container">
            <ul class="reviews__list reviews__list--slider swiper-wrapper">
              <?php $u = 1; ?>
              <?php while ($u < 5) : ?>
              <li class="reviews__item reviews__item--slider swiper-item">
                <div class="youtube youtube--slider">
                  <div class="youtube__content" data-id="ud_refZuQoA">
                    <svg class="youtube__play" width="113px" height="113px">
                      <use xlink:href="#icon-play"></use>
                    </svg>
                    <img class="youtube__thumb" src="img/poster-review-<?= rand(1, 2); ?>.jpg" alt="Poster">
                    <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>

                  <div class="mask mask--youtube"></div>
                </div>

                <a class="reviews__link" href="partner.php">
                  <h4 class="reviews__name">Оксана Кукленко</h4>
                </a>

                <p class="reviews__status">Юрист</p>
              </li>

              <?php $u++; ?>
              <?php endwhile; ?>
            </ul>

            <div class="reviews__slider-nav">
              <div class="arrows">
                <button class="arrows__prev arrows__prev--reviews" type="button" name="prev">
                  <svg class="arrows__icon" width="73px" height="8px">
                    <use xlink:href="#icon-arrow-left"></use>
                  </svg>
                </button>

                <button class="arrows__next arrows__next--reviews" type="button" name="next">
                  <svg class="arrows__icon" width="73px" height="8px">
                    <use xlink:href="#icon-arrow-right"></use>
                  </svg>
                </button>
              </div>

              <div class="reviews__count">
                <p class="reviews__current">01</p>
                <p class="reviews__all">
                  / 10
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="discuss discuss--index">
        <div class="discuss__wrapper">
          <div class="discuss__content discuss__content--index">
            <div class="discuss__left discuss__left--index">
              <h2 class="discuss__question">Есть вопросы?</h2>
              <p class="discuss__text discuss__text--index">
                Дайте знать любым способом!
              </p>
            </div>

            <form class="form form--index" action="#" method="post">
              <p class="form__connect">
                Свяжитесь с нами любым удобным для Вас способом, чтобы получить ответы на интересующие вопросы и смету.
              </p>

              <label class="visually-hidden" for="phone">Телефон</label>
              <input class="form__phone" id="phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" required>
              <p class="error">Неверный формат номера</p>

              <p class="form__politics form__politics--index">
                <input class="visually-hidden" id="politics" type="checkbox" name="politics" required>
                <label class="form__label" for="politics">Я соглашаюсь с</label>
                <a class="form__link form__link--index" href="politics.php" target="_blank">Политикой конфиденциальности</a>
              </p>

              <button class="form__button form__button--index" type="submit" name="discuss">Старт</button>

              <ul class="social social--form social--index">
                <li class="social__item social__item--form">
                  <a class="social__link" href="#">
                    <svg class="social__icon" width="62" height="62" aria-describedby="telegram icon">
                      <use xlink:href="#icon-telegram"></use>
                    </svg>
                  </a>
                </li>
                <li class="social__item social__item--form">
                  <a class="social__link" href="#">
                    <svg class="social__icon" width="62" height="62" aria-describedby="telegram icon">
                      <use xlink:href="#icon-chat"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>

<?php
  $title = "Кейсы";

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
                <span itemprop="name">Кейсы</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>
      <article class="article article--cases">
        <div class="article__wrapper">
          <aside class="aside aside--cases">
            <h1 class="title title--page3">Кейсы</h1>

            <div class="aside__item aside__item--cases">
              <form class="aside__form" action="#" method="get">
                <ul class="tags tags--cases">
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-all">
                    <label class="tags__label tags__label--all" for="tags-all">
                      Все
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-1">
                    <label class="tags__label" for="tags-1">
                      SEO
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-2">
                    <label class="tags__label" for="tags-2">
                      SMM
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-3">
                    <label class="tags__label" for="tags-3">
                      Сайты
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-4">
                    <label class="tags__label" for="tags-4">
                      Контент
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-5">
                    <label class="tags__label" for="tags-5">
                      Битрикс24
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-6">
                    <label class="tags__label" for="tags-6">
                      Контекстная реклама
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-7">
                    <label class="tags__label" for="tags-7">
                      Битрикс24
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-8">
                    <label class="tags__label" for="tags-8">
                      Дизайн
                    </label>
                  </li>

                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-9">
                    <label class="tags__label" for="tags-9">
                      SMM
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-10">
                    <label class="tags__label" for="tags-10">
                      Сайты
                    </label>
                  </li>
                  <li class="tags__item tags__item--cases">
                    <input class="visually-hidden" type="checkbox" name="tags" value="" id="tags-11">
                    <label class="tags__label" for="tags-11">
                      Контент
                    </label>
                  </li>
                </ul>

                <button class="all-tags all-tags--cases" type="button" name="tags-all">Все метки</button>
              </form>
            </div>
            <div class="aside__item aside__item--cases">
              <h2 class="aside__title aside__title--cases">
                <span>Топовые кейсы</span>
              </h2>

              <ul class="aside__list aside__list--cases">
                <li class="aside__item-list">
                  <p class="aside__item-text">
                    <a class="aside__item-link" href="#">
                      Кейс: Как повысить CTR и переходы на сайт с помощью микроразметки Schema.org FAQ?
                    </a>
                  </p>

                  <p class="aside__comments">
                    <span class="aside__comments-count">144</span>
                    <span class="aside__comments-name">комментария</span>
                  </p>
                </li>
                <li class="aside__item-list">
                  <p class="aside__item-text">
                    <a class="aside__item-link" href="#">
                      “Мало показов” в Яндекс.Директ: что делать?
                    </a>
                  </p>

                  <p class="aside__comments">
                    <span class="aside__comments-count">144</span>
                    <span class="aside__comments-name">комментария</span>
                  </p>
                </li>
                <li class="aside__item-list">
                  <p class="aside__item-text">
                    <a class="aside__item-link" href="#">
                      Кейс: смена тематики канала Яндекс.Дзен для повышения охвата
                    </a>
                  </p>

                  <p class="aside__comments">
                    <span class="aside__comments-count">144</span>
                    <span class="aside__comments-name">комментария</span>
                  </p>
                </li>
              </ul>
            </div>
          </aside>
          <section class="cases cases--page">
            <div class="cases__wrapper cases__wrapper--page">
              <div class="sorts">
                <form class="search-form" action="#" method="get">
                  <div class="search-form__container">
                    <input class="search-form__input" type="text" name="search" placeholder="Поиск">

                    <svg class="search-form__svg" width="20" height="20" aria-label="Поиск">
                      <use xlink:href="#icon-search"></use>
                    </svg>
                  </div>
                </form>

                <div class="sort">
                  <button class="sort__button" type="button" name="sort-list">
                    <svg class="sort__icon" width="24" height="24">
                      <use xlink:href="#icon-list"></use>
                    </svg>
                  </button>
                  <button class="sort__button active" type="button" name="sort-table">
                    <svg class="sort__icon" width="24" height="24">
                      <use xlink:href="#icon-table"></use>
                    </svg>
                  </button>
                </div>
              </div>

                 <!--
                   Это первый элемент списка кейсов, который виден при блочном отображении списка
                   Когда переключаешь на табличный вид - он исчезает, а на его месте появляется первый элемент списка ul
                 -->
              <header class="cases__top cases__top--page"> <!-- cases__top--page cases__top--table -->
                <a class="cases__link cases__link--top" href="case.php">
                  <picture class="cases__picture cases__picture--top">
                    <source srcset="img/case-big.webp" type="image/webp">
                    <img width="770" height="313" src="img/case-big.jpg" alt="Case">
                  </picture>
                </a>

                <div class="cases__top-text">
                  <ul class="tags">
                    <li class="tags__item tags__item--top">#Кейс</li>
                    <li class="tags__item tags__item--top">#SMM</li>
                  </ul>

                  <a class="cases__title-link cases__title-link--top" href="#">
                    <h4 class="cases__item-title cases__item-title--top">
                      Кейс: Как повысить CTR и переходы на сайт с помощью микроразметки Schema.org FAQ?
                    </h4>
                  </a>


                  <ul class="inform inform--cases">
                    <li class="inform__item inform__item--top">
                      <p class="inform__title inform__title--cases">19.06.2020</p>
                    </li>
                    <li class="inform__item inform__item--top">
                      <p class="inform__count">0</p>

                      <p class="inform__title inform__title--cases">Комментариев</p>
                    </li>
                  </ul>
                </div>
              </header>

                <!--
                  Список элементов ul. 1-й - скрыт в блочном отображении. Появляется в табличном.
                  Размер картинки используется тот, который нужен для Баннера на этой странице. В списке - сжимается и центруется
                -->
              <ul class="cases__list cases__list--page"> <!-- cases__list--page cases__list--table -->
                <?php $i = 1; ?>
                <?php while ($i < 6) : ?>
                <li class="cases__item cases__item--page"> <!-- cases__item--page cases__item--table -->
                  <a class="cases__link" href="case.php">
                    <picture class="cases__picture">
                      <source srcset="img/case-big.webp" type="image/webp">
                      <img width="770" height="313" src="img/case-big.jpg" alt="Case">
                    </picture>
                  </a>

                  <div class="cases__content">
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
                  </div>
                </li>

                <?php $i++; ?>
                <?php endwhile; ?>
              </ul>

              <div class="pagination">
                <a class="pagination__button pagination__button--prev" href="#">
                  <svg class="pagination__icon" width="33" height="8">
                    <use xlink:href="#icon-arrow-prev"></use>
                  </svg>
                </a>

                <ul class="pagination__list">
                  <li class="pagination__item">
                    <a class="pagination__link" href="#">
                      1
                    </a>
                  </li>
                  <li class="pagination__item">
                    <a class="pagination__link active" href="#">
                      2
                    </a>
                  </li>
                  <li class="pagination__item">
                    <a class="pagination__link" href="#">
                      3
                    </a>
                  </li>
                  <li class="pagination__item">
                    <a class="pagination__link" href="#">
                      4
                    </a>
                  </li>
                </ul>

                <a class="pagination__button pagination__button--next" href="#">
                  <svg class="pagination__icon" width="33" height="8">
                    <use xlink:href="#icon-arrow-next"></use>
                  </svg>
                </a>
              </div>

              <button class="download download--cases" type="button" name="more">Загрузить еще</button>
            </div>
          </section>
        </div>
      </article>

      <section class="portfolio portfolio--cases">
        <div class="portfolio__wrapper">
          <header class="portfolio__header">
            <h2 class="title title--header">Наши работы</h2>

            <div class="arrows">
              <button class="arrows__prev arrows__prev--portfolio" type="button" name="prev">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>

              <button class="arrows__next arrows__next--portfolio" type="button" name="next">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </header>

          <div class="portfolio__slider portfolio__slider--page swiper-container">
            <ul class="portfolio__list portfolio__list--slider swiper-wrapper">
              <li class="portfolio__item portfolio__item--slider swiper-slide">
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
              <li class="portfolio__item portfolio__item--slider swiper-slide">
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
            </ul>
          </div>
        </div>
      </section>

      <section class="discuss discuss--index">
        <div class="discuss__wrapper">
          <div class="discuss__content discuss__content--index discuss__content--inner">
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

              <ul class="social social--form">
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

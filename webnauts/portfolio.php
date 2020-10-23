<?php
  $title = "Портфолио";

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
                <span itemprop="name">Портфолио</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>

      <section class="portfolio portfolio--page">
        <div class="portfolio__wrapper">
          <header class="portfolio__header">
            <h2 class="title title--page"><span>Портфолио</span>  <span class="title__small">по контектсной рекламе</span></h2>

            <form class="portfolio__tags" action="#" method="get">
              <ul class="tags tags--portfolio">
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

              <button class="all-tags all-tags--portfolio" type="button" name="tags-all">Все метки</button>
            </form>
          </header>

          <ul class="portfolio__list portfolio__list--page">
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

          <button class="download download--portfolio" type="button" name="more">Загрузить еще</button>
        </div>
      </section>

      <div class="pagination pagination--portfolio">
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

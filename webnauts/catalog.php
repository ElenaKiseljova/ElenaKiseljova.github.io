<?php
  $title = "Каталог";

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
                <span itemprop="name">Каталог</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>

      <article class="article article--catalog">
        <div class="article__wrapper">
          <h1 class="article__s-title article__s-title--catalog">Каталог</h1>

          <aside class="aside aside--catalog">
            <form class="filters" action="#" method="get">
              <div class="filters__radio">
                <h2 class="filters__top"></h2>
                <ul class="filters__list filters__list--radio">
                  <li class="filters__item filters__item--radio">
                    <input class="visually-hidden" type="radio" name="product" value="" id="product-1">
                    <label for="product-1" class="filters__label filters__label--radio active">
                      Купить Битрикс24
                    </label>
                  </li>
                  <li class="filters__item filters__item--radio">
                    <input class="visually-hidden" type="radio" name="product" value="" id="product-2">
                    <label for="product-2" class="filters__label filters__label--radio">
                      Купить amoCRM
                    </label>
                  </li>
                  <li class="filters__item filters__item--radio">
                    <input class="visually-hidden" type="radio" name="product" value="" id="product-3">
                    <label for="product-3" class="filters__label filters__label--radio">
                      Готовые бизнес-процессы Битрикс24
                    </label>
                  </li>
                  <li class="filters__item filters__item--radio">
                    <input class="visually-hidden" type="radio" name="product" value="" id="product-4" checked>
                    <label for="product-4" class="filters__label filters__label--radio">
                      amoCRM виджеты
                    </label>
                  </li>
                  <li class="filters__item filters__item--radio">
                    <input class="visually-hidden" type="radio" name="product" value="" id="product-5">
                    <label for="product-5" class="filters__label filters__label--radio">
                      Интеграция CRM
                    </label>
                  </li>
                  <li class="filters__item filters__item--radio">
                    <input class="visually-hidden" type="radio" name="product" value="" id="product-6">
                    <label for="product-6" class="filters__label filters__label--radio">
                      Готовые CRM
                    </label>
                  </li>
                  <li class="filters__item filters__item--radio">
                    <input class="visually-hidden" type="radio" name="product" value="" id="product-7">
                    <label class="filters__label filters__label--radio" for="product-7">
                      Услуги
                    </label>
                  </li>
                </ul>
              </div>

              <div class="filters__checkbox">
                <h2 class="filters__title">
                  Тип лицензии
                </h2>

                <ul class="filters__list filters__list--checkbox">
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="license" value="1" id="license-1" checked>
                    <label class="filters__label filters__label--checkbox" for="license-1">Облако 1</label>
                  </li>
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="license" value="2" id="license-2">
                    <label class="filters__label filters__label--checkbox" for="license-2">Облако 2</label>
                  </li>
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="license" value="3" id="license-3">
                    <label class="filters__label filters__label--checkbox" for="license-3">Облако 3</label>
                  </li>
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="license" value="4" id="license-4">
                    <label class="filters__label filters__label--checkbox" for="license-4">Облако 4</label>
                  </li>
                </ul>

                <h2 class="filters__title">
                  Срок лицензирования
                </h2>

                <ul class="filters__list filters__list--checkbox">
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="time" value="1" id="time-1" checked>
                    <label class="filters__label filters__label--checkbox" for="time-1">1 мес.</label>
                  </li>
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="time" value="2" id="time-2">
                    <label class="filters__label filters__label--checkbox" for="time-2">2 мес.</label>
                  </li>
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="time" value="3" id="time-3">
                    <label class="filters__label filters__label--checkbox" for="time-3">3 мес.</label>
                  </li>
                  <li class="filters__item filters__item--checkbox">
                    <input class="visually-hidden" type="checkbox" name="time" value="4" id="time-4">
                    <label class="filters__label filters__label--checkbox" for="time-4">4 мес.</label>
                  </li>
                </ul>

                <span class="filters__close"></span>
              </div>

              <button class="filters__button" type="button" name="filter">
                Фильтр

                <svg class="filters__icon" width="16" height="16" aria-label="Фильтр">
                  <use xlink:href="#icon-filter"></use>
                </svg>
              </button>
            </form>
          </aside>

          <section class="catalog">
            <ul class="catalog__list">
              <?php $z = 1; ?>
              <?php while ($z < 7) : ?>
              <li class="catalog__item">
                <a class="catalog__link" href="product.php">
                  <picture class="catalog__picture">
                    <source srcset="img/product.webp" type="image/webp">
                    <img width="259" height="275" src="img/product.png" alt="product">
                  </picture>
                </a>

                <div class="catalog__content">
                  <a class="catalog__link" href="product.php">
                    <h3 class="catalog__name">
                      Купить Битрикс24 тариф «Задачи+» 12 мес
                    </h3>
                  </a>

                  <p class="catalog__price">
                    17 940 ₽
                  </p>

                  <button class="download download--catalog" type="button" name="buy">Купить</button>
                </div>
              </li>
              <?php $z++; ?>

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
          </section>
        </div>
      </article>

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

<?php
  $title = "Купить Битрикс24 тариф «Задачи+» 12 мес";

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
              <a class="breadcrumbs__link" href="catalog.php" itemid="partners.php" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Каталог</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Купить Битрикс24 тариф «Задачи+» 12 мес</span>
              </a>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
      </section>

      <section class="product">
        <div class="product__wrapper">
          <header class="product__header">
            <picture class="product__picture">
              <source srcset="img/product.webp" type="image/webp">
              <img width="500" height="605" src="img/product.png" alt="product">
            </picture>

            <div class="product__content product__content--header">
              <h1 class="product__s-title product__s-title--header">Купить Битрикс24 тариф «Задачи+» 12 мес</h1>

              <h4 class="product__s-title product__s-title--small">Состав пакета</h4>

              <ul class="product__list">
                <li class="product__text product__text--point">
                  Консультация специалистов с 9-летним опытом разработки сайтов
                </li>
                <li class="product__text product__text--point">
                  Максимальная скидка
                </li>
                <li class="product__text product__text--point">
                  Услуги всех специалистов по максимальной скидке
                </li>
                <li class="product__text product__text--point">
                  Полная техническая поддержка
                </li>
              </ul>

              <p class="product__price">
                17 940 ₽
              </p>

              <button class="download download--product download--catalog" type="button" name="buy">Купить</button>

            </div>
          </header>

          <h4 class="product__s-title product__s-title--contain">Состав пакета</h4>

          <div class="product__content product__content--text">
            <p class="product__text">
              Новый тариф Бирикс24 Задачи+ подходящее решение для организация которые не укладываются по количеству сотрудников в тариф CRM+ и не используют специальные возможности тарифа. Тариф Задачи плюс будет удобен для совестной работе над задачами и проектами совместной работе с документами. Отличительной особенностью тарифа является расширенные возможности методологии scrum. Наличие интересов для отслеживания сроков проектов и использования диаграммы Ганта.
            </p>
          </div>

          <div class="product__content product__content--text">
            <p class="product__text">
              Тариф Битрикс24 задачи+ в особенности востребован производственными предприятиями и компаниями, имеющими распределенную структуру. Важными нововведениями тарифа является возможности устанавливать зависимости в задачах, наличие нового модуля аналитики задач, возможность передавать задачи между разными Битрикс24 и восстанавливать задачи из корзины.
            </p>
          </div>
        </div>
      </section>

      <section class="catalog catalog--product">
        <div class="catalog__wrapper">
          <hr class="catalog__line">
          <h2 class="catalog__s-title">Другие товары</h2>
          <ul class="catalog__list catalog__list--mobile catalog__list--product">
            <?php $z = 1; ?>
            <?php while ($z < 4) : ?>
            <li class="catalog__item catalog__item--product">
              <a class="catalog__link catalog__link--product" href="product.php">
                <picture class="catalog__picture catalog__picture--product">
                  <source srcset="img/product.webp" type="image/webp">
                  <img width="259" height="275" src="img/product.png" alt="product">
                </picture>
              </a>

              <div class="catalog__content catalog__content--product">
                <a class="catalog__link catalog__link--product catalog__link--name" href="product.php">
                  <h3 class="catalog__name catalog__name--product">
                    Купить Битрикс24 тариф «Задачи+» 12 мес
                  </h3>
                </a>

                <p class="catalog__price catalog__price--product">
                  17 940 ₽
                </p>

                <a class="catalog__next" href="#">
                  <svg class="catalog__icon" width="33" height="8">
                    <use xlink:href="#icon-arrow-next"></use>
                  </svg>
                </a>
              </div>
            </li>
            <?php $z++; ?>

            <?php endwhile; ?>
          </ul>
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

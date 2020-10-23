<?php
  $title = "Продвижение мебельных компаний";

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
              <a class="breadcrumbs__link" href="cases.php" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Блог</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">«Продвижение мебельных компаний»</span>
              </a>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
      </section>
      <article class="article">
        <div class="article__wrapper">
          <div class="article__content">
            <section class="case case--article">
              <h1 class="case__s-title case__s-title--page">Продвижение мебельных компаний</h1>

              <picture class="banner banner--article">
                <source srcset="img/banner-blog.webp" type="image/webp">
                <img width="800" height="430" src="img/banner-blog.jpg" alt="Banner">
              </picture>

              <p class="case__item-text case__item-text--article">
                Если вы весь из себя мужик и голыми руками собираете мебель, не вставая с дивана — это прекрасно, но недостаточно. Эту мебель никто не купит, ведь о ней никто не знает! Что же делать?
              </p>

              <p class="case__item-text case__item-text--article">
                Вам нужно <b>продвижение!</b> С его помощью вы наконец расширите горизонты...
              </p>
            </section>

            <section class="tools">
              <h2 class="tools__s-title">
                Наиболее эффективные инструменты для продвижения мебельных компаний
              </h2>

              <div class="tumbs tumbs--tools">
                <h3 class="tumbs__name"></h3>
                <ul class="tumbs__list">
                  <li class="tumbs__item tumbs__item--tools active">
                    Запуск проекта
                  </li>
                  <li class="tumbs__item tumbs__item--tools">
                    Привлечение аудитории
                  </li>
                  <li class="tumbs__item tumbs__item--tools">
                    Увеличение конверсии
                  </li>
                  <li class="tumbs__item tumbs__item--tools">
                    Лояльность аудитории
                  </li>
                </ul>
              </div>

              <div class="tools__container swiper-container">
                <div class="tools__slider swiper-wrapper">
                  <?php $i = 1; ?>
                  <?php while ($i < 5) : ?>
                  <div class="tools__slide swiper-slide">
                    <ul class="tools__list">
                      <li class="tools__item">
                        <a class="tools__link" href="#">
                          <h3 class="tools__name">
                            Контекстная реклама (<?= $i ?>)
                          </h3>

                          <p class="tools__text">
                            По целевым запросам готовим кампании в Директ и Adwords. В объявлениях ссылки ведут на подготовленные посадочные страницы.
                          </p>

                          <svg class="tools__icon" width="32" height="32">
                            <use xlink:href="#icon-arrow"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="tools__item">
                        <a class="tools__link" href="#">
                          <h3 class="tools__name">
                            Контекстная реклама
                          </h3>

                          <p class="tools__text">
                            По целевым запросам готовим кампании в Директ и Adwords. В объявлениях ссылки ведут на подготовленные посадочные страницы.
                          </p>

                          <svg class="tools__icon" width="32" height="32">
                            <use xlink:href="#icon-arrow"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="tools__item">
                        <a class="tools__link" href="#">
                          <h3 class="tools__name">
                            Контекстная реклама
                          </h3>

                          <p class="tools__text">
                            По целевым запросам готовим кампании в Директ и Adwords. В объявлениях ссылки ведут на подготовленные посадочные страницы.
                          </p>

                          <svg class="tools__icon" width="32" height="32">
                            <use xlink:href="#icon-arrow"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <?php $i++; ?>
                  <?php endwhile; ?>
                </div>
              </div>
            </section>

            <section class="advertisement">
              <h2 class="advertisement__s-title">Контекстная реклама</h2>

              <ul class="advertisement__list">
                <li class="advertisement__item">
                  <h4 class="advertisement__item-title">
                    Приступим через час
                  </h4>

                  <p class="advertisement__item-text">
                    В течение 30 минут соберем в удобном для Вас мессенджере рабочую группу для обсуждения проекта, в течение часа начнем работать.
                  </p>
                </li>
                <li class="advertisement__item">
                  <h4 class="advertisement__item-title">
                    Приступим через час
                  </h4>

                  <p class="advertisement__item-text">
                    В течение 30 минут соберем в удобном для Вас мессенджере рабочую группу для обсуждения проекта, в течение часа начнем работать.
                  </p>
                </li>
                <li class="advertisement__item">
                  <h4 class="advertisement__item-title">
                    Приступим через час
                  </h4>

                  <p class="advertisement__item-text">
                    В течение 30 минут соберем в удобном для Вас мессенджере рабочую группу для обсуждения проекта, в течение часа начнем работать.
                  </p>
                </li>

                <li class="advertisement__item">
                  <h4 class="advertisement__item-title">
                    Приступим через час
                  </h4>

                  <p class="advertisement__item-text">
                    В течение 30 минут соберем в удобном для Вас мессенджере рабочую группу для обсуждения проекта, в течение часа начнем работать.
                  </p>
                </li>
                <li class="advertisement__item">
                  <h4 class="advertisement__item-title">
                    Приступим через час
                  </h4>

                  <p class="advertisement__item-text">
                    В течение 30 минут соберем в удобном для Вас мессенджере рабочую группу для обсуждения проекта, в течение часа начнем работать.
                  </p>
                </li>
                <li class="advertisement__item">
                  <h4 class="advertisement__item-title">
                    Приступим через час
                  </h4>

                  <p class="advertisement__item-text">
                    В течение 30 минут соберем в удобном для Вас мессенджере рабочую группу для обсуждения проекта, в течение часа начнем работать.
                  </p>
                </li>
              </ul>
            </section>

            <section class="type">
              <h2 class="type__s-title">Какие типы сайтов подходят больше всего</h2>

              <ul class="type__list">
                <li class="type__item">
                  <div class="type__left">
                    <p class="type__indicator">
                      <span class="type__grad"></span>
                    </p>
                    <div class="type__bottom">
                      <p class="type__name">Лендинг</p>
                      <p class="type__weight type__weight--mobile">
                        <span class="type__count">99</span>%
                      </p>
                    </div>
                  </div>

                  <p class="type__weight type__weight--desktop">
                    <span class="type__count">99</span>%
                  </p>
                </li>
                <li class="type__item">
                  <div class="type__left">
                    <p class="type__indicator">
                      <span class="type__grad"></span>
                    </p>
                    <div class="type__bottom">
                      <p class="type__name">Корпоративный сайт</p>
                      <p class="type__weight type__weight--mobile">
                        <span class="type__count">64</span>%
                      </p>
                    </div>
                  </div>

                  <p class="type__weight type__weight--desktop">
                    <span class="type__count">64</span>%
                  </p>
                </li>
                <li class="type__item">
                  <div class="type__left">
                    <p class="type__indicator">
                      <span class="type__grad"></span>
                    </p>
                    <div class="type__bottom">
                      <p class="type__name">Визитка</p>
                      <p class="type__weight type__weight--mobile">
                        <span class="type__count">13</span>%
                      </p>
                    </div>
                  </div>

                  <p class="type__weight type__weight--desktop">
                    <span class="type__count">13</span>%
                  </p>
                </li>
              </ul>
            </section>

            <section class="tariff">
              <h2 class="tariff__s-title tariff__s-title--small">Тарифы и стоимость продвижения мебельного сайта</h2>

              <div class="tariff__list-wrapper">
                <ul class="tariff__list">
                  <li class="tariff__item">
                    <h3 class="tariff__name">
                      Контекстная реклама
                    </h3>

                    <p class="tariff__text">
                      Подходит на всех этапах продвижения, включая начальный
                    </p>
                    <p class="tariff__text">
                      Оплата за поисковый трафик
                    </p>
                    <p class="tariff__text">
                      Возможность получить прирост трафика
                    </p>

                    <p class="tariff__price">
                      От 50 000 р./мес.
                    </p>
                  </li>
                  <li class="tariff__item">
                    <h3 class="tariff__name">
                      Контекстная реклама
                    </h3>

                    <p class="tariff__text">
                      Подходит на всех этапах продвижения, включая начальный
                    </p>
                    <p class="tariff__text">
                      Оплата за поисковый трафик
                    </p>
                    <p class="tariff__text">
                      Возможность получить прирост трафика
                    </p>

                    <p class="tariff__price">
                      От 50 000 р./мес.
                    </p>
                  </li>
                </ul>
              </div>
            </section>
          </div>
          <aside class="aside">
            <div class="aside__item aside__item--cases">
              <div class="project-info">
                <h4 class="project-info__type">Метки</h4>

                <ul class="tags tags--case">
                  <li class="tags__item tags__item--case"> <a href="#">SEO</a> </li>
                  <li class="tags__item tags__item--case"> <a href="#">SMM</a> </li>
                </ul>
              </div>
            </div>
            <div class="aside__item aside__item--cases">
              <h2 class="aside__title">
                <span>Другие статьи</span>
              </h2>

              <ul class="aside__list">
                <li class="aside__item-list">
                  <p class="aside__item-text">
                    <a class="aside__item-link" href="#">
                      Кейс: Как повысить CTR и переходы на сайт с помощью микроразметки Schema.org FAQ?
                    </a>
                  </p>
                </li>
                <li class="aside__item-list">
                  <p class="aside__item-text">
                    <a class="aside__item-link" href="#">
                      Кейс: Как повысить CTR и переходы на сайт с помощью микроразметки Schema.org FAQ?
                    </a>
                  </p>
                </li>
                <li class="aside__item-list">
                  <p class="aside__item-text">
                    <a class="aside__item-link" href="#">
                      Кейс: Как повысить CTR и переходы на сайт с помощью микроразметки Schema.org FAQ?
                    </a>
                  </p>
                </li>
              </ul>
            </div>
          </aside>
        </div>
      </article>

      <section class="order">
        <div class="order__wrapper">
          <div class="order__inner">
            <picture class="order__image">
              <source srcset="img/money.webp" type="image/webp">
              <img width="88" height="88" src="img/money.png" alt="Money">
            </picture>

            <div class="order__content">
              <h2 class="order__title">Подготовим предложение:</h2>

              <ol class="order__list">
                <li class="order__item">
                  1. Стоимость сайта и продвижения
                </li>
                <li class="order__item">
                  2. Ежемесячные работы
                </li>
              </ol>

              <button class="order__button" type="button" name="order">Заказать продвижение</button>
            </div>
          </div>

        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>

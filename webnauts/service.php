<?php
  $title = "Услуга 1";

  include("header.php");
 ?>

    <main class="page-main">
      <section class="breadcrumbs breadcrumbs--services">
        <div class="breadcrumbs__wrapper breadcrumbs__wrapper--services">
          <ul class="breadcrumbs__list breadcrumbs__list--services" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="/" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Главная</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="cases.php" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Услуги</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Создание сайтов</span>
              </a>
              <meta itemprop="position" content="3" />
            </li>
          </ul>
        </div>
      </section>

      <section class="promo promo--services">
        <div class="promo__wrapper promo__wrapper--services">
          <div class="promo__content promo__content--services">
            <h2 class="promo__title promo__title--services">
              <span>Создание сайтов</span>
              <span class="promo__blue"></span>
            </h2>

            <p class="promo__text promo__text--services">
              Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом, стратегом, аналитиком, контекстологом и таргетологом в одном лице.
            </p>

            <button class="promo__say promo__say--services" type="button" name="say">Обсудить проект</button>
          </div>
          <picture class="promo__picture promo__picture--services">
            <source media="(max-width: 767px)" srcset="img/promo-2-m.webp" type="image/webp">
            <source srcset="img/promo-2.webp" type="image/webp">

            <source media="(max-width: 767px)" srcset="img/promo-2-m.png" type="image/png">

            <img width="1054" height="837" src="img/promo-2.png" alt="Promo">
          </picture>
        </div>
      </section>

      <div class="advantages">
        <ul class="advantages__list">
          <li class="advantages__item advantages__item--left">
            <h3 class="advantages__title">
              Знаем особенности любого бизнеса
            </h3>
            <picture class="advantages__picture">
              <source srcset="img/adv-1.webp" type="image/webp">
              <img width="287" height="287" src="img/adv-1.png" alt="Promo">
            </picture>
            <p class="advantages__text">
              Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом, стратегом, аналитиком, контекстологом и таргетологом в одном лице.
            </p>
          </li>
          <li class="advantages__item advantages__item--center">
            <h3 class="advantages__title">
              Говорим на языке нашего клиента
            </h3>
            <picture class="advantages__picture">
              <source srcset="img/adv-2.webp" type="image/webp">
              <img width="287" height="287" src="img/adv-2.png" alt="Promo">
            </picture>
            <p class="advantages__text">
              Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом, стратегом, аналитиком, контекстологом и таргетологом в одном лице.
            </p>
          </li>
          <li class="advantages__item advantages__item--right">
            <h3 class="advantages__title">
              Клиенты из разных стран
            </h3>
            <picture class="advantages__picture">
              <source srcset="img/adv-3.webp" type="image/webp">
              <img width="287" height="287" src="img/adv-3.png" alt="Promo">
            </picture>
            <p class="advantages__text">
              Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом, стратегом, аналитиком, контекстологом и таргетологом в одном лице.
            </p>
          </li>
        </ul>
      </div>

      <section class="types">
        <div class="types__wrapper">
          <header class="types__header">
            <h2 class="types__s-title">Виды услуг</h2>

            <p class="types__description">
              Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом, стратегом, аналитиком, контекстологом
              и таргетологом в одном лице.
            </p>
          </header>

          <ul class="types__list">
            <?php $n =1; ?>
            <?php while ($n < 13) : ?>
            <li class="types__item">
              <a class="types__link" href="#">
                <div class="types__top">
                  <h4 class="types__name">

                    <?php
                    if (rand(1, 0) == 1) {
                      echo 'Интернет-магазины dthcnrf sd';
                    } else {
                      echo 'Вёрстка';
                    }
                    ?>

                  </h4>

                  <p class="types__text">
                    <?php if (rand(1, 0) == 0) echo 'Купите полный комплекс услуг по интернет- продвижению и станьте профессиональным маркетологом.'; ?>
                  </p>
                </div>

                <div class="types__bottom">
                  <svg class="types__svg" width="24" height="24" aria-label="link">
                    <use xlink:href="#icon-arrow-link"></use>
                  </svg>

                  <p class="types__count">
                    <span class="types__current"></span>/
                    <span class="types__all"></span>
                  </p>
                </div>
              </a>
            </li>

            <?php $n++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section class="text">
        <div class="text__wrapper">
          <h2 class="text__s-title">Текстовой блок 1-2 абзаца</h2>

          <p class="text__item">
            С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн интернет-магазина и было решено «прокачать» сайт – несколько месяцев отвести под базовую оптимизацию проекта под англоязычную аудиторию, а также SEO-продвижение интернет-магазина в Европе, чтобы «причесать» сайт с точки зрения поисковиков и дать ему импульс развития в поисковых системах.
          </p>

          <p class="text__item">
            С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн интернет-магазина и было решено «прокачать» сайт – несколько месяцев отвести под базовую оптимизацию проекта под англоязычную аудиторию, а также SEO-продвижение интернет-магазина в Европе, чтобы «причесать» сайт с точки зрения поисковиков и дать ему импульс развития в поисковых системах.
          </p>
        </div>
      </section>

      <section class="pluses">
        <div class="pluses__wrapper">
          <h2 class="pluses__s-title">Преимущества</h2>

          <div class="pluses__content">
            <ul class="pluses__tabs">
              <?php $k = 1; ?>
              <?php while ($k < 7) : ?>
              <li class="pluses__tabs-item">
                <p class="pluses__count">01</p>
                <h3 class="pluses__name">
                  Комплексный подход
                </h3>
              </li>
              <?php $k++; ?>
              <?php endwhile; ?>
            </ul>
            <div class="pluses__slider swiper-container">
              <ul class="pluses__list swiper-wrapper">
                <?php $p = 1; ?>
                <?php while ($p < 7) : ?>
                <li class="pluses__item swiper-slide">
                  <div class="pluses__header">
                    <p class="pluses__count">01</p>
                    <h3 class="pluses__name">
                      Комплексный подход
                    </h3>
                  </div>
                  <div class="pluses__body">
                    <h4 class="pluses__title">
                      Комплексный подход (<?= $p ?>)
                    </h4>

                    <p class="pluses__text">
                      Наше видение – это <span class="pluses__text pluses__text--red">space web-solutions for business</span>. Команда программистов, дизайнеров, специалистов по продвижению и контекстной рекламу помогут вам достичь успеха.
                    </p>

                    <p class="pluses__text">
                      Разработка продающего сайта под ключ включает:
                    </p>

                    <ul class="pluses__text-list">
                      <li class="pluses__text-item">
                        анализ бизнеса и конкурентов;
                      </li>
                      <li class="pluses__text-item">
                        создание продающей структуры ресурса;
                      </li>
                      <li class="pluses__text-item">
                        разработка дизайна;
                      </li>
                      <li class="pluses__text-item">
                        стратегию развития;
                      </li>
                      <li class="pluses__text-item">
                        анализ юзабилити;
                      </li>
                      <li class="pluses__text-item">
                        A/B-тестирование.
                      </li>
                    </ul>

                    <p class="pluses__text">
                      На выходе вы получаете полноценную экосистему для успешного бизнеса в Интернете.
                    </p>
                  </div>
                </li>
                <?php $p++; ?>
                <?php endwhile; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="modify">
        <div class="modify__wrapper">
          <h2 class="modify__s-title">
            Модификация данных в процессе импорта
          </h2>

          <div class="modify__left">

            <p class="modify__text">
              Мы можем изменять необходимую информацию прямо в процессе импорта:
            </p>

            <ul class="modify__list">
              <li class="modify__item">
                С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн.
              </li>
              <li class="modify__item">
                С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн.
              </li>
              <li class="modify__item">
                С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн.
              </li>
              <li class="modify__item">
                С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн.
              </li>
            </ul>
          </div>
          <picture class="modify__picture">
            <source srcset="img/modify.webp" type="image/webp">
            <img width="644" height="435" src="img/modify.jpg" alt="modify">
          </picture>

          <div class="properties">
            <h2 class="properties__s-title">
              Перенесём все необходимые свойства
            </h2>

            <ul class="properties__list">
              <li class="properties__item">
                Название
              </li>
              <li class="properties__item">
                Характеристики
              </li>
              <li class="properties__item">
                Полное описание
              </li>
              <li class="properties__item">
                Оптовая цена
              </li>
              <li class="properties__item">
                Картинки по ссылкам
              </li>
              <li class="properties__item">
                Метатеги
              </li>
            </ul>

            <ul class="properties__list">
              <li class="properties__item">
                Артикул
              </li>
              <li class="properties__item">
                Краткое описание
              </li>
              <li class="properties__item">
                Картинки из архива
              </li>
              <li class="properties__item">
                Розничная цена
              </li>
              <li class="properties__item">
                Остаток на складе
              </li>
              <li class="properties__item">
                Категория товара
              </li>
            </ul>

            <p class="properties__text properties__text--big">
              <b>Готовы импортировать справочники.</b> Иногда каталоги состоят из нескольких таблиц, каждая из которых содержит информацию об отдельных свойствах: товары, их габариты, цвет и т.п. Мы импортируем все файлы параллельно и установим взаимосвязи между ними.
            </p>
          </div>

          <div class="technology">
            <h2 class="technology__s-title">
              Технологии, которые используем
            </h2>

            <ul class="technology__list">
              <?php $z =1; ?>
              <?php while ($z < 9) : ?>
              <li class="technology__item">
                <picture class="technology__picture">
                  <source srcset="img/technology-<?= rand(1,3); ?>.webp" type="image/webp">
                  <img width="72" height="72" src="img/technology-<?= rand(1,3); ?>.png" alt="technology">
                </picture>

                <h3 class="technology__name">HTML 5</h3>
              </li>

              <?php $z++; ?>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
      </section>

      <section class="portfolio portfolio--services">
        <div class="portfolio__wrapper">
          <header class="portfolio__header">
            <h2 class="portfolio__s-title portfolio__s-title--header">Примеры проектов</h2>

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

          <div class="portfolio__slider portfolio__slider--services swiper-container">
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

      <section class="faq" itemscope itemtype="https://schema.org/FAQPage">
        <div class="faq__wrapper">
          <h2 class="faq__s-title">Вопрос-ответ</h2>

          <ul class="faq__list">
            <li class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 class="faq__name">
                <span itemprop="name">Что в себя включают работы по SEO оптимизации?</span>

                <span class="faq__icon"></span>
              </h3>

              <p class="faq__text" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <span itemprop="text">
                  SEO продвижение состоит из множества задач, которые отнимают время и соответственно – деньги. Ряд задач требует трудозатрат множества специалистов разных отраслей (программистов, контент-менеджеров, редакторов, авторов, линкбилдеров и веб-дизайнеров). Именно их труд и его количество влияет на стоимость выполняемых работ. Один в поле не воин.
                </span>
              </p>
            </li>
            <li class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 class="faq__name">
                <span itemprop="name">Что в себя включают работы по SEO оптимизации?</span>

                <span class="faq__icon"></span>
              </h3>

              <p class="faq__text" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <span itemprop="text">
                  SEO продвижение состоит из множества задач, которые отнимают время и соответственно – деньги. Ряд задач требует трудозатрат множества специалистов разных отраслей (программистов, контент-менеджеров, редакторов, авторов, линкбилдеров и веб-дизайнеров). Именно их труд и его количество влияет на стоимость выполняемых работ. Один в поле не воин.
                </span>
              </p>
            </li>
            <li class="faq__item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h3 class="faq__name">
                <span itemprop="name">Что в себя включают работы по SEO оптимизации?</span>

                <span class="faq__icon"></span>
              </h3>

              <p class="faq__text" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <span itemprop="text">
                  SEO продвижение состоит из множества задач, которые отнимают время и соответственно – деньги. Ряд задач требует трудозатрат множества специалистов разных отраслей (программистов, контент-менеджеров, редакторов, авторов, линкбилдеров и веб-дизайнеров). Именно их труд и его количество влияет на стоимость выполняемых работ. Один в поле не воин.
                </span>
              </p>
            </li>
          </ul>
        </div>
      </section>

      <section class="review">
        <div class="review__wrapper">
          <h2 class="title">
            Отзывы клиента
          </h2>

          <div class="review__slider swiper-container">
            <ul class="review__list swiper-wrapper">
              <!-- Тип слайда для комплексных отзывов. В него по 1 отзыву вставляется. -->
              <?php $x = 1; ?>
              <?php while ($x < 5) : ?>
              <li class="review__item swiper-item">
                <div class="review__cart review__cart--project" itemprop="review" itemscope itemtype="http://schema.org/Review">
                  <picture class="review__image review__image--project">
                    <source srcset="img/review.webp" type="image/webp">
                    <img width="370" height="467" src="img/review.jpg" alt="Banner">
                  </picture>

                  <div class="review__info review__info--project">
                    <header class="review__top review__top--project">
                      <h3 class="review__name review__name--project" itemprop="author" itemscope itemtype="http://schema.org/Person">
                        <span itemprop="name">Оксана Кукленко</span>
                      </h3>
                      <p class="review__status">Юрист</p>
                    </header>
                    <meta itemprop="datePublished" content="22.06.2020">
                    <div class="review__text-wrapper review__text-wrapper--project" itemprop="reviewBody">
                      <p class="review__text review__text--small">
                        Отличная компания. Замечательные ребята. Талантливые специалисты. Могут сделать, кажется, абсолютно все. Даже то, что ты не знаешь как объяснить. Они понимают и делают.
                      </p>
                      <p class="review__text review__text--small">
                        Спасибо за выполненную работу . Надеюсь на дальнейшее сотрудничество.
                      </p>
                    </div>

                    <button class="review__button review__button--project" type="button" name="video-review" data-id="ud_refZuQoA">Видео отзыв</button>

                    <a class="link link--gray" href="img/blank.jpg" data-fancybox="review"> <span>Смотреть отзыв на фирменном бланке</span> </a>
                  </div>
                </div>
              </li>

              <?php $x++; ?>
              <?php endwhile; ?>

              <!-- Тип слайда для видео-отзывов. В него по 2 отзыва вставляются. Остальные - в следующий слайд и т.д. -->
              <li class="review__item swiper-item">
                <div class="reviews reviews--slide">
                  <div class="reviews__video">
                    <div class="youtube youtube--slider">
                      <div class="youtube__content" data-id="ud_refZuQoA">
                        <svg class="youtube__play youtube__play--slide" width="113px" height="113px">
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
                  </div>

                  <div class="reviews__video">
                    <div class="youtube youtube--slider">
                      <div class="youtube__content" data-id="ud_refZuQoA">
                        <svg class="youtube__play youtube__play--slide" width="113px" height="113px">
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
                  </div>
                </div>
              </li>

              <!-- Тип слайда для отзывов на фирменном бланке. В него по 3 отзыва вставляются. Остальные - в следующий слайд и т.д. -->
              <li class="review__item swiper-item">
                <div class="reviews reviews--slide">
                  <a class="reviews__zoom reviews__zoom--slide" data-fancybox="reviews" href="img/blank.jpg">
                    <picture class="reviews__picture reviews__picture--slide">
                      <source srcset="img/blank.webp" type="image/webp">
                      <img width="240" height="316" src="img/blank.jpg" alt="blank">
                    </picture>

                    <div class="mask mask--reviews">
                      <svg class="mask__icon" width="56" height="56">
                        <use xlink:href="#icon-zoom"></use>
                      </svg>
                    </div>
                  </a>
                  <a class="reviews__zoom reviews__zoom--slide" data-fancybox="reviews" href="img/blank.jpg">
                    <picture class="reviews__picture reviews__picture--slide">
                      <source srcset="img/blank.webp" type="image/webp">
                      <img width="240" height="316" src="img/blank.jpg" alt="blank">
                    </picture>

                    <div class="mask mask--reviews">
                      <svg class="mask__icon" width="56" height="56">
                        <use xlink:href="#icon-zoom"></use>
                      </svg>
                    </div>
                  </a>
                  <a class="reviews__zoom reviews__zoom--slide" data-fancybox="reviews" href="img/blank.jpg">
                    <picture class="reviews__picture reviews__picture--slide">
                      <source srcset="img/blank.webp" type="image/webp">
                      <img width="240" height="316" src="img/blank.jpg" alt="blank">
                    </picture>

                    <div class="mask mask--reviews">
                      <svg class="mask__icon" width="56" height="56">
                        <use xlink:href="#icon-zoom"></use>
                      </svg>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="review__slider-nav">
            <div class="arrows">
              <button class="arrows__prev arrows__prev--review" type="button" name="prev">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>

              <button class="arrows__next arrows__next--review" type="button" name="next">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>

            <div class="review__count">
              <p class="review__current">01</p>
              <p class="review__all">
                / 10
              </p>
            </div>
          </div>
          <div class="review__slider-nav review__slider-nav--mobile">
            <div class="arrows arrows--mobile">
              <button class="arrows__prev arrows__prev--mobile" type="button" name="prev">
                <svg class="arrows__icon arrows__icon--mobile" width="64" height="64">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </button>

              <div class="review__count review__count--mobile">
                <p class="review__current">01</p>
                <p class="review__all">
                  / 10
                </p>
              </div>

              <button class="arrows__next arrows__next--mobile" type="button" name="next">
                <svg class="arrows__icon arrows__icon--mobile" width="64" height="64">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="tariff tariff--services">
        <div class="tariff__wrapper">
          <header class="tariff__header">
            <h2 class="tariff__s-title">Тарифы</h2>

            <p class="tariff__text tariff__text--header">
              В тарифах указаны приблизительные значения, которые могут отличаться в зависимости от индивидуальных пожеланий клиента.
            </p>
          </header>

          <div class="tariff__list-wrapper ">
            <ul class="tariff__list tariff__list--services">
              <li class="tariff__item tariff__item--services">
                <h3 class="tariff__name tariff__name--services">
                  Работа с 4 видео
                </h3>

                <p class="tariff__text tariff__text--services">
                  Подходит на всех этапах продвижения, включая начальный
                </p>
                <p class="tariff__text tariff__text--services">
                  Оплата за поисковый трафик
                </p>
                <p class="tariff__text tariff__text--services">
                  Возможность получить прирост трафика
                </p>
                <p class="tariff__text tariff__text--services">
                  Оплата за поисковый трафик
                </p>
                <p class="tariff__text tariff__text--services">
                  Возможность получить прирост трафика
                </p>

                <p class="tariff__price tariff__price--services">
                  От 50 000 р./мес.
                </p>
              </li>
              <li class="tariff__item tariff__item--services">
                <h3 class="tariff__name tariff__name--services">
                  Работа с 6 видео
                </h3>

                <p class="tariff__text tariff__text--services">
                  Подходит на всех этапах продвижения, включая начальный
                </p>
                <p class="tariff__text tariff__text--services">
                  Оплата за поисковый трафик
                </p>

                <p class="tariff__text tariff__text--services">
                  Подходит на всех этапах продвижения, включая начальный
                </p>

                <p class="tariff__text tariff__text--services">
                  Возможность получить прирост трафика
                </p>

                <p class="tariff__price tariff__price--services">
                  От 50 000 р./мес.
                </p>
              </li>
              <li class="tariff__item tariff__item--services">
                <h3 class="tariff__name tariff__name--services">
                  Работа с 8 видео
                </h3>

                <p class="tariff__text tariff__text--services">
                  Подходит на всех этапах продвижения, включая начальный
                </p>
                <p class="tariff__text tariff__text--services">
                  Подходит на всех этапах продвижения, включая начальный
                </p>
                <p class="tariff__text tariff__text--services">
                  Возможность получить прирост трафика
                </p>


                <p class="tariff__price tariff__price--services">
                  От 50 000 р./мес.
                </p>
              </li>
            </ul>
          </div>

        </div>
      </section>

      <section class="allserv">
        <div class="allserv__wrapper">
          <h2 class="title title--allserv">Все услуги</h2>

          <div class="allserv__table">
            <ul class="allserv__head">
              <li class="allserv__head-item allserv__head-item--first">
                <h3 class="allserv__head-title">Название услуги</h3>
              </li>
              <li class="allserv__head-item allserv__head-item--center">
                <h3 class="allserv__head-title">Вид услуги</h3>
              </li>
              <li class="allserv__head-item allserv__head-item--last">
                <h3 class="allserv__head-title allserv__head-title--right">Стоимость</h3>
              </li>
            </ul>

            <?php $t = 1; ?>
            <?php while($t < 5) : ?>
            <div class="allserv__row">
              <h4 class="allserv__name">
                Создание сайтов
              </h4>

              <ul class="allserv__list">
                <li class="allserv__item">
                  <p class="allserv__type">
                    Работа с 1 видео
                  </p>

                  <p class="allserv__price">
                    20$
                  </p>
                </li>
                <li class="allserv__item">
                  <p class="allserv__type">
                    Работа с 1 видео
                  </p>

                  <p class="allserv__price">
                    20$
                  </p>
                </li>
                <li class="allserv__item">
                  <p class="allserv__type">
                    Работа с 1 видео
                  </p>

                  <p class="allserv__price">
                    20$
                  </p>
                </li>
              </ul>
            </div>
            <?php
              $t++;
              endwhile;
             ?>
          </div>
        </div>
      </section>

      <section class="stage">
        <div class="stage__wrapper">
          <header class="stage__header">
            <h2 class="stage__s-title">Этапы работы</h2>

            <div class="arrows">
              <button class="arrows__prev arrows__prev--stage" type="button" name="prev">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>

              <button class="arrows__next arrows__next--stage" type="button" name="next">
                <svg class="arrows__icon" width="73px" height="8px">
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </header>

          <div class="stage__slider swiper-container">
            <ul class="stage__list swiper-wrapper">
              <li class="stage__item swiper-item">
                <p class="stage__count">01</p>

                <h4 class="stage__title">
                  Идея и структура
                </h4>

                <p class="stage__text">
                  Разработка UX стратегии и поиск креативных концепций
                </p>
              </li>
              <li class="stage__item swiper-item">
                <p class="stage__count">02</p>

                <h4 class="stage__title">
                  Исследование
                </h4>

                <p class="stage__text">
                  Анализ конкурентов и трендов, исследование стилей
                </p>
              </li>
              <li class="stage__item swiper-item">
                <p class="stage__count">03</p>

                <h4 class="stage__title">
                  Прототип
                </h4>

                <p class="stage__text">
                  Проработка пользовательских сценариев
                </p>
              </li>
              <li class="stage__item swiper-item">
                <p class="stage__count">04</p>

                <h4 class="stage__title">
                  Контент
                </h4>

                <p class="stage__text">
                  Поиск и аккумулирование информации
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>


      <section class="discuss discuss--services">
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

      <section class="text text--half">
        <div class="text__wrapper text__wrapper--half">
          <p class="text__item text__item--half">
            С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн интернет-магазина и было решено «прокачать» сайт – несколько месяцев отвести под базовую оптимизацию проекта под англоязычную аудиторию, а также SEO-продвижение интернет-магазина в Европе, чтобы «причесать» сайт с точки зрения поисковиков и дать ему импульс развития в поисковых системах.
          </p>

          <p class="text__item text__item--half">
            С заказчиком Caviar de Beluga наша компания Webnauts.Pro работает давно, начиная с создания англоязычного сайта. Впоследствии потребовался редизайн интернет-магазина и было решено «прокачать» сайт – несколько месяцев отвести под базовую оптимизацию проекта под англоязычную аудиторию, а также SEO-продвижение интернет-магазина в Европе, чтобы «причесать» сайт с точки зрения поисковиков и дать ему импульс развития в поисковых системах.
          </p>
        </div>
      </section>
    </main>
    <section class="popup popup--video">
      <div class="popup__wrapper popup__wrapper--video">
        <div class="youtube">
          <div class="youtube__content" data-id="">
            <svg class="youtube__play" width="113px" height="113px">
              <use xlink:href="#icon-play"></use>
            </svg>
            <img class="youtube__thumb" src="img/poster-review-<?= rand(1, 2); ?>.jpg" alt="Poster">
            <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="mask mask--youtube"></div>
        </div>
      </div>
      <button class="popup__close popup__close--video" type="button" name="close">
        <span class="visually-hidden">Закрыть</span>

        <svg class="popup__icon" width="32" height="32" aria-label="Close">
          <use xlink:href="#icon-close-popup"></use>
        </svg>
      </button>
    </section>
<?php
  include("footer.php");
 ?>

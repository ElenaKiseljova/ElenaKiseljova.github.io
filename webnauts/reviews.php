<?php
  $title = "Отзывы";

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
                <span itemprop="name">Отзывы</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>

      <section class="reviews reviews--page">
        <div class="reviews__wrapper">
          <h1 class="reviews__s-title">Отзывы</h1>

          <h3 class="reviews__s-title reviews__s-title--small">Видео отзывы</h3>

          <ul class="reviews__list">
            <?php $u = 1; ?>
            <?php while ($u < 7) : ?>
            <li class="reviews__item reviews__item--reviews">
              <div class="youtube youtube--reviews">
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

            <!-- Эта карточка для примера отображения ссылки-имени, если её атрибут href - пустой.
                Ссылка не активна и к ней не применяются стили при наведении и т.п.
                Для случая, если нет страницы данного пользователя/не зарегистрирован или что-то типа такого и нет возможности перейти в его профиль, чтобы посмотреть отзыв там
              -->
            <li class="reviews__item reviews__item--reviews">
              <div class="youtube youtube--reviews">
                <div class="youtube__content" data-id="ud_refZuQoA">
                  <svg class="youtube__play" width="113px" height="113px">
                    <use xlink:href="#icon-play"></use>
                  </svg>
                  <img class="youtube__thumb" src="img/poster-review-<?= rand(1, 2); ?>.jpg" alt="Poster">
                  <iframe class="youtube__iframe" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="mask mask--youtube"></div>
              </div>

              <a class="reviews__link" href="">
                <h4 class="reviews__name">Оксана Кукленко</h4>
              </a>

              <p class="reviews__status">Юрист</p>
            </li>
          </ul>

          <button class="download download--reviews" type="button" name="more">Загрузить еще</button>

          <h3 class="reviews__s-title reviews__s-title--small">Текстовые отзывы</h3>

          <ul class="reviews__list">
            <?php $m = 1; ?>
            <?php while ($m < 7) : ?>
            <li class="reviews__item reviews__item--text">
              <header class="reviews__header reviews__header--text">
                <picture class="reviews__picture reviews__picture--avatar">
                  <source srcset="img/avatar.webp" type="image/webp">
                  <img width="100" height="100" src="img/avatar.jpg" alt="avatar">
                </picture>

                <div class="reviews__content reviews__content--text">
                  <h4 class="reviews__name">Оксана Кукленко</h4>

                  <p class="reviews__status">Юрист</p>
                </div>
              </header>

              <p class="reviews__text reviews__text--text">
                «Отличная компания. Замечательные ребята. Талантливые специалисты. Могут сделать, кажется, абсолютно все. Даже то, что ты не знаешь как объяснить. Они понимают и делают.

              </p>

              <p class="reviews__text reviews__text--text">
                Спасибо за выполненную работу.
                Надеюсь на дальнейшее сотрудничество.»
              </p>
            </li>

            <?php $m++; ?>
            <?php endwhile; ?>
          </ul>

          <button class="download download--reviews" type="button" name="more">Загрузить еще</button>

          <h3 class="reviews__s-title reviews__s-title--small">Текстовые отзывы</h3>

          <ul class="reviews__list reviews__list--firm">
            <?php $r = 1; ?>
            <?php while ($r < 18) : ?>
            <li class="reviews__item reviews__item--firm">
              <a class="reviews__zoom" data-fancybox="reviews" href="img/blank.jpg">
                <picture class="reviews__picture reviews__picture--zoom">
                  <source srcset="img/blank.webp" type="image/webp">
                  <img width="240" height="316" src="img/blank.jpg" alt="blank">
                </picture>

                <div class="mask mask--reviews">
                  <svg class="mask__icon" width="56" height="56">
                    <use xlink:href="#icon-zoom"></use>
                  </svg>
                </div>
              </a>

              <h4 class="reviews__name">«РиалМем»</h4>

              <p class="reviews__status">Обработка металла</p>
            </li>

            <?php $r++; ?>
            <?php endwhile; ?>
          </ul>

          <button class="download download--reviews" type="button" name="more">Загрузить еще</button>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>

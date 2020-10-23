<?php
  $title = "Контакты";

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
                <span itemprop="name">Контакты</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>

      <article class="article article--contacts">
        <div class="article__wrapper">
          <h1 class="article__s-title">Контакты</h1>

          <div class="map">
            <iframe class="map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2674.2326774311227!2d33.3918270160014!3d47.912535174786214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40db20bd58099e13%3A0x492a3e3c878b8d26!2z0YPQuy4g0K_RgNC-0YHQu9Cw0LLQsCDQnNGD0LTRgNC-0LPQviwgNDUsINCa0YDQuNCy0L7QuSDQoNC-0LMsINCU0L3QtdC_0YDQvtC_0LXRgtGA0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA1MDAwMA!5e0!3m2!1sru!2sua!4v1596803745782!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

          <aside class="aside aside--contacts">
            <div class="aside__item aside__item--contacts">
              <div class="project-info">
                <h4 class="project-info__type project-info__type--contacts">Телефон</h4>

                <p class="project-info__title project-info__title--phone">
                  <a href="tel:+380684923036">+38 (068) 492-30-36</a>
                </p>

                <h4 class="project-info__type project-info__type--contacts">Почта</h4>

                <p class="project-info__title project-info__title--contacts">
                  <a class="link link--contacts" href="mailto:info@webnauts.pro"> <span>info@webnauts.pro</span> </a>
                </p>

                <h4 class="project-info__type project-info__type--contacts">Соц сети</h4>

                <ul class="social social--contacts">
                  <li class="social__item">
                    <a class="social__link" href="#">
                      <svg class="social__icon social__icon--contacts" width="39" height="39" aria-describedby="telegram icon">
                        <use xlink:href="#icon-telegram"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="social__item">
                    <a class="social__link" href="#">
                      <svg class="social__icon social__icon--contacts" width="39" height="39" aria-describedby="facebook icon">
                        <use xlink:href="#icon-facebook"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="social__item">
                    <a class="social__link" href="#">
                      <svg class="social__icon social__icon--contacts" width="39" height="39" aria-describedby="instagram icon">
                        <use xlink:href="#icon-instagram"></use>
                      </svg>
                    </a>
                  </li>
                </ul>

                <h4 class="project-info__type project-info__type--contacts">Адрес офиса в Украине</h4>

                <p class="project-info__title project-info__title--contacts">
                  г. Кривой Рог, ул. Ярослава Мудрого 45, оф.4
                </p>

                <h4 class="project-info__type project-info__type--contacts">Адрес офиса в РФ</h4>

                <p class="project-info__title project-info__title--contacts">
                  г. Санкт-Петербург, ул. Туристская, д. 12, кв. 112
                </p>
              </div>
            </div>
            <div class="aside__item aside__item--contacts">
              <h2 class="aside__title aside__title--contacts">
                <span>Наши представители и партнеры также готовы встретиться с Вами в:</span>
              </h2>

              <h4 class="project-info__type project-info__type--contacts">Городах России</h4>

              <p class="project-info__title project-info__title--contacts">
                Москва, СПб, Екатеринбург, Курск, Краснодар
              </p>

              <h4 class="project-info__type project-info__type--contacts">Городах Украины</h4>

              <p class="project-info__title project-info__title--contacts">
                Киев, Днепр, Винница, Кривой Рог
              </p>

              <ul class="project-info__list">
                <li class="project-info__item">
                  <h4 class="project-info__type project-info__type--contacts">Италии</h4>

                  <p class="project-info__title project-info__title--contacts">
                    регион Марке
                  </p>
                </li>
                <li class="project-info__item">
                  <h4 class="project-info__type project-info__type--contacts">Израиле</h4>

                  <p class="project-info__title project-info__title--contacts">
                    Тель-Авив
                  </p>
                </li>
                <li class="project-info__item">
                  <h4 class="project-info__type project-info__type--contacts">Грузии</h4>

                  <p class="project-info__title project-info__title--contacts">
                    Тбилиси
                  </p>
                </li>
              </ul>
            </div>

          </aside>
        </div>
      </article>

      <section class="discuss discuss--index">
        <div class="discuss__wrapper">
          <div class="discuss__content discuss__content--index discuss__content--contacts">
            <div class="discuss__left discuss__left--contacts">
              <h2 class="discuss__question discuss__question--black discuss__question--contacts">Обратная связь</h2>
              <p class="discuss__text discuss__text--index discuss__text--contacts">
                Поделитесь мнением о нашей работе или задайте нам любой интересующий вас вопрос в поле комментарий
              </p>
            </div>

            <form class="form form--index" action="#" method="post">
              <label class="visually-hidden" for="name">Фамилия Имя Отчество</label>
              <input class="form__name" id="name" type="text" name="name" placeholder="ФИО" required>
              <p class="error">Неверный формат имени</p>

              <label class="visually-hidden" for="phone">Phone</label>
              <input class="form__phone form__phone--index" id="phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" required>
              <p class="error">Неверный формат номера</p>

              <label class="visually-hidden" for="email">Email</label>
              <input class="form__email form__email--contacts" id="email" type="email" name="email" placeholder="Ваш e-mail" required>
              <p class="error">Неверный формат почты</p>

              <textarea class="form__comment" name="comment" placeholder="Комментарий"></textarea>

              <p class="form__politics form__politics--index">
                <input class="visually-hidden" id="politics" type="checkbox" name="politics" required>
                <label class="form__label" for="politics">Я соглашаюсь с</label>
                <a class="form__link" href="politics.php" target="_blank">Политикой конфиденциальности</a>
              </p>

              <button class="form__button form__button--contacts" type="submit" name="discuss">Отправить</button>
            </form>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>

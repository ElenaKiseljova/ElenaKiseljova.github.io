<?php
  $title = "Партнёры";

  include("header.php");
 ?>

    <main class="page-main">
      <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
          <ul class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="/" itemid="/" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Главная</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a class="breadcrumbs__link" href="#" itemid="#" itemscope itemtype="http://schema.org/Thing" itemprop="item">
                <span itemprop="name">Партнёры</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </section>

      <section class="clients">
        <div class="clients__wrapper">
          <h1 class="clients__s-title">Партнёры</h1>

          <ul class="clients__list clients__list--partner">
            <?php $u = 1; ?>
            <?php while ($u < 9) : ?>
            <li class="clients__item clients__item--partner">
              <a class="clients__link clients__link--partner" href="partner.php">
                <picture class="clients__picture clients__picture--partner">
                  <source srcset="img/partner.webp" type="image/webp">
                  <img width="130" height="54" src="img/partner.png" alt="clients">
                </picture>

                <h3 class="clients__name">«Google Corp.»</h3>
                <p class="clients__status">Интернет-корпорация</p>
              </a>
            </li>

            <?php $u++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>

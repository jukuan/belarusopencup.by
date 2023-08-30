<!DOCTYPE html>
<html lang="ru_BY">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>«Кубок Мужества» &ndash; 2023</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="/css/ghost-blog.css?v=0.1.23">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="canonical" href="https://MinskOpen.by">
    <meta property="og:image" content="https://MinskOpen.by/img/og-image2023.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta http-equiv="last-modified" content="2023-08-30">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
  </head>
<body>
<section class="hero is-medium hero-welcome">
  <div class="hero-head">
    <div class="container">
      <p class="has-text-centered">
        <img src="/img/logo_mfk_en_white.png" class="top-logo -l1" alt="">
        <span> </span>
        <img src="/img/logo_BSKF_en_white.png" class="top-logo -l2" alt="">
      </p>

      <nav class="navbar" role="navigation" aria-label="main navigation">

        <div class="navbar-menu">
          <div class="navbar-center">
<!--            <img src="favicon.png" class="navbar-logo navbar-item" alt="">-->
<!--            <a class="navbar-item" href="#statements">Положение</a>-->
            <a class="navbar-item" href="#docs">Документы</a>
            <a class="navbar-item" href="#partners">Партнёры</a>
            <a class="navbar-item" href="#map">Карта проезда</a>
            <a class="navbar-item" href="#appeals">Контакты</a>
          </div>

          <div class="navbar-end">
          </div>
        </div>
      </nav>
    </div>
  </div>
</section>

<section class="s blog-posts s-poster" id="poster">
    <div class="has-text-centered">
        <img src="/img/2023/afisha2.jpg" width="100%" alt=""/>
    </div>
</section>

<section class="s s-red-info">
  <div class="container">
    <div class="columns">
      <div class="column">

        <h2 class="section-title h2 has-text-centered">
          Фото предыдущих соревнований «Кубок Мужества»
        </h2>

        <div class="images-grid">
          <?php

          $dir = __DIR__ . '/photo/2021/';
          // TODO: read all files from that dir in the loop and do output them in the following format:
          // <a href="/photo/2021/img1.JPEG" data-lightbox="image-1"><figure class="image"><img src="/photo/2021/sm/img1.JPEG" alt=""></figure></a>

          if ($handle = opendir($dir)) {
            // Loop through each file in the directory
            while (false !== ($file = readdir($handle))) {
                // Exclude directories and parent/relative paths
                if ($file != "." && $file != ".." && !is_dir($dir . $file)) {
                    // Generate the URLs for the image and thumbnail
                    $imageURL = '/photo/2021/' . $file;
                    $thumbnailURL = '/photo/2021/sm/' . $file;

                    // Output the HTML in the desired format
                    echo '<a href="' . $imageURL . '" data-lightbox="image-' . $file . '">';
                    echo '<figure class="image"><img src="' . $thumbnailURL . '" alt=""></figure>';
                    echo '</a>';
                }
            }
            // Close the directory handle
            closedir($handle);
          }

          ?>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="s blog-posts s-poster" id="poster">
  <div class="container">
    <div class="column is-12 has-text-centered">
      <h2 class="section-title h2">
        Видео-приглашения на <span class="t-name">«Кубок Мужества»</span> 2023
      </h2>
    </div>
  </div>

  <div class="container">
    <div class="columns">
      <div class="column has-text-centered">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/j3EJxQdvrK0?si=5P4jXlaU_XYFU_OW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="column has-text-centered">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/jWkipUh0amY?si=cITR6gjcuZBuUXD6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<section class="s blog-posts" id="statements">
  <div class="container">
    <!--<h2 class="section-title h2 has-text-centered">
      Документы, положение
    </h2>-->

    <div class="columns">
      <div class="column">
        <h3 class="h3 subtitle has-text-centered">
          ПОЛОЖЕНИЕ<br/>
          открытых соревнований по Шинкиокушин карате
          Minsk Open WKO «КУБОК МУЖЕСТВА
        </h3>

        <div id="pdf-doc-b1"></div>
      </div>
    </div>
  </div>
</section>


<section class="s blog-posts" id="docs">
  <div class="container">
    <h2 class="section-title h2 has-text-centered">
       Документы соревнований
    </h2>

    <div class="columns">
      <div class="column">
      <p>
        <?php 
        $dir = __DIR__ . '/doc/2023/'; 
        $list = [];
        
        if ($handle = opendir($dir)) {
          // Loop through each file in the directory
          while (false !== ($file = readdir($handle))) {
              // Exclude directories and parent/relative paths
              if ($file != "." && $file != ".." && !is_dir($dir . $file)) {
                  $list[] = $file;
              }
          }
          // Close the directory handle
          closedir($handle);

          sort($list);

          foreach ($list as $file) {
            // Generate the URL for the file
            $fileURL = '/doc/2023/' . $file;

            // Output the HTML in the desired format
            echo '<a href="' . $fileURL . '">' . $file . '</a><br/>';
          }
        }

        ?>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="s s-partners" id="partners">
  <div class="container">
    <h2 class="h2 section-title has-text-centered">
      Партнёры и спонсоры соревнований
    </h2>

      <?php

      $partners = range(1, 19);

      $partners = array_map(function($partnerKey) {
          $ext = 'png';

          if (in_array($partnerKey, [7, 8, 10, 15, 17, 19], true)) {
              $ext = 'jpg';
          }

          return $partnerKey . '.' . $ext;
      }, $partners);

      $partners = array_filter($partners, function ($fileName) {
          return file_exists(__DIR__ . '/img/partners/2023/partner'.$fileName);
      });
      $partners = array_values($partners);

      ?>
      <div class="columns">
        <?php foreach ($partners as $i => $partnerKey): ?>
              <div class="column column--partner t<?= ($i + 1) % 3 ?>">
                  <div class="partner-logo">
                      <img src="/img/partners/2023/partner<?= $partnerKey ?>" alt="">
                  </div>
              </div>
			  <?= 0 === ($i + 1) % 6 ? '</div><div class="columns">' : ''; ?>
        <?php endforeach; ?>
      </div>

  </div>
</section>

<section class="s s-map" id="map">
  <div class="container">
    <h2 class="section-title h2 has-text-centered">
      Место проведения соревнований «Кубок Мужества» 2023
    </h2>

    <div class="map-wrapper">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac8f60134019f5af6ab40111593413d2d286cd6a27cf4b98b6879889004caf2eb&amp;width=100%25&amp;height=428&amp;lang=en_FR&amp;scroll=true"></script>
    </div>

    <p class="has-text-right">
      Адрес проведения соревнований «Кубок Мужества» 2023:
      <strong>Пр. Победителей, 63</strong>. Минск, Беларусь
    </p>
  </div>
</section>

<section class="s s-docs" id="appeals">
  <div class="container">
    <h2 class="h2 section-title has-text-centered">
      Контакты
    </h2>

    <div class="columns">
      <div class="column">
        <div class="content">
          <p>
            Республика Беларусь<br/>
            г. Минск, ул. Краснозвездная, 3 пом.6Н<br/>
            <a href="mailto:minskopencup@gmail.com">minskopencup@gmail.com</a><br/>
            тел. <a href="tel:+375293761442">+375293761442</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column">
        <p>
          <strong>Осу!</strong>
          <br/>

          соревнования <a href="https://MinskOpen.by">«Кубок Мужества» 2023</a>.
        </p>
      </div>
    </div>

    <p class="has-text-centered">
      <img src="img/logo_mfk_en_black.png" class="footer-logo -l1" height="120" alt="">
      <img src="/doc/2023/logo03.jpg" class="footer-logo -l2" height="120" alt="">
      <img src="img/logo_BSKF_en_black.png" class="footer-logo -l3" height="120" alt="">
    </p>
  </div>
</footer>

<div class="modal" id="registerModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Регистрация «Кубок Мужества» 2023</p>
      <button class="delete" aria-label="close" data-bulma-modal="close"></button>
    </header>

    <section class="modal-card-body">
      <p>
        <br/>
      </p>
    </section>

    <!--<footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <button class="button" data-bulma-modal="close">Cancel</button>
    </footer>-->
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.5/pdfobject.min.js" integrity="sha512-K4UtqDEi6MR5oZo0YJieEqqsPMsrWa9rGDWMK2ygySdRQ+DtwmuBXAllehaopjKpbxrmXmeBo77vjA2ylTYhRA==" crossorigin="anonymous"></script>
<script>PDFObject.embed("/doc/2023/КубокМужества_Положение.pdf", "#pdf-doc-b1");</script>

<script>
  class BulmaModal {
    constructor(selector) {
      this.elem = document.querySelector(selector)
      this.close_data()
    }

    show() {
      this.elem.classList.toggle('is-active')
      this.on_show()
    }

    close() {
      this.elem.classList.toggle('is-active')
      this.on_close()
    }

    close_data() {
      let modalClose = this.elem.querySelectorAll("[data-bulma-modal='close'], .modal-background")
      let that = this
      modalClose.forEach(function(e) {
        e.addEventListener("click", function() {

          that.elem.classList.toggle('is-active')

          let event = new Event('modal:close')

          that.elem.dispatchEvent(event);
        })
      })
    }

    on_show() {
      let event = new Event('modal:show')

      this.elem.dispatchEvent(event);
    }

    on_close() {
      let event = new Event('modal:close')

      this.elem.dispatchEvent(event);
    }

    addEventListener(event, callback) {
      this.elem.addEventListener(event, callback)
    }
  }

  let btnRegister = document.querySelector("#btnRegister")
  let mdl = new BulmaModal("#registerModal")

  if (!!btnRegister) {
    btnRegister.addEventListener("click", function () {
      mdl.show()
    });
  }

  /*mdl.addEventListener('modal:show', function() {
    console.log("opened")
  });*/

  /*mdl.addEventListener("modal:close", function() {
    console.log("closed")
  });*/
</script>

<script>
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  })
</script>

</body>
</html>

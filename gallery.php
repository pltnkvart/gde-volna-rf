<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();
           for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
           k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        
           ym(91920017, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
           });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/91920017" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="cssbox.css" />
    <link rel="icon" href="favicon.png">
    <title>Галерея</title>
  </head>
  <body>
  <header>
      <div class="topnav" id="myTopnav">
        <div class="container header_container">
            <a href="gallery.php" class="active">ГАЛЕРЕЯ</a>
            <a href="index.html">КАРТА</a>
            <a href="spots.php">СПОТЫ</a>
            <a href="about.html">О НАС</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <img src="images/menu_icon.jpg" alt="" width="50px">
            </a>
        </div>
      </div>
    </header>
    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>

    <div class="container gallery_container">
      <section>
        <div class="header_class">
          <h1><b>Галерея</b></h1>
        </div>
        <div class="btn_main">
          <a href="image_add.html" class="btn_add">
            <b> Добавить фото/видео</b></a
          >
          <?php 
          include "functions/functions.php";
          $gallery = get_gallery();
          ?>
        </div>
      </section>
      
      <div class="row">
        <?php
          foreach($gallery as $photo): ?>
            <div class="cssbox">
              <a id="image<?php echo $photo["id"] ?>" href="#image<?php echo $photo["id"] ?>">
                <img class="cssbox_thumb" src="<?php echo $photo["gallery_link"]?>" width="400px" height="270px" />
                <span class="cssbox_full">
                  <img src="<?php echo $photo["gallery_link"] ?>" />
                </span>
              </a>
              <a class="cssbox_prev" href="#image<?php echo $photo["id"] - 1 ?>">&lt;</a>
              <a class="cssbox_next" href="#image<?php echo $photo["id"] + 1 ?>">&gt;</a>
              <a class="cssbox_close" href="#void"></a>
            </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!---------------------------------------->
    <footer>
      <style>
        footer{
          position: relative;
        }
      </style>
      <div class="container footer_container">
        <div class="words">
          <p>Email: eaa.eremeev@yandex.ru</p>
          <p>+7 (965) 285 87 81</p>
          <br />
          <p>Все права защищены</p>
        </div>
        <div class="link_wa_tg">
          <a href="https://t.me/gdevolna"><img class="img_socials" src="images/tg.png" alt="" /></a>
          <a href="https://wa.link/mvfsy4"><img class="img_socials" src="images/wa.png" alt="" /></a>
          <a href="tel:+7 965 285 87 81"
            ><img class="img_socials" src="images/phone.png" alt=""/></a>
        </div>
      </div>
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
		include "functions/functions.php";
		$regions = get_regions();
	?>
    <link href="functions/functions.php" />
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
    <link rel="icon" href="favicon.png">
    <title>Споты</title>
        <!— Yandex.Metrika counter —>
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
    ym(91761168, "init", {
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true,
    webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/91761168" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!— /Yandex.Metrika counter —>
  </head>
  <body>
  <header>
      <div class="topnav" id="myTopnav">
        <div class="container header_container">
            <a href="spots.php" class="active" >СПОТЫ</a>
			<a href="index.html" >КАРТА</a>
            <!--<a href="gallery.php">ГАЛЕРЕЯ</a>-->
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
	<div class="main">
		<!------------------------->
		<div class="container spots_container">
			<section>
				<div class="header_class">
				<h1><b>Регионы</b></h1>
				</div>
				<div class="btn_main">
				<a href="add_spot.php" class="btn_add"> <b> Добавить регион</b></a>
				</div>
			</section>
	
			<div class="row_regions">
				<?php foreach($regions as $region): ?>
					<div class="colomn_region">
							<div class="colomn_region_inner">
								<a href="spots_of_regions.php?id=<?php echo $region["id_region"] ?>">
									<h3><?php echo $region["name_region"] ?></h3>
									<hr />
									<img src="<?php echo $region["photo_region"]; ?>" width="100%">
								</a>
							</div>
					 </div>
				<?php endforeach; ?>
			</div>
		</div>
		<!------------------------>
	</div>
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

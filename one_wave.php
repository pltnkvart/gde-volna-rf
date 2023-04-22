<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
		include "functions/functions.php";
		$spots = get_wave_by_id($_GET['id']);
		$regions = get_region_by_id($spots["id_region"]);
	?>
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
    <title><?php echo $spots["title"] ?></title>
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
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>

    <script type="text/javascript">
        VK.init({apiId: 51565816, onlyWidgets: true});
    </script>
  </head>
  <body>
	<div class="wrapper">
    <header>
      <div class="topnav" id="myTopnav">
        <div class="container header_container">
            <a href="spots.php" class="active">СПОТЫ</a>
			<a href="index.html">КАРТА</a>
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

			<div class="container spots_container">
				<div class="urls">
					<h6>Регионы > <?php echo $regions['name_region'] ?> > <?php echo $spots['title'] ?></h6>
				</div> 
				<section class="spot_section">
					<div class="name_spot">
					<h4><b><?php echo $spots["title"] ?></b></h4>
					</div>
				</section>
			  <hr class="hr1" />
			  <div class="info">
					  <div class="text_info">
					  <p class="leftstr">Координаты</p>
					  <p class="rightstr"><?php echo $spots["coordinates"] ?></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Высота</p>
					  <p class="rightstr"><?php echo $spots["height"] ?></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Ширина</p>
					  <p class="rightstr"><?php echo $spots["width"] ?></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Глубина</p>
					  <p class="rightstr"><?php echo $spots["depth"] ?></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Цены</p>
					  <p class="rightstr"><?php echo $spots["price"] ?></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Дополнительная информация</p>
					  <p class="rightstr"><?php echo $spots["info"] ?></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Адрес</p>
					  <p class="rightstr"><?php echo $spots["address"] ?></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Сайт</p>
					  <p class="rightstr"><a href="<?php echo $spots["site"] ?>"><?php echo $spots["site"] ?></a></p>
					  <div style="clear: left"></div>
					  <p class="leftstr">Контакты</p>
					  <p class="rightstr"><?php echo $spots["contacts"] ?></p>
					</div>
          <style>
            a[href="<?php echo $spots["site"] ?>"] {
              color: black;
              font-weight: bold;
            }
          </style>
					<div class="media_info">
						<img width=100% src="<?php echo $spots["photos"]; ?>">
						<video id="video" width=100% controls>
 							<source src="<?php echo $spots["video"] ?>">
						</video>
						<script>
							if("<?php echo $spots["video"] ?>" == ""){
								document.getElementById("video").style.display = "none";
							}
						</script>
						<iframe class="iframe_one" src="<?php echo $spots["map"] ?>"
							allowfullscreen=""
							tabindex="0"
							width="100%">
						</iframe>
						<iframe class="iframe_one" src="<?php echo $spots["winduty"] ?>"
							allowfullscreen=""
							tabindex="0"
							width="100%">
						</iframe>
						<div style="width:400px;background:#fff">
						    <script type="text/javascript" src="<?php echo $spots["MSW"] ?>">
						    </script><p><div style="font-family:Arial, Helvetica, sans-serif;text-align:center;font-size:10px;color:#000;height:25px;">
						</div></p></div>
					</div>
                    
			 </div>
			 <div id="vk_comments"></div>
                    <script type="text/javascript">
                        VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
                    </script>
			</div>
		</div>
	</div>
	<footer>
		<div class="container footer_container">
        <div class="words">
          <p>Email: eaa.eremeev@yandex.ru</p>
          <p>+7 (965) 285 87 81</p>
          <br />
          <p>Все права защищены</p>
        </div>
        <div class="link_wa_tg">
          <a href="https://vk.com/gdevolna"><img class="img_socials" src="images/vk.png" alt="" /></a>
          <a href="https://t.me/Sanyaveloman"><img class="img_socials" src="images/tg.png" alt="" /></a>
          <a href="https://wa.link/mvfsy4"><img class="img_socials" src="images/wa.png" alt="" /></a>
          <a href="tel:+7 965 285 87 81"
            ><img class="img_socials" src="images/phone.png" alt=""/></a>
        </div>
      </div>
		</footer>
	</div>
  </body>
</html>

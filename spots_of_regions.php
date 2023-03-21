<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
		include "functions/functions.php";
		$spots = getSpots($_GET['id']);
		$regions = get_region_by_id($_GET['id']);
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
    <link rel="icon" href="favicon.png">
    <title><?php echo $regions["name_region"]?></title>
	<style>
		* {
		  overflow: auto;
		}
	  </style>
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
  <div class="wrapper">
  <div class="container spots_container">
		<div class="urls">
			<h6>Регионы > <?php echo $regions["name_region"]?></h6>
		</div> 
		<section class="spot_section">
			<div class="name_spot">
				<h4><b><?php echo $regions["name_region"]  ?></b></h4>
			</div>
		<div class="btn_main">
			<a href="add_spot.php" class="btn_add"><b>Добавить спот</b></a>
		</div>
		</section>
		<!------------>
		<div class="row_regions">
			<?php
				foreach($spots as $spot): ?>
					<div class="colomn_spots">
						<div class="colomn_spots_inner">
							<a class = "c1" href="one_spot.php?id=<?php echo $spot["id"] ?>">
								<?php echo $spot["title"]; ?>
								<img width=100% src="<?php echo $spot["photos"]; ?>">
							</a>
						</div>
					</div>
			<?php endforeach; ?>
					
		</div>
	</div>
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

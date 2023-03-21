<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<link rel="icon" href="favicon.png">
	<title>Добавить спот/изменить информацию</title>
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
	<div class="container form_container2">
      <h3>Добавить спот / изменить информацию</h3>
      <div class="request2">
		<form method="post" id="FormAddGallery" action="functions/telegram_spot.php" enctype="multipart/form-data">
			<h2>Информация о споте</h2>
			<div class="leftstr1">
				<div class="txt_field">
					<label>Название спота<input type="text" name="name" required /> </label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Координаты<input type="text" name="coordinates"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Тип<input type="text" name="type"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Сложность<input type="text" name="complexity" /></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Рабочий ветер<input type="text" name="direction_wind"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Направление свелла<input type="text" name="direction_svell"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Направление волны<input type="text" name="direction_wave"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Дно<input type="text" name="bottom"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Лучший сезон<input type="text" name="best_season"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Подъезд к берегу<input type="text" name="entrance_coast"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Расстояние<input type="text" name="distance"/></label>
					<span></span>
				  </div>
				  <div class="txt_field">
					<label>Легко найти?<input type="text" name="easy_to_find"/></label>
					<span></span>
				  </div>
				</div>
				<div class="leftstr1">
					<div class="left">
						<div class="textarea">
							<label>Опасности<textarea id="msg" type="text" name="danger"></textarea></label>
							<span></span>
						</div>
						<div class="textarea">
							<label>Инфраструктура<textarea id="msg" type="text" name="infrastructure"></textarea></label>
							<span></span>
						</div>
						<div class="textarea_last">
							<label>Доп. информация<textarea id="msg" type="text" name="add_information"></textarea></label>
							<span></span>
						</div>
					</div>
				</div>
			<div class="contacts">
				<h2>Контактные данные</h2>
				<div class="txt_field">
					<label>Имя <input type="text" name="name_person" required /></label>
					<span></span>
				</div>
				<div class="txt_field">
					<label>Telegram/VK/WhatsApp <input type="text" name="contacts_person" required /></label>
					<span></span>
				</div>
				<h2>Прикрепить фото/видео</h2>
				<p>
					<input type="file" name="fileImg" accept="image/*,video/*" />
				</p>
				<input type="submit" value="Отправить" />
			</div>
        </form>
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
          <a href="https://t.me/gdevolna"><img class="img_socials" src="images/tg.png" alt="" /></a>
          <a href="https://wa.link/mvfsy4"><img class="img_socials" src="images/wa.png" alt="" /></a>
          <a href="tel:+7 965 285 87 81"
            ><img class="img_socials" src="images/phone.png" alt=""/></a>
        </div>
      </div>
      </div>
    </footer>
</body>
</html>
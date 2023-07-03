<!DOCTYPE html>
<html>

<head>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
			k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(94139007, "init", {
			     clickmap:true,
			     trackLinks:true,
			     accurateTrackBounce:true
			});
	</script> <noscript>
			<div><img src="https://mc.yandex.ru/watch/94139007" style="position:absolute; left:-9999px;" alt="" /></div>
		</noscript>
	<!-- /Yandex.Metrika counter -->
	<title>Аэросъемка134</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<meta charset="utf-8" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
	<meta name="keywords" content="Квадрокоптер, Дрон, Квадрокоптер Волгоград, съёмки с воздуха в Волгограде, Фото с воздуха" />
	<meta name="description" content="Квадрокоптер, Дрон, Квадрокоптер Волгоград, съёмки с воздуха в Волгограде, Фото с воздуха" />
	<meta name="robots" content="index, follow" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.poptrox-2.2.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script> <noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript> </head>
<?php
         $name = $_POST['name'];
         $email = $_POST['email'];
         $text = $_POST['text'];
          $name = htmlspecialchars($name);
         $email = htmlspecialchars($email);
         $text = htmlspecialchars($text);
         $name = urldecode($name);
         $email = urldecode($email);
         $text =  urldecode($text);
         $name = trim($name);
         $email = trim($email);
         $text = trim($text);
         //echo $fio;
         //echo "<br>";
         //echo $email;
         if (mail("sopnev@mail.ru", "Заказ с сайта", "ФИО:".$name.". Сообщение: .$text  E-mail: ".$email ,"From: aero134@self.ru , \r\n")   )
          {     echo '		<section id="banner">
			<header>
				<h2></h2>
			</header>
			<p>Сообщение успешно отравлено!</p>
			<footer><a href="https://aero134.ru"first" class="button style2 scrolly">Вернуться на главную!</a></footer>
		</section>'; 
         } else {
             echo "при отправке сообщения возникли ошибки";
         }?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>ООО "Амиго"</title>
   <link href="Z:\home\amigo.ru\www\css\style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
      <div id="logo">
         <a href="index.php" title="Перейти на главную"><span>А</span>миго</a>
      </div>
      <div id="menuHead">
         <a href="Z:\home\amigo.ru\www\about.php"><div style="margin-right: 5%">О нас</div></a><a href="Z:\home\amigo.ru\www\feedback.php"><div>Обратная связь</div></a>
      </div>
      <div id="regAuth">
         <a href="/reg.php">Регистрация</a> | <a href="/auth.php">Авторизация</a>
      </div>
   </header>    
      <div id="wrapper">
         <div id="leftCol">
            <div id="bigArticle">
               <img src="Z:\home\amigo.ru\www\img\article1.jpg" alt="Статья 1" title="Статья 1">
               <h2>Статья 1</h2>
               <p>текс ттекстте ксттексттек сттекстт екстт ексттек сттекст текс ттекс тте ксттек стте кст текст тексттек стте кстт ексттек сттекс ттекст</p>
               <a href="/article.php">
               <div class="more">Далее</div>
               </a>
            </div>
            <div class="clear"><br></div>
            <div class="article">
               <img src="Z:\home\amigo.ru\www\img\article2.jpg" alt="Статья 2" title="Статья 2">
               <h2>Статья 2</h2>
               <p>текстт ексттекст текстте кстт екстт екстте кстте кст текс ттекс ттекс ттек сттек ст текст текст текст тексттекс тт екстт ексттекс тте кст</p>
               <a href="/article.php">
               <div class="more">Далее</div>
               </a>
            </div>
            <div class="article">
               <img src="Z:\home\amigo.ru\www\img\article3.jpg" alt="Статья 3" title="Статья 3">
               <h2>Статья 3</h2>
               <p>те кстте кстте ксттек сттекс тт екстт екстте кстт екстте кстте ксттекс ттекст текст тек стт екст текст тек сттек сттекс ттекс ттек стт екст</p>
               <a href="/article.php">
               <div class="more">Далее</div>
               </a>
            </div>
         </div>
         <div id="rightCol">
            <div class="banner">
               <img src="Z:\home\amigo.ru\www\img\banner1.jpg" alt="Баннер 1" title="Баннер 1">
            </div>
            <div class="banner">
               <img src="Z:\home\amigo.ru\www\img\banner2.jpg" alt="Баннер 2" title="Баннер 2">
            </div>
         </div>
      </div>   
   
<footer>
      <div id="social">
         <a href="http://vk.com" title="Группа в вк" target="_blank"><img src="Z:\home\amigo.ru\www\img\vk.png" alt="vk" title="vk"></a>
         <a href="http://facebook.com" title="Группа в Facebook" target="_blank"><img src="Z:\home\amigo.ru\www\img\facebook.png" alt="Facebook" title="Facebook"></a>
         <a href="http://twitter.com" title="Группа в Twitter" target="_blank"><img src="Z:\home\amigo.ru\www\img\twitter.png" alt="Twitter" title="Twitter"></a>
      </div>
      <div id="rigths">       
     <!--Жирный шрифт--> <b><font size="-1">Все права защищены &copy;</font></b> <!--Размер шрифта--><b><font size="-2"><a id="dateFolder" style="font-size:120%; font-weight:bold;"></a></font></b>

<script LANGUAGE="JavaScript">
temp_date = new Date();
day = temp_date.getDate();
month = temp_date.getMonth() + 1;
year = temp_date.getFullYear();
if (day < 10) {
day = "0" + day;
}
if (month <10) {
month = "0" + month;
}
document.getElementById('dateFolder').innerHTML = day + "." + month + "." + year;
</SCRIPT>
      </div>
</footer>
</body>
</html>
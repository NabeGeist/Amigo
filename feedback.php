<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>ООО "Амиго"</title>
   <link href="Z:\home\amigo.ru\www\css\style.css" rel="stylesheet" type="text/css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   <script>
      $(document).ready (function () {$("#done").click (function () {
                                                                     $("#messageShow").hide ();
                                                                     var name = $("#name").val ();
                                                                     var email = $("#email").val ();
                                                                     var subject = $("#subject").val ();
                                                                     var message = $("#message").val ();
                                                                     var fail = "";
                                                                     if (name.length < 3) fail = "Имя не меньше 3-х символов";
                                                                     else if (email.split ("@").length - 1 == 0 || email.split (".").length - 1 == 0)
                                                                        fail = "Вы ввели некоректный email";
                                                                     else if (subject.length < 5)
                                                                        fail = "Тема сообщения не менее 5-ти символов";
                                                                     else if (message.length < 20)
                                                                        fail = "Тема сообщения не менее 20-ти символов";
                                                                     if (fail != "") {
                                                                                      $("#messageShow").html (fail + "<div class='clear'><br></div>")
                                                                                      $("#messageShow").show ();
                                                                                      return false;
                                                                                     }
                                                                     $.ajax ({
                                                                              url: 'Z:\home\amigo.ru\www\ajax\feedback.php',
                                                                              type: "POST",
                                                                              cache: false,
                                                                              data: {"name": name, "email": email, "subject": subject, "message": message},
                                                                              dataType: "html",
                                                                              success: function (data) {
                                                                                                        $("#messageShow").html (fail + "<div class='clear'><br></div>")
                                                                                                        $("#messageShow").show ();
                                                                                                       }
                                                                             });
                                                                    });
                                     });
   </script>
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
            <input type+"text" placeholder="Имя" id="name" name="name"><br />
            <input type+"text" placeholder="Email" id="email" name="email"><br />
            <input type+"text" placeholder="Тема сообщения" id="subject" name="subject"><br />
            <textarea name="message"  id="message" placeholder="Введите сюда ваше сообщение"></textarea><br />
            <div id="messageShow"></div>
            <input type="button" name="done" id="done" value="Отправить">
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
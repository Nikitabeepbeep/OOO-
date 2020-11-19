<!DOCTYPE html>
<html>
 <head>
	 <?php
	  $tittle = "Написать директору";
	 require_once "blocks/head.php" ?>
	 <link rel-"stylesheet" href="css/style.css">
 </head>
 <body>
<?php require_once "blocks/header.php" ?>
<!--	 СООБЩЕНИЕ ДЛЯ ЧЕЛОЕКА, КОТОРЫЙ ОТПРАВЛЯЕТ СООБЩЕНИЕ-->
	 <div class="message" align="center">
	 Мы стремимся быть лучшими для наших клиентов!</p>
	<p>Если у вас возникли преложения, пожелания, или претензии ,пожалуйста напишите мне!</p>
	<p>Обещаю, это не останется без внимания. Нам важно ваше мнение!</p>
		<p>С уважением,
		 Директор ООО "ВЕЛЕС" Васильчугов Андрей Юрьевич!</p> 
	 </p>
</div>
<!--Отправка сообщения на почту-->
 <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready (function (){
 $("#done").click (function (){
  $('#messageShow').hide ();
 var name= $("#name").val ();
 var email= $("#email").val ();
 var subject= $("#subject").val ();
 var message= $("#message").val ();
 var fail ="";
 
  if (name.length<3) fail="Ваше имя должно быть больше трёх символов";
 else if (email.split('@').length-1==0 ||email.split('.').length-1==0)
  fail="Вы ввели некорретный e-mail";
 else if (subject.length <5)
  fail="Тема вашего сообщения должна быть не менее трёх символов";
 else if (message.length <20)
  fail="В вашем сообщении должно быть не менее 20 символов";
 
 if (fail !="") {
  $('#messageShow').html(fail+"<div class='clear'><br></div>");
  $('#messageShow').show ();
  return false;
 }
  $.ajax({
      url: '/ajax/feedbask.php',
      type: 'POST',
      cache: false,
      data: {'name': name, 'email': email, 'subject': subject, 'message': message},
      dataType: 'html',
      success: function (data) {
    
       $('#messageShow').html (data + "<div class='clear'><br></div>");
       $('#messageShow').show();
   
   }
  }); 
 });
});
</script>
<div id="wrapper">
					<div id="leftCol">
<form name="feedbask" action="ajax/maps.php" method="post">
  <input type="text" placeholder="Имя"id="name" name="name"/><br/>
  <input type="text" placeholder="email"id="email" name="email"/><br/>
  <input type="text" placeholder="Тема сообщения"id="subject" name="subject"/>
  <textarea name="message" id="message"placeholder="Введите ваше сообщение"></textarea><br/>
  <div id="messageShow"></div>
  <input type="submit"name="done"id="done" value="Отправить"/><br/>
	</div>
 </form>
		 </div>
	 <?php require_once "blocks/footer.php" ?>
 </body>
</html>
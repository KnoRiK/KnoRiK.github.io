<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $object = mysqli_real_escape_string($conn, $_POST['object']);


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type, object) VALUES('$name','$email','$pass','$user_type', '$object')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>регистрация</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Имя">
      <input type="email" name="email" required placeholder="Почта">
      <input type="password" name="password" required placeholder="Пароль">
      <input type="password" name="cpassword" required placeholder="Повторите пароль">
      <select name="user_type">
         <option value="user">Студент</option>
         <option value="admin">Преподователь</option>
      </select>
      <select name="object">
         <option value="Проектирование">Проектирование</option>
         <option value="Веб. дизайн">Веб. дизайн</option>
         <option value="Английский язык">Английский язык</option>
         <option value="Компьютерные сети">Компьютерные сети</option>
         <option value="Разработка кода">Разработка кода</option>
         <option value="Тестирование ИС">Тестирование ИС</option>
         <option value="Веб. дизайн">Веб. дизайн</option>
         <option value="Внедрение">Внедрение</option>
      </select>
      <input type="submit" name="submit" value="Зарегистрироваться" class="form-btn">
      <p>У вас уже есть аккаунт? <a href="login_form.php">Авторизоваться</a></p>
   </form>

</div>

</body>
</html>
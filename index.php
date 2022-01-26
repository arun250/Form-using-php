<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>
<script>
$(document).ready(function(){
$("form").submit(function(event){
    event.preventDefault();
var name = $("#name").val();
var email = $("#email").val();
var gender = $("#gender").val();
var message = $("#message").val();
var submit = $("#submit").val();
$(".form-message").load("mail.php", {
 name : name,
 email : email,
 gender: gender,
 message : message,
 submit: submit
});
})
});
</script>
</head>
<body>
    <form action = "mail.php" method="post">
    <input id="name" type = "text" name="name" placeholder="full name"><br>
    <input id="email"type = "text" name="email" placeholder="E-mail"><br>
    <select id="gender"name = "gender">
    <option value="male"> Male</option>
    <option value="female"> Female</option>
    </select><br>
    <textarea id="message" name="message" placeholder="Message"></textarea><br>
    <button id="submit" type="submit" name="submit"> Send</button>
    <p class= "form-message"></p>
</form>




</body>
</html>
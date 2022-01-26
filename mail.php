<?php
include_once "dbh.php";
if(isset($_POST["submit"])){
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$message = $_POST['message'];
$errorEmpty = false;
$errorEmail = false;
if (empty($name)||empty($message)||empty($email))
{
echo "<span class='field-error'>Fill in the fields</span>";
$errorEmpty = true;
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "<span class='field-error'>Write a vaild e-mail</span>";
$errorEmail = true;
}
else{
echo "<span class='field-success'>Sucess</span>";
$sql = "INSERT INTO users (name,email,gener,message) VALUES('$name','$email','$gender','$message')";
mysqli_query($conn,$sql);
}
}
else{
    echo " There was an error";
}
?>


 <script>
   
   $("#name,#message, #email,#gender").removeClass("error");

    var errorEmpty = "<?php echo $errorEmpty;?>";
    var errorEmail = "<?php echo $errorEmail;?>";
    if (errorEmpty == true){
        $("#name, #message,#email" ).addClass("error");
    }
    if (errorEmail == true){
        $("#email").addClass("error");
    }

    if (errorEmpty == false && errorEmail == false){
        $("#name,#message, #email").val("");
    }


</script> 
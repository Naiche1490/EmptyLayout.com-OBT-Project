<!DOCTYPE html>
<html>

<head>
 <link rel="stylesheet" href="registration.css">
 <title>Clean Lab Empty layout Registration</title>
  <h1>Login to Emptylayout.com</h1>
  </head>
  <body>

<form name="frmRegistration" method="post" action="Login">
  <table border="0" width="500" align="center" class="demo-table">
    <?php if(!empty($success_message)) { ?> 
    <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
    <?php } ?>
    <?php if(!empty($error_message)) { ?> 
    <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
    <?php } ?>
   <tr>
      <td>Email</td>
      <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
    </tr> 
    <tr>
      <td>Password</td>
      <td><input type="password" class="demoInputBox" name="password" value=""></td>
    </tr>
    <tr>
      <td colspan=2>
      <input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="submit" class="btnRegister"></td>
    </tr>
  </table>
</form>
<?php /* Form Required Field Validation */
foreach($_POST as $key=>$value) {
  if(empty($_POST[$key])) {
  $error_message = "All Fields are required";
  break;
  }
}
/* Password Matching Validation */
if($_POST['password'] != $_POST['confirm_password']){ 
$error_message = 'Passwords should be same<br>'; 
}

/* Email Validation */
if(!isset($error_message)) {
  if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
  $error_message = "Invalid Email Address";
  }
}
?>
  </div>
</div> 
</body>
</html>
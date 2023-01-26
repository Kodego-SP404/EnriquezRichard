<?php
session_start();
if(isset($_POST['submit'])){

  
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = $_POST['password'];
  // $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

 if($username == 'ryan' && $password == 'password'){
  //Set Session variable
  $_SESSION['username'] = $username;

  //Redirect user to another page
  header('Location: /enriquez/phpdemo/extras/dashboard.php');
 } else{
echo 'Incorrect username or password';
 }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<div>
  <label for="username">Username:</label>
  <input type="text" name="username">
</div>
<br>
<div>
  <label for="password">Password:</label>
  <input type="text" name="password">
</div>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
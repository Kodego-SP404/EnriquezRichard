<?php
if(isset($_POST['submit'])){
  echo $_POST['name'];
  echo $_POST ['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Ryan&age=40">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label for="name">Name:</label>
  <input type="text" name="name">
</div>
<br>
<div>
  <label for="age">Age:</label>
  <input type="text" name="age">
</div>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
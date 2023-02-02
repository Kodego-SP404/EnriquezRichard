<?php 
session_start();

// dbconnect
include("./conn.php");

// insert Data 
  if(isset($_POST['submit'])){  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];

   $sql = "INSERT INTO feedback (name, email, body) VALUES (:name, :email, :body)";
    $sql_run = $conn->prepare($sql);

    $data =[
      ':name' => $name,
     ':email' =>$email,
     ':body' =>$body,
   ];
   $sql_execute = $sql_run->execute($data);

   header('Location: /enriquez/php-feedback-activity/feedback.php');
   }
  $conn = null;

?>

<?php include ("./include/header.php");?>

    <main>
      <div class="container d-flex flex-column align-items-center">
        <img
          src="./img/logo.png"
          class="w-25 mb-3"
          alt=""
        />
        <h2>Feedback</h2>
        <p class="lead text-center">Leave feedback for Kodego SP404</p>
        <form action="" method="POST" class="mt-4 w-75">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Enter your name"
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Feedback</label>
            <textarea
              class="form-control"
              id="body"
              name="body"
              placeholder="Enter your feedback"
              required
            ></textarea>
          </div>
          <div class="mb-3">
            <a href="/feedback.php">
            <input 
              type="submit"
              name="submit"
              value="Send"
              class="btn btn-dark w-100"
              required
            />
          </a>
          </div>
        </form>
      </div>
    </main>

    <?php include ("./include/footer.php")?>
  
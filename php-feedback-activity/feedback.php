<?php 
//dbconnect
  include("./conn.php");
  $sql = 'SELECT * FROM feedback';

  // looping >>>>> other way
  // $select = $conn->prepare ("SELECT * FROM feedback");
  // $select->execute();
  $select = $conn->query($sql);
  $result = $select->fetchAll();
?>

<?php include ("./include/header.php");?>
    <main>
      <div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>
       
        <!-- if pag walang laman ang data table -->
        <!-- <?php if(empty($result)){
          echo "<div class=\"card my-3\">
                  <div class=\"card-body text-center\">
                      <p>No Feedback</p>
                  </div>
                </div>";
        }
        ?> -->

        <?php if(empty($result)){ ?>
          <div class="card my-3">
                  <div class="card-body text-center">
                      <p>No Feedback</p>
                  </div>
                </div>
        <?php } ?>
        
        <!-- looping ng mga laman sa data table ///// other way>>>> foreach($result as $row)-->
        <?php foreach($conn->query($sql) as $row) { ?> 
        <div class="card my-3">
          <div class="card-body text-center">
            <?php echo $row['body'];echo "<br>";
                  echo $row['name'];echo (" ");
                  echo $row['email'];echo (" ");
                  echo $row['date'];?>
          </div>
        </div>
        <?php } ?>
        
      </div>
    </main>

    <?php include ("./include/footer.php")?>
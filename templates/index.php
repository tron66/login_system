<?php
include_once 'header.php'; //links to the header.php file
 ?>
    <section class="welcome-page">
      <div class="wrapper">
        <img src="img/got.jpg" alt=""; style="align:center; width:1000px; margin-top:60px">
          <?php
          if (isset($_SESSION['u_id'])) { //shows that we are logged in
            header("Location: tv-shows.php");
          //echo "You are logged in";
          }
           ?>
      </div>
    </section>
<?php
include_once 'footer.php'; //links to the footer.php file
 ?>

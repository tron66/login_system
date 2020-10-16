<?php
include_once 'header.php';
 ?>
    <section class="signup-page">
      <div class="wrapper">
        <h2>Signup</h2>
        <form class="signup-form" action="includes/signup_db.php" method="POST">
          <!--erro handlers-->
          <?php
          if (isset($_GET['first'])) {
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
          }else {
            echo '<input type="text" name="first" placeholder="Firstname">';
          }
          if (isset($_GET['last'])) {
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
          }else {
            echo '<input type="text" name="last" placeholder="Lastname">';
          }
           ?>
          <input type="email" name="email" placeholder="Email">
          <?php
          if (isset($_GET['uid'])) {
            $uid = $_GET['uid'];
            echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
          }else {
            echo '<input type="text" name="uid" placeholder="Username">';
          }
           ?>

          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="submit">Signup</button>
        </form>
        <?php
        /*
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";//gets the entire url
        //check if we have a string inside the url
        if (strpos($fullurl, "signup=empty") == true) {
          echo "<p class='error'>Fill in all fields</p>";
          exit();
        }elseif (strpos($fullurl, "signup=invalid") == true) {
          echo "<p class='error'>Invalid Characters</p>";
          exit();
        }elseif (strpos($fullurl, "signup=email") == true) {
          echo "<p class='error'>Invalid Email</p>";
          exit();
        }elseif (strpos($fullurl, "signup=usertaken") == true) {
          echo "<p class='error'>Username taken</p>";
          exit();
        }elseif (strpos($fullurl, "signup=success") == true) {
          echo "<p class='success'>You have been singed up</p>";
          exit();
        }
        */

        if (!isset($_GET['signup'])) {
          exit();
        }else {
          $signupCheck = $_GET['signup'];
          if ($signupCheck == "empty") {
            echo "<p class='error'>Please fill in all fields</p>";
            exit();
          }elseif ($signupCheck == "invalid") {
            echo "<p class='error'>Invalid Characters</p>";
            exit();
          }elseif ($signupCheck == "email") {
            echo "<p class='error'>Invalid Email</p>";
            exit();
          }elseif ($signupCheck == "usertaken") {
            echo "<p class='error'>Username taken</p>";
            exit();
          }elseif ($signupCheck == "success") {
            echo "<p class='success'>You have been singed up</p>";
            exit();
          }
        }

         ?>
      </div>
    </section>
<?php
include_once 'footer.php';
 ?>

<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="css/resetstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CINEMATRIX</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="btn-toggle-nav" onclick="toggleNav()">Click<br>Me
        </div>
        <aside class="nav-sidebar">
      <ul>
        <li> <span>Projects</span> </li>
        <li> <a href="#">Making a website</a> </li>
        <li> <a href="#">creating a video</a> </li>
        <li> <a href="#">optimizing a website</a> </li>
        <li> <a href="#">upgrading reform work</a> </li>
        <li> <a href="#">databse management</a> </li>
      </ul>
    </aside>
        <p>pCINEMA</p>
          <ul>
            <li> <a href="index.php" class="home">HOME</a> </li>
            <li> <a href="#">MOVIES</a>
              <ul>
                <li> <a href="#">Action</a> </li>
                <li> <a href="#">Comedy</a> </li>
                <li> <a href="#">Thriller</a> </li>
                <li> <a href="#">Horror</a> </li>
              </ul>
             </li>
            <li> <a href="tv-shows.php">TV SHOWS</a>
              <ul>
                <li> <a href="#">Sci Fi</a> </li>
                <li> <a href="#">Mystery</a> </li>
              </ul>
             </li>
             <li> <a href="gallery.php">gallery</a> </li>
            <li> <a href="contact.php">CONTACT</a> </li>
            <li> <a href="#">ABOUT</a> </li>
          </ul>
        <div class="login">
          <?php
          //code for logout
          if (isset($_SESSION['u_id'])) {
            echo '<form class="" action="includes/logout_db.php" method="POST">
              <button type="submit" name="submit">Logout</button>
            </form>';
          }else {
            echo '<form class="" action="includes/login_db.php" method="POST">
                  <input type="text" name="uid" placeholder="Username/Email">
                  <input type="password" name="pwd" placeholder="Password">
                  <button type="submit" name="submit">LOGIN</button>
                  </form>
                  <a href="signup.php">Signup</a>';
          }
           ?>
           </div>
      </nav>
          <p>kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkllllllllllllllllllllllllllllllllllllllllllll</p>
    </header>

<?php
include_once 'header.php'; //links to the header.php file
 ?>
 <section>
   <div class="form">
     <div class="wrapper">
       <form class="contact-form" action="form.php" method="GET">
         <input type="text" name="firstname" placeholder="First name">
         <br>
         <input type="text" name="lastname" placeholder="Last name">
         <br>
         <input type="email" name="email" placeholder="Email">
         <br>
         <input type="radio" name="gender" value="Male"><p>Male</p>
         <br>
         <input type="radio" name="gender" value="Female"><p>Female</p>
         <br>
         <textarea name="message" rows="8" cols="80" placeholder="Message"></textarea>
         <br>
         <button type="submit" name="submit">submit</button>
       </form>
     </div>
   </div>
 </section>
 <?php
 include_once 'footer.php'; //links to the footer.php file
  ?>

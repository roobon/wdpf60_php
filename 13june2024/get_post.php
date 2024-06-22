<a href="get_post.php?name=Masud&email=masud@gmail.com&address=Mirpur">Click Here</a><br>
<?php 
   if(isset($_REQUEST["subscribe"])){   
       echo $_REQUEST['email'];
       echo '<br>';
       echo $_REQUEST['pswd']; 
   }
?>
<form action="" method="post">
 Email address:<br />
 <input type="text" name="email" value="" /><br>
  Password:<br />
 <input type="password" name="pswd" value="" /><br />
 <input type="submit" name="subscribe" value="subscribe!" />
 <br />
 </form>
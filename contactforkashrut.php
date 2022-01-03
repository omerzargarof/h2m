﻿﻿<?php

if($_POST["submit"]) {
    $recipient="halacha.to.m@gmail.com";
    $subject="Form to HTM: kashrut";
    $sender=$_POST["sender"];
    $senderPhone=$_POST["senderPhone"]; $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nPhone: $senderPhone\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p><font color=green>תודה! הודעתך נקלטה במערכת<br> נחזור אליך בהקדם</font> <a target=_blank href=index.html>חזור לדף הבית</a></p>";
}

?>

<!DOCTYPE html>
<html lang="he">
  
<link rel="stylesheet" href="css/blueprint/plugins/rtl/screen.css" type="text/css" media="screen, projection">	
  
<head dir="rtl">
    
<!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    
<!-- Basic Page Needs
    ================================================== -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>מכון הלכה למעשה : צור קשר</title>

    

<!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
<!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

    
<!-- CSS
    ================================================== -->       
    
<!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
<!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    
<!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">      
    
<!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    
<!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='css/default-skin.css'>    

    
<!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    
<!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
<![endif]--> 
  </head>
  <body dir="rtl">    



    

<!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    
<!-- END PRELOADER -->

    

<!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><img width="80" height="80" src="images/favicon.png"></a>
    
<!-- END SCROLL TOP BUTTON -->

    

<!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      
<!-- BEGIN MENU -->
<!--
      <div class="menu_area">
    
      </div>

      
<!-- END MENU -->    
    </header>
    
<!--=========== END HEADER SECTION ================-->      
  
            <center> 
 <div class="section-heading">
              <h3><b> <p> מלא את פרטיך ונחזור אליך בהקדם</p></b>  </h3> 
                <div class="line"></div> <a href="http://halacha-to-m.co.il/contactforkashrut.php"><input type="submit" class="wp-form-control wpcf7-text" value="נקה עמוד"></a>
              </div>
</center>

    <form method="post" action="contactforkashrut.php">
                
<input name="sender" type="text" class="wp-form-control wpcf7-text" placeholder="שם מלא*">
<br>
        
<input name="senderEmail" type="mail" class="wp-form-control wpcf7-email" placeholder="דואר אלקטרוני (מייל)">

<br>
        
<input name="senderPhone" type="tel" class="wp-form-control wpcf7-email" placeholder=" טלפון* ">
אנא הקפד למלא את השדות  עם הכוכבית*
<br>
        
<textarea rows="5" cols="10" name="message" class="wp-form-control wpcf7-text" placeholder="הודעה: מתעניין בעוד קו"></textarea> 
<left><?=$thankYou ?></left>
 <div class="section-heading"><div class="line"></div></div>       
<font color="navy" size="5"><i>
<input type="submit" name="submit" class="wpcf7-submit button--itzel" value="שלח!"> </i>



</font>
   </form>

        <a target="_blank" href="index.html">  <img width="100" height="100" src="images/favicon.png"> </a>
    
            <div class="social-share">               
         
<ul>
                 
<li><a href="https://www.facebook.com/הלכה-למעשה-1614679672145402/"><span class="fa fa-facebook"></span></a></li>
                 
<li><a href="https://twitter.com/halacha_m"><span class="fa fa-twitter"></span></a></li>
                 
<li><a href="https://plus.google.com/b/107347213897992057082/107347213897992057082/posts"><span class="fa fa-google-plus"></span></a></li>
               
</ul>

             </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    
<!--=========== End Footer SECTION ================-->

    

<!-- jQuery Library  -->
    <script src="js/jquery.js"></script>    
    
<!-- Bootstrap default js -->
    <script src="js/bootstrap.min.js"></script>
    
<!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>   
    
<!-- counter -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
<!-- Doctors hover effect -->
    <script src="js/snap.svg-min.js"></script>
    <script src="js/hovers.js"></script>
    
<!-- Photo Swipe Gallery Slider -->
    <script src='js/photoswipe.min.js'></script>
    <script src='js/photoswipe-ui-default.min.js'></script>    
    <script src="js/photoswipe-gallery.js"></script>

    
<!-- Custom JS -->
    <script src="js/custom.js"></script>
     
  </body>
</html>
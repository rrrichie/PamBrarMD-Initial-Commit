<?php
$title = '';
$kw = '';
$desc = '';
require_once('inc/header.php');
 
?>

<div class="row-fluid">
<div class="span1 col"></div>
<div class="span10 body-width">

<div class="row-fluid">
<div class="span6 services-pad josefin">
<h3>Contact</h3>



<form method="post" action="process.php?frm=contact" id="contact">
<label>Name:</label>
<input type="text" name="name" required/>

<label>Email:</label>
<input type="text" name="email" required/>

<label>Phone:</label>
<input type="text" name="phone" required/>

<label>Message:</label>
<textarea name="message" required></textarea>
 
 
  
<div id="display_captcha" align="center">   
     
      <?php require_once('recaptchalib.php');
  $publickey = "6Ldxoe8SAAAAADc6MJghNXmWgvh1sl1dZKI4aSB2"; // you got this from the signup page
 
  echo recaptcha_get_html($publickey);
                                                ?>
   </div> 
 
               
<input type="image" src="img/send.jpg" id="send" /><br />


<div class="small" style="font-size:16px;"><strong>Please note: The contact page of this website should not be used to obtain medical advice.</strong></div>


</form>
  
  


</div>
<div class="span6 josefin contact-pad no-margin">

<span class="blue">Dr. Pam Brar's Private Concierge Practice is located at:</span><br />
Pacific Pearl La Jolla, 6919 La Jolla Boulevard, La Jolla, CA 92037<br />



<h4>Contact Dr. Pam Brar:</h4>
<span class="blue">T:</span> 858-200-3007<br />

<span class="blue">F:</span> 858-346-9062<br />
<a href="mailto:medicalassistants@pambrarmd.com">medicalassistants@pambrarmd.com</a>
<br />


<h4>For all media inquiries, please contact:</h4>
Colleen Fallon<br />
<a href="mailto:colleen@pambrarmd.com">colleen@pambrarmd.com</a><br />
<span class="blue">T:</span> 858-200-3007<br />
<br />



<h4>MAP IT:</h4>

<iframe width="330" height="207" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.nz/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=6919+La+Jolla+Boulevard,+La+Jolla,+San+Diego,+CA,+United+States&amp;aq=0&amp;oq=La+Jolla,+San+Diego,+CA,+United+States+6919+La+Jolla+Boulevard&amp;sll=32.830161,-117.267079&amp;sspn=0.021096,0.042272&amp;ie=UTF8&amp;hq=&amp;hnear=6919+La+Jolla+Blvd,+San+Diego,+San+Diego+County,+California+92037,+United+States&amp;ll=32.831426,-117.276257&amp;spn=0.002637,0.005284&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=9850+Genessee+Ave.+La+Jolla,+CA+92037&amp;aq=&amp;sll=47.475732,-94.874594&amp;sspn=0.200725,0.528374&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=9850+Genesee+Ave,+San+Diego,+California+92037&amp;ll=32.882975,-117.226439&amp;spn=0.01492,0.028238&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>

</div>
</div>

</div>
<div class="span1 col"></div>
</div>
    

<div class="row-fluid">
    	<div class="span1 col"></div>
        <div class="span10 soft-blue-2 body-width">
        	<div class="folow-2">FOLLOW DR. PAM</div>
            <div class="blue-border-2"></div>
            <div class="social-2"><a href="http://www.facebook.com/pages/Pamila-Brar-MD/397155367017245" target="_blank" class="fb s-small"></a><a href="https://twitter.com/Dr_Pamila_md" target="_blank" class="tw s-small"></a></div>
        </div>
        <div class="span1 col"></div>
    </div>

<?php
require_once('inc/footer.php');
?>
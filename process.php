        <?php
  require_once('recaptchalib.php');
  $privatekey = "6Ldxoe8SAAAAAFAJCDFu_UAfQoyYvCYO7oMV96mA";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if ($resp->is_valid) {    
        $to = 'whanks@seohaus.com';
       //$to='harsha247365@gmail.com' ;
        // $to = 'drpam@pambrarmd.com';
        //$to = 'whanks@seohaus.com';
        //$to = 'nicholas@seohaus.com';
        $subject = 'Web Contact';
        $message = '';

        $mail = true;
              
        if (!empty($_POST['comments'])) $mail = false; 
        
        
        $keys = array_keys($_POST);
        for($x = 0; $x < count($keys) - 2; $x++) //adjust offset to not include spam buttons and submit button
        {
            $key = str_replace('_', ' ', $keys[$x]);
            $val = stripslashes($_POST[$keys[$x]]);
            $message .= <<<EOF
{$key} - {$val}


EOF;
        }
        
        
        if ($_GET['frm'] == 'contact' && $mail)
        {
            mail($to, $subject, $message, 'From: Pam Brar MD <drpam@pambrarmd.com>');
        
        }

echo '<html>', "\n"; // I'm sure there's a better way!

    echo '<head>', "\n";
    
    
   echo ' <meta http-equiv="refresh" content="0; url=http://www.pambrarmd.com/thank-you.php" />', "\n";
    
    
    echo '</head>', "\n";

    echo '<body>', "\n";
    echo '</body>', "\n";

    echo '</html>', "\n";
      
   
   
   
   
   
   
   
   
   
   
   
  } else {
      
      
     require_once('inc/header.php');
     echo "<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
     // What happens when the CAPTCHA was entered incorrectly
     die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
          
  }
 
	
       
      
?>


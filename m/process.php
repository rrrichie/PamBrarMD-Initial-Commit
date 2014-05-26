<?php

		$to = 'dr.pambrar.md@gmail.com';
        //$to = 'whanks@seohaus.com';
        $subject = 'Web Contact';
        $message = '';
        
        $keys = array_keys($_POST);
        for($x = 0; $x < count($keys) - 2; $x++) //adjust offset to not include spam buttons and submit button
        {
        $key = str_replace('_', ' ', $keys[$x]);
        $val = stripslashes($_POST[$keys[$x]]);
        $message .= <<<EOF
{$key} - {$val}


EOF;
        }
		
		
        if($_GET['frm'] == 'contact')
		{
			mail($to, $subject, $message, 'From: Pam Brar MD <dr.pambrar.md@gmail.com>');
			header('Location: thank-you.php');
		}
?>
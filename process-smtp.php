<?php
if (isset($_POST['send_contact'])) {
	
require_once "Mail.php";
 
$from = "Fox & Jane Salon <donotreply@foxandjanesalon.com>";
$from = $_POST['name'] . ' <' . $_POST['email'] . '>';
$to = "Lorean <Lorean@foxandjanesalon.com>, Billy Canu <info@foxandjanesalon.com>";
//$to = "Bill Hanks <whanks@seohaus.com>";
$subject = "Brooklyn Web Contact\r\n\r\n";
$body = "";

$keys = array_keys($_POST);
	
    for ($x = 0; $x < count($keys) - 1; $x++) {
        ////adjust offset to not include spam buttons and submit button
        $key = str_replace('_', ' ', $keys[$x]);
        $val = stripslashes($_POST[$keys[$x]]);
        $body .= <<<EOF
{$key} - {$val}


EOF;
    }
 
$host = "mail.emailsrvr.com";
$username = "donotreply@foxandjanesalon.com";
$password = "xjkldJ4Il2L";
 
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
 
$mail = $smtp->send($to, $headers, $body);
header('Location: thank-you.php');
}

?>
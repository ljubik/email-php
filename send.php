<?
session_start();

$odr = "\n\n\n If  you want delete this mail to sending go \n";
$homepage = "https://cil.org.ua/email-php/ras.php";


$subject = "Переклади, робота в Китаї -  cil.org.ua"; // тема
$fromemail = "ljubik@cil.org.ua"; // емейл від кого
$file = "maillist.txt"; // документ за адресами
$password = "secretpassword"; // пароль
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <ljubik@cil.org.ua>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";


$message = '


';



//error_reporting(0);
//$subject = $HTTP_POST_VARS["subject"];
//$body = $HTTP_POST_VARS[$mailhtml];

//$subject = stripslashes($subject);
//$body = stripslashes($body);

$file = "maillist.txt";
$maillist = file($file);


print "In our mail baze ". sizeof($maillist) ." mails<br>";
for ($i = 0; $i < sizeof ($maillist); $i++)
{ 
//echo($maillist[$i]."<br>");

mail($maillist[$i], $subject,
 $message, $headers ."$odr $homepage?delmail=$maillist[$i]");
	
}
echo "Done !";

?>
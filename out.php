<?
session_start();
$subject = "Переклади cil.org.ua"; // тема
$fromemail = "ljubik@cil.org.ua"; // емейл від кого
$file = "maillist.txt"; // документ за дресами
$password = "secretpassword"; // пароль

$mailhtml = '

';


if ($pass == $password) // 
// echo "<br>text:<br><textarea name=\"body\" rows=\"8\" cols=\"50\"> </textarea>";
{
echo "<font size=\"-1\"><hr><form method=\"POST\" action=\"send.php\">";
echo "email sender<br><input type=\"text\" name=\"fromemail\" value=\"$fromemail\" size=\"25\"><br>";
echo "Tema<br><input type=\"text\" name=\"subject\" value=\"$subject\" size=\"50\">";
echo "<br>text:<br><textarea name=\"body\" rows=\"8\" cols=\"50\"> </textarea>";
echo "<br><input type=\"submit\" value=\"Send message\"></form></font>";
print "<i>in baze<b>". sizeof($maillist) ."</b> mails</i><br><hr>";
for ($i = 0; $i < sizeof ($maillist); $i++) print $maillist[$i]. "<br>";
}

else echo "<form method=\"POST\" action=\"ras.php\"><input type=\"password\" name=\"pass\" value=\"\"><input type=\"submit\" value=\"Admin\"></form>";

?>
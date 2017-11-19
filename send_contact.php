<?php

/*enable mailgun api*/

$secretkey='key-be5faba8787d8a5026d1c5913b6df7ff';
$domain='sandbox6b9bdd23237f46238dd2611f564ac6b3.mailgun.org';

require 'vendor/autoload.php'; 
$client=new \GuzzleHttp\Client([
'verify'=> false,
]);
$adapter=new \Http\Adapter\Guzzle6\Client($client);
$mailgun=new \Mailgun\Mailgun($secretkey,$adapter);

/*check user mail is set or not*/

if(isset($_POST['user_mail']) == true && empty($_POST['user_mail'])==false){
$email=$_POST['user_mail'];

/*checking for email validation */

if(filter_var($email,FILTER_VALIDATE_EMAIL)==true){
echo 'E-mail has been validate successfully<br>';
$subject="subject";
$message="detail";
$header="from: name <$email>";
$to="ronitagarwal.bapu@gmail.com";
$send_contact=mail($to,$subject,$message,$header);
if($send_contact){
echo "Email has been sent successfully";}
else{
echo "error";} 
 }
else
{
echo 'Please enter a valid email id';}
}
else{

echo "Please enter email-id<br>";}

?>
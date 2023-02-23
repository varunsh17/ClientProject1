<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$company= $_POST['company_name'];
$country= $_POST['country'];
$phone= $_POST['phone'];
$subject= $_POST['subject'];
$quantity= $_POST['quantity'];
$requirement= $_POST['req'];
$message= $_POST['Message'];

$to = "varunsharmabro@gmail.com";

$subject = "Enquiry for " . $subject;

$txt ="My Name is ". $name . "\r\n  Email =" . $email . "\r\n Company =" . $company . "\r\n country =" . $country
. "\r\n phone =" . $phone
. "\r\n quantity =" . $quantity
. "\r\n Special requirement =" . $requirement
. "\r\n Message =" . $message;
$headers = "From: varunsh170502@gmail.com" . "\r\n" .

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
// header("Location:thankyou.html");
?>
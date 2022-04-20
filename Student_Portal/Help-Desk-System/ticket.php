<?php 

include "new_ticket.php";


$success=false;
$error=false;


//include the new connection
include "new_db.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 

//THE KEY FOR ENCRYPTION AND DECRYPTION
$key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';


//ENCRYPT FUNCTION
function encryptthis($data, $key) {
$encryption_key = base64_decode($key);
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
$encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
return base64_encode($encrypted . '::' . $iv);
}


//DECRYPT FUNCTION
function decryptthis($data, $key) {
$encryption_key = base64_decode($key);
list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $email=encryptthis($email, $key);
    $subject=$_POST['subject'];
    $subject=encryptthis($subject, $key);
    //$ticket_department=$_POST['ticket_department'];
   // $ticket_department=encryptthis($ticket_department, $key);
    $message=$_POST['message'];
    $message=encryptthis($message, $key);

    $unid=random_bytes(10);
    $unid=bin2hex($unid);

    $db=new DB();

    $sql="INSERT INTO hdms_tickets (ticket_id,status,email,subject,message) 
    VALUES ('$unid','0','$email','$subject','$message')";
    $inset=$db->conn->query($sql);
    if($inset){
        $success='Your ticket has been created. Your ticket id is '.$unid ;
        $to = $email;
        $subject = "helpdesk support Ticket";
        $txt = "Dear  your tickets has been sent to our help desk support team and we will back to you shortly. and here your ticket id $unid please keep your ticket id";
        $headers = "From: helpdesk@gmail.com" . "\r\n";
        // mail($to,$subject,$txt,$headers);
    }else{
        header("Location: view_ticket.php");
    }
}
?>
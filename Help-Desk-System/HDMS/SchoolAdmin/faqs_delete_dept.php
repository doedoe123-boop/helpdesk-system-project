<?php

$conn = new mysqli("localhost","root","","sis_db");
// connection for online server
//$conn = new mysqli("localhost","u692894633_test","+KoB[b#KI2","u692894633_test_db");


$rowID = $conn->real_escape_string($_POST['rowID']);

if ($_POST['key'] == 'deleteRow') {
    $conn->query("DELETE FROM hd_department WHERE id='$rowID'");
    exit('faqs Has Been Deleted!');
} else {
     //create audit trail record
        //add session conncetion
        include('session.php');
        $fname=$$verified_session_role; 
        if (!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
        }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }else{
        $ip = $_SERVER["REMOTE_ADDR"];
        $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $remarks="faqs has been deleted";  
        //save to the audit trail table
        mysqli_query($link,"INSERT INTO audit_trail(account_no,action,actor,title,ip,host) VALUES('$verified_session_username','$remarks','$fname','$title','$ip','$host')")or die(mysqli_error($link));


}
//end of audit trail
}
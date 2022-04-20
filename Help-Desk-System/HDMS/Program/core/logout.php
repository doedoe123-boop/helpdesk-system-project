<?php
  session_start();
  include('../session.php');

  if(session_destroy()) {
    date_default_timezone_set("asia/manila");
		$date = date("M-d-Y h:i:s A",strtotime("+0 HOURS"));
    $fname=$verified_session_firstname.' '.$verified_session_lastname;  
    if (!empty($_SERVER["HTTP_CLIENT_IP"])){
      $ip = $_SERVER["HTTP_CLIENT_IP"];
    }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
      $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else{
      $ip = $_SERVER["REMOTE_ADDR"];
      $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
       $remarks="account has been logged out";  
       mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$user_id_checker','$verified_session_username','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
      header("Location: ../../../");
    }
      
  }
?>

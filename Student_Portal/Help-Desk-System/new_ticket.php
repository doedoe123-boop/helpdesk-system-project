<?php
include('session.php');
?>
  <!DOCTYPE html>
    <html lang="en">
    <title>Home page</title>
    <head>
    <?php include ('core/css-links.php');//css connection?>
    </head>

    <body>
    <?php include ('core/header.php');//Design for  Header?>
    <?php $page = 'index';include ('core/sidebar.php');//Design for sidebar?>
        


<body>
 <?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//set the correct timezone
date_default_timezone_set('Asia/Manila');



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
    $message=$_POST['message'];
    $message=encryptthis($message, $key);
  

    $unid=random_bytes(10);
    $unid=bin2hex($unid);

    $db=new DB();

        	//create audit trail record
    $fname= $_SESSION['session_department'] = "Student";
    if (!empty($_SERVER["HTTP_CLIENT_IP"])){
      $ip = $_SERVER["HTTP_CLIENT_IP"];
    }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
      $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else{
      $ip = $_SERVER["REMOTE_ADDR"];
      $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
       $remarks="submitted a ticket";  
       //save to the audit trail table
       mysqli_query($link,"INSERT INTO student_audit(account_no,action,actor,ip,host) VALUES('$verified_session_username','$remarks','$fname','$ip','$host')")or die(mysqli_error($link));

    $sql="INSERT INTO hdms_tickets (ticket_id,status,email,subject,message) 
    VALUES ('$unid','0','$email','$subject','$message')" or die("<script>alert('Error');</script>");
    
    $inset=$db->conn->query($sql);
   if($inset){
        $success='Your ticket has been created. copy this ticket id and save it. '.$unid;
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;                                           //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'helpdesksupport@bcp-sis.ga';                     //SMTP username
        $mail->Password   = '#ChangeMe01!';                               //SMTP password
        $mail->SMTPSecure = 'TLS';                                  //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
         //Recipients
        $mail->setFrom('helpdesksupport@bcp-sis.ga', 'Help Desk Support');
        $mail->addAddress($_POST['email'], 'Student');     //Add a recipient
       
       $body = 
       '  <div class="card">
    
       <div class="card-body">
         <h5 class="card-title">######Please dont share your ticket ID######</h5>
         <p class="card-text">Dear Student your ticket has been sent to our help desk support team and we will back to you shortly<br>
         for inquiries and question just submit another ticket to our help desk system or just send us an email @helpdesksupport@bcp-sis.ga
         <br>Thank you! Stay safe.</p>
       </div>
     </div>
       
       <h3>Ticket ID: '.$unid.'</h3>
       
       <div class="alert alert-light bg-light border-0 alert-dismissible fade show" role="alert">
       © Copyright Bestlink College of the Philippines. All Rights Reserved.
     </div>
       
       
       ';
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'You Submitted a ticket';
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $mail->send();
          echo "Dear Student your tickets has been sent to our help desk support team and we will back to you shortly. and here is your ticket id $unid please keep your ticket id";
        }
        //error message 
     else {
       $error = "Ticket did not send!";
    } 
      	

    }		
							
    
   
}

?>
 <main id="main" class="main">
 <div class="pagetitle">
      <h1>Contact Us</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">

          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Quirino Hwy Novaliches,<br> Metro Manila</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>bcphelpdesksupport@gmail.com<br></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>8:00AM - 05:00PM</p>
              </div>
            </div>
          </div>

        </div>
  
        <div class="col-xl-6">
<div class="card p-4">
        <form action="" method="post">
    <div class="row gy-4">
    <?php 
                            if(isset($error) && $error != false){
                                echo '<div class="alert alert-danger">'.$error.'</div>';
                            }
                        ?>
                         <?php 
                            if(isset($success) && $success != false){
                                echo '<div class="alert alert-success">'.$success.'</div>';
                            }
                        ?>
      <div class="col-md-6">
        <input type="email" name="email" class="form-control" placeholder="Your email" autocomplete = "off" required>
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
      </div>
      <div class="col-md-12">
      <div class="form-floating mb-3">
      <select id="department" name="department" class="form-select" required>
                                  <option value="" selected="selected" disabled="disabled">where you want so send this ticket</option>
                                  <?php
                                  // Include config file
                                  require_once "include/config.php";
                                  // Attempt select query execution
                                  $sql2 = "SELECT * FROM hdms_ticket_department ORDER BY ticket_department";
                                  if($result2 = mysqli_query($link, $sql2)){
                                      if(mysqli_num_rows($result2) > 0){
                                      while($row2 = mysqli_fetch_array($result2)){
                                          echo '<option value = "' . $row2["id"] . '">' . $row2["ticket_department"] . '</option>';
                                      }
                                      // Free result set
                                      mysqli_free_result($result2);
                                      }
                                  }
                                  ?>
                              </select>
                              <label for="floatingSelect">Select<span class="text-danger">*</span></label>
                              </div>
                          </div>
                          <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-md-12 text-center">
       
                            <input type="hidden" name="submit" value="form">
                            <button class="btn btn-outline-primary" type="submit">Submit</button>
                            <a href = "pages-faq.php?id=<?php echo $_SESSION["login_key"];?>" class="btn btn-outline-secondary ml-2">Back</a>
                           
                        </div>
                                
                                    </div>
                               
                          
                       </div>
                  
            </div>
        </div>
    </form>
</main>



 <!-- ======= Footer ======= -->




 <?php include 'core/footer.php'?>
    </body>
</html>
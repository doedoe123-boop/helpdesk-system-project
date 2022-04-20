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
$success=false;
$error=false;


//include the new connection
include "new_db.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $department=$_POST['department'];
    $message=$_POST['message'];

    $unid=random_bytes(10);
    $unid=bin2hex($unid);

    $db=new DB();

    $sql="INSERT INTO hdms_tickets (ticket_id,status,department,email,subject,message) VALUES ('$unid','0','$department','$email','$subject','$message')";
    $inset=$db->link->query($sql);
    if($inset){
        $success='Your ticket has been created. Your ticket id is '.$unid;
        $to = $email;
        $subject = "helpdesk support Ticket";
        $txt = "Hello $verified_session_firstname your tickets has been sent to our help desk support team and we will back to you shortly. and here your ticket id $unid please keep your ticket id";
        $headers = "From: helpdesk@gmail.com" . "\r\n";
        // mail($to,$subject,$txt,$headers);
    }else{
        $error='Ticket not sent to our team, please try again later';
    }
}
?>
 <main id="main" class="main">
<br><br>
    <form method="POST">
        <div class="container mt-4">
            <div class="row">
               <div class="col-12">
                   <div class="card">
  
                       <div class="card-header">Submit a ticket about your concern</div>
                       <div class="card-body">
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
                           <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Your E-Mail Address <span class="text-danger">*</span></label>
                                        <input type="email" required name="email" id="email" autocomplete = "off" placeholder="Your Email Address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Select where to send <span class="text-danger">*</span></label>
                                        <input type="text" required name="department" id="department" autocomplete = "off" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Subject <span class="text-danger">*</span></label>
                                        <input type="text" required name="subject" id="subject" autocomplete = "off" placeholder="Subject means your concern" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Explain your concern here"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="text-right">
                                        <input type="hidden" name="submit" value="form">
                                        <button class="btn btn-primary btn" type="submit">Submit</button>
                                    </div>
                                </div>
                           </div>
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
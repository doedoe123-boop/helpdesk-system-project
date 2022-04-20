<?php
 // Msg validate
 $msg = '';
 $msgClass = '';

 // check input
if(filter_has_var(INPUT_POST, 'submit')) {
    ///Get form Data 
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);


    $unid=random_bytes(10);
    $unid=bin2hex($unid);

    $db=new DB();

    $sql="INSERT INTO hdms_tickets (ticket_id,status,email,subject,message) 
    VALUES ('$unid','0','$email','$subject','$message')" or die("<script>alert('Error');</script>");

$inset=$db->conn->query($sql);
       if($inset) {
           // passed
           $success='Your ticket has been created. Your ticket id is '.$unid ;
           $toEmail = "$email";
           $subject = "Help desk support";
           $txt = "Dear your tickets has been sent to our help desk support team and we will back to you shortly. and here your ticket id $unid please keep your ticket id";
           $body = '<h2>New Ticket</h2>"
           <h4>Email:</h4><p>'.$email.'</p>
           <h4>Email:</h4><p>'.$subject.'</p>
           <h4>Email:</h4><p>'.$message.'</p>
            ';

            //headers
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html\r\n";
            $headers .= 'From: from@example.com' . "\r\n" .
            'Reply-To: reply@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

           

            if(mail($toEmail,$subject,$txt,$headers)) {
                //email sent
                $msg = 'email sent';
                $msgClass = 'alert-success';
            }else {
                //email not sent
                $msg = 'email sent';
                $msgClass = 'alert-danger';
            }
       }
    } else {
        //failed
        $msg = 'please fill in all fields';
        $msgClass = 'alert-danger';
    }








?>

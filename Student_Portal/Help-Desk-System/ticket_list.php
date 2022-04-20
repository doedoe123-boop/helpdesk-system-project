<?php include "session.php"; ?>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BCP - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/BCPlogo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">


  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <Link href ="../assets/css/styles.css" rel = "stylesheet">
  


<body>
  
 


<?php 
    $success=false;
    $error=false;
    if(!isset($_GET['id'])){
        header('Location: ticketss');
    }
 
//include the new connection
include "new_db.php";


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


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $db=new DB();
    $ticket='';
    $this_ticket_query=$db->conn->query("SELECT * FROM hdms_tickets WHERE id=".$_GET['id']);
    if($this_ticket_query->num_rows > 0){
        while ($row = $this_ticket_query->fetch_assoc()) {
            $ticket=$row;
        }
    }else{
        header('Location: ./');
    }
    $ticket_id=$ticket['id'];
    $reps=[];
    if($ticket != ''){
        $replies=$db->conn->query("SELECT * FROM hdms_ticket_reply WHERE ticket_id =$ticket_id");
        if($replies->num_rows > 0){
            while ($row = $replies->fetch_assoc()) {
                $reps[]=$row;
            }
        }
    }
    //Reply Send Method
    if(isset($_POST['submit'])){
        $message=$_POST['message'];
        $message=encryptthis($message, $key);
        
      	//create audit trail record
     
       
          $fname= $_SESSION['session_department'] = "Student";
          if (!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
          }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
          }else{
            $ip = $_SERVER["REMOTE_ADDR"];
            $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
             $remarks="reply to a ticket";  
             //save to the audit trail table
             mysqli_query($link,"INSERT INTO student_audit(account_no,action,actor,ip,host) VALUES('$verified_session_username','$remarks','$fname','$ip','$host')")or die(mysqli_error($link));

        if($db->conn->query("INSERT INTO hdms_ticket_reply (ticket_id,send_by,message) VALUES('$ticket_id','0','$message')")){
            $success="Reply has been sent";
            $db->conn->query("UPDATE hdms_tickets  SET status=1 WHERE id=$ticket_id");
        }else{
            $error="Can not send reply";
        }
    }
}
?>
<body>
    
  <main id="main" class="main">

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    Ticket ID : <?php  echo $ticket['ticket_id'] ;?>
                    
                </div>
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
                    <table class="table">
                        <?php echo '
                      
                        <tr>
                            <th>Email:&nbsp;&nbsp;'.decryptthis($ticket['email'], $key).'</th>
                           
                        </tr>
                        <tr>
                            <th>Subject:&nbsp;&nbsp;'.decryptthis($ticket['subject'], $key).'</th>
                           
                        </tr>
                          <th>Message :&nbsp'.decryptthis($ticket['message'], $key).'</th>';?>
                       
                    </table>
                 

                    <div class="reply-area">
                        <ul>
                            <?php if(count($reps) > 0) { ?>
                                <?php foreach ($reps as $k => $v) {
                                    if($v['send_by'] == 0){
                                        ?>
                                         <li class="reply-user"><span class="badge bg-info text-dark"><i class="bi bi-person-circle"></i>Student</span>
                                            <div class="card bg-gray text-dark">
                                                <div class="card-body">
                                                    <p><?php echo decryptthis($v['message'], $key); ?></p>
                                                    <div class="text-right">
                                                        <span><?php echo $v['date'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }else{
                                        ?>
                                        <li class="reply-me"><span class="badge bg-warning text-dark"> <i class="bi bi-people-fill"></i>Support</span>
                                            <div class="card bg-gray text-dark">
                                                <div class="card-body">
                                                    <p><?php echo decryptthis($v['message'], $key); ?></p>
                                                    <div class="text-right">
                                                        <small>Send by help desk support team at <?php echo $v['date'];?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }
                            ?>
                            
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="send-area">
                        <form method="POST">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Reply" id="message" cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <input type="hidden" name="submit" value="send">
                                <button class="btn btn-success" type="submit">Send</button>
                                <a href="pages-faq.php?id=<?php echo $_SESSION["login_key"];?> " class="btn btn-secondary ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                            </main>

 <!-- ======= Footer ======= -->

   <?php include 'core/footer.php'?>
    </body>
</html>
<?php

include "session.php";

?>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ticket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/BCPlogo.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <Link href ="../assets/css/styles.css" rel = "stylesheet">


<body>
  
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  
<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="../assets/img/DATMS_logo.png" alt="">
    <span class="d-none d-lg-block">Help Desk</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">
   
    <li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number"></span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
          You have 4 new notifications
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          <span class="status actiuve"></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-exclamation-circle text-warning"></i>
          <div>
            <h4>Lorem Ipsum</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>30 min. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-x-circle text-danger"></i>
          <div>
            <h4>Atque rerum nesciunt</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>1 hr. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-check-circle text-success"></i>
          <div>
            <h4>Sit rerum fuga</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>2 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="notification-item">
          <i class="bi bi-info-circle text-primary"></i>
          <div>
            <h4>Dicta reprehenderit</h4>
            <p>Quae dolorem earum veritatis oditseno</p>
            <p>4 hrs. ago</p>
          </div>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>
        <li class="dropdown-footer">
          <a href="#">Show all notifications</a>
        </li>

      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <!--li class="nav-item dropdown">

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">3</span>
      </a><-- End Messages Icon --

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
          You have 3 new messages
          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Maria Hudson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>4 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
            <div>
              <h4>Anna Nelson</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>6 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="message-item">
          <a href="#">
            <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
            <div>
              <h4>David Muldon</h4>
              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
              <p>8 hrs. ago</p>
            </div>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li class="dropdown-footer">
          <a href="#">Show all messages</a>
        </li>

      </ul><-- End Messages Dropdown Items -->

    </li><!-- End Messages Nav -->

    <li class="nav-item dropdown pe-3">
   
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="../assets/img/BCPlogo.png" alt="Profile" class="rounded-circle">
        <!-- class="rounded-circle" -->
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $verified_session_firstname . " " . $verified_session_lastname ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $verified_session_firstname . " " . $verified_session_lastname ?></h6>
          <span><?php echo $verified_session_role?></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="user-profile.php?id=<?php echo $_SESSION["login_key"];?>"class="<?php if($page=='PRO'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <!-- Adding return nav item for super admin -->
          <?php 
            $output = '';
            $key = $_SESSION["login_key"];
            if(isset($verified_session_department) && ($verified_session_username)){
              switch($verified_session_role){
                case "SuperAdmin":
                    //statement
                    $output .= '
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="../../../super_admin/index.php?id='.$key.'">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                      </a>
                    </li>    
                  ';
                break;  

                default:
                //statement
                  $output .= '
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="function/logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                      </a>
                    </li>    
                  ';
              }
              echo $output;
          }else{
              // header("location:index.php");
          }
          ?>

        

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<!-- ======= Sidebar ======= -->

<aside id="sidebar" class="sidebar">
  <!-- Side Nav -->
    <ul class="sidebar-nav" id="sidebar-nav">
      <!-- Adding return nav item for super admin -->
        <?php 
          $output = '';
          $key = $_SESSION["login_key"];
          if(isset($verified_session_department) && ($verified_session_username)){
            switch($verified_session_role){
              case "SuperAdmin":
                //statement
                $output .= '
                <li class="nav-item" >
                  <a href="../../../super_admin/index.php?id='.$key.'"style="color: rgb(83, 107, 148);font-weight:600;">
                    <i class="bi bi-arrow-return-left"></i>
                    <span>Return to SuperUser</span>
                  </a>
                </li><!-- End Return Nav -->    
                ';

                break;  
            }
            echo $output;
        }else{

        }
        ?>

                <li class="nav-item">
                <a class="nav-link " id="sideButton" href="index.php?id=<?php echo $_SESSION["login_key"];?>"class="<?php if($page=='PRO'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-grid"></i>
                        <span >Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                        <a href="view-faqs.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='manage'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                            <i class="bi bi-question-octagon"></i>
                            <span>F.A.Q.S &nbsp;</span>
                        
                        </a>
                    </li><!-- All faqs analytics Nav -->

                    <li class="nav-item">
                        <a href="ticket_list.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='manage'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-card-checklist"></i>
                            <span>Ticket &nbsp;</span>
                        
                        </a>
                    </li><!-- All faqs analytics Nav -->

            
                

                    <li class="nav-item">
                        <a href="user_policy.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='UL'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-shield-check"></i>
                            <span>User Policy &nbsp;</span>
                        </a>
                        </li><!-- Policy Nav -->
                    

        

               
                            <li class="nav-item">
                            <a href="#?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='manage'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                            <i class="bi bi-flag"></i>
                                <span>Report &nbsp;</span>
                                
                            </a>
                          </li><!-- All faqs analytics Nav -->

                    <li class="nav-heading">Other</li>

                    <li class="nav-item">
                    <a class="nav-link collapsed" href="user-profile.php?id=<?php echo $_SESSION["login_key"];?>"class="<?php if($page=='PRO'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li><!-- End Profile Page Nav -->


                    <li class="nav-item">
                        <a class="nav-link " href="contact.php?id=<?php echo $_SESSION["login_key"];?>"class="<?php if($page=='PRO'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-envelope"></i>
                        <span>Contact</span>
                        </a>
                    </li><!-- End Contact Page Nav -->

        </aside><!-- End Sidebar-->


 
<?php 
    $success=false;
    $error=false;

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



    if(!isset($_GET['id'])){
        header('Location: ticketss');
    }
   
    $db=new DB();
    $ticket='';
    $this_ticket_query=$db->conn->query("SELECT * FROM hdms_tickets WHERE id=".$_GET['id']);
    if($this_ticket_query->num_rows > 0){
        while ($row = $this_ticket_query->fetch_assoc()) {
            $ticket=$row;
        }
    }else{
        header('Location: ticketss');
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
        
        if($db->conn->query("INSERT INTO hdms_ticket_reply (ticket_id,send_by,message) VALUES('$ticket_id','1','$message')")){
            $success="Reply has been sent";
            $db->conn->query("UPDATE hdms_tickets  SET status=2 WHERE id=$ticket_id");
            $to = $ticket['email'];
            $subject = "New Reply";
            $txt = "Dear ".$ticket['name']." your tickets got a reply from our support team";
            $headers = "From: helpdesk@gmail.com" . "\r\n";
             //mail($to,$subject,$txt,$headers);
        }else{
            $error="Can not send reply";
        }
    }
?>
<main id="main" class="main">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="list-inline admn_ul">
                       Ticktets
                    </div>
                </div>
            </div>
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
                            <th>Email :&nbsp;&nbsp;'.decryptthis($ticket['email'], $key).'</th>
                           
                        </tr>
                        <tr>
                            <th>Subject :&nbsp;&nbsp;'.decryptthis($ticket['subject'], $key).'</th>
                           
                        </tr>
                        <tr>
                            <th>Department :&nbsp;&nbsp;'.decryptthis($ticket['ticket_department'], $key).'</th>
                           
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
                                <a href="ticket_list.php?id=<?php echo $_SESSION["login_key"];?> " class="btn btn-secondary ml-2">Back</a>
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
  <?php include ('core/footer.php');//css connection?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files/ Template main js file -->
  
  </body>
</html>
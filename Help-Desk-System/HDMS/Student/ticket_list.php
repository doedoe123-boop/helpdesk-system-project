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
    if(!isset($_GET['id'])){
        header('Location: ticketss');
    }
 
//include the new connection
include "new_db.php";



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
        if($db->conn->query("INSERT INTO hdms_ticket_reply (ticket_id,send_by,message) VALUES('$ticket_id','0','$message')")){
            $success="Reply has been sent";
            $db->conn->query("UPDATE hdms_tickets  SET status=1 WHERE id=$ticket_id");
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
                        <tr>
                            <th>Email</th>
                            <td><?php  echo $ticket['email'] ;?></td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td><?php  echo $ticket['subject'] ;?></td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td><?php  echo $ticket['department'] ;?></td>
                        </tr>
                    </table>
                    <p><?php  echo $ticket['message'] ;?></p>
                    <div class="reply-area">
                        <ul>
                            <?php if(count($reps) > 0) { ?>
                                <?php foreach ($reps as $k => $v) {
                                    if($v['send_by'] == 0){
                                        ?>
                                         <li class="reply-user">
                                            <div class="card bg-secondary text-white">
                                                <div class="card-body">
                                                    <p><?php echo $v['message']; ?></p>
                                                    <div class="text-right">
                                                        <span><?php echo $v['date'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }else{
                                        ?>
                                        <li class="reply-me">
                                            <div class="card bg-gray text-dark">
                                                <div class="card-body">
                                                    <p><?php echo $v['message']; ?></p>
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
                                <textarea name="message" class="form-control" placeholder="Reply" id="message" cols="30" rows="4" required></textarea>
                            </div>
                            <div class="form-group text-right">
                                <input type="hidden" name="submit" value="send">
                                 <a href="index.php" class="btn btn-secondary ml-2">Back</a>
                                <button class="btn btn-success" type="submit">Send</button>
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
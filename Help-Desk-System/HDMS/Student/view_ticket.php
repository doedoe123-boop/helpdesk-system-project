
 

 




<?php 

$success=false;
$error=false;


//include the new connection
include "new_db.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['id'])){
    $db=new DB();
    $ticket_q=$db->conn->query("SELECT * FROM hdms_tickets WHERE ticket_id='".$_POST['id']."'");
    if($ticket_q->num_rows > 0){
        while ($row  = $ticket_q->fetch_assoc()) {
            header("Location: ticket_list.php?id=".$row['id']);
        }
       
    }else{
        $error="Invalid ticket id";
    }
}

?>
<br><br><br><br>
    <form method="POST">
        <div class="container mt-4">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8">
                   <div class="card">
                  
                  

                       <div class="card-header">Welcome to view your ticket</div>
                       <p>Type your ticket id to track your concern and make an update</p>
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
                           <div class="form-group">
                               <label>Enter Your Ticket ID</label>
                               <input type="text" name="id" id="id" autocomplete = "off" required class="form-control">
                           </div>
                           <div class="form-group">
                               <button class="btn btn-primary btn">Submit</button>
                                <a href="pages-faq.php" class="btn btn-secondary ml-2">Back</a>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </form>


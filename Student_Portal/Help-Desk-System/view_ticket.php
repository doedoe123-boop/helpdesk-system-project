<?php
include "session.php";
?>
 <!DOCTYPE html>
<html lang="en">       

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

       
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="images/logo1.png" rel="icon" >
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

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
  
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Template Main CSS File -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        
 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        
        <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">-->

  
<?php 


//include the new connection
include "new_db.php";

$success=false;
$error=false;


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
  <main id="main" class="main">

  <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-6">

          <!-- Default Card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Important Reminder!</h5>
             The Purpose of this ticket id is to keep your ticket safe and preventing the unwanted and unknown people
              to open your ticket so that you are the only one to know your ticket. <span class="text-danger">Please Dont share your ticket ID.</span>

                
            </div>
          </div><!-- End Default Card -->
          </section>
                    <div class="col-lg-6">
                    
                        <div class="card">
                            <div class="card-body"> 
                               
                                <h5 class="card-title">Check your email for ticket ID</h5>
                                <p>Type your ticket id to track your concern and make an update</p>
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

                                <!-- Vertical Form -->
                                <form  method="POST">
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Tikcet ID:</label>
                                    <input type="text" name = "id" class="form-control" id="id" autocomplete = "off">
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    <a href="pages-faq.php?id=<?php echo $_SESSION["login_key"];?>" class="btn btn-outline-secondary">Back</a>
                                </div>
                                </form><!-- Vertical Form -->

                            </div>
                            </div>
                            
                            </div>

                            </main>

 <!-- ======= Footer ======= -->

 <?php include 'core/footer.php'?>

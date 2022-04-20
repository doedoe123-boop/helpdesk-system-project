<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Help Desk | Dashboard</title>
<head>
<?php include ('core/css-links.php');//css connection?>
</head>

<body>
<?php include ('core/header.php');//Design for  Header?>
<?php $page = 'dashboard';include ('core/sidebar.php');//Design for sidebar?>

  



  <?php 

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


$new_status=0;
$waiting_reply_status=1;
$closed_status=2;

$new_count=0;
$reply_count=0;
$closed_count=0;

$db=new DB();

$latest=[];
$recodes=$db->conn->query("SELECT * FROM hdms_tickets WHERE status=1 ORDER BY 'date' DESC ");
if($recodes->num_rows >0){
    while ($row = $recodes->fetch_assoc()) {
        $latest[]=$row;
    }
}

?>

 <main id="main" class="main">
<br><br>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            
            <div class="card mb-3">
                <div class="card-body">
                    <div class="list-inline admn_ul">
                     This are the ticket that is waiting for replies
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    New Tickets
                </div>
                <div class="card-body">
                    <?php if(count($latest) > 0){?>
                        <table class="table datatable">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Actions</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($latest as $k => $v) {
                                    echo '
                                    <tr>
                                        <td>'.$v['id'].'</td>
                                        <td>'.decryptthis($v['email'], $key).'</td>
                                        <td>'.decryptthis($v['subject'], $key).'</td>
                                        <td>'.decryptthis($v['message'], $key).'</td>
                                        <td>'.$v['date'].'</td>
                                        <td><a href="view_ticket.php?id='.$v['id'].'" class="btn btn-outline-info">View<a/></td>
                                       
                                    </tr>
                                    ';
                                }
                                ?>
                            </tbody>
                    </table>
                    <?php }else{
                        echo '<div class="alert alert-info">Ticket will show here if you dont reply</div>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include ('core/footer.php');//css connection?>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files/ Template main js file -->

</body>
</html>
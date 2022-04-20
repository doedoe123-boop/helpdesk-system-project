<?php
//fetch.php
// $connect = mysqli_connect("localhost","u692894633_sis_db","l95o@WMN6~a","u692894633_sis_db");
$connect = mysqli_connect("localhost","root","","sis_db");
$output = '';
$error = '';
$idenifier='';
$d1;
$d2;
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = " SELECT * FROM datms_tracking WHERE doc_code = '".$search."'";
}
else
{
 $query = "SELECT * FROM datms_tracking ORDER BY doc_code";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   //array data
    $doc_code = $row["doc_code"];
    $doc_title = $row["doc_title"];
    $doc_name = $row["doc_name"];
    $doc_type = $row["doc_type"];
    $doc_status = $row["doc_status"];
    $doc_desc = $row["doc_desc"];
    $doc_actor1 = $row["doc_actor1"];
    $doc_off1 = $row["doc_off1"];
    $doc_date1 = $row["doc_date1"];
    $doc_actor2 = $row["doc_actor2"];
    $doc_off2 = $row["doc_off2"];
    $doc_date2 = $row["doc_date2"];
    $doc_remarks = $row["doc_remarks"];

    $d1 = $row["doc_date1"];
    $d2 = $row["doc_date2"];
     // Declare and define two dates
     $date1 = strtotime("$d1");
     $date2 = strtotime("$d2");

     // Formulate the Difference between two dates
     $diff = abs($date2 - $date1);
   
     // To get the year divide the resultant date into
     // total seconds in a year (365*60*60*24)
     $years = floor($diff / (365*60*60*24));
   
     // To get the month, subtract it with years and
     // divide the resultant date into
     // total seconds in a month (30*60*60*24)
     $months = floor(($diff - $years * 365*60*60*24)
                                   / (30*60*60*24));
   
     // To get the day, subtract it with years and
     // months and divide the resultant date into
     // total seconds in a days (60*60*24)
     $days = floor(($diff - $years * 365*60*60*24 -
                 $months*30*60*60*24)/ (60*60*24));
   
     // To get the hour, subtract it with years,
     // months & seconds and divide the resultant
     // date into total seconds in a hours (60*60)
     $hours = floor(($diff - $years * 365*60*60*24
           - $months*30*60*60*24 - $days*60*60*24)
                                       / (60*60));
   
     // To get the minutes, subtract it with years,
     // months, seconds and hours and divide the
     // resultant date into total seconds i.e. 60
     $minutes = floor(($diff - $years * 365*60*60*24
             - $months*30*60*60*24 - $days*60*60*24
                               - $hours*60*60)/ 60);
   
     // To get the minutes, subtract it with years,
     // months, seconds, hours and minutes
     $seconds = floor(($diff - $years * 365*60*60*24
             - $months*30*60*60*24 - $days*60*60*24
                     - $hours*60*60 - $minutes*60));
           
     if($years !=0 ){
       // Print the result
       $duration = "$years"." yr,";
     }else if($months != 0 ){
       $duration = "$months"." mos";
     }else if($days != 0 ){
       $duration = "$days"." days";
     }else if($hours != 0 ){
       $duration = "$hours"." hrs";
     }else if($minutes != 0 ){
       $duration = "$minutes"." min";
     }else if($seconds != 0 ){
       $duration = "$seconds"." sec";
     }else if($seconds == 0 ){
      $duration = "1"." sec";
    }else{
       $duration = "2";
     }
     if ($doc_status =='Created'){
      $idenifier=' <i class="bi bi-circle-fill activity-badge text-primary align-self-start" style="padding-top: 25px;"></i>';
     }else if($doc_status =='Outgoing'){
      $idenifier=' <i class="bi bi-circle-fill activity-badge text-warning align-self-start" style="padding-top: 25px;"></i>';
     }else if($doc_status =='Received'){
      $idenifier=' <i class="bi bi-circle-fill activity-badge text-success align-self-start" style="padding-top: 25px;"></i>';
     }else if($doc_status =='Approved'){
      $idenifier=' <i class="bi bi-circle-fill activity-badge text-info align-self-start" style="padding-top: 25px;"></i>';
     }else if($doc_status =='Rejected'){
      $idenifier=' <i class="bi bi-circle-fill activity-badge text-danger align-self-start" style="padding-top: 25px;"></i>';
     }else if($doc_status =='Deleted'){
      $idenifier=' <i class="bi bi-circle-fill activity-badge text-dark align-self-start" style="padding-top: 25px;"></i>';
     }else{
      $idenifier=' <i class="bi bi-circle-fill activity-badge text-muted align-self-start" style="padding-top: 25px;"></i>';
     }

  $output .= '
    <div class="activity-item d-flex">
      <div class="activite-label card-title">'.$duration.'</div>
     
      '.$idenifier.'

      <div class="activity-content card-title" >
      <a class="text-dark " title="Date: '.$doc_date1.'">'. $doc_remarks .'</a> <a class="fw-bold text-dark ">'.$doc_actor1.'</a> at <a class="fw-bold text-dark">'. $doc_off1.'</a>
      </div>
    </div>  
    
  ';
  
 }
 echo $output;
}
else
{
  $error .='
    <div class="alert alert-danger border-light alert-dismissible fade show" role="alert">
      No document to track in our database or you input incomplete code
    </div>
  ';
 echo $error;
}

?>
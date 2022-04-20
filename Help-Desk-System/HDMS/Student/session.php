<?php
  include 'include/config.php';
  session_start();
  
  $user_id_checker = $_SESSION['session_username'];

  $sql5 = "SELECT * FROM student_information where id_number = '$user_id_checker'";
          if($result5 = mysqli_query($link, $sql5)){
            if(mysqli_num_rows($result5) > 0){
              while($row5 = mysqli_fetch_array($result5)){
                $verified_session_username = $row5['id_number'];
                $verified_session_firstname = $row5['firstname'];
                $verified_session_lastname = $row5['lastname'];
                $verified_session_middlename = $row5['middlename'];
                $verified_session_course = $row5['course'];
                $verified_session_year_level = $row5['year_level'];
                $verified_session_section = $row5['section'];
                $verified_session_school_year = $row5['school_year'];
                $verified_session_address = $row5['address'];
                $verified_session_email = $row5['email'];
                $verified_session_contact = $row5['contact'];
                $verified_session_nationality = $row5['nationality'];
                $verified_session_religion = $row5['religion'];
                $verified_session_civil_status  = $row5['civil_status'];

              }
              // Free result set
              mysqli_free_result($result5);
            }
          }
  
  if(!(isset($_SESSION['session_department']) && ($_SESSION['session_department'] == "Student") && isset($_SESSION['session_username']) && ($verified_session_username == $_SESSION['session_username']))){
      header("location:../");
      die();
  }
?>
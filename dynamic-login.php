<!-- Login PHP Function -->
<?php
  require_once "config.php";
    session_start();
  $error = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $time=time()-30;
    $ip_address=getIpAddr();
    // Getting total count of hits on the basis of IP
    $query=mysqli_query($link,"select count(*) as total_count from login_attempts where attempt_time > $time and ip_address='$ip_address'");
    $check_login_row=mysqli_fetch_assoc($query);
    $total_count=$check_login_row['total_count'];

     //Checking if the attempt 3, or youcan set the no of attempt her. For now we taking only 3 fail attempted
	  if($total_count==3){
      $error = "To many failed login attempts. Please login after 30 sec.";
    }else{
        // username and password sent from form 
        date_default_timezone_set("asia/manila");
        $date = date("M-d-Y h:i:s A",strtotime("+0 HOURS"));
        $myusername = mysqli_real_escape_string($link,$_POST['username']);
        $mypassword = mysqli_real_escape_string($link,$_POST['password']); 

          $sql=mysqli_query($link,"SELECT * FROM users WHERE id_number = '$myusername'")or die(mysqli_error($link));
          //used to retreive login key form user table          
          
          if($row=mysqli_fetch_array($sql)){
            $_SESSION['login_key'] = $row["login_key"];
          }else{
            $error="No login key registered";
          }
          
          $count = mysqli_num_rows($sql);
          // If result matched $myusername and $mypassword, table row must be 1 row
          if($count == 0) {
            //this is used to identify the numbers of attempts
            $total_count++;
              $rem_attm=3-$total_count;
              if($rem_attm==0){
                $error="To many failed login attempts. Please login after 30 sec.";
              }else{
                // $error="Please enter valid login details. $rem_attm attempts remaining";
                $error="Your Username or Password is invalid.";
              }
              $try_time=time();
              //used to adding ip address record for login attempts
              mysqli_query($link,"insert into login_attempts(ip_address,attempt_time) values('$ip_address','$try_time')");
           
          }else {
            //password checking
            if(password_verify($mypassword, $row["password"])){
              //Check department and role
            $sql1 = "SELECT * FROM user_information WHERE id_number = '$myusername' AND account_status='Active'";
            if($result1 = mysqli_query($link, $sql1)){
              if(mysqli_num_rows($result1) > 0){
                while($row1 = mysqli_fetch_array($result1)){
                  $id=$row1['id'];
                  $admin=$row1['id_number'];
                  $fname=$row1['firstname'].' '.$row1['lastname'];     
                  switch($row1["department"]){
                    case "Clearance System":
                      //statement
                      switch($row1["role"]){
                        case "Clearance Administrator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/clearance-administrator/index.php");
                          break;
                        case "Laboratory Coordinator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/laboratory-coordinator/index.php");
                          break;
                        case "Book Coordinator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/book-coordinator/index.php");
                          break;
                        case "Library Coordinator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/library-coordinator/index.php");
                          break;
                        case "Cashier Coordinator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/cashier-coordinator/index.php");
                          break;
                        case "Registrar Coordinator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/registrar-coordinator/index.php");
                          break;
                        case "Guidance Coordinator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/guidance-coordinator/index.php");
                          break;
                        case "Department Head":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          header("location: Clearance/department-head/index.php");
                          break;
                      }
                      break;
                    case "Guidance and Counselling":
                      //statement
                      break;
                    case "DATMS":
                      //statement ROLE
                      switch($row1["role"]){
                        case "DATMS Administrator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                              $ip = $_SERVER["HTTP_CLIENT_IP"];
                            }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                              $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                            }else{
                              $ip = $_SERVER["REMOTE_ADDR"];
                              $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: Document-Approval-Tracking-and-Mngt-System/DATMS/admin/index.php?id=".$_SESSION["login_key"]."");
                                
                            }
                          
                          break;
                        case "DATMS Approver":
                          //statement
                          $_SESSION['session_username'] = $myusername;
                          if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                              $ip = $_SERVER["HTTP_CLIENT_IP"];
                            }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                              $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                            }else{
                              $ip = $_SERVER["REMOTE_ADDR"];
                              $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: Document-Approval-Tracking-and-Mngt-System/DATMS/approver/index.php?id=".$_SESSION["login_key"]."");
                            }
                          
                          break;
                        case "DATMS Secretary":
                            //statement
                            $_SESSION['session_username'] = $myusername;
                            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                              $ip = $_SERVER["HTTP_CLIENT_IP"];
                            }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                              $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                            }else{
                              $ip = $_SERVER["REMOTE_ADDR"];
                              $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: Document-Approval-Tracking-and-Mngt-System/DATMS/secretary/index.php?id=".$_SESSION["login_key"]."");
                            }
                            
                            break;
                        case "DATMS Faculty":
                            //statement
                            $_SESSION['session_username'] = $myusername;
                            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                              $ip = $_SERVER["HTTP_CLIENT_IP"];
                            }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                              $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                            }else{
                              $ip = $_SERVER["REMOTE_ADDR"];
                              $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                              header("location: Document-Approval-Tracking-and-Mngt-System/DATMS/faculty/index.php?id=".$_SESSION["login_key"]."");
                            }                          
                            break;

                          case "Cashier":
                            //statement
                            $_SESSION['session_username'] = $myusername;
                            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                $ip = $_SERVER["HTTP_CLIENT_IP"];
                              }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                              }else{
                                $ip = $_SERVER["REMOTE_ADDR"];
                                $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: Document-Approval-Tracking-and-Mngt-System/DATMS/cashier/index.php?id=".$_SESSION["login_key"]."");
                              }                            
                            break;

                          case "Admission":
                            //statement
                            $_SESSION['session_username'] = $myusername;
                            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                $ip = $_SERVER["HTTP_CLIENT_IP"];
                              }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                              }else{
                                $ip = $_SERVER["REMOTE_ADDR"];
                                $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));  
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                 header("location: Document-Approval-Tracking-and-Mngt-System/DATMS/admission/index.php?id=".$_SESSION["login_key"]."");                         
                              }                            
                            break;                        
                      }
                      break;
                    case "SuperUser":
                          //statement role
                          switch($row1["role"]){
                            case "SuperAdmin":
                              //statement
                              $_SESSION['session_username'] = $myusername;
                              if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                  $ip = $_SERVER["HTTP_CLIENT_IP"];
                                }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                  $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                                }else{
                                  $ip = $_SERVER["REMOTE_ADDR"];
                                  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                  $remarks="account has been logged in";  
                                  mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                  //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: super_admin/index.php?id=".$_SESSION["login_key"]."");
                                }                              
                              break;                                           
                          }
                      break;
                      case "Help Desk System":
                        //statement ROLE
                        switch($row1["role"]){
                          case "Help Desk Administrator":
                            //statement
                            $_SESSION['session_username'] = $myusername;
                            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                $ip = $_SERVER["HTTP_CLIENT_IP"];
                              }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                              }else{
                                $ip = $_SERVER["REMOTE_ADDR"];
                                $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                  $remarks="account has been logged in";  
                                  mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                  //used to delete ip address record for login attempts
                                  mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                  //calling php file for new login_key
                                  require_once "core/update_key.php";
                                  //update login key
                                  $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                  header("location: Help-Desk-System/HDMS/Admin/index.php?id=".$_SESSION["login_key"]."");
                                  
                              }
                            
                            break;
                          case "HDMS School Admin":
                            //statement
                            $_SESSION['session_username'] = $myusername;
                            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                $ip = $_SERVER["HTTP_CLIENT_IP"];
                              }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                              }else{
                                $ip = $_SERVER["REMOTE_ADDR"];
                                $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                  $remarks="account has been logged in";  
                                  mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                  //used to delete ip address record for login attempts
                                  mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                  //calling php file for new login_key
                                  require_once "core/update_key.php";
                                  //update login key
                                  $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                  header("location: Help-Desk-System/HDMS/SchoolAdmin/index.php?id=".$_SESSION["login_key"]."");
                              }
                            
                            break;
                    
                            case "HDMS Department":
                              //statement
                              $_SESSION['session_username'] = $myusername;
                              if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                  $ip = $_SERVER["HTTP_CLIENT_IP"];
                                }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                  $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                                }else{
                                  $ip = $_SERVER["REMOTE_ADDR"];
                                  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                  $remarks="account has been logged in";  
                                  mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                  //used to delete ip address record for login attempts
                                  mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                  //calling php file for new login_key
                                  require_once "core/update_key.php";
                                  //update login key
                                  $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                  header("location: Help-Desk-System/HDMS/Department/index.php?id=".$_SESSION["login_key"]."");
                                }                            
                              break;
  
                            case "HDMS Program":
                              //statement
                              $_SESSION['session_username'] = $myusername;
                              if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                  $ip = $_SERVER["HTTP_CLIENT_IP"];
                                }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                  $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                                }else{
                                  $ip = $_SERVER["REMOTE_ADDR"];
                                  $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                  $remarks="account has been logged in";  
                                  mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));  
                                  //used to delete ip address record for login attempts
                                  mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                  //calling php file for new login_key
                                  require_once "core/update_key.php";
                                  //update login key
                                  $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                   header("location: Help-Desk-System/HDMS/Program/index.php?id=".$_SESSION["login_key"]."");                         
                                }                            
                              break;                        
                        }
                        break;
                      case "SuperUser":
                            //statement role
                            switch($row1["role"]){
                              case "SuperAdmin":
                                //statement
                                $_SESSION['session_username'] = $myusername;
                                if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                    $ip = $_SERVER["HTTP_CLIENT_IP"];
                                  }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                                  }else{
                                    $ip = $_SERVER["REMOTE_ADDR"];
                                    $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                    $remarks="account has been logged in";  
                                    mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                    //used to delete ip address record for login attempts
                                  mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                  //calling php file for new login_key
                                  require_once "core/update_key.php";
                                  //update login key
                                  $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                  header("location: super_admin/index.php?id=".$_SESSION["login_key"]."");
                                  }                              
                                break;                                           
                            }
                        break;
  

                    case "Student Services":
                      //statement
                      break;
                    case "Health Check Monitoring":
                      //statement
                      break;
                    case "LMS Moodle":
                      //statement
                      break;
                    case "Medical System":
                      //statement
                      break;
                    case "Scholarship System":
                      //statement
                      break;
                    case "User Management":
                      //statement
                      switch($row1["role"]){
                        case "User Management Administrator":
                          //statement
                          $_SESSION['session_username'] = $myusername;
    
                          if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                              $ip = $_SERVER["HTTP_CLIENT_IP"];
                            }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                              $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                            }else{
                              $ip = $_SERVER["REMOTE_ADDR"];
                              $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id','$admin','$remarks','$fname','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: Usermanagement/index.php?id=".$_SESSION["login_key"]."");
                            }                          
                          break;
                      }
                      break;
                  }
                }
                // Free result set
                mysqli_free_result($result1);
              }
              else{
                // The user was not in the list of departments above, so it means the user may be a student
                // Validate if the user was actually a student
                $sql2 = "SELECT * FROM student_information where id_number = '$myusername' AND (account_status='Offical' OR account_status='Transferee')";
                if($result2 = mysqli_query($link, $sql2)){
                  if(mysqli_num_rows($result2) > 0){
                    while($row2 = mysqli_fetch_array($result2)){
                      //Add data to session
                      $_SESSION['session_username'] = $myusername;
                      $_SESSION['session_department'] = "Student";
                      $id1=$row2['id'];
                      $admin1=$row2['id_number'];
                      $fname1=$row2['firstname'].' '.$row2['lastname'];  

                            if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                                $ip = $_SERVER["HTTP_CLIENT_IP"];
                              }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                              }else{
                                $ip = $_SERVER["REMOTE_ADDR"];
                                $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                                $remarks="account has been logged in";  
                                mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id1','$admin1','$remarks','$fname1','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                                mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                                //calling php file for new login_key
                                require_once "core/update_key.php";
                                //update login key
                                $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: Student_Portal/Help-Desk-System/index.php?id=".$_SESSION["login_key"]."");
                              }

                      
                    }
                    // Free result set
                    mysqli_free_result($result2);
                  }else{
                    //The user was not in the list of departments above and not also in the list of student, so that user may be a teacher
                    //Validate if the user was actually a teacher
                    $sql3 = "SELECT * FROM teacher_information where id_number = '$myusername' AND account_status='Active'";
                    if($result3 = mysqli_query($link, $sql3)){
                      if(mysqli_num_rows($result3) > 0){
                        while($row3 = mysqli_fetch_array($result3)){
                          //Add data to session
                          $_SESSION['session_username'] = $myusername;
                          $_SESSION['session_department'] = "Teacher";

                          $id2=$row3['id'];
                          $admin2=$row3['id_number'];
                          $fname2=$row3['firstname'].' '.$row3['lastname'];  
        
                          if (!empty($_SERVER["HTTP_CLIENT_IP"])){
                              $ip = $_SERVER["HTTP_CLIENT_IP"];
                            }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
                              $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
                            }else{
                              $ip = $_SERVER["REMOTE_ADDR"];
                              $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                              $remarks="account has been logged in";  
                              mysqli_query($link,"INSERT INTO audit_logs(user_id,account_no,action,action_name,ip,host,login_time) VALUES('$id2','$admin2','$remarks','$fname2','$ip','$host','$date')")or die(mysqli_error($link));
                                //used to delete ip address record for login attempts
                              mysqli_query($link,"delete from login_attempts where ip_address='$ip_address'");
                              //calling php file for new login_key
                              require_once "core/update_key.php";
                              //update login key
                              $link->query("UPDATE users SET login_key='$getQP' WHERE id_number='$myusername'") or die(mysqli_error($link));
                                header("location: Teacher_Portal/index.php?id=".$_SESSION["login_key"]."");
                            }                         
                        }
                        // Free result set
                        mysqli_free_result($result3);
                      }
                    }
                  }
                }else{
                  //this is used to identify the numbers of attempts
                  $total_count++;
                    $rem_attm=3-$total_count;
                    if($rem_attm==0){
                      $error="To many failed login attempts. Please login after 30 sec.";
                    }else{
                      // $error="Please enter valid login details. $rem_attm attempts remaining";
                      $error="Your Username or Password is invalid.";
                    }
                    $try_time=time();
                    mysqli_query($link,"insert into login_attempts(ip_address,attempt_time) values('$ip_address','$try_time')");
                  
                }
              }
            }
            }//end of password checking
            else{
              //this is used to identify the numbers of attempts
              $total_count++;
                $rem_attm=3-$total_count;
                if($rem_attm==0){
                  $error="To many failed login attempts. Please login after 30 sec.";
                }else{
                  // $error="Please enter valid login details. $rem_attm attempts remaining";
                  $error="Your Username or Password is invalid.";
                }
                $try_time=time();
                mysqli_query($link,"insert into login_attempts(ip_address,attempt_time) values('$ip_address','$try_time')");
              
            }
          }//end else
        }
    }
      
    

    // Getting IP Address
    function getIpAddr(){
      if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
      }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
      }else{
        $ipAddr=$_SERVER['REMOTE_ADDR'];
      }
    return $ipAddr;
}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include ('core/css-links.php');//css connection?>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <img src="assets/img/BCPlogo.png" alt="" style=" width: 120px;">
              <div class="d-flex justify-content-center py-4">

                <a href="dynamic-login.php" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">SCHOOL INFORMATION SYSTEM</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Get access with your subsystem using username & password to login</p>
                  </div>
                 
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3">

                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="username" id="username"  placeholder="first name" Required autofocus>
                        <label for="floatingName">Username</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="first name" Required >
                        <label for="floatingName">Password</label>
                      </div>
                    </div>
                    <!-- Error Message -->
                    <?php 
                      if(!$error==""){
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' id='msg'>";
                        echo  $error;
                        echo "</div>";
                      }
                    ?>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>


                </div>
              </div>
              <footer class="footer">
                <div class="copyright">
                  <center>
                    &copy;Copyright <a href="https://bcp.edu.ph/home" target="_blank " data-bs-toggle="tooltip" data-bs-placement="top" 
                    title="Access BCP Website">Bestlink College of the Philippines</a> All Rights Reserved
                  </center>                 
                </div>
              </footer>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files/ Template main js file -->
  <?php include ('core/js.php');//css connection?>
  <script>
    // timer countdown
    var timeLeft = 30;
    var elem = document.getElementById('some_div');
    var errormsg = document.getElementById('msg');
    var timerId = setInterval(countdown, 1000);
    
    function countdown() {
      if (timeLeft == -1) {
        clearTimeout(timerId);
        doSomething();
      } else {
        // elem.innerHTML = "To many failed login attempts. Please login after " +timeLeft +" sec.";
        timeLeft--;
      }
    }
    function doSomething(){
      errormsg.style.display = 'none';
      // document.location.reload(true)//refresh pages
    }
  </script>
</body>

</html>
<?php

include "session.php";

?>
  <!DOCTYPE html>
   <html lang="en">
   <title>Search result</title>
   <head>
   <?php include ('core/css-links.php');//css connection?>
   </head>
   
   <body>
       



<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="../includes/hd-image/help.png" alt="">
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
        <img src="../includes/hd-image/ant.jpg" alt="Profile" class="rounded-circle">
        <!-- class="rounded-circle" -->
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $verified_session_firstname . " " . $verified_session_lastname ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $verified_session_firstname . " " . $verified_session_lastname ?></h6>
          <span><?php echo $_SESSION['session_department']?></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="user-profile.php?id=<?php echo $_SESSION["login_key"];?>">
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

        <li>
          <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
      <a href="index.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='index'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
       <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
      <a href="pages-faq.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='page'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
        <i class="bi bi-question-circle"></i>
          <span>F.A.Q.S</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
 <li class="nav-item">
 <a href="view_ticket.php?id=<?php echo $_SESSION["login_key"];?> "class="<?php if($page=='ticket'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
        <i class="bi bi-envelope"></i>
          <span>Inbox</span>
     </a>

      </li>





    </ul>
  </aside><!-- End Sidebar-->
  

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Search results</h1>
      
    </div>
    <?php
    
   
    
      //check if any input 
    if( isset($_GET['k']) && $_GET['k'] != '' ) {
      
     
      $k = trim($_GET['k']);

        $k = mysqli_real_escape_string($link, $_GET['k']);
        $sql = "SELECT * FROM hd_department WHERE title LIKE '%$k%' OR shortDesc LIKE '%$k%'
         OR longDesc LIKE '%$k%' UNION SELECT * FROM hd_program WHERE title LIKE '%$k%' OR shortDesc LIKE '%$k%'
         OR longDesc LIKE '%$k%'";
         
         $result = mysqli_query($link, $sql);
         $queryResult = mysqli_num_rows($result);
     

         echo "There are " .$queryResult. " result! <br><br>";
      
         if ($queryResult >0) {
            while($row = mysqli_fetch_assoc($result)) {
                $title = $row['title'];
                $longDesc = $row['longDesc'];
                $shortDesc = $row['shortDesc'];
                echo "
                <div class = 'style'>
                <h2>".$row['title']."</h2>
                <h3>".$row['longDesc']."</h3>
                <p>".$row['shortDesc']."</p>
                </div>";
                ?>
 <style>
 .style{
    background-color: #FFF;
    margin-bottom: 1rem;
    padding: 1.5rem 1rem;
    color: #555;
   
    box-shadow: 0 10px 35px -10px rgba(0, 0, 0, .3);
  }
  h2 {
    font-size: 30px;
    font-weight: 500;
  }
  h3 {
    font-size: 17px;
    margin-bottom: 1rem;
    margin-top: 1rem;
  }
  p {
    font-size: 20px;
  }
  

     </style>
                    <?php
            }
         }else {
             echo "<section class='section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center'>
             <h2>Opps we can't find your search!<br>try searching common question. </h2>
             <img src='assets/img/not-found.svg' class='img-fluid py-5' alt='Page Not Found'></section> ";
            
             
         }
         
    }
    ?>
     <p> <a href="pages-faq.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='page'){echo 'btn';}else{echo 'btn btn-outline-primary';}?>" >Back</a></p>
    

    
    

  </main><!-- End #main -->

  
 <!-- ======= Footer ======= -->

 <?php include 'core/footer.php'?>


  </body>
</html>
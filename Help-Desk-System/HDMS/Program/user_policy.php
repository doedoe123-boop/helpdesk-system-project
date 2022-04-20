<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>User Policy</title>
<head>
<?php include ('core/css-links.php');//css connection?>
</head>

<body>
<?php include ('core/header.php');//Design for  Header?>
<?php $page = 'dashboard';include ('core/sidebar.php');//Design for sidebar?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User Policy</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
         
        </ol>
      </nav>
    </div><!-- End Page Title -->

        <!-- Card with an image on top -->
        <!-- Card with header and footer -->
        <div class="card">
            <div class="card-header">Policy</div>
            <div class="card-body">
              <h5 class="card-title">Reminder!</h5>
              &nbsp&nbsp Please read this acceptable user User Policy carefully before using the Help Desk Management System operated by the Institution.
Services provided by us may be/or used for lawful purposes. You agree to comply with all applicable laws, rules and regulations in connection with your use of the services. Any material or conduct that in our judgement violates this policy in any manner may result in suspension or termination of the services or removal of user's account with or without notice.
            </div>
            <div class="card-footer">
            © Copyright Bestlink College of the Philippines. All Rights Reserved.
            </div>
          </div><!-- End Card with header and footer -->

 
    </main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include ('core/footer.php');//css connection?>
  

    </body>
</html>   
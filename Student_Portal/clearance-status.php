<?php
include('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
include ("includes/head.php");
?>

<body>

<?php
include ("includes/nav.php");
include ("includes/sidebar.php");
?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Clearance Status</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Clearance Status</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List of Students</h5>
              <?php
                    $laboratory_requirements = 0;
                    $laboratory_done = 0;
                    $cashier_requirements = 0;
                    $cashier_done = 0;
                    $library_requirements = 0;
                    $library_done = 0;
                    $registrar_requirements = 0;
                    $registrar_done = 0;
                    $guidance_requirements = 0;
                    $guidance_done = 0;
                    $department_head_requirements = 0;
                    $department_head_done = 0;
                    // Attempt select query execution
                    $sql = "SELECT * FROM clearance_requirements_students";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            
                                while($row = mysqli_fetch_array($result)){
                                    
                                }
                            // Free result set
                            mysqli_free_result($result);
                        }
                    }
                    // Close connection
                    mysqli_close($link);
                    ?>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
include ("includes/footer.php");
?>

</body>

</html>
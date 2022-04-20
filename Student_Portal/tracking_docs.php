<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>DATMS | Tracking Documents</title>
<head>
<?php include ('core/css-links.php');//css connection?>

</head>
<body>

<?php include ('core/header.php');//Design for  Header?>
<?php $page = 'track';  include ('core/side-nav.php');//Design for sidebar?>

  <main id="main" class="main">

    <div class="pagetitle">
      
      <h1>Track Documents</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Module</li>
          <li class="breadcrumb-item active">Track Document</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
          <div class="row">

            <!-- Reports -->
          
              <div class="card">
                <!-- Activity Body -->
                <div class="card-body">
                  <!-- Search Bar -->

                    <div class="col-md-12" style="margin-top: 30px; margin-bottom: 10px;">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="search_text" name="search_text" placeholder="Your Name" autofocus>
                        <label for="floatingName">Enter Code</label>
                      </div>
                    </div>  

                  <!-- End of search Bar -->
                    <!-- Tracking Activity module -->
                    <div class="activity">

                        <!-- <div class="activity-item d-flex">
                          <div class="activite-label card-title">20 min</div>
                          <i class='bi bi-circle-fill activity-badge text-danger align-self-start' style="padding-top: 25px;"></i>
                          <div class="activity-content card-title" >
                             Document set Outgoing by <a href="#" class="fw-bold text-dark">Juvell Alquero</a> at <a href="#" class="fw-bold text-dark">Accounting Office</a> 
                          </div>
                        </div>
                        
                        <div class="activity-item d-flex">
                          <div class="activite-label card-title">10 min</div>
                          <i class='bi bi-circle-fill activity-badge text-warning align-self-start' style="padding-top: 25px;"></i>
                          <div class="activity-content card-title" >
                              Document set Incoming by <a href="#" class="fw-bold text-dark">Marvin Marilao</a> at <a href="#" class="fw-bold text-dark">CCS Office</a> 
                          </div>
                        </div>
                        
                        <div class="activity-item d-flex">
                          <div class="activite-label card-title">15 min</div>
                          <i class='bi bi-circle-fill activity-badge text-info align-self-start' style="padding-top: 25px;"></i>
                          <div class="activity-content card-title" >
                            Document set Approved by <a href="#" class="fw-bold text-dark">Rogel Quintero</a> at <a href="#" class="fw-bold text-dark">VP Office</a> 
                          </div>
                        </div>
                        
                        <div class="activity-item d-flex">
                          <div class="activite-label card-title">20 min</div>
                          <i class='bi bi-circle-fill activity-badge text-success align-self-start' style="padding-top: 25px;"></i>
                          <div class="activity-content card-title" >
                            Document set Received by <a href="#" class="fw-bold text-dark">Rogel Quintero</a> at <a href="#" class="fw-bold text-dark">VP Office</a> 
                          </div>
                        </div>
                       
                        <div class="activity-item d-flex">
                          <div class="activite-label card-title">90 min</div>
                          <i class='bi bi-circle-fill activity-badge text-muted align-self-start' style="padding-top: 25px;"></i>
                          <div class="activity-content card-title" >
                            Document set Rejected by <a href="#" class="fw-bold text-dark">Rogel Quintero</a> at <a href="#" class="fw-bold text-dark">VP Office</a> 
                          </div>
                        </div> -->
                   
                    </div>
                    <!-- End Tracking Activity module -->
                </div>
              <!-- End Activity Body -->
              </div>
            </div>

          </div>

      
    </section>
  </main><!-- End #main -->

 
  <!-- ======= Footer ======= -->
  <?php include ('core/footer.php');//css connection?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files/ Template main js file -->
  <?php include ('core/js.php');//css connection?>

</body>

  <script type="text/javascript">
      $(document).ready(function(){
      // Providing Overall tracking history
      // load_data();
      function load_data(query)
      {
        $.ajax({
        url:"function/tracking_docx.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
          $('.activity').html(data);
        }
        });
      }
      $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
        load_data(search);
        }
        else
        {
          $('.activity').html('');
        }
      });
      //end of tracking history
      });
      
  </script>

</html>
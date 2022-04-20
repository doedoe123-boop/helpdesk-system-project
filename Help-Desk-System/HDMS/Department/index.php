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

  <main id="main" class="main">

  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
       
      </nav>
    </div><!-- End Page Title -->


    

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Reports</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Show</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Tickets <span>| Count</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-card-checklist"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                        require_once("include/conn.php");
                        $query="SELECT * FROM hdms_tickets";
                        $result=mysqli_query($conn,$query);
                        if($result){
                          echo "<h6>". mysqli_num_rows($result)."</h6>";
                        }
                      ?> 
                    
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Number of Tickets</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            

            <!-- Faculty account -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Reports</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Show</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Department<span> | Count</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journals"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                        require_once("include/conn.php");
                        $query="SELECT * FROM hd_department";
                        $result=mysqli_query($conn,$query);
                        if($result){
                          echo "<h6>". mysqli_num_rows($result)."</h6>";
                        }
                      ?> 
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Number of faqs</span>

                    </div>
                  </div>

                </div>
              </div>

              
            </div><!-- End Customers Card -->


               <!-- Number of ticket in your department-->
               <div class="col-xxl-4 col-xl-12">

<div class="card info-card customers-card">

  <div class="filter">
    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <li class="dropdown-header text-start">
      <h6>Reports</h6>
      </li>
      <li><a class="dropdown-item" href="#">Show</a></li>
    </ul>
  </div>

  <div class="card-body">
    <h5 class="card-title">Ticket<span></span></h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
      <i class="bi bi-card-checklist"></i>
      </div>
      <div class="ps-3">
      <?php 
          require_once("include/conn.php");
          $query="SELECT * FROM hdms_ticket WHERE department = 'Help Desk'";
          $result=mysqli_query($conn,$query);
          if($result){
            echo "<h6>". mysqli_num_rows($result)."</h6>";
          }
        ?> 
        <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">This is your ticket</span>

      </div>
    </div>

  </div>
</div>

</div><!-- End Customers Card -->
            

             <!-- Reports -->
             <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Department <span> | Reports</span></h5>

                  <!-- Bar Chart -->
                  <canvas id="barChart" style="max-height: 400px;"></canvas>
                 <?php
                       require_once("include/conn.php");

                             $sql ="SELECT *,count(title) as count FROM hd_department group by title limit 5;";
                             $result = mysqli_query($conn,$sql);
                             $chart_data="";
                             while ($row = mysqli_fetch_array($result)) { 

                                $name[]  = $row['title']  ;
                                $counts[] = $row['count'];
                            }
                     
                    ?>
              
              <!-- End Bar CHart -->

                </div>

              </div>
            </div><!-- End Reports -->
            
           
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
      
         
                    
     
          <div class="card">
          <div class="card-body pb-0">
              <h5 class="card-title">Pie Chart</h5>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>

           
          </div>
     



          </div><!-- End Website Traffic -->
        </div><!-- End Right side columns -->
              </div>
    
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include ('core/footer.php');//css connection?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files/ Template main js file -->
   <!-- Vendor JS Files/ Template main js file -->
   <script>
               var ctx = document.getElementById("barChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
     data: {
        labels:<?php echo json_encode($name); ?>,
            datasets: [{
                 label: 'F.A.Q.S',
                  backgroundColor: [
                          'rgb(255, 99, 132, 0.2)',
                          'rgb(255, 159, 64, 0.2)',
                          'rgb(255, 205, 86, 0.2)',
                          'rgb(75, 192, 192, 0.2)',
                          'rgb(54, 162, 235, 0.2)',
                          'rgb(153, 102, 255, 0.2)',
                          'rgb(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1,
                data:<?php echo json_encode($counts); ?>,
            }]
        },
      options: {
          legend: {
            display: false
          },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]

        }
      }
    });
    

 
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Help Desk', 'Guidance', 'DATMS', 'Clearance', 'Scholarship']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->


             


  

    </body>
</html>
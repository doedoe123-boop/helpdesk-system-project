
<?php

include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Department list</title>
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
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	  <li class="breadcrumb-item active">Dashboard</li>
	</ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

             <!-- Reports -->
             <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="view-faqs-dept.php?id=<?php echo $_SESSION["login_key"];?>">Show</a></li>
                    
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Department <span> | Reports</span></h5>

                  <!-- Bar Chart -->
                  <canvas id="barChart" style="max-height: 400px;"></canvas>
                 <?php
                       require_once("include/conn.php");

                             $sql ="SELECT *,count(title) as count FROM hd_department group by title limit 8;";
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
            
             <!-- Reports -->
             <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="view-faqs-prog.php?id=<?php echo $_SESSION["login_key"];?>">Show</a></li>
                   
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Program <span> | Reports </span></h5>

                  <!-- Bar Chart -->
                  <canvas id="barChart1" style="max-height: 400px;"></canvas>
                 <?php
                       require_once("include/conn.php");

                             $sql ="SELECT *,count(title) as count FROM hd_program group by title;";
                             $result = mysqli_query($conn,$sql);
                             $chart_data="";
                             while ($row = mysqli_fetch_array($result)) { 

                                $name1[]  = $row['title']  ;
                                $counts[] = $row['count'];
                            }
                     
                    ?>
              
              <!-- End Bar CHart -->

                </div>

              </div>
            </div><!-- End Reports -->



          </div>
        </div><!-- End Left side columns -->

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

     var ctx = document.getElementById("barChart1").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
     data: {
        labels:<?php echo json_encode($name1); ?>,
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

              </script>


  

    </body>
</html>
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
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          

            <!-- User Accounts Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">User <span>| Counts</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                        require_once("include/conn.php");
                        $query="SELECT * FROM user_information WHERE `office` = 'HDMS Staff'";
                        $result=mysqli_query($conn,$query);
                        if($result){
                          echo "<h6>". mysqli_num_rows($result)."</h6>";
                        }
                      ?> 

                     
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">User to track</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End User Accounts Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Program <span>| Count</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journals"></i>
                    </div>
                    <div class="ps-3">
                    <?php 
                        require_once("include/conn.php");
                        $query="SELECT * FROM hd_program";
                        $result=mysqli_query($conn,$query);
                        if($result){
                          echo "<h6>". mysqli_num_rows($result)."</h6>";
                        }
                      ?> 

                     
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Number of faqs</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End User Accounts Card -->

            <!-- Faculty account -->
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

         <!-- Right side columns -->
         <div class="col-lg-4">

<!-- Website Traffic -->
<div class="card">
  <div class="card-body pb-0">
    <h5 class="card-title">User Accounts <span>| Graph</span></h5>

    <canvas id="accountChart" style="height: 400px; margin-bottom: 30px;" class="echart"></canvas>
        <?php
             require_once("include/conn.php");
                   $sql1 ="SELECT *,count(role) as count FROM user_information WHERE office='HDMS Staff' group by role;";
                   $result1 = mysqli_query($conn,$sql1);
                   $chart_data="";
                   while ($row1 = mysqli_fetch_array($result1)) { 
           
                      $name2[]  = $row1['role']  ;
                      $counts1[] = $row1['count'];
                  }
          ?>

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
     //pie
     var ctxP = document.getElementById("accountChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'doughnut',      
      data: {
        labels:<?php echo json_encode($name2); ?>,
            datasets: [{
                 label: 'Pie Chart',
                  backgroundColor: [
                          'rgba(255, 99, 132, 0.5)',
                          'rgba(255, 159, 64, 0.5)',
                          'rgba(255, 205, 86, 0.5)',
                          'rgba(75, 192, 192, 0.5)',
                          'rgba(54, 162, 235, 0.5)',
                          'rgba(153, 102, 255, 0.5)',
                          'rgba(201, 203, 207, 0.5)'
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
                data:<?php echo json_encode($counts1); ?>,
            }]
      },
      options: {
        responsive: true,
        legend: false
      }, 
      labelLine: {
        show: false
      },
      
    });

              </script>


  

    </body>
</html>
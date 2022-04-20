<?php
include('session.php');
?>
   <!DOCTYPE html>
   <html lang="en">
   <title>Search result</title>
   <head>
   <?php include ('core/css-links.php');//css connection?>
   </head>

   <body>
   <?php include ('core/header.php');//Design for  Header?>
   <?php $page = 'index';include ('core/sidebar.php');//Design for sidebar?>
       

    <body>


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
             echo "<div class = 'alert alert-danger'>
             Opps try searching the common question <br><br></div> ";
             echo "<div class = 'alert alert-danger'>
             make sure that you spell it correctly <br><br></div> ";
             echo "<div class = 'alert alert-danger'>
             Go back to faqs section and search again</div>";
             
         }
         
    }
    ?>
     <p> <a href="pages-faq.php" class="<?php if($page=='page'){echo 'btn';}else{echo 'btn btn-primary';}?>" >Back</a></p>
    

    
    

  </main><!-- End #main -->

  
 <!-- ======= Footer ======= -->

 <?php include 'core/footer.php'?>


  </body>
</html>
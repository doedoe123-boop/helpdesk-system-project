<?php
include('session.php');
?>
  <!DOCTYPE html>
    <html lang="en">
    <title>Home page</title>
    <head>
    <?php include ('core/css-links.php');//css connection?>
    </head>

    <body>
    <?php include ('core/header.php');//Design for  Header?>
    <?php $page = 'index';include ('core/sidebar.php');//Design for sidebar?>
        


<body>
  
 

 
  <main id="main" class="main">


  <section class="section dashboard">
  <div class="row">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/mvcampus1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MV campus</h5>
        <p>Building.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/mvcampus2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MV campus</h5>
        <p>Building.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/mvcampus3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h5>MV campus</h5>
        <p>Building.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <style type="text/css">
 

</style>

<div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="include/about.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">About this system</h1>
        <p class="lead">Help desk management system is widely use in every part of the company this can use in many ways. helping users and giving information in a timely manner to give assurance which can lead to a success of the company</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="about.php" class="<?php if($page=='page'){echo 'btn';}else{echo 'btn btn-outline-primary';}?>" >More info</a>
  
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>


              <div class="section-prices">
                  <h2 class="section-header">Our Offers</h2>
                    <div class="list-boxs">
                        <div class="card starter">
                            <div class="head">
                              F.A.Q.S
                            </div>
               
                            <div class="body">
                              <p>
                               With the expansion and growing community of bestlink college of the philippines students have a
                               lot to ask about the school.
                                Help desk is design to help the students about their question and complaints. when the world's 
                                evolving we must keep up search your question here. 
                              </p>
                              <a href="pages-faq.php" class="<?php if($page=='page'){echo 'btn';}else{echo 'btn btn-outline-primary';}?>" >Get Started</a>
                            </div>
                          </div>
                          <div class="card standard">
                            <div class="head">
                              TICKET
                            </div>
             
                              <div class="body">
                                <p>
                                 We also offer tickets which means that if you have question or concern you can send tickets
                                your concern means a lot to us help us improve our system for future development we ensure that your data is protected and please be specific about your concern .
                                </p>
                               
                                <a href="#" class="<?php if($page=='page'){echo 'btn';}else{echo 'btn btn-outline-primary';}?>" >Get Started</a>
                              </div>
                            </div>
                          
                          </div>
                        </div>
                   </div>
                     <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Giving Information</h3>
                            <p class="text-muted mb-0">Our information are updated regularly to keep you stay on track</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All information are up to date keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">Information are ready and reviewed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">all this for you student giving fresh information</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

          <!--Privacy-->
               <section>
                <div class="container px-4 py-5" id="hanging-icons">
                <h2 class="pb-2 border-bottom">Data Privacy</h2>
                <div class="row g-0 py-1 row-cols-1 row-cols-lg-3">
                  <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                      <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
                    </div>
                    <div>
                      <h2>Notice<i class="bi bi-exclamation-triangle-fill"  style="color: #ff0000"></i></h2>
                      <p>Please be reminded that Help desk system is intended for free use only by students and faculty members within the Bestlink Campus any UNLAWFULLY uploaded in other sites without due and proper permission is prohibited.</p>
                     
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                      <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
                    </div>
                    <div>
                      <h2>Prosecution</h2>
                      <p>Under Philippine law (Republic Act No. 8293), copyright infringement is punishable by the following: Imprisonment of between 1 to 3 years and a fine of between 50,000 to 150,000 pesos for the first offense. Imprisonment of 3 years and 1 day to six years plus a fine of between 150,000 to 500,000 pesos for the second offense.</p>
                     
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                      <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
                    </div>
                    <div>
                      <h2>To our valued students</h2>
                      <p>True to its commitment to a policy of full public disclosure of all its transactions and desire to deliver fast and efficient service to the students during the new normal, the Help Desk Management System is launching the Help Desk System (HDS) – the BCP’s frontline service dedicated to answer queries and reports of the students concerning programs and departments.  
                        All information regarding the services offered by BCP's offices is now made accessible through our HDS.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
</section>

                         
</main>
       



 <!-- ======= Footer ======= -->

   <?php include 'core/footer.php'?>
    </body>
</html>
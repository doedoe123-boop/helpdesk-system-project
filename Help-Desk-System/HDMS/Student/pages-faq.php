<?php
include('session.php');
?>
   <!DOCTYPE html>
   <html lang="en">
   <title>Frequently Ask Questions</title>
   <head>
   <?php include ('core/css-links.php');//css connection?>
   </head>

   <body>
   <?php include ('core/header.php');//Design for  Header?>
   <?php $page = 'page';include ('core/sidebar.php');//Design for sidebar?>
       



 


  

  <main id="main" class="main">
  <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="GET" action="search.php">
      <input type="text" name="k"  placeholder="Search here" title="Enter search keyword" autocomplete = "off" style="width:500px;" class="form-control" />
        <button type="submit" name = " " class="btn btn-primary" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
    
   
<section>

    <div class="pagetitle">
      <h1>Frequently Asked Questions</h1>
      
    </div>
     
            <div class="card-body">
             

              <div class="accordion accordion-flush" id="faq-group-1">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                      How to pay books?
                    </button>
                  </h2>
                  <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                     Go to the cashier in the main campus of bestlink and you can see the window where you can pay books.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                     Where i can get my new ID
                    </button>
                  </h2>
                  <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      You can contact your adviser to get your new ID because they are the one who's in charge for that.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                      how can i access other module?
                    </button>
                  </h2>
                  <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                     You can access thru clicking other module page.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                      Is Cashier available on weekend
                    </button>
                  </h2>
                  <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                     Cashier is available on Monday-Saturday
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                     where i can buy uniform?
                    </button>
                  </h2>
                  <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                     You can go to the main campus and buy uniform in the cashier
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-6" type="button" data-bs-toggle="collapse">
                      where is bestlink located?
                    </button>
                  </h2>
                  <div id="faqsOne-6" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                    Quirino Hwy, Novaliches, Quezon City, Metro Manila
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-7" type="button" data-bs-toggle="collapse">
                      Where is the library located?
                    </button>
                  </h2>
                  <div id="faqsOne-7" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      The new library is located at MV campus at 4th floor
                    </div>
                  </div>
                </div><div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-8" type="button" data-bs-toggle="collapse">
                      How much is the tuition fee of bestlink?
                    </button>
                  </h2>
                  <div id="faqsOne-8" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                     There is no tuition fee at bestlink it is only miscellaneous 4975
                  </div>
                </div>
              

              </div>

            </div>
          </div><!-- End F.A.Q Group 1 -->

        </div>
         <div class="pagetitle">
      <h1>Common question</h1>
      
    </div>
     
    <section class="section faq">
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Basic Questions</h5>

              <div>
                <h6>Where i can get my diploma?</h6>
                <p>You can get that in the registrar office in bestlink.</p>
              </div>

              <div class="pt-2">
                <h6>What to do if i can't access my lms?</h6>
                <p>You can contact your adviser for that matter student.</p>
              </div>

              <div class="pt-2">
                <h6>What is the use of this system?</h6>
                <p>The purpose of this system is to help the student with their question and inquiries in school.</p>
              </div>

            </div>
          </div>
           <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Basic Trouble shooting</h5>

              <div>
                <h6>How to reset password?</h6>
                <p>Try the forgot password and it will send you a new password to your email.</p>
              </div>

              <div class="pt-2">
                <h6>How can i access other module?</h6>
                <p>You can access that by clicking the module tabs in the nav bar.</p>
              </div>

              <div class="pt-2">
                <h6>How can i edit my info in my profile?</h6>
                <p>In the nav bar you can see your profile info and click the profile.</p>
              </div>

            </div>
          </div>

          <!-- F.A.Q Group 1 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cashier Info</h5>

              <div class="accordion accordion-flush" id="faq-group-1">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                      Graduation fee
                    </button>
                  </h2>
                  <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      All graduating students are required to pay for graduation fee. it is a one-time, non-transferable fee that is added to the students account when he/she intends to participate in the commencement ceremony. the stuents diploma, TOR, Certificate of graduation an other pertent documents shall not be released to graduates with outstanding balances. 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                      School Event 
                    </button>
                  </h2>
                  <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Since the students are free from tuition, all approved school activities that need funding. they should pay directly to the cashier required fees.  
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                      Assesment fees
                    </button>
                  </h2>
                  <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      Students who will undergo National competency Examination under TESDA program shall pay an assessment and review fee directly to the cashier.<br>
                      Official reciept(O.R) must be secured and presented to the assessment office for the assessment form. Candidates shall bring the following requirements.<br>
                      - 3pcs. Passport-size picture with white background<br>
                      - Long brown enveloped    
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                     Retured checks
                    </button>
                  </h2>
                  <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      For clearing purposes, check payments should be made at least a week before the examination<br><br>
                      check payment by students with a record of bouncing/dishonored checks will no longer be accepted.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                      Personal Check of sponsor 
                    </button>
                  </h2>
                  <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                    <div class="accordion-body">
                      The school will not accept the personal check sponsor in behalf of their student beneficiary.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 1 -->

        </div>

        <div class="col-lg-6">

          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admission Info</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                      General Admission Policy?
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Student shall be admitted to the institution upon proof of presentation of the appropriate and valid credential to the admission committee subject to the rules prescribe therein. the documents required are the following:<br>
                      1. Original High school report card(Form 138)<br>
                      2. Certificate of good moral Character<br>
                      3. NSO/PSA Aunthenticated birth certificate<br>
                      4. Dully Filled up Admission application
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                     Enrollment
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                     Upon presentation of the original and photo copies of documents enumerated in the general admission. the coordinator shall assess the authenticity of the papers submitted. A brief interview will be conducted and additional papers if any shall be required from the students. 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                     Failure in 3 units of an academic load of 21 units during a semester<br><br>
                     18 units
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Repeat subject failed without a reduction of load
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                      Back subject
                    </button>
                  </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Back subject are those where students either dropped or failed in a particular semester that caused the student of unit enrolling the prescribe units for the present semester.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                     Transferees
                    </button>
                  </h2>
                  <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                      Student coming from another school intending to transfer in this institution are likewise required to undergo the procedures indicated and shall submit the pertinent papers for entry.<br><br>
                      1. Honorable dismissal<br> 
                      2. Certificate of grades signed be the registrar office(TOR)<br>
                      3. Evaluation of the subject from BCP registrar office<br>
                      4. NSO/PSA Certificate photocopy; bring the original for authentication<br>
                      5. Certificate of good moral character<br>
                      6. Barangay clearance<br>
                      7. Medical certificate from clinic affliated by BCP clinic<br>
                      8. Copy of description of the subject/course taken from previous school   
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->

          <!-- F.A.Q Group 3 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registrar Info</h5>

              <div class="accordion accordion-flush" id="faq-group-3">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                     Practicum/OJT course
                    </button>
                  </h2>
                  <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      The ojt practicum of the Four-year courses is the inclusive of the maximum thirty (30) units.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                      Grading system
                    </button>
                  </h2>
                  <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      In accordance with the college thrust of achieving academic excellence, the school adopts a grading system that is highly objective nad reflective student's scholastic performance. 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                      Correction and changing of personal data
                    </button>
                  </h2>
                  <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Corrections/changes of the personal data of the students may be made upon the presentation of the documents to the office of the registrar for validity. 
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-4" type="button" data-bs-toggle="collapse">
                     Adding/changing subject and schedule
                    </button>
                  </h2>
                  <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      the school allows student to drop, add, and change subjects for valid reasons and within the prescribe period of one week with regular classes.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsThree-5" type="button" data-bs-toggle="collapse">
                      Crediting, Equivalence and substitute subjects
                    </button>
                  </h2>
                  <div id="faqsThree-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                    <div class="accordion-body">
                      Graduating students with valid reason find difficulty to finish their program requirements due to related curriculum changes.
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 3 -->

        </div>

      </div>
    </section>
<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Ticket</h5>
    <h6 class="card-subtitle mb-2 text-muted">Submit here!</h6>
    <p class="card-text">Please be mindful of your ticket</p>
     <a href = "new_ticket.php" class="btn btn-outline-primary">click here</a>

  </div>
</div>
</section>
 
  </main><!-- End #main -->

   

 <!-- ======= Footer ======= -->

 <?php include 'core/footer.php'?>

  </body>
</html>
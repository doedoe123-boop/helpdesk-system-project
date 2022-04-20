<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Profile</title>
<head>
<?php include ('core/css-links.php');//css connection?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include ('core/header.php');//Design for  Header?>
  <?php $page = 'PRO'; include ('core/sidebar.php');//Design for sidebar?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../includes/hd-image/ant.jpg" alt="Profile" >
              <h2><?php echo $verified_session_firstname . ", " . $verified_session_lastname ?></h2>
              <small><?php echo $_SESSION['session_department']?></small>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/neilanthonymendoza10" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                 

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_firstname . " " . $verified_session_lastname ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Bestlink College of The Philippines</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Course</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_course?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Year Level</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_year_level?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Section</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_section?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">School Year</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_school_year?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_contact?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nationality</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_nationality?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Religion</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_religion?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Civil Status</div>
                    <div class="col-lg-9 col-md-8"><?php echo $verified_session_civil_status?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="../includes/hd-image/ant.jpg" alt="Profile" class="rounded-circle">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="firstname" class="form-control" id="firstname" value="<?php echo $verified_session_firstname?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="lastname" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="lastname" type="text" class="form-control" id="lastname" value="<?php echo $verified_session_lastname?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="course" class="col-md-4 col-lg-3 col-form-label">Course</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="course" type="text" class="form-control" id="course" value="<?php echo $verified_session_course?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="year_level" class="col-md-4 col-lg-3 col-form-label">Year Level</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="year_level" type="text" class="form-control" id="year_level" value="<?php echo $verified_session_year_level?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?php echo $verified_session_address?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Contact Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $verified_session_contact?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $verified_session_email?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include ('core/footer.php');//css connection?>
  <!-- End Footer -->

 
  
     
    </body>
</html>
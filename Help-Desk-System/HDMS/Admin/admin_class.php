<?php
include('session.php');


// Define variables and initialize with empty values
$first_name = "";
$last_name = "";
$middle_name = "";
$email = "";
$contact = "";
$address = "";
$gender = "";
$birthday = "";
$religion = "";
$civil_status = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $id_number = mysqli_real_escape_string($link,trim($_POST["id_number"]));
    $first_name = mysqli_real_escape_string($link,trim($_POST["first_name"]));
    $last_name = mysqli_real_escape_string($link,trim($_POST["last_name"]));
    $middle_name = mysqli_real_escape_string($link,trim($_POST["middle_name"]));
    $address = mysqli_real_escape_string($link,trim($_POST["address"]));
    $email = mysqli_real_escape_string($link,trim($_POST["email"]));
    $contact = mysqli_real_escape_string($link,trim($_POST["contact"]));
    $gender = mysqli_real_escape_string($link,trim($_POST["gender"]));
    $birthday = date('Y-m-d', strtotime(mysqli_real_escape_string($link,trim($_POST["birthdate"]))));
    $religion = mysqli_real_escape_string($link,trim($_POST["religion"]));
    $civil_status = mysqli_real_escape_string($link,trim($_POST["civil_status"]));
    $account_status = "Active";
    $password = "#ChangeMe01!";
  
  
  //Check if the user number is not existing in the database
  $sql2 = "SELECT id FROM users WHERE id_number = '$id_number'";
  $result2 = mysqli_query($link,$sql2);
  $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
  $count2 = mysqli_num_rows($result2);
  
  // If the user number is not existing in the database, count must be 0
  if($count == 0 && $count2 == 0) {
    // Prepare an insert statement
    $sql = "INSERT INTO hdms_staff (id_number, firstname, lastname, middlename, contact, address, email, address, gender, birthday, religion, civil_status, account_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if($stmt = mysqli_prepare($link, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sssissssssss", $firstname, $lastname, $middlename, $contact, $address, $email,$gender, $birthday, $religion, $civil_status, $account_status);
 // Attempt to execute the prepared statement
 if(mysqli_stmt_execute($stmt)){
    //Create user account
    $sql = "INSERT INTO users (id_number, password) VALUES (?, ?)";

    if($stmt1 = mysqli_prepare($link, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt1, "ss", $id_number, $password);

      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt1)){
          // Records created successfully. Redirect to landing page
          header("location: admin_list.php");
          exit();
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }
    }
  } else{
      echo "Oops! Something went wrong. Please try again later.";
  }
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);

}else {
$id_number_err = "ID Number is already existing";
}
}
?>

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
      <h1>Add New Staff</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="staff.php">staff</a></li>
          <li class="breadcrumb-item"><a href="department.php">department</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Teacher Registration Form</h5>

        <!-- No Labels Form -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="row g-3">
          <div class="col-md-2">
            <input type="number" name="id_number" class="form-control <?php echo (!empty($id_number_err)) ? 'is-invalid' : ''; ?>" Required placeholder="ID Number">
            <span class="invalid-feedback"><?php echo $id_number_err;?></span>
          </div>
          <div class="col-md-4">
            <input type="text" name="first_name" class="form-control" Required placeholder="First Name">
          </div>
          <div class="col-md-4">
            <input type="text" name="last_name" class="form-control" Required placeholder="Last Name">
          </div>
          <div class="col-md-2">
            <input type="text" name="middle_name" class="form-control" placeholder="Middle Initial (Optional)">
          </div>
          <div class="col-md-3">
          <select name="department_id" id="department_id" class="form-select">
              <option value="" selected="selected" disabled="disabled">Select department</option>
              <?php
                require_once "include/conn.php";
				$department = $conn->query("SELECT * FROM hdms_departments order by name asc");
				while($row = $department->fetch_assoc()):
			?>
				<option value="<?php echo $row['id'] ?>" <?php echo isset($department_id) && $department_id == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
				<?php endwhile; ?>
            </select>
          </div>
          <div class="col-md-9">
            <input type="text" name="address" class="form-control" Required placeholder="Complete Address">
          </div>
          <div class="col-md-4">
            <input type="email" name="email" class="form-control" Required placeholder="Email">
          </div>
          <div class="col-md-4">
            <input type="number" name="contact" class="form-control" Required placeholder="Contact Number">
          </div>
          <div class="col-md-4">
            <select id="inputState" name="gender" class="form-select" Required>
              <option value="" selected="selected" disabled="disabled">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="col-md-3">
            <input type="text" name="birthdate" class="form-control" Required placeholder="Birthdate" onfocus="(this.type='date')" onblur="(this.type='text')">
          </div>
        
          <div class="col-md-3">
            <select id="inputState" name="religion" class="form-select" Required>
              <option value="" selected="selected" disabled="disabled">Select Religion</option>
              <option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
              <option value="Agnostic">Agnostic</option>
              <option value="Atheist">Atheist</option>
              <option value="Baha'i">Baha'i</option>
              <option value="Buddhism">Buddhism</option>
              <option value="Cao Dai">Cao Dai</option>
              <option value="Chinese traditional religion">Chinese traditional religion</option>
              <option value="Christianity">Christianity</option>
              <option value="Hinduism">Hinduism</option>
              <option value="Islam">Islam</option>
              <option value="Jainism">Jainism</option>
              <option value="Juche">Juche</option>
              <option value="Judaism">Judaism</option>
              <option value="Neo-Paganism">Neo-Paganism</option>
              <option value="Nonreligious">Nonreligious</option>
              <option value="Rastafarianism">Rastafarianism</option>
              <option value="Secular">Secular</option>
              <option value="Shinto">Shinto</option>
              <option value="Sikhism">Sikhism</option>
              <option value="Spiritism">Spiritism</option>
              <option value="Tenrikyo">Tenrikyo</option>
              <option value="Unitarian-Universalism">Unitarian-Universalism</option>
              <option value="Zoroastrianism">Zoroastrianism</option>
              <option value="primal-indigenous">primal-indigenous</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="col-md-3">
            <select id="inputState" name="civil_status" class="form-select" Required>
              <option value="" selected="selected" disabled="disabled">Select Civil Status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
              <option value="Widowed">Widowed</option>
            </select>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- End No Labels Form -->

      </div>
    </div>

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include ('core/footer.php');//css connection?>
  <!-- End Footer -->


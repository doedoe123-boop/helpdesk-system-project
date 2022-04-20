<!-- ======= Sidebar ======= -->

<aside id="sidebar" class="sidebar">
  <!-- Side Nav -->
    <ul class="sidebar-nav" id="sidebar-nav">
      <!-- Adding return nav item for super admin -->
        <?php 
          $output = '';
          $key = $_SESSION["login_key"];
          if(isset($verified_session_department) && ($verified_session_username)){
            switch($verified_session_role){
              case "SuperAdmin":
                //statement
                $output .= '
                <li class="nav-item" >
                  <a href="../../../super_admin/index.php?id='.$key.'"style="color: rgb(83, 107, 148);font-weight:600;">
                    <i class="bi bi-arrow-return-left"></i>
                    <span>Return to SuperUser</span>
                  </a>
                </li><!-- End Return Nav -->    
                ';

                break;  
            }
            echo $output;
        }else{

        }
        ?>

                <li class="nav-item">
                    <a class="nav-link " id="sideButton" href="index.php?id=<?php echo $_SESSION["login_key"];?>"class="<?php if($page=='PRO'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-grid"></i>
                        <span >Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
          <a href="manage_faqs_both.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='manage'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
          <i class="bi bi-collection"></i>
            <span>Manage F.A.Q.S &nbsp;</span>
            
          </a>
        </li><!-- All faqs analytics Nav -->

        <li class="nav-item">
          <a href="student_logs.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='UL'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
          <i class="bi bi-layout-text-window-reverse"></i>
            <span>Student logs &nbsp;</span>
            
          </a>
        </li><!-- student log Nav -->


       <li class="nav-item">
          <a href="user_policy.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='UL'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
          <i class="bi bi-shield-check"></i>
            <span>User Policy &nbsp;</span>
          </a>
        </li><!-- Policy Nav -->
            
    <!-- Audit Trail -->
    <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span>Audit Trail</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="<?php if($col=='logs'){echo 'nav-content collapse show';}else{echo 'nav-content collapse';}?> " data-bs-parent="#sidebar-nav">
          <li>
              <a href="logs_school_ad.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='SA'){echo 'active';}?>">
                <i class="bi bi-circle"></i><span>School Admin Logs</span>
              </a>
            </li>
            <li>
              <a href="logs_department.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='D'){echo 'active';}?>">
                <i class="bi bi-circle"></i><span>Department Logs</span>
              </a>
            </li>
            <li>
              <a href="logs_program.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='P'){echo 'active';}?>">
                <i class="bi bi-circle"></i><span>Program Logs</span>
              </a>
            </li>
            
          </ul>
        </li><!-- End Account Management Nav -->

    
        
      
        <li class="nav-item">
          <a href="#?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='manage'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
          <i class="bi bi-flag"></i>
            <span>Report &nbsp;</span>
            
          </a>
        </li><!-- All faqs analytics Nav -->

                <li class="nav-heading">Settings</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="user-profile.php?id=<?php echo $_SESSION["login_key"];?>"class="<?php if($page=='PRO'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li><!-- End Profile Page Nav -->

              

                <li class="nav-item">
                    <a class="nav-link collapsed" href="contact.php?id=<?php echo $_SESSION["login_key"];?>"class="<?php if($page=='PRO'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
                        <i class="bi bi-envelope"></i>
                        <span>Contact</span>
                    </a>
                </li><!-- End Contact Page Nav -->

              
              
            </ul>

        </aside><!-- End Sidebar-->

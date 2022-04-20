<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
      <a href="index.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='index'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
       <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
      <a href="pages-faq.php?id=<?php echo $_SESSION["login_key"];?>" class="<?php if($page=='page'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
        <i class="bi bi-question-circle"></i>
          <span>F.A.Q.S</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
 <li class="nav-item">
 <a href="view_ticket.php?id=<?php echo $_SESSION["login_key"];?> "class="<?php if($page=='ticket'){echo 'nav-link';}else{echo 'nav-link collapsed';}?>" >
        <i class="bi bi-envelope"></i>
          <span>Inbox</span>
     </a>

      </li>





    </ul>
  </aside><!-- End Sidebar-->
  
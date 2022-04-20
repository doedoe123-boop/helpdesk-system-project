<?php
      if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id']))
      {
          if(isset($_SESSION['login_key'])){
            if ($_SESSION['login_key'] != $_GET['id'])
            {
                echo '<script type="text/javascript">location.href = "../../../dynamic-login.php"</script>'; session_destroy();   
                die();
            }
          }
          
      }
      if (!isset($_GET['id']))
        {
          echo '<script type="text/javascript">location.href = "../../../dynamic-login.php"</script>';   session_destroy(); die();
        }
      ?>
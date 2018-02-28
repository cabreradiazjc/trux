    <!-- Logo -->
    <a href="<?php echo $home ?>" class="logo" style="background-color: #333;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" ><b>TRUX</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TRUX </b>Racing Store</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav style="background-color: #333; " class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <!-- <img src="../../images/logo-user.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs"><?php echo $_SESSION['nombres']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background-color: #333;">
                <img src="../../images/logo-user.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nombres'];?>
                  <small>Trux Racing Store</small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="../../view/passwordchange.php" class="btn btn-default btn-flat">Contraseña</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="../../view/logout.php"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
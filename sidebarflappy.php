<nav class="sidebar sidebar-offcanvas fixed-left" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="/"><img src="/assets/images2/logo.png" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="/"><img src="/assets/images2/logo-mini.png" alt="logo" /></a>
  </div>
  <ul class="nav">
<?php if(true || isset($_SESSION['LoggedIn'])){?>
    <li class="nav-item profile">
      <div class="profile-desc">

        <div class="profile-pic">
          <div class="count-indicator">
            <?php if(isset($_SESSION['LoggedIn'])){?>
              <img class="img-xs rounded-circle" src="<?php if(isset($_SESSION['picture'])&&strlen($_SESSION['picture'])>0){ echo $_SESSION['picture'];} else echo '/assets/images2/faces/face15.jpg'?>" alt="">
          <?php }else{ ?>
<i class="mdi mdi-login "></i>
          <?php }?>
          </div>
          <div class="profile-name">
            <h6 class="mb-0 font-weight-normal"><?php echo isset($_SESSION['LoggedIn']) ? $_SESSION['FirstName']: 'Sign In' ?></h6>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
          <?php if(!isset($_SESSION['LoggedIn'])){?>
          <a href="/login" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-login text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Sign In</p>
            </div>
          </a>
        <?php }else {?>
          <a href="/profile/settings" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Preferences</p>
            </div>
          </a>

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="/login/logout" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-logout text-danger"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Logout</p>
            </div>
          </a>



        <?php }?>
        </div>
      </div>
    </li>
  <?php }?>

    <li class="nav-item menu-items">
      <a class="nav-link" href="/<?php if(false&&isset($_SESSION['LoggedIn'])) echo 'dash'; ?>">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#notes" aria-expanded="false" aria-controls="notes">
        <span class="menu-icon">
          <i class="mdi mdi-notebook"></i>
        </span>
        <span class="menu-title">Flappy Bird</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="notes">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/project/pong#intro">Intro</a></li>
          <li class="nav-item"> <a class="nav-link" href="/project/pong#setup">Setup</a></li>

        </ul>
      </div>
    </li>



    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#projects" aria-expanded="false" aria-controls="projects">
        <span class="menu-icon">
          <i class="mdi mdi-github-box "></i>
        </span>
        <span class="menu-title">Projects and Labs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="projects">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#"> Drawing Shapes </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Pong </a></li>
          <li class="nav-item"> <a class="nav-link" href="/project/pong"> Pong (Non-Object Oriented)</a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Duck Hunt (Object Oriented)</a></li>
        </ul>
      </div>
    </li>


  </ul>
</nav>

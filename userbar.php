<div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
  <button id = "ham" class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
    <span class="mdi mdi-menu"></span>
  </button>
  <ul class="navbar-nav w-100">
    <li class="nav-item w-100">
      <?php if(isset($view) && $view =='notes'){?>
      <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
        <input id="myInput" type="text" class="form-control" placeholder="Search Content" onkeyup="search()" >
      </form>
    <?php }?>

    </li>
  </ul>
  <ul class="navbar-nav navbar-nav-right">
    <?php if(true||isset($_SESSION['LoggedIn'])){?>
    <li class="nav-item dropdown">
      <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
        <div class="navbar-profile">
          <img class="img-xs rounded-circle" src="<?php if(isset($_SESSION['picture'])&&strlen($_SESSION['picture'])>0){ echo $_SESSION['picture'];} else echo '/assets/images2/faces/face15.jpg?v15'?>" alt="">
          <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo isset($_SESSION['LoggedIn']) ? substr($_SESSION['email'], 0, strpos($_SESSION['email'], '@') ): 'Sign In' ?></p>
          <i class="mdi mdi-menu-down d-none d-sm-block"></i>
        </div>
      </a>

      <?php if(isset($_SESSION['LoggedIn'])){?>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
        <h6 class="p-3 mb-0">Profile</h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item preview-item" href = "/profile/settings">
          <div class="preview-thumbnail">
            <div class="preview-icon bg-dark rounded-circle">
              <i class="mdi mdi-settings text-success"></i>
            </div>
          </div>
          <div class="preview-item-content">
            <p class="preview-subject mb-1">Settings</p>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item preview-item" href = "/login/logout">
          <div class="preview-thumbnail">
            <div class="preview-icon bg-dark rounded-circle">
              <i class="mdi mdi-logout text-danger"></i>
            </div>
          </div>
          <div class="preview-item-content">
            <p class="preview-subject mb-1">Log out</p>
          </div>
        </a>

      </div>
    <?php }else {?>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
      <a class="dropdown-item preview-item" href = "/login">
        <div class="preview-thumbnail">
          <div class="preview-icon bg-dark rounded-circle">
            <i class="mdi mdi-logout text-success"></i>
          </div>
        </div>
        <div class="preview-item-content">
          <p class="preview-subject mb-1">Login</p>
        </div>
      </a>
    </div>
    <?php }?>
    </li>
  </ul>

<?php }?>
  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="mdi mdi-format-line-spacing"></span>
  </button>
</div>

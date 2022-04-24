<nav class="sidebar sidebar-offcanvas  " id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="/"><img src="/assets/images2/logo.png?v3" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="/"><img src="/assets/images2/logo-mini.png?v31" alt="logo" /></a>
  </div>
  <ul class="nav" style = "height:100vh">
<?php if( isset($_SESSION['LoggedIn'])){?>
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <?php if(isset($_SESSION['LoggedIn'])){?>
              <img class="img-xs rounded-circle" src="<?php if(isset($_SESSION['picture'])&&strlen($_SESSION['picture'])>0){ echo $_SESSION['picture'];} else echo '/assets/images2/faces/face15.jpg?v1'?>" alt="">
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
        <span class="menu-title">Abbreviated Notes</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="notes">
        <ul class="nav flex-column sub-menu">
          <?php
          $names = array("Primitives","Objects", "if Statements", "Iteration", "Classes", "Arrays", "ArrayLists", "2D Arrays", "Inheritance", "Recursion");

          for($i = 0; $i < 10; $i++){?>
          <li class="nav-item"> <a class="nav-link" href="/notes/view/<?php echo $i+1;?>/">Unit <?php echo ($i+1).": ".$names[$i];?></a></li>
        <?php }?>
        </ul>
      </div>
    </li>
    <!--
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#videos" aria-expanded="false" aria-controls="videos">
        <span class="menu-icon">
          <i class="mdi mdi-video "></i>
        </span>
        <span class="menu-title">Video Lectures</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="videos">
        <ul class="nav flex-column sub-menu">
          <?php for($i = 0; $i < 10; $i++){?>
          <li class="nav-item"> <a class="nav-link" href="#">Unit <?php echo $i+1;?></a></li>
        <?php }?>
        </ul>
      </div>
    </li> -->

        <li class="nav-item menu-items" style = "  display:none">
      <a class="nav-link" data-toggle="collapse" href="#mc" aria-expanded="false" aria-controls="mc">
        <span class="menu-icon">
          <i class="mdi mdi-checkbox-multiple-marked-circle "></i>
        </span>
        <span class="menu-title">MC Qs (TBD)</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="mc">
        <ul class="nav flex-column sub-menu">
          <?php
          $names = array("Primitives","Objects", "if Statements", "Iteration", "Classes", "Arrays", "ArrayLists", "2D Arrays", "Inheritance", "Recursion");

           for($i = 0; $i < 10; $i++){?>
          <li class="nav-item"> <?php if(isset($_SESSION['admin'])){?><a class="nav-link" href="/mc/view/<?php echo $i+1;?>/">Unit <?php echo ($i+1).": ".$names[$i];?></a><?php }?></li>
        <?php }?>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#short" aria-expanded="false" aria-controls="short">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Coding Problems</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?php if(isset($view) && $view == "practice" ) echo 'show'; else echo ''; ?>" id="short">
        <ul class="nav flex-column sub-menu">
          <?php
          $names = array("Primitives","Objects", "if Statements", "Iteration", "Classes", "Arrays", "ArrayLists", "2D Arrays", "Inheritance", "Recursion");

          for($i = 0; $i < 10; $i++){ if($i==1) continue; ?>
          <li class="nav-item"> <a class="nav-link <?php if(isset($unit) && $unit == $i+1){ echo "text-success"; }?>" href="/practice/view/<?php echo $i+1;?>/">Unit <?php echo ($i+1).": ".$names[$i];?></a></li>
        <?php }?>
        <li class="nav-item"> <a class="nav-link" href="/practice/view/11">Abstract Data Types</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#longproblems" aria-expanded="false" aria-controls="longproblems">
        <span class="menu-icon">
          <i class="mdi mdi-book-open "></i>
        </span>
        <span class="menu-title">FRQ Style Qs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?php if(isset($view) && $view == 'frq' ) echo 'show'; else echo ''; ?>" id="longproblems">
        <ul class="nav flex-column sub-menu">
          <?php for($i = 0; $i < 4; $i++){?>
          <li class="nav-item"> <a class="nav-link <?php if(isset($num)&&$num==$i+1){ echo 'text-success';}?>" href="/frq/index/<?php echo $i+1?>/">FRQ Style <?php echo $i+1;?></a></li>
        <?php }?>
        <li class="nav-item"> <a class="nav-link" href="/frq/index/5/">Quiz</a></li>

      <!--  <li class="nav-item"> <a class="nav-link" href="/frq/index/">All</a></li> -->
        </ul>
      </div>
    </li>

<!--
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#labs" aria-expanded="false" aria-controls="labs">
        <span class="menu-icon">
          <i class="mdi mdi-book-open "></i>
        </span>
        <span class="menu-title">Coding Labs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="labs">
        <ul class="nav flex-column sub-menu">
          <?php for($i = 0; $i < 10; $i++){?>
          <li class="nav-item"> <a class="nav-link" href="#">Unit <?php echo $i+1;?></a></li>
        <?php }?>
        </ul>
      </div>
    </li>
-->
<!--
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#demos" aria-expanded="false" aria-controls="demos">
        <span class="menu-icon">
          <i class="mdi mdi-cursor-pointer  "></i>
        </span>
        <span class="menu-title">Demos/Tutorials</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="demos">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">Eclipse IDE</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Using This Site</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Canvas</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Javadoc</a></li>

        </ul>
      </div>
    </li>
-->
<!--
    <li class="nav-item menu-items">
      <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
        <span class="menu-icon">
          <i class="mdi mdi-projector-screen "></i>
        </span>
        <span class="menu-title">Projects</span>
      </a>
    </li>-->
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#projects" aria-expanded="false" aria-controls="projects">
        <span class="menu-icon">
          <i class="mdi mdi-github-box "></i>
        </span>
        <span class="menu-title">Projects and Labs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="projects">
        <ul class="nav flex-column sub-menu" style = "overflow: hidden">
          <li class="nav-item"> <a class="nav-link" href="/project/view/drawing"> Drawing Shapes </a></li>
          <li class="nav-item"> <a class="nav-link" href="/project/pong"> Pong - Non-Object Oriented </a></li>
          <li class="nav-item"> <a class="nav-link" href="#"> Duck Hunt (Object Oriented)</a></li>
          <li class="nav-item"> <a class="nav-link" href="/project/view/recursive"> Recursive Drawing</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item menu-items <?php if(isset($view)&&$view == "git"){ echo "active"; }?>">
      <a class="nav-link " data-toggle="collapse" href="#github" aria-expanded="false" aria-controls="github">
        <span class="menu-icon">
          <i class="mdi mdi-github-box "></i>
        </span>
        <span class="menu-title">GitHub</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?php if(isset($view)&&$view == "git"){ echo "show"; }?>" id="github">
        <ul class="nav flex-column sub-menu" style = "overflow-x: hidden">

          <li class="nav-item"> <a onclick="expand('introduction')" class="nav-link" href="/github/#introduction/">Getting Started </a></li>
          <li class="nav-item"> <a onclick="expand('accept')" class="nav-link" href="/github/#accept">GitHub Classroom Assignment </a></li>
          <li class="nav-item"> <a onclick="expand('token')" class="nav-link" href="/github/#token">Personal Access Token</a></li>
          <li class="nav-item"> <a onclick="expand('clone')" class="nav-link" href="/github/#clone">Cloning a Repo in Eclipse </a></li>
          <li class="nav-item"> <a onclick="expand('commit')" class="nav-link" href="/github/#commit">Commiting and Pushing Updates </a></li>
          <li class="nav-item"> <a onclick="expand('adding')" class="nav-link" href="/github/#adding">Adding Existing Projects to a Repo</a></li>
          <li class="nav-item"> <a onclick="expand('pull')" class="nav-link" href="/github/#pull">Updating Existing Projects in Eclipse from GitHub</a></li>
          <li class="nav-item"> <a onclick="expand('help')" class="nav-link" href="/github/#help">Troubleshooting</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/exam">
        <span class="menu-icon">
          <i class="mdi mdi-grease-pencil"></i>
        </span>
        <span class="menu-title">AP Exam Information</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="#">
        <span class="menu-icon">
          <i class="mdi mdi-grease-pencil"></i>
        </span>
        <span class="menu-title">SwiftUI (TBD)</span>
      </a>
    </li>
  </ul>
</nav>

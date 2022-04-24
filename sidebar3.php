<div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            AP
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            CSA Practice
          </a>
        </div>
        <ul class="nav">
          <li <?php if($_SESSION['view']=='home'){?>class="active"<?php }?> >
            <a href="/">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li <?php if($_SESSION['view']=='notes'){?>class="active"<?php }?> >
           <!-- <a href="#">
              <i class="tim-icons icon-align-center"></i>
              <p>Notes (Coming Soon)</p>
            </a> -->
			<a data-toggle="collapse" href="#main" aria-expanded="true">
              <i class="tim-icons icon-molecule-40"></i>
              <p>
                Notes
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="main">
              <ul class="nav ">
				<li>
					<a href="/notes/view/1">
					  <p>Primitive Types</p>
					</a>
				</li> 				<li>
					<a href="/notes/view/2">
					  <p>Using Objects</p>
					</a>
				</li>              
				<li>
					<a href="#">
					  <p>Booleean Expressions and if Statements</p>
					</a>
				</li>	
				<li>
					<a href="#">
					  <p>Iteration</p>
					</a>
				</li>
				<li>
					<a href="#">
					  <p>Writing Classes</p>
					</a>
				</li>				
				<li>
					<a href="#">
					  <p>Array</p>
					</a>					
				</li>				
				<li>
					<a href="#">
					  <p>ArrayList</p>
					</a>
				</li>				
				<li>
					<a href="#">
					  <p>2D Array</p>
					</a>
				</li>				
				<li>
					<a href="#">
					  <p>Inheritance</p>
					</a>
				</li>
				<li>
					<a href="#">
					  <p>Recursion</p>
					</a>
				</li>				
				</ul>
            </div>			  
			  
			  
          </li>
		  <li <?php if($_SESSION['view']=='lab'){?>class="active"<?php }?> >
            <a href="/lab">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Labs</p>
            </a>
          </li>
          <li <?php if($_SESSION['view']=='practice'){?>class="active"<?php }?> >
            <a href="/practice">
              <i class="tim-icons icon-atom"></i>
              <p>Coding Pactice</p>
            </a>
          </li>
          <li <?php if($_SESSION['view']=='quiz'&&isset($_SESSION['method'])&&($_SESSION['method']=='mcs'||$_SESSION['method']=='category2')){?>class="active"<?php }?> >
            <a href="/quiz/mcs">
              <i class="tim-icons icon-bullet-list-67"></i>
              <p>MC Practice</p>
            </a>
          </li>
          <li <?php if($_SESSION['view']=='quiz'&&isset($_SESSION['method'])&&($_SESSION['method']=='frqs'||$_SESSION['method']=='frq2')){?>class="active"<?php }?> >
            <a href="/quiz/frqs">
              <i class="tim-icons icon-paper"></i>
              <p>FRQ Practice</p>
            </a>
          </li>			
          <li <?php if($_SESSION['view']=='projects'){?>class="active"<?php }?> >
            <a href="#">
              <i class="tim-icons icon-controller"></i>
              <p>Projects (Coming Soon)</p>
            </a>
          </li>			
         <?php if(isset($_SESSION['admin'])){?>
          <li>
            <a href="/notifications">
              <i class="tim-icons icon-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <?php }?>
			<?php if(isset($_SESSION['LoggedIn'])){?>
          <li <?php if($_SESSION['view']=='profile'){?>class="active"<?php }?> >
            <a href="/profile/preferences">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
			<?php }?>
         </ul>
      </div>
    </div>
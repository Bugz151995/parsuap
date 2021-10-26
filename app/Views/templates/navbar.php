<header>
  <!-- ************************************************* -->
  <!-- SIDEBAR -->
  <div id="__sidebar" class="py-4 px-4 border-0 border-lg-end d-flex flex-column justify-content-between">  
    <nav class="nav flex-column small">
      <div class="navbar-brand row justify-content-center g-1 p-2 m-0 bg-light rounded rounded-3">
        <div class="col-3 d-flex justify-content-center align-items-center">
          <img src="<?= site_url()?>dist/images/63457.png" alt="" class="profile-pic">
        </div>
        <div class="col-9 d-flex justify-content-center align-items-center">
          <div class="small text-start">
            <h6 class="align-middle text-dark small fw-bold mb-1">
              <?= session()->getFlashData('fname') ?>
              Czar
              <?= session()->getFlashData('lname') ?>
            </h6>
            <h6 class="align-middle small text-dark mb-0"><i class="fas fa-circle text-success fa-fw fa-xs"></i> <span class="small">Online</span></h6>
          </div>
        </div>
      </div>

      <hr class="text-primary p-1 rounded rounded-3">

      <a class="nav-link rounded rounded-3 <?= ($page == 'home') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" aria-current="page" href="<?= site_url()?>home">
        <i class="fas fa-home fa-fw me-2"></i> <span class="align-middle">Home</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <a class="nav-link rounded rounded-3 <?= ($page == 'announcements') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" href="<?= site_url()?>announcements">
        <i class="fas fa-bullhorn fa-fw me-2"></i> <span class="align-middle">Announcements</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <a class="nav-link rounded rounded-3 <?= ($page == 'events') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" href="<?= site_url()?>events">
        <i class="fas fa-calendar-check fa-fw me-2"></i> <span class="align-middle">Events</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <a class="nav-link rounded rounded-3 <?= ($page == 'friends') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" href="<?= site_url()?>friends">
        <i class="fas fa-user-friends fa-fw me-2"></i> <span class="align-middle">Friends</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <a class="nav-link rounded rounded-3 <?= ($page == 'carreers') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" href="<?= site_url()?>carreers">
        <i class="fas fa-briefcase fa-fw me-2"></i> <span class="align-middle">Carreers</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <a class="nav-link rounded rounded-3 <?= ($page == 'archive') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" href="<?= site_url()?>archive">
        <i class="fas fa-archive fa-fw me-2"></i> <span class="align-middle">Archive</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <a class="nav-link rounded rounded-3 <?= ($page == 'forum') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" href="<?= site_url()?>forum">
        <i class="fas fa-comment-dots fa-fw me-2"></i> <span class="align-middle">Forum</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <hr class="text-secondary p-1 rounded rounded-3">
      
      <a class="nav-link rounded rounded-3 <?= ($page == 'account') ? 'fw-bold bg-primary text-light' : 'text-muted' ;?>" href="<?= site_url()?>account">
        <i class="fas fa-cog fa-fw me-2"></i> <span class="align-middle">My Account</span>
        <div class="float-end"><i class="fas fa-chevron-right"></i></div>
      </a>

      <a class="nav-link rounded rounded-3 text-muted mb-5" href="<?= site_url()?>logout">
        <i class="fas fa-sign-out-alt fa-fw me-2"></i> <span class="align-middle">Logout</span>
      </a>
    </nav>

    
    <div id="__sidebar-footer" class="text-center small text-primary">
      <hr class="text-primary p-1 rounded rounded-3">
      2021 <i class="far fa-copyright"></i> Partido State University
    </div>
  </div>
  <!-- sidebar transparent background -->
  <div id="__sidebar-background" class="d-none"></div>

  <!-- ************************************************* -->
  <!-- TOPNAVBAR -->
  <div id="__topnavbar" class="topnavbar fixed-top">
    <div class="container-fluid d-flex align-items-center h-100">
      <button id="__toggle-btn" class="d-block d-lg-none btn btn-transparent text-light btn-sm">
        <i id="__sidebar-toggle-icon" class="fas fa-bars fa-fw fa-lg"></i>
      </button>
      <nav class="w-100 d-flex justify-content-between">
        <a href="<?= site_url()?>home" class="navbar-brand p-0 d-flex align-items-center">
          <img src="<?= site_url()?>dist/images/PSU-logo-vector.png" class="school-logo p-2 d-none d-lg-block" alt="partido state university logo">
          <span class="school-name d-none d-lg-inline-block h6 align-middle text-uppercase text-light text-shadow fw-bold mb-0">ParSU Alumni Portal</span>
        </a>

        <!-- notifications,messages, and search alumni -->
        <div class="row mx-0 g-4 pe-2">
          <div class="col-auto d-flex align-items-center d-none d-sm-flex">
            <!-- searchbar for large screen -->
            <div class="d-none d-sm-block">
              <div class="input-group input-group-sm rounded-pill border bg-white">
                <div class="input-group-text border-0 bg-white rounded-pill" id="toggle_search"><i class="fas fa-search"></i></div>
                <input type="search" name="search" id="search" class="form-control form-control-sm border-0" placeholder="Search Alumni...">
                <input type="submit" value="Search" class="btn btn-outline-dark border-0 btn-sm rounded-pill">
              </div>
            </div>
          </div>

          <!-- searchbar toggle for small screen -->
          <div class="col-auto d-flex align-items-center d-block d-sm-none">
            <button type="button" id="__search_sm_toggle_btn" class="btn btn-outline-light btn-sm d-block d-sm-none dropdown-toggle rounded-pill"><i class="fas fa-search"></i></button>
          </div>

          <!-- messages -->
          <div class="col-auto d-flex align-items-center">
            <div class="btn-group dropdown">
              <button type="button" class="btn p-0 rounded-circle position-relative text-light" id="notifDropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <i class="fas fa-comments fa-lg fa-fw"></i>
                <!-- badge -->
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small">
                  3
                  <span class="visually-hidden">unread messages</span>
                </span>
              </button>

              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end p-2">                
                <li>
                  <div class="d-flex justify-content-between align-items-center gap-5">
                    <h1 class="fw-bold h5 p-2 mb-0">Messages</h1>
                    <div class="d-flex">
                      <a href="<?= site_url()?>message/new" class="text-muted btn p-2 rounded-circle"><i class="fas fa-edit fa-fw"></i></a>
                      <a href="<?= site_url()?>message" class="text-muted btn p-2 rounded-circle"><i class="fas fa-ellipsis-v fa-fw"></i></a>
                    </div>
                  </div>
                </li>

                <li><hr class="dropdown-divider"></li>
                
                <!-- messages -->
                <li>
                  <a class="dropdown-item rounded rounded-3 p-2" href="<?= site_url()?>">
                    <div class="d-flex gap-3 align-items-center position-relative">
                      <div class="col-auto">
                        <img src="<?= site_url()?>dist/images/63457.png" class="profile-pic" alt="">
                      </div>
                      <div class="col">
                        <h2 class="fw-bold h6 mb-0">              
                          <?= session()->getFlashData('fname') ?>
                          <?= session()->getFlashData('lname') ?>
                        </h2>
                        <p class="small mb-0">
                          Hello po! &#xb7;<span class="text-muted px-2">1h</span>
                        </p>
                      </div>
                      <span class="position-absolute top-0 start-100 translate-middle p-1 bg-primary border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                    </div>
                  </a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                  <div class="text-center">
                    <a class="link-primary small fw-bold text-center rounded rounded-3 p-2" href="<?= site_url()?>message">
                      Open Messages
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- notifications dropdown -->
          <div class="col-auto d-flex align-items-center">
            <div class="btn-group dropdown">
              <button type="button" class="btn p-0 rounded-circle position-relative text-light" id="notifDropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <i class="fas fa-bell fa-lg fa-fw"></i>
                <!-- badge -->
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small">
                  3
                  <span class="visually-hidden">unread messages</span>
                </span>
              </button>

              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end p-2">                
                <li>
                  <div class="d-flex justify-content-between align-items-center gap-5">
                    <h1 class="fw-bold h5 p-2 mb-0">Notifications</h1>
                    <a href="<?= site_url()?>notifications" class="text-muted btn p-2 rounded-circle"><i class="fas fa-ellipsis-v fa-fw"></i></a>
                  </div>
                </li>

                <li><hr class="dropdown-divider"></li>
                
                <!-- comment notif -->
                <li>
                  <a class="dropdown-item rounded rounded-3 p-2" href="<?= site_url()?>">
                    <div class="d-flex gap-3 align-items-center position-relative">
                      <div class="col-auto">
                        <img src="<?= site_url()?>dist/images/63457.png" class="profile-pic" alt="">
                      </div>
                      <div class="col">
                        <h2 class="fw-bold h6 mb-0">              
                          <?= session()->getFlashData('fname') ?>
                          <?= session()->getFlashData('lname') ?>
                        </h2>
                        <p class="small mb-0">
                          Commented on your post
                        </p>
                      </div>
                      <span class="position-absolute top-0 start-100 translate-middle p-1 bg-primary border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                    </div>
                  </a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                  <div class="text-center">
                    <a class="link-primary small fw-bold text-center rounded rounded-3 p-2" href="<?= site_url()?>notifications">
                      See All Notifications
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- profile dropdown -->
          <div class="col-auto d-flex align-items-center">
            <div class="btn-group dropdown">
              <button type="button" class="btn p-0 rounded-circle" id="profileDropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <img src="<?= site_url()?>dist/images/63457.png" alt="" class="profile-pic" id="user_modal_btn">
              </button>

              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end p-2">
                <li>
                  <a class="dropdown-item rounded rounded-3" href="<?= site_url()?>account">
                    <div class="d-flex gap-3 align-items-center">
                      <div class="col-auto">
                        <img src="<?= site_url()?>dist/images/63457.png" class="profile-pic" alt="">
                      </div>
                      <div class="col">
                        <h2 class="fw-bold h-1 mb-0">              
                          <?= session()->getFlashData('fname') ?>
                          <?= session()->getFlashData('lname') ?>
                        </h2>
                        <p class="small mb-0">
                          See more about your self
                        </p>
                      </div>
                    </div>                    
                  </a>
                </li>

                <li><hr class="dropdown-divider"></li>
                
                <!-- create event -->
                <li>
                  <a class="dropdown-item rounded rounded-3 p-2" href="<?= site_url()?>">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-calendar-check fa-fw fa-lg me-2"></i>
                        <span>Create Event</span>
                      </div>
                      <div class="">
                      <i class="fas fa-chevron-right fa-fw"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- create post -->
                <li>
                  <a class="dropdown-item rounded rounded-3 p-2" href="<?= site_url()?>">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-edit fa-fw fa-lg me-2"></i>
                        <span>Create Post</span>
                      </div>
                      <div class="">
                      <i class="fas fa-chevron-right fa-fw"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- create job posting -->
                <li>
                  <a class="dropdown-item rounded rounded-3 p-2" href="<?= site_url()?>">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-briefcase fa-fw fa-lg me-2"></i>
                        <span>Create Job Post </span>
                      </div>
                      <div class="">
                      <i class="fas fa-chevron-right fa-fw"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- settings -->
                <li>
                  <a class="dropdown-item rounded rounded-3 p-2" href="<?= site_url()?>">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-cog fa-fw fa-lg me-2"></i>
                        <span>Settings</span>
                      </div>
                      <div class="">
                      <i class="fas fa-chevron-right fa-fw"></i>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- logout -->
                <li>
                  <a class="dropdown-item rounded rounded-3 p-2" href="<?= site_url()?>logout">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-sign-out-alt fa-fw fa-lg me-2"></i>
                        <span>Logout</span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!-- small screen searchbar -->
  <div id="search_sm" class="d-block d-sm-none shadow">
    <div id="search_sm_transparent_bg" class="py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-9">
            <div class="input-group">
              <div class="input-group-text border-0 bg-white"><i class="fas fa-search"></i></div>
              <input type="search" name="" id="" class="form-control form-control-sm border-0" placeholder="Search Alumni...">
              <input type="submit" value="Search" class="btn btn-outline-light btn-sm">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- hidden toast container -->
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1030; margin-top: 5rem!important">
  <!-- Then put toasts within -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <?php if(session()->getTempData('success')): ?>
      <div class="toast-header bg-success text-light border-0">
        <strong><i class="fas fa-check-circle fa-fw me-2"></i></strong>
        <strong class="me-auto">Success</strong>
        <small class="text-light">just now</small>
        <button type="button" id="closeToastBtn" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      
      <div class="toast-body bg-success border-0 text-light rounded-bottom">
        <?= session()->getTempData('msg') ?>
      </div>
    <?php endif ?>

    <?php if(session()->getTempData('warning')): ?>
      <div class="toast-header text-dark bg-warning border-0">
        <strong><i class="fas fa-exclamation-triangle fa-fw me-2"></i></strong>
        <strong class="me-auto">Warning</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      
      <div class="toast-body bg-warning border-0 rounded-bottom">
        <?= session()->getTempData('msg') ?>
      </div>
    <?php endif ?>

    <?php if(session()->getTempData('error')): ?>
      <div class="toast-header bg-danger text-light border-0">
        <strong><i class="fas fa-exclamation-triangle fa-fw me-2"></i></strong>
        <strong class="me-auto">Error</strong>
        <small class="text-light">just now</small>
        <button type="button" id="closeToastBtn" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>

      <div class="toast-body bg-danger border-0 text-light rounded-bottom">
        <?= session()->getTempData('msg') ?>
      </div>
    <?php endif ?>

    <?php if(session()->getTempData('info')): ?>
      <div class="toast-header bg-info text-dark border-0">
        <strong><i class="fas fa-exclamation-triangle fa-fw me-2"></i></strong>
        <strong class="me-auto">Info</strong>
        <small class="text-muted">just now</small>
        <button type="button" id="closeToastBtn" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>

      <div class="toast-body bg-danger border-0 text-dark rounded-bottom">
        <?= session()->getTempData('msg') ?>
      </div>
    <?php endif ?>
  </div>
</div>
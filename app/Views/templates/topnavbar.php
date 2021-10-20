<header>
  <!-- sidebar -->
  <div id="__sidebar" class="py-4 px-4 border-end d-flex flex-column justify-content-between">  
    <nav class="nav flex-column small">
      <div class="navbar-brand row g-1 py-3 m-0 bg-light rounded">
        <div class="col-12 d-flex justify-content-center align-items-center">
          <img src="<?= site_url()?>dist/images/63457.png" alt="" class="img-fluid w-50 px-2">
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">
          <div class="small text-center mt-3">

            <h6 class="align-middle text-dark small fw-bold mb-1">
              <i class="fas fa-user-circle fa-fw"></i>
              <?= session()->get('firstname') ?>

              <?php if(session()->get('middlename')): ?>
                <?= substr(session()->get('middlename'), 0, 1).'.' ?>
              <?php endif ?>

              <?= session()->get('lastname') ?>
            </h6>
            <h6 class="align-middle small text-dark"><i class="fas fa-circle text-success fa-fw fa-xs"></i> <span class="small">Online</span></h6>
          </div>
        </div>
      </div>
      <hr>

      <a class="nav-link <?= ($page == 'home') ? 'fw-bold' : 'text-muted' ;?>" aria-current="page" href="<?= site_url()?>home"><i class="fas fa-home fa-fw me-2"></i> <span class="align-middle">Home</span></a>
      <a class="nav-link <?= ($page == 'events') ? 'fw-bold' : 'text-muted' ;?>" href="<?= site_url()?>events"><i class="fas fa-calendar-check fa-fw me-2"></i> <span class="align-middle">Events</span></a>
      <a class="nav-link <?= ($page == 'friends') ? 'fw-bold' : 'text-muted' ;?>" href="<?= site_url()?>friends"><i class="fas fa-user-friends fa-fw me-2"></i> <span class="align-middle">Friends</span></a>
      <a class="nav-link <?= ($page == 'archive') ? 'fw-bold' : 'text-muted' ;?>" href="<?= site_url()?>archive"><i class="fas fa-archive fa-fw me-2"></i> <span class="align-middle">Archive</span></a>
      <a class="nav-link <?= ($page == 'forum') ? 'fw-bold' : 'text-muted' ;?>" href="<?= site_url()?>forum"><i class="fas fa-comment-dots fa-fw me-2"></i> <span class="align-middle">Forum</span></a>
      <hr>
      
      <a class="nav-link <?= ($page == 'account') ? 'fw-bold' : 'text-muted' ;?>" href="<?= site_url()?>account"><i class="fas fa-cog fa-fw me-2"></i> <span class="align-middle">My Account</span></a>
      <a class="nav-link text-muted mb-5" href="<?= site_url()?>logout">
        <i class="fas fa-sign-out-alt fa-fw me-2"></i> <span class="align-middle">Logout</span>
      </a>
    </nav>

    
    <div id="__sidebar-footer" class="text-center small text-muted">
      <hr>
      <i class="far fa-copyright"></i> Partido State University
    </div>
  </div>

  <!-- sidebar transparent background -->
  <div id="__sidebar-background" class="d-none"></div>

  <!-- topnavbar -->
  <div id="__topnavbar" class="topnavbar fixed-top">
    <div class="container d-flex align-items-center h-100">
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
              <div class="input-group input-group-sm">
                <div class="input-group-text border-0 bg-white" id="toggle_search"><i class="fas fa-search"></i></div>
                <input type="search" name="search" id="search" class="form-control form-control-sm border-0" placeholder="Search Alumni...">
                <input type="submit" value="Search" class="btn btn-outline-light btn-sm">
              </div>
            </div>
          </div>

          <!-- searchbar toggle for small screen -->
          <div class="col-auto d-flex align-items-center d-block d-sm-none">
            <button type="button" id="__search_sm_toggle_btn" class="btn btn-outline-light btn-sm d-block d-sm-none dropdown-toggle"><i class="fas fa-search"></i></button>
          </div>

          <div class="col-auto d-flex align-items-center">
            <a href="<?= site_url()?>logout" class="my-3 rounded-pill link-light position-relative">
              <i class="fas fa-comments fa-lg"></i>
              <!-- badge -->
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small">
                3
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
          </div>

          <div class="col-auto d-flex align-items-center">
            <a href="<?= site_url()?>logout" class="my-3 rounded-pill link-light position-relative">
              <i class="fas fa-bell fa-lg"></i>
              <!-- badge -->
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small">
                3
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
          </div>

          <div class="col-auto d-flex align-items-center">
            <button class="btn btn-warning p-0 m-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#profile">
              <img src="<?= site_url()?>dist/images/63457.png" alt="" id="user_modal_btn">
            </button>
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

<!-- modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fas fa-user-circle fa fw me-2"></i>My Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        <div class="row mb-5 justify-content-center">
          <div class="col-3">
            <img src="<?= site_url()?>dist/images/63457.png" class="img-fluid" alt="">
          </div>
          <div class="col-auto d-flex align-items-center"> 
            <h5 class="display-6 fw-bold">              
              <?= session()->get('firstname') ?>

              <?php if(session()->get('middlename')): ?>
                <?= substr(session()->get('middlename'), 0, 1).'.' ?>
              <?php endif ?>

              <?= session()->get('lastname') ?>
            </h5>
          </div>
        </div>
        
        <!-- education -->
        <div class="mb-1">
          <label for="education" class="col-form-label fw-bold">Education</label>
        </div>
        <div class="mb-1">
          <div class="d-flex justify-content-between align-items-center">
            <div class="col-auto">
              <i class="fas fa-graduation-cap fa-fw me-2"></i>
              <h7 class="modal-title" id="createPostLabel">
                <span class="text-danger">no data from database yet join query</span>
              </h7>
            </div>
          </div>
        </div>

        <!-- address -->
        <div class="mb-1">
          <label for="Places Lived" class="col-form-label fw-bold mt-3">My Address</label>
        </div>
        <div class="mb-1">
          <div class="d-flex justify-content-between align-items-center">
            <div class="col-auto">
              <i class="fas fa-map-marker-alt fa-fw me-2"></i>
              <h7 class="modal-title" id="createPostLabel">
                <span class="text-danger">no data from database yet join query</span>
              </h7>
            </div>
          </div>
        </div>

        <!-- contact info -->
        <div class="mb-1">
          <label for="Places Lived" class="col-form-label fw-bold mt-3">Contact Info</label>
        </div>
        <div class="mb-1">
          <div class="d-flex justify-content-between align-items-center">
            <div class="col-auto">
              <i class="fas fa-phone fa-fw me-2"></i>
              <h7 class="modal-title" id="createPostLabel">
                <?= session()->get('cp_num') ?>
              </h7>
            </div>
          </div>
        </div>
        <div class="mb-1">
          <div class="d-flex justify-content-between align-items-center">
            <div class="col-auto">
              <i class="fas fa-envelope-open-text fa-fw me-2"></i>
              <h7 class="modal-title" id="createPostLabel">
                <?= session()->get('email') ?>
              </h7>
            </div>
          </div>
        </div>

        <!-- Gender -->
        <div class="mb-1">
          <label for="Places Lived" class="col-form-label fw-bold mt-3">Basic Info</label>
        </div>
        <div class="mb-1">
          <div class="d-flex justify-content-between align-items-center">
            <div class="col-auto">
              <i class="fas fa-male fa-fw me-2"></i>
              <h7 class="modal-title" id="createPostLabel">
                <?= session()->get('sex') ?>
              </h7>
            </div>
          </div>
        </div>

        <!-- bday -->
        <div class="mb-1">
          <div class="d-flex justify-content-between align-items-center">
            <div class="col-auto">
              <i class="fas fa-birthday-cake fa-fw me-2"></i>
              <h7 class="modal-title" id="createPostLabel">
                <?= session()->get('birthdate') ?>
              </h7>
            </div>
          </div>
        </div> 
      </div>
      <div class="modal-footer">
        <a href="<?= site_url()?>account" class="btn">See more about your self</a>
      </div>
    </div>
  </div>
</div>
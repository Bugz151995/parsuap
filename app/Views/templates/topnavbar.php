<header class="topnavbar">
  <!-- sidebar -->
  <div id="__sidebar" class="py-4 px-4 border-end d-flex flex-column justify-content-between">
    <nav class="nav flex-column small">
      <div class="navbar-brand row g-1 py-3 m-0 bg-light rounded justify-content-center align-items-center">
        <div class="col-4">
          <img src="<?= site_url()?>dist/images/63457.png" alt="" class="img-fluid px-2" data-bs-toggle="modal" data-bs-target="#profile">
        </div>
        <div class="col-8">
          <div class="small">
            <h6 class="align-middle text-dark small"><?= "Ryan Czar Abugao" ?></h6>
            <h6 class="align-middle small text-dark"><i class="fas fa-circle text-success fa-fw fa-xs"></i> <span class="small">Online</span></h6>
          </div>
        </div>
      </div>
      <hr>

      <a class="nav-link <?= ($page == 'home') ? 'fw-bold text-muted' : 'text-muted' ;?>" aria-current="page" href="<?= site_url()?>home"><i class="fas fa-home fa-fw me-2"></i> <span class="align-middle">Home</span></a>
      <a class="nav-link <?= ($page == 'events') ? 'fw-bold text-muted' : 'text-muted' ;?>" href="<?= site_url()?>events"><i class="fas fa-calendar-check fa-fw me-2"></i> <span class="align-middle">Events</span></a>
      <a class="nav-link <?= ($page == 'friends') ? 'fw-bold text-muted' : 'text-muted' ;?>" href="<?= site_url()?>friends"><i class="fas fa-user-friends fa-fw me-2"></i> <span class="align-middle">Friends</span></a>
      <a class="nav-link <?= ($page == 'archive') ? 'fw-bold text-muted' : 'text-muted' ;?>" href="<?= site_url()?>archive"><i class="fas fa-archive fa-fw me-2"></i> <span class="align-middle">Archive</span></a>
      <a class="nav-link <?= ($page == 'forum') ? 'fw-bold text-muted' : 'text-muted' ;?>" href="<?= site_url()?>forum"><i class="fas fa-comment-dots fa-fw me-2"></i> <span class="align-middle">Forum</span></a>
      <hr>
      
      <a class="nav-link <?= ($page == 'account') ? 'fw-bold text-muted' : 'text-muted' ;?>" href="<?= site_url()?>account"><i class="fas fa-user-circle fa-fw me-2"></i> <span class="align-middle">My Account</span></a>
    </nav>

    
    <div id="__sidebar-footer" class="text-center small text-muted">
      <hr>
      <i class="far fa-copyright"></i> Partido State University
    </div>
  </div>

  <!-- sidebar transparent background -->
  <div id="__sidebar-background" class="d-none"></div>

  <!-- topnavbar -->
  <div class="container d-flex sticky-top align-items-center">
    <button id="__toggle-btn" class="d-block d-lg-none btn btn-transparent text-light btn-sm">
      <i id="__sidebar-toggle-icon" class="fas fa-bars fa-fw fa-lg"></i>
    </button>
    <nav class="w-100 d-flex justify-content-between">
      <a href="<?= site_url()?>" class="navbar-brand p-0 d-flex align-items-center">
        <img src="<?= site_url()?>dist/images/PSU-logo-vector.png" class="school-logo p-2" alt="partido state university logo">
        <span class="school-name d-none d-lg-inline-block h6 align-middle text-uppercase text-light text-shadow fw-bold mb-0">ParSU Alumni Portal</span>
      </a>
      <div class="row g-4 align-items-center pe-2">
        <div class="col-auto">
          <a href="<?= site_url()?>logout" class="my-3 rounded-pill link-light position-relative">
            <i class="fas fa-comments fa-lg"></i>
            <!-- badge -->
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small">
              3
              <span class="visually-hidden">unread messages</span>
            </span>
          </a>
        </div>

        <div class="col-auto">
          <a href="<?= site_url()?>logout" class="my-3 rounded-pill link-light position-relative">
            <i class="fas fa-bell fa-lg"></i>
            <!-- badge -->
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger small">
              3
              <span class="visually-hidden">unread messages</span>
            </span>
          </a>
        </div>

        <div class="col-auto">
          <img src="<?= site_url()?>dist/images/63457.png" alt="" class="user-profile p-2 rounded-circle border-light">
        </div>
      </div>
    </nav>
  </div>
</header>

<!-- modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profileLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?= site_url()?>dist/images/63457.png"style="width: 100px; height: 100px: object-fit: contain" alt="">
        <div class="small">
          <h5 class="p-4 row align-items-center" class="align-middle text-dark small"><?= "Ryan Czar Abugao" ?></h5>
          <h4 class="align-middle small text-dark"><i class="fas fa-circle text-success fa-fw fa-xs"></i> <span class="small">Online</span></h4>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-1">
            <label for="education" class="col-form-label">Education</label>
          </div>
          <div class="mb-1">

            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-graduation-cap"></i>
                <h7 class="modal-title" id="createPostLabel">Partido State University</h7>
              </div>
              <button type="submit" class="btn"> <i class="fas fa-edit"></i></button>
            </div>

          </div>

          <div class="mb-1">
            <label for="Places Lived" class="col-form-label">Places Lived</label>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-home"></i>
                <h7 class="modal-title" id="createPostLabel">Add Current City</h7>
              </div>
              <button type="submit" class="btn"> <i class="fas fa-edit"></i></button>
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-map-marker-alt"></i>
                <h7 class="modal-title" id="createPostLabel">Add Hometown</h7>
              </div>
              <button type="submit" class="btn"> <i class="fas fa-edit"></i></button>
            </div>
          </div>

          <div class="mb-1">
            <label for="Places Lived" class="col-form-label">Contact Info</label>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-phone"></i>
                <h7 class="modal-title" id="createPostLabel">Ryan Czar Abugao</h7>
              </div>
              <button type="submit" class="btn"> <i class="fas fa-edit"></i></button>
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-envelope-open-text"></i>
                <h7 class="modal-title" id="createPostLabel">bea.jeandelle17@gmail.com</h7>
              </div>
              <button type="submit" class="btn"> <i class="fas fa-edit"></i></button>
            </div>
          </div>

          <div class="mb-1">
            <label for="Places Lived" class="col-form-label">Basic Info</label>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-male"></i>
                <h7 class="modal-title" id="createPostLabel">Male</h7>
              </div>
              <button type="submit" class="btn"> <i class="fas fa-edit"></i></button>
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-birthday-cake"></i>
                <h7 class="modal-title" id="createPostLabel">August 15,1995</h7>
              </div>
              <button type="submit" class="btn"> <i class="fas fa-edit"></i></button>
            </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn">See more about your self</button>
      </div>
    </div>
  </div>
</div>
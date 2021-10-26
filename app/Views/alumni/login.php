<header id="__login-topnavbar" class="sticky-sm-top shadow">
  <div class="navbar d-flex justify-content-center">
    <a href="<?= site_url()?>" class="navbar-brand">
      <img src="<?= site_url()?>dist/images/PSU-logo-vector.png" class="img-brand" alt="partido state university logo">
      <span class="school-name ms-2 h2 align-middle text-uppercase text-light text-shadow fw-bold">ParSU Alumni Portal</span>
    </a>
  </div>
</header>
<main id="__login-wrapper" class="container">
  <div id="__login-form" class="d-flex justify-content-center align-items-center">
    <div class="card shadow-sm rounded rounded-3 login-form-border mb-3 col-11 col-lg-12">
      <div class="row g-0">
        <div class="col-lg-7 d-none d-lg-block">
          <img src="<?= site_url()?>dist/images/3968682.jpg" class="img-cover rounded" alt="...">
        </div>
        <div class="col-lg-5 p-4 d-flex align-items-center">
          <div class="card-body">
            <h1 id="__login-title" class="card-title text-center fw-bold">LOGIN</h1>
            <hr id="__login-title-divider" class='p-1 mb-4'>
            <?= form_open('login') ?>
              <?= csrf_field() ?>
              <div class="mb-3 form-field">
                <?php if(isset($validation)): ?>
                  <?= $validation->showError('pass', 'error_single')?>
                <?php endif ?>
                <label for="email" class="form-label"><span class="text-danger">*</span> Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email')?>" placeholder="E-mail Address">
              </div>
              <div class="mb-4 form-field">
                <label for="pass" class="form-label"><span class="text-danger">*</span> Password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
              </div>
              <div class="mb-3 form-btn d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg px-4">Log In</button>
              </div>
              <div class="mt-5 form-btn text-center">
                <a href="<?= site_url()?>registration/name" class="btn btn-outline-secondary">Don't have Account? Register Now.</a>
              </div>
            <?= form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- footer -->
<footer class="container footer py-5 mt-lg-0">
  <div class="row row-cols-1 m-0 row-cols-lg-2 g-5">
    <div class="col">
      <a href="<?= site_url()?>" class="navbar-brand justify-content-center justify-content-lg-start w-100 d-flex">
        <img src="<?= site_url()?>dist/images/PSU-logo-vector.png" class="img-footer" alt="partido state university logo">
        <span class="school-name ms-2 h5 align-self-center text-dark text-uppercase fw-bold">Partido State University</span>
      </a>
      <ul class="list-group list-group-flush mt-2 mt-lg-4 text-center text-lg-start">
        <li class="list-group-item"><i class="fas fa-map-marker-alt fa-fw"></i> San Juan Bautista St., Goa, Camarines Sur, Philippines 4422</li>
        <li class="list-group-item"><i class="fas fa-phone fa-fw"></i> (054) 453-0235</li>
      </ul>
    </div>

    <div class="col d-flex justify-content-center justify-content-lg-end">
      <div class="social-links">
        <label for="socialLinks" class="h5 pt-2 w-100 text-center text-lg-start">Connect with us</label>
        <nav class="mt-2 mt-lg-4">
          <a href="https://www.facebook.com/ParSUOfficialFB"><i class="fab fa-facebook fa-fw fa-3x"></i></a>
          <a href="https://twitter.com/ParSU85559318" class="link-info"><i class="fab fa-twitter fa-fw fa-3x"></i></a>
          <a href="https://www.youtube.com/channel/UC6pN9_5fKLiFyerRiZns33Q" class="link-danger"><i class="fab fa-youtube fa-fw fa-3x"></i></a>
        </nav>
      </div>
    </div>
  </div>
</footer>

<!-- hidden toast container -->
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1030; margin-top: 6rem!important">
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
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>

      <div class="toast-body bg-info border-0 text-dark rounded-bottom">
        <?= session()->getTempData('msg') ?>
      </div>
    <?php endif ?>
  </div>
</div>

<script src="<?= site_url()?>dist/js/show_toast.js"></script>
<!-- call toast if something happens in the system -->
<?php if(session()->getTempData('info')):?>
  <script>
    window.addEventListener('DOMContentLoaded', ()=>{
      showToast();
    });
  </script>
<?php endif?>
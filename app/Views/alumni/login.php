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
        <div class="col-lg-7">
          <img src="<?= site_url()?>dist/images/3968682.jpg" class="img-cover rounded-start" alt="...">
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
                <a href="#registerp_1" class="btn btn-outline-secondary" data-bs-toggle="modal" role="button">Don't have Account? Register Now.</a>
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
  <div class="row row-cols-1 row-cols-lg-2 g-5">
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

<!-- modal 1-->
<div class="modal fade" id="registerp_1" aria-hidden="true" aria-labelledby="registerp_1Label" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerp_1Label">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center text-decoration-underline">Personal Information</div>
            <div class="row row-cols-1 row-cols-lg-3 g-3 mb-3">
              <div class="col form-field">
                <label for="fname" class="form-label"><span class="text-danger">*</span> First Name</label>
                <input type="text" id="fname" name="fname" class="form-control form-control-sm" placeholder="Input First Name">
              </div>
              <div class="col form-field">
                <label for="mname" class="form-label">Middle Name</label>
                <input type="text" id="mname" name="mname" class="form-control form-control-sm" placeholder="Input Middle Name">
              </div>
              <div class="col form-field">
                <label for="lname" class="form-label"><span class="text-danger">*</span> Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control form-control-sm" placeholder="Input Last Name">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col form-field">
                <label for="bday" class="form-label"><span class="text-danger">*</span> Birthdate</label>
                <input type="date" id="bday" name="bday" class="form-control form-control-sm" placeholder="Select or Input Date of Birth">
              </div>
              <div class="col form-field">
                <label for="sex" class="form-label"><span class="text-danger">*</span> Sex</label>
                <select name="sex" id="sex" class="form-select form-select-sm">
                  <option value="" selected disabled>Select Sex</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#registerp_2" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
      </div>
    </div>
  </div>
</div>
            
<!-- modal 2 -->
<div class="modal fade" id="registerp_2" aria-hidden="true" aria-labelledby="registerp_2Label" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerp_2Label">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center text-decoration-underline">Personal Information</div>
            <div class="row row-cols-1 row-cols-lg-3 g-3">
              <div class="col form-field">
                <label for="street" class="form-label"><span class="text-danger">*</span> House#/Street/Sitio/Purok</label>
                <input type="text" id="street" name="street" class="form-control form-control-sm" placeholder="Input House#/Street/Sitio/Purok">
              </div>
              <div class="col form-field">
                <label for="brgy" class="form-label"><span class="text-danger">*</span> Barangay</label>
                <input type="text" id="brgy" name="brgy" class="form-control form-control-sm" placeholder="Input Barangay">
              </div>
              <div class="col form-field">
                <label for="cm" class="form-label"><span class="text-danger">*</span> Municipality/City</label>
                <input type="text" id="cm" name="cm" class="form-control form-control-sm" placeholder="Input Municipality/City">
              </div>
              <div class="col form-field">
                <label for="province" class="form-label"><span class="text-danger">*</span> Province</label>
                <input type="text" id="province" name="province" class="form-control form-control-sm" placeholder="Input Province">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button class="btn btn-primary" data-bs-target="#registerp_1" data-bs-toggle="modal" data-bs-dismiss="modal">Prev</button>
        <button class="btn btn-primary" data-bs-target="#registerp_3" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 3 -->
<div class="modal fade" id="registerp_3" aria-hidden="true" aria-labelledby="registerp_3Label" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerp_3Label">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center text-decoration-underline">Educational Background</div>
            <div class="row row-cols-1 row-cols-lg-3 g-3">
              <div class="col form-field">
                <label for="asd" class="form-label"><span class="text-danger">*</span> Associate Degree/Vocational</label>
                <select name="asd" id="asd" class="form-select form-select-sm">
                  <option value="" selected disabled>Select Course</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col form-field">
                <label for="grad_year" class="form-label"><span class="text-danger">*</span> Year Graduated</label>
                <input type="text" id="grad_year" name="grad_year" class="form-control form-control-sm" placeholder="YYYY">
              </div>
            </div>
            <hr>
            <div class="row row-cols-1 row-cols-lg-3 g-3">
              <div class="col form-field">
                <label for="asd" class="form-label"><span class="text-danger">*</span> Bachelor's Degree</label>
                <select name="asd" id="asd" class="form-select form-select-sm">
                  <option value="" selected disabled>Select Course</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col form-field">
                <label for="grad_year" class="form-label"><span class="text-danger">*</span> Year Graduated</label>
                <input type="text" id="grad_year" name="grad_year" class="form-control form-control-sm" placeholder="YYYY">
              </div>
            </div>
            <hr>
            <div class="row row-cols-1 row-cols-lg-3 g-3">
              <div class="col form-field">
                <label for="asd" class="form-label"><span class="text-danger">*</span> Master's Degree</label>
                <select name="asd" id="asd" class="form-select form-select-sm">
                  <option value="" selected disabled>Select Course</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col form-field">
                <label for="grad_year" class="form-label"><span class="text-danger">*</span> Year Graduated</label>
                <input type="text" id="grad_year" name="grad_year" class="form-control form-control-sm" placeholder="YYYY">
              </div>
            </div>
            <hr>
            <div class="row row-cols-1 row-cols-lg-3 g-3">
              <div class="col form-field">
                <label for="asd" class="form-label"><span class="text-danger">*</span> Doctoral Degree</label>
                <select name="asd" id="asd" class="form-select form-select-sm">
                  <option value="" selected disabled>Select Course</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col form-field">
                <label for="grad_year" class="form-label"><span class="text-danger">*</span> Year Graduated</label>
                <input type="text" id="grad_year" name="grad_year" class="form-control form-control-sm" placeholder="YYYY">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button class="btn btn-primary" data-bs-target="#registerp_2" data-bs-toggle="modal" data-bs-dismiss="modal">Prev</button>
        <button class="btn btn-primary" data-bs-target="#registerp_4" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- modal 4 -->
<div class="modal fade" id="registerp_4" aria-hidden="true" aria-labelledby="registerp_4Label" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerp_4Label">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center text-decoration-underline">Account Information</div>
            <div class="row row-cols-1 row-cols-lg-3 g-3">
              <div class="col form-field">
                <label for="email" class="form-label"><span class="text-danger">*</span> Email</label>
                <input type="text" id="email" name="email" class="form-control form-control-sm" placeholder="Input Email">
              </div>
              <div class="col form-field">
                <label for="pass" class="form-label"><span class="text-danger">*</span> Password</label>
                <input type="text" id="pass" name="pass" class="form-control form-control-sm" placeholder="Input Password">
              </div>
              <div class="col form-field">
                <label for="pass_conf" class="form-label"><span class="text-danger">*</span> Password Confirmation</label>
                <input type="text" id="pass_conf" name="pass_conf" class="form-control form-control-sm" placeholder="Repeat Password">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <button class="btn btn-primary" data-bs-target="#registerp_3" data-bs-toggle="modal" data-bs-dismiss="modal">Prev</button>
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </div>
  </div>
</div>
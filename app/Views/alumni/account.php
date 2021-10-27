<main id="__main-content" class="bg-light">
  
<!-- My info -->
  <section class="mb-3">
    <!-- profile picture -->
    <div class="card border-0">
      <img src="<?= site_url()?>assets/images/3968687.jpg" class="cover-photo" alt="...">
      <div class="card-img-overlay pt-5">
        <div class="d-flex m-0 gap-3 justify-content-center align-items-center pt-5 mt-5">
          <div class="mt-0">
            <img src="<?= session()->getFlashData('profile')?>" class="account-profile" alt="">
          </div>
          <div class="mt-0 w-100 d-flex flex-column justify-content-center"> 
            <h6 class="me-auto display-6 h6 fw-bold text-center text-sm-start alert-primary text-dark p-1 rounded rounded-3 shadow">
              <?= session()->get('fname') ?>
              <?= session()->get('lname') ?>
            </h6>
            <div class="col-auto">
              <button class="btn btn-outline-light shadow" data-bs-toggle="modal" data-bs-target="#changeImage" data-bs-whatever="@mdo"><i class="fas fa-camera-retro"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- change profile picture modal -->
    <div class="modal fade" id="changeImage" tabindex="-1" aria-labelledby="changeImageLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-auto row align-items-center">
              <div class="col-auto">
                <img src="<?= session()->getFlashData('profile')?>" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
              </div>
              <div class="col-auto">
                <div class="d-flex flex-column">
                  <label for="message-text" class="fw-bold">
                    <?= session()->get('fname') ?>
                    <?= session()->get('lname') ?>
                  </label>
                  <span class="fst-italic">Change Profile Picture</span>
                </div>
              </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- create post form -->
          <?= form_open('account/update_image') ?>
            <?= csrf_field() ?>
          <div class="modal-body">
            <div class="mb-3">
              <img src="https://dummyimage.com/400x400/8a8a8a/b5b5b5&text=Image+Preview" alt="" id="pr_pic_preview" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover">
            </div>
            <div class="mt-4 mb-3">
              <div class="d-flex justify-content-between align-items-center">
                <div class="col-auto">
                  <input type="file" name="pr_pic" id="pr_pic" class="inputfile" />
                  <label for="pr_pic" class="btn btn-outline-primary">
                    <i class="fas fa-camera fa fw- me-2"></i>Select an Image...
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 rounded-pill">Save</button>
          </div>
          <?= form_close() ?>
        </div>
      </div>
    </div>

    <!-- create post modal -->
    <div class="modal fade" id="createPost" tabindex="-1" aria-labelledby="createPostLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-auto row align-items-center">
              <div class="col-auto">
                <img src="<?= session()->getFlashData('profile')?>" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
              </div>
              <div class="col-auto">
                <div class="d-flex flex-column">
                  <label for="message-text" class="fw-bold">
                    <?= session()->get('fname') ?>
                    <?= session()->get('lname') ?>
                  </label>
                  <span class="fst-italic">Create New Post</span>
                </div>
              </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- create post form -->
          <?= form_open('create_post') ?>
            <?= csrf_field() ?>
          <div class="modal-body">
            <div class="mb-3">
              <label for="post" class="col-form-label"><span class="text-danger me-2">*</span>Create Post Description</label>
              <textarea class="form-control" name="desc" style="resize: none; height: auto" id="post"></textarea>
            </div>
            <div class="mb-3">
              <img src="https://dummyimage.com/400x400/8a8a8a/b5b5b5&text=Image+Preview" alt="" id="img_preview" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover">
            </div>
            <div class="mt-4 mb-3">
              <div class="d-flex justify-content-between align-items-center">
                <div class="col-auto">
                  <input type="file" name="file" id="file" class="inputfile" />
                  <label for="file" class="btn btn-outline-primary">
                    <i class="fas fa-camera fa fw- me-2"></i>Attach an Image...
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 rounded-pill">Post</button>
          </div>
          <?= form_close() ?>
        </div>
      </div>
    </div>

    <!-- upload research modal -->
    <div class="modal fade" id="uploadResearch" tabindex="-1" aria-labelledby="uploadResearchLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-auto row align-items-center">
              <div class="col-auto">
                <img src="<?= session()->getFlashData('profile')?>" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
              </div>
              <div class="col-auto">
                <div class="d-flex flex-column">
                  <label for="message-text" class="fw-bold">
              <?= session()->get('fname') ?>
              <?= session()->get('lname') ?>
                  </label>
                  <span class="fst-italic">Upload Research Paper</span>
                </div>
              </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- upload research form -->
          <?= form_open('upload_research') ?>
          <?= csrf_field() ?>
            <div class="modal-body px-4">
              <div class="mb-3">
                <label for="title" class="col-form-label"><span class="text-danger me-2">*</span>Research Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= set_value('title')?>" placeholder="Input the Research Title here...">
              </div>

              <div class="mb-3">
                <label for="desc" class="col-form-label"><span class="text-danger me-2">*</span>Description</label>
                <input type="text" name="desc" id="desc" class="form-control" value="<?= set_value('desc')?>" placeholder="Input a brief introduction here...">
              </div>
              
              <div class="mb-3">
                <label for="other_author" class="col-form-label"><span class="text-danger me-2">*</span>Publication Date</label>
                <input type="date" name="dop" id="dop" class="form-control" value="<?= set_value('dop')?>" placeholder="Input the co-author here...">
              </div>
              
              <?php $fname = session()->get('firstname') ?>
                <?php $fullname = $fname.' ' ?>

                <?php if(session()->get('middlename')): ?>
                  <?php $mname = substr(session()->get('middlename'), 0, 1).'. ' ?>
                  <?php $fullname = $fullname.$mname ?>
                <?php endif ?>

                <?php $lname = session()->get('lastname') ?>
              <?php $fullname = $fullname.$lname ?>

              <div class="mb-3">
                <label for="post" class="col-form-label"><span class="text-danger me-2">*</span>Author</label>
                <input type="text" name="d" id="display_name" disabled value="<?= set_value('author', $fullname)?>" class="form-control">
                <?= form_hidden('author', session()->get('alumni_id')) ?>
              </div>

              <div class="mt-5 mb-3">
                <div class="d-flex justify-content-start align-items-center">
                  <div class="col-auto">
                    <input type="file" name="file" id="file" class="inputfile" />
                    <label for="file" class="btn btn-outline-danger">
                      <i class="fas fa-paperclip fa fw- me-2"></i>Attach your Research Paper here...
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary w-100 rounded-pill">Upload</button>
            </div>
          <?= form_close() ?>
        </div>
      </div>
    </div>

    <!-- Create post trigger -->
    <section class="my-4">
      <div class="row row-cols-1 row-cols-lg-2 m-0 px-lg-4 px-4 g-3">
        <div class="col">
          <div class="rounded rounded-3 p-3 alert-primary shadow-sm">
            <div class="d-flex gap-3 justify-content-center align-items-center">
              <img src="<?= session()->getFlashData('profile')?>" style="width: 40px; height: 40px: object-fit: contain" alt="">
              <div class="col-auto">
                <button type="button" class="btn btn-outline-primary px-3 px-xl-5 w-100 rounded-pill" data-bs-toggle="modal" data-bs-target="#createPost" data-bs-whatever="@mdo">
                  <i class="far fa-edit me-2"></i>Create New Post
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- edit profile modal -->
    <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-auto row align-items-center">
              <div class="col-auto">
                <img src="<?= session()->getFlashData('profile')?>" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
              </div>
              <div class="col-auto">
                <div class="d-flex flex-column">
                  <label for="message-text" class="fw-bold">
              <?= session()->get('fname') ?>
              <?= session()->get('lname') ?>
                  </label>
                  <span class="fst-italic">Edit Profile</span>
                </div>
              </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- upload research form -->
          <?= form_open('account/edit') ?>
          <?= csrf_field() ?>
            <div class="modal-body px-4">
              <div class="mb-3">
                <label for="fname" class="col-form-label"><span class="text-danger me-2">*</span>Firstname</label>
                <input type="text" name="fname" id="fname" class="form-control fw-bold" value="<?= set_value('fname', session()->get('firstname'))?>" placeholder="Input your Firstname here...">
              </div>

              <div class="mb-3">
                <label for="mname" class="col-form-label"><span class="text-danger me-2">*</span>Middlename</label>
                <input type="text" name="mname" id="mname" class="form-control fw-bold" value="<?= set_value('mname', session()->get('middlename'))?>" placeholder="Input your Middlename here...">
              </div>

              <div class="mb-3">
                <label for="lname" class="col-form-label"><span class="text-danger me-2">*</span>Lastname</label>
                <input type="text" name="lname" id="lname" class="form-control fw-bold" value="<?= set_value('lname', session()->get('lastname'))?>" placeholder="Input your Lastname here...">
              </div>

              <div class="mb-3">
                <label for="cp" class="col-form-label"><span class="text-danger me-2">*</span>Contact Number</label>
                <input type="text" name="cp" id="cp" class="form-control fw-bold" value="<?= set_value('cp', session()->get('cp_num'))?>" placeholder="Input your Contact Number here...">
              </div>
              
              <div class="mb-3">
                <label for="email" class="col-form-label"><span class="text-danger me-2">*</span>Email Address</label>
                <input type="text" name="email" id="email" class="form-control fw-bold" value="<?= set_value('email', session()->get('email'))?>" placeholder="Input your Email Address here...">
              </div>
              
              <div class="mb-3">
                <label for="sex" class="col-form-label"><span class="text-danger me-2">*</span>Gender</label>
                <select name="sex" id="sex" class="form-select fw-bold">
                  <option value="" selected disabled>Select a Gender</option>
                  <option value="Male" <?= (session()->get('sex') == "Male") ? set_select('sex', session()->get('sex'), TRUE) : set_select('sex') ?>>Male</option>
                  <option value="Female" <?= (session()->get('sex') == "Female") ? set_select('sex', session()->get('sex'), TRUE) : set_select('sex') ?>>Female</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="bday" class="col-form-label"><span class="text-danger me-2">*</span>Birthdate</label>
                <input type="date" name="bday" id="bday" class="form-control fw-bold" value="<?= set_value('bday', session()->get('birthdate'))?>" placeholder="Input the co-author here...">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary w-100 rounded-pill">Save</button>
            </div>
          <?= form_close() ?>
        </div>
      </div>
    </div>

    <!-- about me and friend list -->
    <div class="row m-0 px-4 px-lg-4 g-3">
      <!-- about me -->
      <div class="col-xl-6 col-lg-7">
        <div class="bg-white border rounded">
          <div class="p-4 d-flex flex-column">  
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="lead fw-bold m-0">About Me</h4>              
              <button type="button" class="btn btn-sm btn-outline-primary border-0" data-bs-toggle="modal" data-bs-target="#editProfile" data-bs-whatever="@mdo">
                <i class="far fa-edit me-2"></i>Edit Profile
              </button>
            </div>

            <div class="d-flex flex-column px-2">
              <!-- education -->
              <div class="mb-1">
                <label for="education" class="col-form-label fw-bold pt-0">Education</label>
              </div>
              <div class="mb-1">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-graduation-cap fa-fw me-2"></i>
                    <h7 class="modal-title" id="createPostLabel">
                      <span class="text-danger">no data join query</span>
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
                      <span class="text-danger text-wrap">no data join query</span>
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
          </div>
        </div>
      </div>

      <!-- friends list -->
      <!-- displays only 4 friends -->
      <div class="col-xl-6 col-lg-5">
        <div class="bg-white border rounded">
          <div class="p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h4 class="lead fw-bold m-0">Friends</h4>
              <a href="<?= site_url()?>friends/my_friends" class="btn btn-outline-secondary border-0 btn-sm">See All Friends</a>
            </div>

            <div class="row row-cols-2 row-cols-lg-2 row-cols-xl-3 g-3 px-2">
              <div class="col">
                <div class="card border-0">
                  <img src="<?= site_url()?>assets/images/3968682.jpg" class="rounded card-img-top" alt="...">
                  <div class="card-text">
                    <h5 class="card-title small">Ryan Czar Abugao</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0">
                  <img src="<?= site_url()?>assets/images/3968682.jpg" class="rounded card-img-top" alt="...">
                  <div class="card-text">
                    <h5 class="card-title small">Ryan Czar Abugao</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0">
                  <img src="<?= site_url()?>assets/images/3968682.jpg" class="rounded card-img-top" alt="...">
                  <div class="card-text">
                    <h5 class="card-title small">Ryan Czar Abugao</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-0">
                  <img src="<?= site_url()?>assets/images/3968682.jpg" class="rounded card-img-top" alt="...">
                  <div class="card-text">
                    <h5 class="card-title small">Ryan Czar Abugao</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </section>

  <!-- Publish -->
  <section class="mb-1">
    <div class="row justify-content-center align-items-center m-0 g-4 px-4 px-lg-4">
      <div class="col-12 m-0 p-2">
        <div class="bg-white border rounded p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="lead fw-bold m-0">Research</h4>
              <a href="<?= site_url()?>archive" class="btn btn-outline-secondary border-0 btn-sm">View Archive</a>
            </div>
          <div class="row row-cols-1 row-cols-md-2 m-0 g-3">        
            <!-- thesis published card -->
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Graphics Design</h5>
                  <small class="text-muted">Last updated 3 mins ago</small>
                  <p class="card-text">The Graduates of 2021: Championing Education amidst the new Normal (August 15,2021)</p>
                  <div class="mb-1">
                    <div class=" ps-3 d-flex justify-content-between align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-user fa-fw"></i>
                        <h7 class="modal-title" id="createPostLabel">Author</h7>
                      </div>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class=" ps-3 d-flex justify-content-between align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-users fa-fw"></i>
                        <h7 class="modal-title" id="createPostLabel">Co-Author</h7>
                      </div>
                    </div>
                  </div>
                  <div class="mb-1">
                    <div class="ps-3 d-flex justify-content-between align-items-center">
                      <div class="col-auto">
                        <i class="fas fa-book-open fa-fw"></i>
                        <h7 class="modal-title" id="createPostLabel">Published @ August 15,1995</h7>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="mb-5">
    <div class="row row-cols-1 row-cols-lg-2 m-0 px-lg-4 px-4 g-3">
      <div class="col">
        <div class="rounded rounded-3 p-3 alert-secondary shadow-sm d-flex justify-content-center">
          <button type="button" class="btn btn-outline-secondary px-5 rounded-pill" data-bs-toggle="modal" data-bs-target="#uploadResearch" data-bs-whatever="@mdo">
            <i class="fas fa-upload me-2"></i>Upload Research
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- my posts -->
  <section class="mb-3">
    <div class="container px-4 px-lg-4">
      <div class="row g-3 m-0">
        <div class="col-12 m-0 p-2">
          <div class="bg-white border rounded p-4">
            <h4 class="lead fw-bold mb-3">My Post</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- list of post latest to old -->
  <section class="mb-5">
    <div class="container px-4 px-lg-4">
      <div class="row g-3 justify-content-center px-2">
        <div class="col-12 col-lg-10">
          <div class="card mb-3 border-0 shadow-sm">
            <img src="https://dummyimage.com/600x400/8a8a8a/b5b5b5" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title h6">
                <i class="fas fa-user-circle fa-fw me-2"></i>
                <!-- alumni's name who created the post -->
                <?= "alumni's name" ?>
              </h5>
              <p class="card-text">
                <small class="text-muted">
                  <i class="fas fa-clock fa-fw me-2"></i>
                  <!-- humanized time -->
                  <?= "Last updated 3 mins ago" ?>
                </small>
              </p>
              <p class="card-text small">
                <!-- post description -->
                <?= "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta quia deserunt, excepturi fugit voluptate nulla." ?>
              </p>
            </div>
            
            <!-- comment section displays only 5 latest comments for performance -->
            <div class="border-top accordion accordion-flush" id="commentsAcc">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <span class="small">
                      <i class="far fa-comments me-2"></i> Comments
                    </span>
                  </button>
                </h2>

                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#commentsAcc">
                  <div class="accordion-body bg-light p-0">
                    <!-- comment -->
                    <div class="card border-0 bg-light mb-3 px-3">
                      <div class="row g-3">
                        <!-- user profile -->
                        <div class="col-2 d-flex justify-content-center align-items-start pt-3">
                          <img src="<?= site_url()?>assets/images/63457.png" class="img-fluid rounded-circle w-100" alt="...">
                        </div>
                        <!-- user comment -->
                        <div class="col-10">
                          <div class="card-body px-0">
                            <div class="border rounded p-2 bg-white">
                              <h5 class="card-title small">Card title</h5>
                              <p class="card-text small">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text">
                                <small class="text-muted">
                                  Last updated 3 mins ago
                                </small>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 text-center p-2">
                      <!-- link to a modal containing comments -->
                      <a href="#" class="link-dark">See more comments...</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- create comment form -->
            <div class="card-footer bg-white border-0 border-top p-4">
              <div class="row g-2 align-items-center justify-content-center">
                <div class="col-lg-2 d-none d-lg-flex d-flex justify-content-center">                  
                  <img src="<?= site_url()?>assets/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
                </div>
                <div class="col-12 col-lg-10">                  
                  <?= form_open('create_comment') ?>
                  <?= csrf_field() ?>
                  <div class="input-group border rounded bg-light">  
                    <div class="input-group-text border-0 bg-light"><i class="far fa-comment-dots"></i></div>
                    <input type="text" name="comment" id="comment" class="form-control border-0 bg-light" placeholder="Place your comment here...">
                    <input type="submit" value="Comment" class="border-0 btn btn-outline-dark">
                  </div>
                  <?= form_close() ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- call the preview image function -->
<script>
  document.addEventListener('DOMContentLoaded', ()=> {
    previewImg('pr_pic', 'pr_pic_preview');
    previewImg('file', 'img_preview');
  });
</script>
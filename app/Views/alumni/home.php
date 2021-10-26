<main id="__main-content">
  <div id="__home_bg">
    <div class="container p-5">
      <div class="my-5 py-5">
        <div class="display-5 fw-bold text-light mb-4 text-center text-lg-start">
          Welcome to Partido State University Alumni Portal
        </div>
        <h6 class="lead text-light">
          Our Alma Matter Provides us with a portal where graduates of Partido State University is enabled to interact with each other and review dissertations through the forum.
        </h6>
      </div>
    </div>
  </div>

  <!-- breadcrumb -->
  <section class="container py-4 px-4 px-lg-5">
    <div class="d-flex justify-content-between">
      <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><i class="fas fa-home fa-fw me-1"></i></li>
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
      <div class="d-flex gap-3 align-items-center alert-primary px-3 p-2 rounded rounded-3 shadow-sm">
        <div class="col-auto">
          <img src="<?= site_url()?>dist/images/63457.png" class="profile-pic" alt=""> 
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-sm btn-outline-primary text-start text-lg-center px-5 w-100 rounded-pill" data-bs-toggle="modal" data-bs-target="#createPost" data-bs-whatever="@mdo">
            <i class="far fa-edit me-2"></i>Create New Post
          </button>
        </div> 
      </div>
    </div>
  </section>

  <!-- create post modal -->
  <div class="modal fade" id="createPost" tabindex="-1" aria-labelledby="createPostLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="col-auto row align-items-center">
            <div class="col-auto">
              <img src="<?= site_url()?>dist/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
            </div>
            <div class="col-auto">
              <div class="d-flex flex-column">
                <label for="message-text" class="fw-bold">
                  <?= session()->getFlashdata('fname') ?>
                  <?= session()->getFlashdata('lname') ?>
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
            <label for="post" class="col-form-label">Create Post Description</label>
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

  <!-- list of post latest to old -->
  <section class="mb-5">
    <div class="container p-4 px-lg-5">
      <div class="row g-3 justify-content-center">
        <div class="col-12">
          <div class="card mb-3 border-0 shadow-sm rounded rounded-3">
            <img src="<?= site_url()?>dist/images/default_img.png" class="card-img-top" alt="...">
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
                          <img src="<?= site_url()?>dist/images/63457.png" class="img-fluid rounded-circle w-100" alt="...">
                        </div>
                        <!-- user comment -->
                        <div class="col-10">
                          <div class="card-body px-0">
                            <div class="border rounded bg-white shadow-sm p-2">
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
            <div class="card-footer bg-white border-0 p-4">
              <div class="row g-2 align-items-center justify-content-center">
                <div class="col-lg-2 d-none d-lg-flex d-flex justify-content-center">                  
                  <img src="<?= site_url()?>dist/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
                </div>
                <div class="col-12 col-lg-10">                  
                  <?= form_open('create_comment') ?>
                  <?= csrf_field() ?>
                  <div class="input-group border rounded bg-light">  
                    <div class="input-group-text border-0 bg-light"><i class="far fa-comment-dots"></i></div>
                    <input type="text" name="comment" id="comment" class="form-control bg-light border-0" placeholder="Place your comment here...">
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
    previewImg('file', 'img_preview');
  });
</script>
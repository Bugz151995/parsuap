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
  <section class="container py-4 px-5">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fas fa-home fa-fw me-1"></i></li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>
  </section>

  <!-- create post modal -->
  <div class="modal fade" id="createPost" tabindex="-1" aria-labelledby="createPostLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
        <div class="col-auto row align-items-center">
          <div class="col-auto">
            <img src="<?= site_url()?>dist/images/63457.png" style="width: 60px; height: 60px: object-fit: contain" alt=""> 
          </div>
          <div class="col-auto">
            <div class="d-flex flex-column">
              <label for="message-text" class="col-form-label fw-bold small">Ryan Czar Abugao</label>
            </div>
          </div>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- create post form -->
        <?= form_open() ?>
          <?= csrf_field() ?>
        <div class="modal-body">
          <div class="mb-3">
            <label for="post" class="col-form-label">Create Post Description</label>
            <textarea class="form-control" name="desc" style="resize: none; height: auto" id="post"></textarea>
          </div>
          <div class="mb-3">
            <img src="https://dummyimage.com/400x400/6ca7fa/3341ff&text=Image+Preview" alt="" id="img_preview" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover">
          </div>
          <div class="mt-5">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <input type="file" name="file" id="file" class="inputfile" />
                <label for="file" class="btn btn-outline-primary btn-sm">
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

  <!-- Create post trigger -->
  <section class="mb-5 pt-4 bg-white">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-10 col-lg-7 rounded rounded-3 p-3 alert-primary shadow-sm">
          <div class="row g-3 align-items-center justify-content-center">
            <div class="col-auto">
              <img src="<?= site_url()?>dist/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-outline-secondary px-5 w-100 rounded-pill" data-bs-toggle="modal" data-bs-target="#createPost" data-bs-whatever="@mdo">
                <i class="far fa-edit me-2"></i>Create New Post
              </button>
            </div>  
          </div>          
        </div>
      </div>
    </div>
  </section>

  <!-- list of post latest to old -->
  <section class="mb-5">
    <div class="container p-5">
      <div class="row g-3 justify-content-center">
        <div class="col-12 col-lg-8">
          <div class="card mb-3 border-0 shadow-sm">
            <img src="https://dummyimage.com/600x400/8a8a8a/b5b5b5" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <i class="fas fa-user-circle fa-fw me-2"></i>
                <!-- alumni's name who created the post -->
                <?= "alumni's name" ?>
              </h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta quia deserunt, excepturi fugit voluptate nulla.
              </p>
              <p class="card-text">
                <small class="text-muted">
                  <i class="fas fa-clock fa-fw me-2"></i>Last updated 3 mins ago
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
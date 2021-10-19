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
  <!-- My Account -->
  <section class="mb-4 bg-white">
    <div class="p-5 row align-items-center">
      <div class="col-auto">
        <img src="<?= site_url()?>dist/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#createPost" data-bs-whatever="@mdo">Create Post</button>
      </div>  
    </div>
     
    <div class="modal fade" id="createPost" tabindex="-1" aria-labelledby="createPostLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <div class="col-auto">
             <img src="<?= site_url()?>dist/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
             <label for="message-text" class="col-form-label">Ryan Czar Abugao</label>
             <span class="badge bg-success small">Public</span>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">What's on your mind?</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
             <div class="mb-1">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-camera"></i>
                    <h7 class="modal-title" id="createPostLabel">Photos/Videos</h7>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Post</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<main id="__main-content" class="bg-light">
  <!-- breadcrumbs -->
  <section class="container py-4 px-5">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fas fa-home fa-fw me-1"></i></li>
        <li class="breadcrumb-item"><a href="<?= site_url()?>home" class="link-dark text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
            <h5 class="modal-title" id="createPostLabel">New message</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- My info -->
  <section class="mb-4 bg-white">
    <div class="row row-cols-2">
      <div class="col-auto">
        <div class="p-4 border-end d-flex flex-column">
          <div class="mb-1">
            <label for="education" class="col-form-label">Education</label>
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-graduation-cap"></i>
                <h7 class="modal-title" id="createPostLabel">Partido State University</h7>
              </div>
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
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-map-marker-alt"></i>
                <h7 class="modal-title" id="createPostLabel">Add Hometown</h7>
              </div>
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
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-envelope-open-text"></i>
                <h7 class="modal-title" id="createPostLabel">bea.jeandelle17@gmail.com</h7>
              </div>
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
            </div>
          </div>
          <div class="mb-1">
            <div class="d-flex justify-content-between align-items-center">
              <div class="col-auto">
                <i class="fas fa-birthday-cake"></i>
                <h7 class="modal-title" id="createPostLabel">August 15,1995</h7>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="p-4">
          <h4>Friends</h4>
          <div class="row row-cols-1 row-cols-md-3 g-2">
            <div class="col">
              <div class="card">
                <img src="<?= site_url()?>dist/images/3966983.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ryan Czar Abugao</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="<?= site_url()?>dist/images/3966983.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jeandelle Abugao</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="<?= site_url()?>dist/images/3966983.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">John Dee Abugao</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="<?= site_url()?>dist/images/3966983.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Didoy abugao</h5>
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
<section class="mb-4 bg-white">
  <div class="p-5 row align-items-center">
    <div class="col-auto">
      <h4>Deseratation</h4>
      <div class="row row-cols-1 row-cols-md-2 g-2">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Graphics Design</h5>
              <p class="card-text">The Graduates of 2021: Championing Education amidst the new Normal (August 15,2021)</p>
            </div>
              <div class="mb-1">
                <div class=" ps-3 d-flex justify-content-between align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-male"></i>
                    <h7 class="modal-title" id="createPostLabel">Author</h7>
                  </div>
                </div>
              </div>
              <div class="mb-1">
                <div class="ps-3 d-flex justify-content-between align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-book-open"></i>
                    <h7 class="modal-title" id="createPostLabel">Publish August 15,1995</h7>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Graphics Design</h5>
              <p class="card-text">The Graduates of 2021: Championing Education amidst the new Normal (August 15,2021)</p>
            </div>
              <div class="mb-1">
                <div class=" ps-3 d-flex justify-content-between align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-male"></i>
                    <h7 class="modal-title" id="createPostLabel">Author</h7>
                  </div>
                </div>
              </div>
              <div class="mb-1">
                <div class="ps-3 d-flex justify-content-between align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-book-open"></i>
                    <h7 class="modal-title" id="createPostLabel">Publish August 15,1995</h7>
                  </div>
                </div>
              </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
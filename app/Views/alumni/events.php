<main id="__main-content">
  <!-- breadcrumbs -->
<section class="container p-4 px-lg-4">
  <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><i class="fas fa-home fa-fw me-1"></i></li>
      <li class="breadcrumb-item"><a href="<?= site_url()?>home" class="link-dark text-decoration-none">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Events</li>
    </ol>
  </nav>
</section>

 <!-- breadcrumbs -->
  <div class="row justify-content-between px-4 g-3 m-0 mb-3"> 
      <div class="col-auto px-2">
          <button class="btn btn-outline-secondary rounded-pill px-3" type="button" id="filterBtn" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-plus-circle"></i> Create
          </button>
          <button class="btn btn-outline-secondary rounded-pill px-3" type="button" id="EventsBtn" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-calendar"></i> Your Events
          </button>
          <button class="btn btn-outline-secondary rounded-pill px-2" type="button" id="BellsBtn" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell"></i>
          </button>
      </div> 
        <div class="col-auto px-2 ">       
          <div class="input-group rounded-pill border"> 
            <div class="input-group-text rounded-pill border-0 bg-white"><i class="fas fa-search"></i></div>
              <input type="search" name="search" id="search" class="form-control border-0" placeholder="Search Archive...">
              <input type="submit" value="Search" class="btn btn-outline-secondary rounded-pill">
            </div>
          </div>
       </div>   
  </div> 
  <hr> 

<!-- Upcoming Events -->
  <section class="mb-5">
    <div class="row justify-content-center align-items-center m-0 g-4 px-4 px-lg-4">
      <div class="px-4 col">
        <div class="bg-white border rounded">
          <div class="p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h4 class="lead fw-bold m-0">Upcoming Events</h4>
            </div>
            <!-- Archive -->
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?= site_url()?>dist/images/5289619.jpg" class="img-fluid w-100" alt="...">
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h7 class="card-title">FRI, DEC 3 - DEC 5</h7>
                        <h5 class="card-title">Know the Rules in Disciplining</h5>
                        <p class="card-text">Center for Global Best Practice</p>
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <div class="mb-1">
                          <div class=" ps-3 d-flex justify-content-between align-items-center">
                            <div class="col-auto">
                              <i class="fas fa-user fa-fw"></i>
                              <h7 class="modal-title" id="createPostLabel">Guest</h7>
                            </div>
                          </div>
                        </div>
                        <div class="col-auto px-2">
                          <button class="btn btn-outline-secondary px-5" type="button" id="YourEventsBtn"aria-expanded="false">
                            <i class="fas fa-star"></i> Interested
                          </button>
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
</main>
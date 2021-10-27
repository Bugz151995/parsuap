<main id="__main-content">
  <!-- breadcrumbs -->
  <section class="container p-4 px-lg-4">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fas fa-home fa-fw me-1"></i></li>
        <li class="breadcrumb-item"><a href="<?= site_url()?>home" class="link-dark text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Friends</li>
      </ol>
    </nav>
  </section>

  <!-- List of Friends -->
  <section class="mb-5">
    <div class="row justify-content-center align-items-center m-0 g-4 px-4 px-lg-4">
      <div class="px-4 col">
        <div class="bg-white border rounded">
          <div class="p-4">
            <div class="row g-3 justify-content-between align-items-center mb-4">
              <h4 class="col-auto lead fw-bold m-0">Friend List</h4>
              <div class="col-auto px-3">       
                <div class="input-group rounded-pill border"> 
                  <div class="input-group-text rounded-pill border-0 bg-white"><i class="fas fa-search"></i></div>
                    <input type="search" name="search" id="search" class="form-control border-0" placeholder="Search Friend...">
                    <input type="submit" value="Search" class="btn btn-outline-secondary rounded-pill">
                  </div>
                </div>
              </div>    
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-secondary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="fas fa-users"></i>Suggestions
              </button>
              <button type="button" class="btn btn-secondary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="fas fa-users"></i>All Friends
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">People You May Know</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                      <div class="modal-body">
                          <?php for($i=0;$i<6;$i++):?>
                          <div class="col-sm-13">
                            <div class="card mb-3 px-4">
                              <div class="row g-0">
                                <div class="col-3">
                                  <img src="<?= site_url()?>assets/images/63457.png" style="width: 80px; height: 50px:" alt=""> 
                                </div>
                                <div class="col-9">
                                  <div class="card-body">
                                    <h6 class="card-title">Peter Doe</6>
                                    <p>
                                    <div class="col-autho mb-3">
                                        <button class="btn btn-outline-primary px-3"> Add Friend</button>
                                        <button class="btn btn-outline-secondary px-3"> Remove</button>  
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php endfor?>
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary-link">see more</button>
                    </div>
                  </div>
                </div>
              </div>






              <hr>
              <h4 class="col-auto lead fw-bold m-0">Friend Requests</h4>
              <button type="button" class="btn btn-link">see more</button>
              <div class="row">
                <?php for($i=0;$i<6;$i++):?>
                <div class="col-sm-6">
                  <div class="card mb-2 p-3">
                    <div class="row g-0">
                      <div class="col-3">
                        <img src="<?= site_url()?>assets/images/63457.png" style="width: 80px; height: 50px:" alt=""> 
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h6 class="card-title">Peter Doe</6>
                          <p>
                          <div class="col-autho">
                              <button class="btn btn-outline-secondary px-2"><i class="fas fa-"></i> confirm</button>  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endfor?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
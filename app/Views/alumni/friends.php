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
              <h4 class="col-auto lead fw-bold m-0">Friendlist</h4>
              <div class="col-auto px-3">       
                <div class="input-group rounded-pill border"> 
                  <div class="input-group-text rounded-pill border-0 bg-white"><i class="fas fa-search"></i></div>
                    <input type="search" name="search" id="search" class="form-control border-0" placeholder="Search Archive...">
                    <input type="submit" value="Search" class="btn btn-outline-secondary rounded-pill">
                  </div>
                </div>
              </div>   
              <div class="col-auto px-3">
                <div class="dropdown">
                  <button class="btn btn-outline-secondary rounded-pill px-3" type="button" id="AllFriendsBtn" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-sliders-h fa-fw me-2"></i>All Friends
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="filterBtn">
                    <li><a class="dropdown-item" href="<?= site_url()?>archive/filter/latest">Latest</a></li>
                    <li><a class="dropdown-item" href="<?= site_url()?>archive/filter/oldest">Oldest</a></li>
                  </ul>
                </div>
              </div> 
            </div>
          </div>
        </div>
    </div>
  </section>
</main>
<!-- email -->
<div class="modal fade" id="successModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="successModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <h4 class="display-3 fw-bold text-success text-center">
              <i class="fas fa-check-circle fa-fw"></i>
            </h4>
            <p class="lead text-success text-center fw-bold">Yay! You have successfully submitted your registration.</p>
            <hr class="my-4">
            
            <p class="card-text">
            Thank you for registering, you are one step closer to connecting with your batch mates. Please wait for the email confirmation, to activate your account. 
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <a href="<?= site_url()?>" class="btn btn-sm btn-primary rounded-pill w-100">Okay</a>
      </div>
    </div>
  </div>
</div>

<button class="d-none" id="successModalBtn" data-bs-target="#successModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('successModalBtn');
  });
</script>
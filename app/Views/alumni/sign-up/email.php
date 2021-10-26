<!-- email -->
<div class="modal fade" id="emailModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="emailModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="emailModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <?= form_open('registration/getEmail') ?>
      <?= csrf_field()?>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" id="page_6" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">84%</div>
            </div>


            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center">Enter your Email Address</div>
            <div class="col form-field">
              <label for="email" class="form-label"><span class="text-danger">*</span> Email</label>
              <input type="text" id="email" name="email" value="<?= ($cache->get('email') == null) ? set_value('email') : set_value('email', $cache->get('email')) ?>" class="form-control form-control-sm" placeholder="Input Email">
              <?php if(isset($validation) && $validation->getError('email')): ?>
                <div class="small pt-1">
                  <span class="text-danger fst-italic small">
                    <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('email') ?>
                  </span>
                </div>
              <?php endif?> 
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <a href="<?= site_url()?>registration/gender" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary">Next <i class="fas fa-arrow-right"></i></button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<button class="d-none" id="emailModalBtn" data-bs-target="#emailModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('emailModalBtn');
  });
</script>
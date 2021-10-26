<!-- password -->
<div class="modal fade" id="passwordModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="passwordModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="passwordModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <?= form_open('registration/getPassword') ?>
      <?= csrf_field()?>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" id="page_7" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center">Create your Password</div>
            <div class="row row-cols-1 g-3">
              <div class="col form-field">
                <label for="pass" class="form-label"><span class="text-danger">*</span> Password</label>
                <div class="input-group">
                  <input type="password" id="password" name="pass" class="form-control form-control-sm" placeholder="Input Password">
                  <div class="input-group-text bg-white border-0 p-0">
                    <button type="button" class="btn btn-sm bt-transparent" onclick="toggleVisibility('password', this)"><i class="fas fa-eye fa-fw"></i></button>
                  </div>
                </div>
                <?php if(isset($validation) && $validation->getError('pass')): ?>
                  <div class="small pt-1">
                    <span class="text-danger fst-italic small">
                      <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('pass') ?>
                    </span>
                  </div>
                <?php endif?> 
              </div>
              <div class="col form-field">
                <label for="pass_conf" class="form-label"><span class="text-danger">*</span> Password Confirmation</label>
                <div class="input-group">
                  <input type="password" id="pass_conf" name="pass_conf" class="form-control form-control-sm" placeholder="Repeat Password">
                  <div class="input-group-text bg-white border-0 p-0">
                    <button type="button" class="btn btn-sm bt-transparent" onclick="toggleVisibility('pass_conf', this)"><i class="fas fa-eye fa-fw"></i></button>
                  </div>
                </div>
                <?php if(isset($validation) && $validation->getError('pass_conf')): ?>
                  <div class="small pt-1">
                    <span class="text-danger fst-italic small">
                      <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('pass_conf') ?>
                    </span>
                  </div>
                <?php endif?> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <a href="<?= site_url()?>registration/email" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary">Sign up</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<button class="d-none" id="passwordModalBtn" data-bs-target="#passwordModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('passwordModalBtn');
  });
</script>
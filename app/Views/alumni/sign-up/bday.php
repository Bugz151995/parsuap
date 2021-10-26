<!-- birthday -->
<div class="modal fade" id="birthdayModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="birthdayModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="birthdayModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <?= form_open('registration/getBirthdate') ?>
      <?= csrf_field()?>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" id="page_4" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100">56%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center">What's your birthday?</div>
            <div class="row row-cols-1 g-3">
              <div class="col form-field">
                <label for="bday" class="form-label"><span class="text-danger">*</span> Birthdate</label>
                <input type="date" id="bday" name="bday" value="<?= ($cache->get('bday') == null) ? set_value('bday') : set_value('bday', $cache->get('bday')) ?>" class="form-control form-control-sm" placeholder="Select or Input Date of Birth">
                <?php if(isset($validation) && $validation->getError('bday')): ?>
                  <div class="small pt-1">
                    <span class="text-danger fst-italic small">
                      <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('bday') ?>
                    </span>
                  </div>
                <?php endif?> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <a href="<?= site_url()?>registration/year" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary">Next <i class="fas fa-arrow-right"></i></button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<button class="d-none" id="birthdayModalBtn" data-bs-target="#birthdayModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('birthdayModalBtn');
  });
</script>
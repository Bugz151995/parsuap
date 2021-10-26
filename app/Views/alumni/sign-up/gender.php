<!-- gender -->
<div class="modal fade" id="genderModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="genderModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="genderModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <?= form_open('registration/getGender') ?>
      <?= csrf_field()?>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" id="page_5" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center">What's your gender?</div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" value="male" <?= ($cache->get('sex') == 'male') ? set_radio('sex', 'male', true) : set_radio('sex', 'male') ?> id="maleBtn">
              <label class="form-check-label" for="maleBtn">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" value="female" <?= ($cache->get('sex') == 'female') ? set_radio('sex', 'female', true) : set_radio('sex', 'female') ?> id="femaleBtn">
              <label class="form-check-label" for="femaleBtn">
                Female
              </label>
            </div>
            <?php if(isset($validation) && $validation->getError('sex')): ?>
              <div class="small pt-1">
                <span class="text-danger fst-italic small">
                  <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('sex') ?>
                </span>
              </div>
            <?php endif?> 
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <a href="<?= site_url()?>registration/bday" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary">Next <i class="fas fa-arrow-right"></i></button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<button class="d-none" id="genderModalBtn" data-bs-target="#genderModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('genderModalBtn');
  });
</script>
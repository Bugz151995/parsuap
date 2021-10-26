<!-- batch type -->
<div class="modal fade" id="batchTypeModal"  data-bs-backdrop="static" aria-hidden="true" aria-labelledby="batchTypeModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="batchTypeModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <?= form_open('registration/getBatchType') ?>
      <?= csrf_field()?>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" id="page_2" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">28%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center">Select your Batch type</div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="batch_type" value="college" <?= ($cache->get('batch_type') == 'college') ? set_radio('batch_type', 'college', true) : set_radio('batch_type', 'college') ?> id="c_type">
              <label class="form-check-label" for="c_type">
                College
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="batch_type" value="high_school" <?= ($cache->get('batch_type') == 'high_school') ? set_radio('batch_type', 'high_school', true) : set_radio('batch_type', 'high_school') ?> id="hs_type">
              <label class="form-check-label" for="hs_type">
                High School
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="batch_type" value="both" <?= ($cache->get('batch_type') == 'both') ? set_radio('batch_type', 'both', true) : set_radio('batch_type', 'both') ?> id="chs_type">
              <label class="form-check-label" for="chs_type">
                Both College and High School
              </label>
            </div>
            <?php if(isset($validation) && $validation->getError('batch_type')): ?>
              <div class="small pt-1">
                <span class="text-danger fst-italic small">
                  <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('batch_type') ?>
                </span>
              </div>
            <?php endif?> 
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <a href="<?= site_url()?>registration/name" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary">Next <i class="fas fa-arrow-right"></i></button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<button class="d-none" id="batchTypeModalBtn" data-bs-target="#batchTypeModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('batchTypeModalBtn');
  });
</script>
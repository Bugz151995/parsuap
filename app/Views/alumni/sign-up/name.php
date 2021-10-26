<!-- name -->
<div class="modal fade" id="nameModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="nameModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nameModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <?= form_open('registration/getName') ?>
      <?= csrf_field()?>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" id="page_1" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">14%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center">What is your name?</div>
            <p class="text-muted"></p>
            <div class="row row-cols-2 row-cols-lg-2 g-3 mb-3">
              <div class="col form-field">
                <label for="fname" class="form-label"><span class="text-danger">*</span> First Name</label>
                <input type="text" id="fname" name="fname" value="<?= ($cache->get('fname') == null) ? set_value('fname') : set_value('fname', $cache->get('fname')) ?>" class="form-control form-control-sm" placeholder="Input First Name">
                <?php if(isset($validation) && $validation->getError('fname')): ?>
                  <div class="small pt-1">
                    <span class="text-danger fst-italic small">
                      <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('fname') ?>
                    </span>
                  </div>
                <?php endif?> 
              </div>
              <div class="col form-field">
                <label for="lname" class="form-label"><span class="text-danger">*</span> Last Name</label>
                <input type="text" id="lname" name="lname" value="<?= ($cache->get('lname') == null) ? set_value('lname') : set_value('lname', $cache->get('lname'))?>" class="form-control form-control-sm" placeholder="Input Last Name">
                <?php if(isset($validation) && $validation->getError('lname')): ?>
                  <div class="small pt-1">
                    <span class="text-danger fst-italic small">
                      <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('lname') ?>
                    </span>
                  </div>
                <?php endif?> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Next <i class="fas fa-arrow-right"></i></button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<button class="d-none" id="nameModalBtn" data-bs-target="#nameModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('nameModalBtn');
  });
</script>
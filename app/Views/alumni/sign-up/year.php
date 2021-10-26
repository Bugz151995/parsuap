<!-- year graduated -->
<div class="modal fade" id="yearGraduatedModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="yearGraduatedModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="yearGraduatedModalLabel">
          <span class="form-title fw-bold h4 align-middle"> <i class="fas fa-user-plus fa-fw"></i> Registration</span> 
        </h5>
        <a href="<?= site_url()?>" role="button" class="btn-close" aria-label="Close"></a>
      </div>
      <?= form_open('registration/getBatchYear') ?>
      <?= csrf_field()?>
      <div class="modal-body">
        <div class="card border-0">
          <div class="card-body">
            <label for="progress" class="form-field fs-6 text-center w-100">Registration Progress</label>
            <div class="progress mb-3" id="progress">
              <div class="progress-bar" role="progressbar" id="page_3" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100">42%</div>
            </div>

            <hr class="my-4">
            
            <div class="card-title h5 form-field mb-4 text-center">When did you Graduate?</div>
            <div class="row mb-3 row-cols-1 g-3">
              <?php if($cache->get('batch_type') == 'college' || $cache->get('batch_type') == 'both'): ?>
              <div class="col form-field">
                <label for="c_year" class="form-label"><span class="text-danger">*</span> College</label>
                <input type="number" id="c_year" maxlength="4" onkeydown="this.value=this.value.slice(0,this.maxLength)" name="c_year" value="" class="yearpicker form-control form-control-sm" placeholder="Input Year...">
                <?php if(isset($validation) && $validation->getError('c_year')): ?>
                  <div class="small pt-1">
                    <span class="text-danger fst-italic small">
                      <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('c_year') ?>
                    </span>
                  </div>
                <?php endif?> 
              </div>
              <?php endif ?>

              <?php if($cache->get('batch_type') == 'high_school' || $cache->get('batch_type') == 'both'): ?>
              <div class="col form-field">
                <label for="h_year" class="form-label"><span class="text-danger">*</span> High School</label>
                <input type="number" id="h_year" maxlength="4" onkeydown="this.value=this.value.slice(0,this.maxLength)" name="h_year" value="" class="yearpicker form-control form-control-sm" placeholder="Input Year...">
                <?php if(isset($validation) && $validation->getError('h_year')): ?>
                  <div class="small pt-1">
                    <span class="text-danger fst-italic small">
                      <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('h_year') ?>
                    </span>
                  </div>
                <?php endif?> 
              </div>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <a href="<?= site_url()?>registration/batch_type" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        <button type="submit" class="btn btn-primary">Next <i class="fas fa-arrow-right"></i></button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<button class="d-none" id="yearGraduatedModalBtn" data-bs-target="#yearGraduatedModal" data-bs-toggle="modal" data-bs-dismiss="modal"></button>

<script>
  window.addEventListener('load', () => {
    showModal('yearGraduatedModalBtn');
    <?php if($cache->get('c_year') == null):?>  
      yearPicker("#c_year", null);   
    <?php else:?> 
      $(document).ready(function(){
        yearPicker("#c_year", <?= $cache->get('c_year')?>);
      });
    <?php endif?>
    
    <?php if($cache->get('h_year') == null):?>
      yearPicker("#h_year", null);
    <?php else:?>
      $(document).ready(function(){
        yearPicker("#h_year", <?= $cache->get('h_year')?>);
      });
    <?php endif?>
  });
</script>
<main id="__main-content" class="pb-4">
  <!-- breadcrumbs -->
  <section class="container p-4">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fas fa-home fa-fw me-1"></i></li>
        <li class="breadcrumb-item"><a href="<?= site_url()?>home" class="link-dark text-decoration-none">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Forum</li>
      </ol>
    </nav>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="createTopic" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createTopicLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="col-auto row align-items-center">
            <div class="col-auto">
              <img src="<?= site_url()?>dist/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
            </div>
            <div class="col-auto">
              <div class="d-flex flex-column">
                <label for="message-text" class="fw-bold">
                  <?= session()->get('firstname') ?>

                  <?php if(session()->get('middlename')): ?>
                    <?= substr(session()->get('middlename'), 0, 1).'.' ?>
                  <?php endif ?>

                  <?= session()->get('lastname') ?>
                </label>
                <span class="fst-italic">Create Topic</span>
              </div>
            </div>
          </div>
          <a href="<?= site_url()?>forum" role="button" class="btn-close"  aria-label="Close"></a>
        </div>

        <?= form_open('forum/create_topic') ?>
        <?= csrf_field() ?>
        <div class="modal-body">
          <div class="mb-3">
            <label for="topic" class="col-form-label"><span class="text-danger me-2">*</span>Topic</label>
            <input type="text" class="form-control" name="topic" id="topic" placeholder="Input the Topic here...">
            <?php if(isset($validation) && $validation->getError('topic')): ?>
              <span class="text-danger fst-italic small">
                <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('topic') ?>
              </span>
            <?php endif?> 
          </div>

          <div class="mb-3">
            <label for="post" class="col-form-label"><span class="text-danger me-2">*</span>Post</label>
            <textarea class="form-control" name="post" style="resize: none; height: auto" id="post"></textarea>
            <?php if(isset($validation) && $validation->getError('post')): ?>
              <span class="text-danger fst-italic small">
                <i class="fas fa-exclamation-triangle fa fw me-2"></i><?= $validation->getError('post') ?>
              </span>
            <?php endif?> 
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary w-100 rounded-pill">Submit</button>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>

  <!-- paginated forum -->
  <section class="container px-4 mb-5">
    <div class="d-flex justify-content-between align-items-start mb-4">
      <!-- Button trigger modal -->
      <button type="button" id="createTopicBtn" class="px-4 btn btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#createTopic">
        <i class="fas fa-plus-circle me-2 fa-fw"></i>Create Topic
      </button>
      <?= $pager->links(); ?>
    </div>

    <table class="table table-bordered table-light table-striped align-middle">
      <thead>
        <tr>
          <th>Topic</th>
          <th>Posts</th>
          <th>Posted at</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($topics as $key => $topic) :?>
        <tr>
          <td>
            <div class="d-flex flex-column">
              <a href="<?= site_url()?>forum/topic/<?= $topic['forum_id']?>" class="link-primary small mb-2">
                <?= $topic['topic'] ?>
              </a>
              <div class="row g-1 small">
                <div class="col-auto">
                  <span class="small">Posted by:</span>
                </div>
                <div class="col-auto small">
                  <img src="<?= site_url()?>dist/images/63457.png" style="width: 15px; height: 15px: object-fit: contain" alt=""> 
                  <span class="small align-middle">
                    <?= $topic['firstname'] ?>
                  </span>
                </div>
              </div>
            </div>
          </td>
          <td>
            <?= $posts[$key]->count ?>
          </td>
          <td>
            <div class="d-flex flex-column">              
              <div class="small">
                <?php $post_date = $now->parse($topic['created_at']) ?>
                <?= $post_date->humanize() ?>
              </div>
              <div class="row g-1 small">
                <div class="col-auto small">
                  <span class="align-middle pb-1">Status:</span>
                </div>
                <div class="col-auto small">
                  <?php if($topic['status'] == 0): ?>
                    <span class="badge bg-success align-middle">Open</span>
                  <?php else: ?>
                    <span class="badge bg-danger align-middle">Closed</span>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
    <hr>
    <div class="d-flex justify-content-end">
      <?= $pager->links(); ?>
    </div>
  </section>
</main>

<!-- script enable modal -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const ctBtn = document.getElementById('createTopicBtn');
    <?php if(isset($ct_1) && $ct_1):?>
      ctBtn.click();
    <?php endif?>
  });
</script>
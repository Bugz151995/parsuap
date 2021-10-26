<main id="__main-content" class="pb-4">
  <!-- breadcrumbs -->
  <section class="container p-4">
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='9'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fas fa-home fa-fw me-1"></i></li>
        <li class="breadcrumb-item"><a href="<?= site_url()?>home" class="link-dark text-decoration-none">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= site_url()?>forum" class="link-dark text-decoration-none">Forum</a></li>
        <li class="breadcrumb-item active" aria-current="page">Topic#</li>
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
                  <?= session()->get('fname') ?>
                  <?= session()->get('lname') ?>
                </label>
                <span class="fst-italic">Create Post</span>
              </div>
            </div>
          </div>
          <a href="<?= site_url()?>forum/topic/<?= $topic->forum_id?>" role="button" class="btn-close"  aria-label="Close"></a>
        </div>

        <?= form_open('forum/topic/create_post') ?>
        <?= csrf_field() ?>
        <div class="modal-body">
          <div class="mb-3">
            <label for="topic" class="col-form-label">Topic</label>
            <input type="text" class="form-control fw-bold" disabled name="topic" id="topic" placeholder="Input the Topic here..." value="<?= set_value('topic', $topic->topic)?>">
            <?= form_hidden('f', esc($topic->forum_id)) ?> 
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
      <button type="button" id="createPostBtn" class="px-4 btn btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#createTopic">
        <i class="fas fa-plus-circle me-2 fa-fw"></i>Create Post
      </button>
      <?= $pager->links(); ?>
    </div>
    
    <h4 class="h5 mb-5 fst-italic">Topic: 
      "<span><?= $topic->topic?></span>"
    </h4>

    <table class="table-bordered table table-secondary table-striped">
      <thead class="table-secondary">
        <tr>
          <th>
            <div class="row">
              <div class="col-3 text-center">Alumni</div>
              <div class="col-9">Posts</div>
            </div>
          </th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($posts as $key => $post) :?>
        <tr>
          <td colspan="2">
            <div class="row justify-content-between">
              <div class="col-6">
                <span class="fst-italic">                  
                  <?php $post_date = $now->parse($post['posted_at']) ?>
                  <?= $post_date->format('M d, Y h:i:s a') ?>
                </span>
              </div>
              <div class="col-6 text-end">
                <span class="fst-italic">
                  #<?= $post['post_code'] ?>
                </span>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td colspan="2">
            <div class="row p-2">
              <div class="col-3 justify-content-center">  
                <div class="d-flex flex-column align-items-center">
                  <img src="<?= site_url()?>dist/images/63457.png" style="width: 50px; height: 50px: object-fit: contain" alt=""> 
                  <small>
                    <?= $post['fname'] ?>
                  </small>
                </div>
              </div>
              <div class="col-9">
                <p class="small">
                  <?= $post['post'] ?>
                </p>
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
    const cpBtn = document.getElementById('createPostBtn');
    <?php if(isset($cp_1) && $cp_1):?>
      cpBtn.click();
    <?php endif?>
  });
</script>
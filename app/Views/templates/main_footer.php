    <!-- bootstrap script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- font awesome icons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>  
  <script src="<?= site_url()?>dist/js/toggle_sidebar.js"></script>
  <script src="<?= site_url()?>dist/js/toggle_searchbar.js"></script>
  <script src="<?= site_url()?>dist/js/create_post_autoresize.js"></script>
  <script src="<?= site_url()?>dist/js/preview_image.js"></script>
  <script src="<?= site_url()?>dist/js/pagination.js"></script>
  <script src="<?= site_url()?>dist/js/show_toast.js"></script>

  <!-- call toast if something happens in the system -->
  <?php if(session()->getTempData('success')  || session()->getTempData('error') || session()->getTempData('warning')):?>
    <script>showToast()</script>
  <?php endif?>
</body>
</html>
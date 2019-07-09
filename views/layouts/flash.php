<?php if (isset($message)): ?>
  <div class="alert alert-<?= ($type==='error')?'danger':$type?>" role="alert">
    <?= $message; ?>
  </div>
<?php endif; ?>

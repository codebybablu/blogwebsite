<?= $this->extend('frontend/layout') ?>
<?= $this->section('content') ?>

<div class="card">
    <h1><?= $post['title'] ?></h1>

    <p><?= $post['content'] ?></p>

    <a href="/">← Back</a>
</div>

<?= $this->endSection() ?>

<style>
  .card:hover {
      transform: scale(1.02);
      transition: 0.3s;
  }
</style>
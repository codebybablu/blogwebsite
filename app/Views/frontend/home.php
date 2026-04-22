<?= $this->extend('frontend/layout') ?>
<?= $this->section('content') ?>

<h2>Latest Blogs</h2>

<?php foreach($posts as $p): ?>
<div class="card">
    <h3>
        <a href="/blog/<?= $p['slug'] ?>">
            <?= $p['title'] ?>
        </a>
    </h3>

    <p><?= substr($p['content'], 0, 100) ?>...</p>

    <a href="/blog/<?= $p['slug'] ?>">Read More →</a>
</div>
<?php endforeach; ?>

<?= $this->endSection() ?>
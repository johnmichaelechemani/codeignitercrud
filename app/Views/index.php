<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center">
    <div>
        <h1>Login</h1>
        <?php if (session()->getFlashdata('error')): ?>
            <span class="text-red-500 px-4 py-2 border bg-red-500 border-red-500/20">
                <?= session()->getFlashdata('error') ?>
            </span>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
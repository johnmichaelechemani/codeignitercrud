<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center">
    <div>
        <h2>User Dashboard</h2>
        <h1 class="text-xl">Welcome, <?= esc($userName) ?>!</h1>

        <div class="my-2">
            <a href="<?= site_url('auth/logout') ?>"
                class="px-4 py-2  w-full bg-blue-500 text-white rounded-md font-semibold text-sm">Logout</a>
        </div>
    </div>
</div>
<!-- Additional dashboard content here -->
<?= $this->endSection() ?>
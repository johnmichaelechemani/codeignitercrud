<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center">
    <div>
        <h1 class="my-4 font-semibold text-2xl">Login</h1>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="my-4">
                <span class="text-red-500 px-4 py-2 border bg-red-500/10 border-red-500/20 rounded-md">
                    <?= session()->getFlashdata('error') ?>
                </span>
            </div>
        <?php endif; ?>
        <div>
            <form action="<?= site_url('login') ?>" method="post">
                <div>
                    <input type="text" name="name" class="border border-gray-500 p-2 rounded-md" placeholder="name">
                    <input type="text" name="email" class="border border-gray-500 p-2 rounded-md"
                        placeholder="password">
                </div>
                <button type="submit"
                    class="px-4 py-2 my-2 w-full bg-blue-500 text-white rounded-md font-semibold text-sm">Login</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
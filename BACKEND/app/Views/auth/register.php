<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center my-5">
    <div>
        <h1 class="my-4 font-semibold text-2xl">Register</h1>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="my-4">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <div class="text-red-500 px-4 py-2 my-1 border bg-red-500/10 border-red-500/20 rounded-md">
                        <?= esc($error) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div>
            <form action="<?= site_url('auth/register') ?>" method="post">
                <?= csrf_field() ?>
                <div>
                    <input type="text" required name="name" class="border border-gray-500 p-2 rounded-md"
                        placeholder="name">
                    <input type="text" required name="password" class="border border-gray-500 p-2 rounded-md"
                        placeholder="password">
                </div>
                <button type="submit"
                    class="px-4 py-2 my-2 w-full bg-red-500 text-white rounded-md font-semibold text-sm">Register</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center">
    <div>
        <h2 class="text-xl text-blue-500">Admin Dashboard</h2>
        <div>
            <table class="border-collapse border border-slate-500 ">
                <thead>
                    <tr>
                        <th class="border border-slate-600 ">Id</th>
                        <th class="border border-slate-600 ">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users) && is_array($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="border border-slate-700"><?= esc($user['id']) ?></td>
                                <td class="border border-slate-700"><?= esc($user['name']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="2" class="border border-slate-700 text-center">No users found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
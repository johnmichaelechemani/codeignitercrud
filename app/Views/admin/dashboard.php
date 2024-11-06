<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center">
    <div>
        <h2 class="text-xl text-blue-500">Admin Dashboard</h2>
        <div>
            <table class="border-collapse border border-slate-500 ">
                <thead>
                    <tr>
                        <th class="border border-slate-600/50 px-4 py-2 ">Id</th>
                        <th class="border border-slate-600/50 px-4 py-2">Name</th>
                        <th rowspan="2" class="border border-slate-600/50 px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($tasks) && is_array($tasks)): ?>
                        <?php foreach ($tasks as $task): ?>
                            <tr>
                                <td class="border border-slate-700/20"><?= esc($task['id']) ?></td>
                                <td class="border border-slate-700/20"><?= esc($task['name']) ?></td>
                                <td class="flex justify-center items-center gap-2"><button
                                        class="px-4 py-2 my-2 w-full bg-green-500 text-white rounded-md font-semibold text-sm">Edit</button><button
                                        class="px-4 py-2 my-2 w-full bg-red-500 text-white rounded-md font-semibold text-sm">Delete</button>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="2" class="border border-slate-700 text-center">No task found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
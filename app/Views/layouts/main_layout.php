<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <!-- <link href="<?= base_url('css/output.css') ?>" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="p-6 bg-blue-500 text-2xl">
        Hello, Tailwind CSS with CodeIgniter 4!
    </div>

    <div class="flex justify-center items-center gap-4 my-5">
        <a href="<?= site_url('user/dashboard') ?>" class="p-2 bg-gray-500/20 rounded-md">User Dashboard</a>
        <a href="<?= site_url('admin/dashboard') ?>" class="p-2 bg-gray-500/20 rounded-md">Admin Dashboard</a>
    </div>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
</body>

</html>
<?php
$page_title = "users";
$users = get_user();
$id = 1;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Dashboard - SB Admin</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="<?= asset('css/admin/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= asset('css/admin/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="<?= asset('css/admin/soft-ui-dashboard-tailwind.css?v=1.0.4') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">


</head>

<body>
    <?php includeView('view/admin/inc/sideleft.php'); ?>
    <?php includeView('view/admin/inc/navbar.php', compact("page_title", "name")); ?>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200 ps ps--active-y">
        <div class="p-6 pb-0 mb-0 bg-red border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex flex-row justify-between">
            <h6 class="text-lg uppercase font-semibold">USERS</h6>
            <a href="<?= url('admin.user.create') ?>" class=" mt-2 mr-32 bg-green-500 hover:bg-green-700 text-red font-bold py-2 px-4 border border-green-700 rounder">Create</a>
            <style>
                .border-green-700 {
                    color: green;
                }
            </style>
        </div>

        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
            <thead class="align-bottom">
                <tr>
                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none redspace-nowrap text-black">#</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none redspace-nowrap text-black text-md">Email</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none redspace-nowrap text-black text-md">Password</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none redspace-nowrap text-black text-md">Role</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none border-b-solid tracking-none redspace-nowrap text-black text-md">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $value) { ?>
                    <tr>

                        <td class="p-2 align-middle bg-transparent border-b redspace-nowrap shadow-transparent">
                            <?= $id++ ?>
                        </td>

                        <td class="p-2 align-middle bg-transparent border-b redspace-nowrap shadow-transparent">
                            <span class="font-semibold leading-tight text-sm text-black"><?= $value['email'] ?></span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b redspace-nowrap shadow-transparent">
                            <span class="font-semibold leading-tight text-sm text-black">
                                <?= $value['password'] ?>
                            </span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b redspace-nowrap shadow-transparent">
                            <span class="font-semibold leading-tight text-sm text-black">
                                <?= $value['role'] ?>
                            </span>
                        </td>
                        <td class="p-2 flex items-center justify-center">
                            <form action="<?= url('admin.user.edit') ?>" method="get">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <button class="bg-yellow-500 hover:bg-yellow-700 text-red font-bold py-2 px-4 border border-red-700 rounded" type="submit">Edit</button>
                                <style>
                                    .bg-yellow-500 {
                                        color: blue;
                                    }
                                </style>
                            </form>
                            <form action="<?= url('admin.user.delete') ?>" method="get">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <button class="bg-red-500  hover:bg-red-700 text-red font-bold py-2 px-4 border border-red-700 rounded ml-6" name="alone" type="submit">Delete</button>
                                <style>
                                    .bg-red-500 {
                                        color: red;
                                    }
                                </style>
                            </form>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

</body>

</html>
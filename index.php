<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- load taiwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="grid grid-cols-5 h-screen">
        <?php include 'components/sidebar.php'; ?>
        <section class="col-span-4 px-6 bg-[#101922] space-y-6 overflow-y-auto h-screen">
            <?php include 'components/header.php'; ?>
            <?php include 'components/content-top.php'; ?>
            <?php include 'components/content-middle.php'; ?>
            <?php include 'components/content-buttom.php'; ?>
        </section>
    </main>
</body>

</html>
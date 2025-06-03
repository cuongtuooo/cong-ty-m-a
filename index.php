<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Hỏi Đáp</title>
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/layout.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" /> -->
</head>

<body>
    <!-- HEADER -->
    <?php include("components/header.php") ?>

    <!-- layout -->
    <div class="layout" id="layout">
        <!-- SIDEBAR left -->
        <aside class="layout__sidebar" id="sidebar">
            <?php include("components/sidebar.php") ?>
        </aside>

        <!-- content -->
        <main class="layout__main" id="main-content">
            <?php include("components/main.php") ?>
        </main>

        <!-- key word -->
        <aside class="layout__tags" id="tags">
            <?php include("components/tags.php") ?>
        </aside>

        <!-- MAIN LOGIN  -->
        <div id="main-login" style="display: none;">
            <?php include("components/main-login.php") ?>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include("components/footer.php") ?>

    <!-- Modal -->
    <?php include("components/modallogin.php") ?>
    <?php include("components/modalpost.php") ?>
    <?php include("components/search.php") ?>



    <script src="./public/js/modal.js"></script>
</body>

</html>
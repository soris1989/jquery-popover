<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagination tutorial</title>

    <!-- Bootstrap core-->
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" />
    <!-- popover -->
    <link type="text/css" rel="stylesheet" href="./public/css/jquery.tooltip.css?v=<?= time() ?>" />
    <!-- Custom tyles -->
    <link type="text/css" rel="stylesheet" href="./public/css/style.css?v=<?= time() ?>" />
</head>

<body>
    <div class="container-md">
        <?php require __DIR__ . '/./some-text.php'; ?>
        <button id="btn-trigger" type="button" data-content-id="tooltip-info">פתח</button>
        <?php require __DIR__ . '/./some-text.php'; ?>
    </div>

    <div id="tooltip-info">
        <p>Some text to show</p>
        <p>another text</p>
        <button id="btn-click">Click me</button>
    </div>

    <!-- Jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap 5 -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Positon Calculator -->
    <script type="text/javascript" src="http://rawgit.com/tlindig/position-calculator/master/dist/position-calculator.min.js"></script>
    <!-- popover -->
    <script type="text/javascript" src="./public/js/jquery.custom-tooltip.js?v=<?= time() ?>"></script>
    <!-- Custom script -->
    <script type="text/javascript" src="./public/js/index.js?v=<?= time() ?>"></script>
</body>

</html>
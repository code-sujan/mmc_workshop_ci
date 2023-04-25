<?php
?>

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Main styles for this application-->
    <link href="<?= base_url('css/style.css')?>" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="<?= base_url('css/examples.css')?>" rel="stylesheet">
</head>
<body>
<div class="body flex-grow-1 px-3">
    <?= $this->renderSection('content') ?>
</div>
<script src="<?= base_url('vendors/@coreui/coreui/js/coreui.bundle.min.js') ?>"></script>
<script src="<?= base_url('vendors/simplebar/js/simplebar.min.js') ?>"></script>
<?= $this->renderSection('script') ?>
</body>
</html>

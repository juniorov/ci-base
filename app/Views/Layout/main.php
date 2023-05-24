<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/app.css">
</head>
<body>
    <?= $this->renderSection('nav') ?>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <?= $this->include('Layout/footer') ?>

    <script type='text/javascript' src="<?php echo base_url(); ?>/assets/js/app.js"></script>
    <?= $this->renderSection('js') ?>
</body>
</html>

<?php
$cakeDescription = 'VMXDEVOPS: estudos web';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('ie10-viewport-bug-workaround.css') ?>
    <?= $this->Html->script('ie-emulation-modes-warning.js') ?>

    

    <?= $this->Html->css('vmx.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <div class="template">
        <?= $this->fetch('content') ?>
    </div>

    <?= $this->Html->script('ie10-viewport-bug-workaround.js') ?>
    <?= $this->Html->script('jquery.min.js') ?></script> <script>window.jQuery || document.write(<?= $this->Html->script('jquery.min.js') ?>)</script>
    <?= $this->Html->script('bootstrap.min.js') ?>
</body>
</html>

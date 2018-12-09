<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- vendor css -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700')?>
    <?= $this->Html->css('/plugins/font-awesome/css/font-awesome.min.css')?>
    <?= $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css')?>
    <?= $this->Html->css('/plugins/animate/animate.min.css') ?>
    <!-- plugins css -->
    <link href="/plugins/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <?= $this->Html->css('/plugins/summernote/summernote-bs4.css') ?>
    <?= $this->Html->css('/plugins/switchery/switchery.min.css') ?>
    <?= $this->Html->css('/plugins/select2/css/select2.min.css') ?>
    <?= $this->Html->css('/plugins/flatpickr/flatpickr.min.css') ?>
    <?= $this->Html->css('/plugins/premium-icon/line-icons/premium-line-icons.min') ?>
    <?= $this->Html->css('/plugins/premium-icon/solid-icons/premium-solid-icons.min.css') ?>
    <!-- theme css -->
    <?= $this->Html->css('theme.min.css')?>
    <?= $this->Html->css('custom.css')?>
</head>
<body class="fixed-header">
    <?= $this->Element('Page/header') ?>
    <?= $this->fetch('content') ?>
    <?= $this->Element('Page/footer') ?>
    <!-- built files will be auto injected -->
    <?= $this->Html->script('/plugins/jquery/jquery-3.2.1.min.js') ?>
    <?= $this->Html->script('/plugins/popper/popper.min.js') ?>
    <?= $this->Html->script('/plugins/bootstrap/js/bootstrap.min.js') ?>
    
    <!-- plugins js -->
    <?= $this->Html->script('/plugins/lightbox/lightbox.js') ?>
    <?= $this->Html->script('/plugins/owl-carousel/js/owl.carousel.min.js') ?>
    <?= $this->Html->script('/plugins/vuejs/vue.js') ?>
    <?= $this->Html->script('/plugins/ytplayer/jquery.mb.YTPlayer.min.js') ?>
    <?= $this->Html->script('/plugins/summernote/summernote-bs4.js') ?>
    <?= $this->Html->script('/plugins/switchery/switchery.min.js') ?>
    <?= $this->Html->script('/plugins/select2/js/select2.min.js') ?>
    <?= $this->Html->script('/plugins/flatpickr/flatpickr.min.js') ?>
    <?= $this->Html->script('/plugins/easypiechart/jquery.easing.1.3.js') ?>
    <?= $this->Html->script('/plugins/easypiechart/jquery.easypiechart.min.js') ?>
    <!-- theme js -->
    <?= $this->Html->script('theme.js') ?>
    <?= $this->Html->script('custom.js') ?>
</body>
</html>
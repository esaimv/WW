<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title></title>
  </head>
  <body>

    <?php $this->load->view('navbar') ?>

    <img src="/assets/images/banner.png" class="img-fluid" alt="Responsive image">
    <div class="container main-container text-center">
      <?php $this->load->view($vista) ?>
    </div>

    <script type="text/javascript" src="/assets/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/scripts/popper.min.js"></script>
    <script type="text/javascript" src="/assets/scripts/bootstrap.min.js"></script>
  </body>
</html>

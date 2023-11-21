<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Phong Store</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
       <!-- Favicon -->
       <link rel="shortcut icon" type="image/x-icon" href="<?= $CONTENT_URL ?>/img/favicon.png">
		
       <script src="https://apis.google.com/js/platform.js" async defer></script>
		<!-- all css here -->
       <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/plugin.css">
        <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bundle.css">
        <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css">
        <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="<?= $CONTENT_URL ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    
   </head>
   <body>
      <?php 
      include "../layout/menu.php";
      ?>
 
      <?php 
      include $VIEW_NAME;
      ?>
      <?php 
      include "../layout/footer.php";

      ?>
       <script src="<?= $CONTENT_URL ?>/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/popper.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/ajax-mail.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/plugins.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/main.js"></script>
   </body>
</html>


<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $page['title'].' | '.$site_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('config/css.php'); include('config/js.php'); ?>

  </head>
  <body>

  <?php include(D_TEMPLATE.'/navigation.php') ?>

  <div class="container">
    <h1><?php echo $page['header']; ?></h1>
    <p><?php echo $page['page_body']; ?></p>
  </div>

<?php include(D_TEMPLATE.'/footer.php') ?>

  </body>
</html>

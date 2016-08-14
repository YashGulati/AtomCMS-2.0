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
<div id="wrap">
  <?php include(D_TEMPLATE.'/navigation.php') ?>
  <div class="container">
    <h1><?php echo $page['header']; ?></h1>
    <?php echo $page['page_formatted']; ?>
    <?php if(isset($_GET['debug']) == 1){ ?>
    <pre>
      <?php print_r($page); ?>
    </pre>
    <?php } ?>
  </div>
</div>
<?php include(D_TEMPLATE.'/footer.php') ?>
<div id="console-debug">
  Test Debug Window
</div>
  </body>
</html>

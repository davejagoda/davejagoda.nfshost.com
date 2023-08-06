<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>POST</title>
  </head>
  <body>
    <p>POST</p>
    <?php print_r($_POST); ?>
    <p>JSON</p>
    <?php print_r(json_decode(file_get_contents('php://input'))); ?>
  </body>
</html>

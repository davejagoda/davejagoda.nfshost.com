<html>
 <head>
  <title>dynamic</title>
 </head>
 <body>
 <?php
  foreach ($_SERVER as $element) {
    echo htmlspecialchars($element);
  }
?>

</body>
</html>



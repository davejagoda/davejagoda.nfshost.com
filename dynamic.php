<html>
 <head>
  <title>dynamic</title>
 </head>
 <body>
 <?php
  foreach ($_SERVER as $key => $value) {
    echo htmlspecialchars($key);
    echo ":";
    echo htmlspecialchars($value);
    echo "\n";
  }
?>

</body>
</html>



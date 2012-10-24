<html>
 <head>
  <title>dynamic</title>
 </head>
 <body>
 <?php
  ksort($_SERVER);
  foreach ($_SERVER as $key => $value) {
   if (is_array($value)) {
    foreach ($value as $k => $v) {
     echo htmlspecialchars($k);
     echo ":";
     echo htmlspecialchars($v);
     echo "<br>";
    }
   } else {
    echo htmlspecialchars($key);
    echo ":";
    echo htmlspecialchars($value);
    echo "<br>";
   }
  }
 ?>

</body>
</html>



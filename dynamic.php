<html>
 <head>
  <title>dynamic</title>
 </head>
 <body>
 <br>
 <b>SERVER</b>
 <br>
<?php
 ksort($_SERVER);
 foreach ($_SERVER as $key => $value) {
  if (is_array($value)) {
   foreach ($value as $k => $v) {
    echo htmlspecialchars($k);
    echo ":";
    echo htmlspecialchars($v);
    echo "<br>\n";
   }
  } else {
   echo htmlspecialchars($key);
   echo ":";
   echo htmlspecialchars($value);
   echo "<br>\n";
  }
 }
?>
 <br>
 <b>POST</b>
 <br>
<?php
 ksort($_POST);
 foreach ($_POST as $key => $value) {
  if (is_array($value)) {
   foreach ($value as $k => $v) {
    echo htmlspecialchars($k);
    echo ":";
    echo htmlspecialchars($v);
    echo "<br>\n";
   }
  } else {
   echo htmlspecialchars($key);
   echo ":";
   echo htmlspecialchars($value);
   echo "<br>\n";
  }
 }
?>
 <br>
 <b>FILE</b>
 <br>
<?php
 $file_data = file_get_contents('php://input');
 $json_data = json_decode($file_data);
 if (!is_null($json_data)) {
  echo json_encode($json_data, JSON_PRETTY_PRINT);
  echo "\n";
 } else {
  if (!is_null($file_data)) {
   echo $file_data;
   echo "\n";
  }
 }
?>
 <br>
 </body>
</html>

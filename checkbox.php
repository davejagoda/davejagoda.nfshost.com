The following were checked:
<?php
  foreach ($_POST as $array) {
    foreach ($array as $element) {
      echo htmlspecialchars($element);
    }
  }
?>

The following were checked:
<?php
  foreach ($_POST as $array) {
    echo htmlspecialchars(implode(' ', $array));
  }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>POST</title>
    </head>
    <body>
        <p>POST</p>
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
        <p>JSON</p>
        <?php print_r(json_decode(file_get_contents('php://input'))); ?>
    </body>
</html>

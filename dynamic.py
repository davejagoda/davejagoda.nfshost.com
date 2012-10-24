#!/usr/local/bin/python

import os
from cgi import escape

print '''Content-type: text/html

<html>
 <head>
  <title>dynamic</title>
 </head>
 <body>
'''
for k in sorted(os.environ):
    print "%s:%s<br>" % (escape(k), escape(os.environ[k]))
# <?php
#  foreach ($_SERVER as $key => $value) {
#   if (is_array($value)) {
#    foreach ($value as $k => $v) {
#     echo htmlspecialchars($k);
#     echo ":";
#     echo htmlspecialchars($v);
#     echo "<br>";
#    }
#   } else {
#    echo htmlspecialchars($key);
#    echo ":";
#    echo htmlspecialchars($value);
#    echo "<br>";
#   }
#  }
# ?>
print '''</body>
</html>'''

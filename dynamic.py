#!/usr/bin/env python3

import html
import os

print('''Content-type: text/html

<html>
 <head>
  <title>dynamic</title>
 </head>
 <body>''')

for k in sorted(os.environ):
    print('{}:{}<br>'.format(html.escape(k), html.escape(os.environ[k])))
print('''  </body>
</html>''')

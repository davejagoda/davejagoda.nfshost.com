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
print '''</body>
</html>'''
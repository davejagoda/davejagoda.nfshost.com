#!/usr/bin/env python
# -*- coding: utf-8 -*-

# enable debugging
import cgitb
import datetime
cgitb.enable()

print('Content-Type: text/plain;charset=utf-8\n') #\n forces a blank line after
print('hello from python CGI @ {}'.format(
    datetime.datetime.utcnow().replace(microsecond=0).isoformat()+'Z')
)

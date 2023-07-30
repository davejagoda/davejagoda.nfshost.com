#!/usr/bin/env perl
# -*- coding: utf-8 -*-

use POSIX qw(strftime);

$iso8601 = strftime('%Y-%m-%dT%H:%M:%S', gmtime(time)) . '+00:00';
print 'Content-Type: text/plain;charset=utf-8\n\n';
print "hello from perl CGI @ $iso8601\n";

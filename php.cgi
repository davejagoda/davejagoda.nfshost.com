#!/usr/bin/env php
<?php
$iso8601 = strftime("%Y-%m-%dT%H:%M:%S", time()) . "Z\n";
print "Content-Type: text/plain;charset=utf-8\n\n";
print "hello from php CGI @ $iso8601\n";
?>

davejagoda.nfshost.com
======================

http://davejagoda.nfshost.com

# the new way

## On Nearly Free Speech Net:

```
cd
mkdir .git
cd .git
git init --bare
cd hooks/
emacs post-receive
```

you're in emacs, now add this line

```GIT_WORK_TREE=/home/public git checkout -f```

now save and quit emacs

```chmod +x post-receive```

## On any host you'd like to push from (change USERNAME):

go here to add the host's ssh public key:

https://members.nearlyfreespeech.net/USERNAME/profile/add_ssh_key

```git remote add website ssh://USERNAME@ssh.phx.nearlyfreespeech.net/home/private/.git```

## To push after the setup:

```git push website master```

# the old way

(doesn't work anymore due to changes that I've made)

To clone the copy on the webserver, ssh on to it and type:

~~```git clone git://github.com/davejagoda/davejagoda.nfshost.com.git .```~~

To update the webserver, ssh on to it and type:

~~```git pull git://github.com/davejagoda/davejagoda.nfshost.com.git```~~

###### bibliography

http://www.nerdess.net/blog/nerdy/git-by-example-how-to-update-your-website-on-nearlyfreespeech-net-via-git

https://andytaylor.me/2012/11/03/nfs-git/

# HTTP post examples

```
curl --data "item=xyz&elem=abc&data=jkl" https://davejagoda.nfshost.com/post.php

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>POST</title>
  </head>
  <body>
    <p>POST</p>
    Array
(
    [item] => xyz
    [elem] => abc
    [data] => jkl
)
    <p>JSON</p>
      </body>
</html>

curl --header "Content-Type: application/json" --data '{"item":"xyz","elem":"abc","data":"jkl"}' https://davejagoda.nfshost.com/post.php

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>POST</title>
  </head>
  <body>
    <p>POST</p>
    Array
(
)
    <p>JSON</p>
    stdClass Object
(
    [item] => xyz
    [elem] => abc
    [data] => jkl
)
  </body>
</html>
```

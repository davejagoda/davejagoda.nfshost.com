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
echo "GIT_WORK_TREE=/home/public git checkout -f" > post-receive
chmod +x post-receive
```

## On any host you'd like to push from (change USERNAME):

go here to add the host's ssh public key:

https://members.nearlyfreespeech.net/USERNAME/profile/add_ssh_key

```
git remote add www ssh://USERNAME@ssh.nyc1.nearlyfreespeech.net/home/private/.git
```

## To push after the setup:

```
git push www
```

# the old way

(doesn't work anymore due to changes that I've made)

To clone the copy on the webserver, ssh on to it and type:

```
git clone git://github.com/davejagoda/davejagoda.nfshost.com.git .
```

To update the webserver, ssh on to it and type:

```
git pull git://github.com/davejagoda/davejagoda.nfshost.com.git
```

###### bibliography

https://archive.nerdess.net/blog/nerdy/git-by-example-how-to-update-your-website-on-nearlyfreespeech-net-via-git/

# HTTP post examples

```
curl --data "item=xyz&elem=abc&data=jkl" https://davejagoda.nfshost.com/post.php
```
```
curl --header "Content-Type: application/json" \
  --data '{"item":"xyz","elem":"abc","data":"jkl"}' \
  https://davejagoda.nfshost.com/post.php
```

```
curl --data foo=bar -d a=b https://davejagoda.nfshost.com/dynamic.php
```

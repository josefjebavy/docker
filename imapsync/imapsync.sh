#!/bin/bash
. ./server.sh

while IFS=, read -r user1 pass1 user2 pass2

do
imapsync \
 --host1 ${hostname1} --user1 ${user1} --password1 ${pass1} \
 --host2 ${hostname2} --user2 ${user2} --password2 ${pass2}

if [ $? -ne 0 ] ; then
	echo ERROR
	exit 1;
fi

done < input.csv





#!/bin/bash

motionB=false

while [ 0 ]; do
	motion=$(gpio read 0)
	if [ $motion -eq 1 ]
	then
		if [ "$motionB" = false ]
		then
			echo "Want to take photo!"
			DATE=$(date +"%Y%m%d%H%M%S")
			raspistill -w 648 -h 486 -vf -hf -o /var/www/images/$DATE.jpg
			motionB=true
			echo "Took Photo!!"
		fi
	else
		if [ "$motionB" = true ]
		then
			echo "motionB is false"
			motionB=false
		fi
	fi
done

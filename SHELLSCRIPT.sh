#/bin/bash

echo "Welcome to the Bash script maintenance system. Please select an option from the list below"
echo "1. Update Ubuntu software and packagaes"
echo "2. GitHub Commit and Push"

echo "Please select an option (1 or 2)" 
read yn

case $yn in
	'1') echo "System updates in progress";
	sudo apt update;
	sudo apt upgrade -y;
	echo "Update Completed Successfully";;
	'2') echo "Pushing...";
	sudo git add .;
	sudo git commit;
	sudo git push origin main;
	echo "Site commited and pushed to GitHub repository";;
	*) echo "Please provide a valid input";;
esac

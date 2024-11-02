# php-google-vision-api

1- git clone the repo (or just copy the file main.pph)
2- composer init
3- composer require google/cloud-vision
4- make sure you have the requirements for using google cloud api
  - go to console.cloud.google.com
  - choose or create a new project
  - go to IAM & Admin
  - go to Service Accounts
  - create a new service with user rights as owner
  - edit the following link with your project_id and go to https://console.cloud.google.com/apis/library/vision.googleapis.com?project=project_id
  - make sure to enable it and then activate billing
  - make sure to follow the guide to install google cloud sdk https://cloud.google.com/sdk/docs/install
5- in your main.php file go to line 40 and change it with the image you want and the run the file

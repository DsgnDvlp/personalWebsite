#!/bin/bash

rm -rf ./deploy

mkdir deploy;

cp -r ./css ./deploy/css;

cp .htaccess ./deploy/.htaccess;

cp 404.php ./deploy/404.php;

cp -r ./font ./deploy/font;

cp -r ./img ./deploy/img;

cp -r ./js ./deploy/js;

cp lang.php ./deploy/css;

cp -r ./languages ./deploy/languages;

cp master.php ./deploy/master.php;

cp -r ./pages ./deploy/pages;

cp -r ./projects ./deploy/projects;

cp database.php ./deploy/database.php;

cp routing.php ./deploy/routing.php;

cp switchLanguage.php ./deploy/switchLanguage.php;

cp lang.php ./deploy/lang.php;

cp sendMail.php ./deploy/sendMail.php

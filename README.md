# NESTT

## Installation 
* [Install Docker](http://www.docker.com) on your machine.
* run ```docker-compose up -d``` to start the web server and the database server
* add ```127.0.0.1 nestt.lan nestt-database``` to your hosts file
* run ```composer install``` to install wordpress and dependencies
* [visit](http://www.nestt.lan) to see the site.  The first run will require you to configure the database with the details below.


## Database Details
Configure the wordpress installation with the following database details:

Option | Value
------ | -----
database name | ```wordpress```
username | ```root```
database server | ```nestt-database```
password | ```nestt```
table prefix | ```wp_```


## Dev Site Settings
There are a few settings that are required to use the blog in development
* Wordpress Address should be ```http://nestt.lan/wp```
* Site Address should be ```http://nestt.lan```


## Helpful URL's
* [Wordpress Site](http://nestt.lan) is where you will find the homepage.
* [Wordpress Admin](http://nestt.lan/wp/wp-admin) is the wordpress admin site.
* https://roots.io/using-composer-with-wordpress/ for more information on why the project is structured the way it is.
* [WPackagist](http://wpackagist.org/) wordpress plugins that have a composer.json and can be added with composer.



## Directory Structure
```
/system 					Holds the sytem configuration files
/wp-content					Wordpress wp-content (DO NOT USE /wp/wp-content)
	/themes		 			Wordpress Themes directory
		/nestt-theme		Current nestt theme
	/plugins		 		Composer Wordpress plugins are installed to this directory
/wp 						Wordpress installation directory
```
